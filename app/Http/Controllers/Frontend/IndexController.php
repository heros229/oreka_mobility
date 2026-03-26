<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\SendContactEmail;
use App\Mail\ReservationConfirmationMail;
use App\Models\Newsletter;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    //

    public function index()
    {

        return view('frontend.index');

    } // end method


    public function details(Request $request)
    {
        $plan = $request->get('plan', 'velo-sport');
        return view('frontend.details_pricing', compact('plan'));
    }

    public function Reservation_step_1()
    {

        return view('frontend.reservation_step_1');

    } // end method

    public function Reservation_step_2()
    {

        return view('frontend.reservation_step_2');

    } //end method

    // Dans IndexController.php
    public function Reservation_step_3(Request $request)
    {
        $data = $request->all();



        \FedaPay\FedaPay::setApiKey(env('FEDAPAY_API_KEY'));
        \FedaPay\FedaPay::setEnvironment(env('FEDAPAY_ENVIRONMENT', 'sandbox'));

        //dd($data);

        try {
            // Sauvegarder les donnees en session pour le callback
            session([
                'reservation_step1' => [
                    'firstName' => $data['firstName'] ?? '',
                    'lastName' => $data['lastName'] ?? '',
                    'email' => $data['email'] ?? '',
                    'phone' => $data['phone'] ?? '',
                    'additionalInfo' => $data['additionalInfo'] ?? '',
                    'startDate' => $data['startDate'] ?? '',
                ],
                'reservation_step2' => [
                    'services' => $data['selectedServices'] ?? [],
                    'totalAmount' => $data['totalAmount'] ?? 0,
                ],
            ]);

            // Formater le téléphone pour le Bénin (commence par +22901)
            $phone = $data['phone'];

            // Nettoyer le numéro (enlever espaces, tirets, parenthèses)
            $phone = preg_replace('/[^0-9+]/', '', $phone);

            // Si le numéro ne commence pas par +229, on l'ajoute
            if (!str_starts_with($phone, '+229')) {
                // Si commence par 01, ajouter +229
                if (str_starts_with($phone, '01')) {
                    $phone = '+229' . $phone;
                }
                // Si commence par 229, ajouter juste le +
                elseif (str_starts_with($phone, '229')) {
                    $phone = '+' . $phone;
                }
                // Sinon, ajouter +229 directement
                else {
                    $phone = '+229' . $phone;
                }
            }

            // Créer la transaction avec les infos client
            $transaction = \FedaPay\Transaction::create([
                'description' => 'Réservation vélo - ' . count($data['selectedServices']) . ' service(s)',
                'amount' => $data['totalAmount'],
                'currency' => ['iso' => 'XOF'],
                'callback_url' => route('reservation_callback'),
                'customer' => [
                    'firstname' => $data['firstName'],
                    'lastname' => $data['lastName'],
                    'email' => $data['email'],
                    'phone_number' => [
                        'number' => $phone,
                        'country' => 'bj'
                    ]
                ]
            ]);

            $token = $transaction->generateToken();

            return response()->json([
                'success' => true,
                'checkout_url' => $token->url,
                'transaction_id' => $transaction->id
            ]);

        }
        catch (\Exception $e) {
            Log::error('FedaPay Error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function reservationCallback(Request $request)
    {
        \FedaPay\FedaPay::setApiKey(env('FEDAPAY_API_KEY'));
        \FedaPay\FedaPay::setEnvironment(env('FEDAPAY_ENVIRONMENT', 'sandbox'));

        $transactionId = $request->id;

        try {
            $transaction = \FedaPay\Transaction::retrieve($transactionId);

            if ($transaction->status === 'approved') {

                // Recuperer les donnees de session sauvegardees a l'etape 3
                $step1 = session('reservation_step1', []);
                $step2 = session('reservation_step2', []);

                // Construire les donnees client
                $firstName = $step1['firstName'] ?? '';
                $lastName = $step1['lastName'] ?? '';
                $clientName = trim("$firstName $lastName") ?: ($transaction->customer->firstname . ' ' . $transaction->customer->lastname);
                $clientEmail = $step1['email'] ?? ($transaction->customer->email ?? '');
                $clientPhone = $step1['phone'] ?? '';
                $startDate = $step1['startDate'] ?? '';

                // Construire les items
                $services = $step2['services'] ?? [];
                $items = array_map(function ($s) {
                    return [
                        'description' => $s['name'] ?? 'Service',
                        'amount'      => intval($s['unitPrice'] ?? $s['price'] ?? 0), // ✅ prix unitaire
                        'qty'         => intval($s['qty'] ?? 1),
                    ];
                }, $services);
                $total = intval($step2['totalAmount'] ?? array_sum(array_column($items, 'amount')));

                // Generer le PDF en memoire
                $pdfContent = \Barryvdh\DomPDF\Facade\Pdf::loadView('frontend.pdfs.invoice', [
                    'transactionID' => $transactionId,
                    'client_name' => $clientName,
                    'client_email' => $clientEmail,
                    'client_phone' => $clientPhone,
                    'start_date' => $startDate,
                    'items' => $items,
                    'total' => $total,
                ])->setPaper('a5', 'landscape')->output();

                // Envoyer l'email avec le PDF en piece jointe
                if (!empty($clientEmail)) {
                    try {
                        Mail::to($clientEmail)->send(new ReservationConfirmationMail(
                            $clientName,
                            $clientEmail,
                            $clientPhone,
                            $startDate,
                            (string)$transactionId,
                            $items,
                            $total,
                            $pdfContent
                            ));
                    }
                    catch (\Exception $mailException) {
                        \Log::error('Mail Error: ' . $mailException->getMessage());
                    // On ne bloque pas la page si l'email echoue
                    }
                }

                return view('frontend.reservation_success', compact('transaction'));
            }
            else {
                return view('frontend.reservation_failed', compact('transaction'));
            }

        }
        catch (\Exception $e) {
            return redirect()->route('accueil')->with('error', 'Erreur de verification');
        }
    } // end method

    public function Newsletter(Request $request)
    {

        // Valider l'e-mail
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ], [
            'email.unique' => 'Cet e-mail est déjà inscrit à notre newsletter.',
        ]);

        // Enregistrer l'e-mail dans la base de données
        Newsletter::insert([
            'email' => $request->email,
            'created_at' => Carbon::now(),
        ]);

        // Retourner un message de succès
        return response()->json([
            'newsletter_success' => "Merci de vous être inscrit à notre newsletter ! Vous recevrez bientôt nos dernières mises à jour et offres exclusives directement dans votre boîte mail.",
        ]);

    }

    public function downloadReservation(Request $request)
    {
        // Récupérer les données envoyées depuis le localStorage via le formulaire
        $step1 = json_decode($request->input('step1_data', '{}'), true) ?? [];
        $step2 = json_decode($request->input('step2_data', '{}'), true) ?? [];
        $transactionId = $request->input('transaction_id', 'N/A');

        // Construire le nom complet du client
        $firstName = $step1['firstName'] ?? '';
        $lastName = $step1['lastName'] ?? '';
        $clientName = trim("$firstName $lastName") ?: 'Client inconnu';

        // Construire la liste des services (items de la facture)
        $services = $step2['services'] ?? [];
        $items = array_map(function ($service) {
            return [
                'description' => $service['name'] ?? 'Service',
                'amount'      => intval($service['unitPrice'] ?? $service['price'] ?? 0), // ✅ prix unitaire
                'qty'         => intval($service['qty'] ?? 1), // ✅ $service et non $s
            ];
        }, $services);

        // Total
        $total = $step2['totalAmount'] ?? array_sum(array_column($items, 'amount'));


        // Données supplémentaires du client
        $clientEmail = $step1['email'] ?? '';
        $clientPhone = $step1['phone'] ?? '';
        $startDate = $step1['startDate'] ?? '';

        // Générer le PDF
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('frontend.pdfs.invoice', [
            'transactionID' => $transactionId,
            'client_name' => $clientName,
            'client_email' => $clientEmail,
            'client_phone' => $clientPhone,
            'start_date' => $startDate,
            'items' => $items,
            'total' => $total,

        ])->setPaper('a5', 'landscape');

        return $pdf->download("reservation-oreka-{$transactionId}.pdf");
    }

    public function contact() {

        return view('frontend.contact');
    }

    public function placedelamazone() {

        return view('frontend.parcours.amazone');

    }

    public function monumentdevoue() {

        return view('frontend.parcours.monument_devoue');

    }

    public function murdupatrimoine() {

        return view('frontend.parcours.mur_du_patrimoine');

    }

    public function placebioguerra() {

        return view('frontend.parcours.place_bio_guerra');

    }

    public function routepeche() {

        return view('frontend.parcours.route_peche');

    }

    public function sofitel() {
        return view('frontend.parcours.sofitel');
    }


    public function ContactMessage(Request $request){


// Validation des entrées
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            //'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'name.required' => 'Insérer le nom',
            'email.required' => 'Insérer le mail',
            'email.email' => 'Veuillez entrer une adresse e-mail valide',
            'telephone.required' => "Insérer le téléphone",
            //'sujet.required' => "Insérer le sujet",
            'message.required' => "Insérer le message",
        ]);

        // Échapper les caractères HTML pour éviter XSS
        $name = htmlspecialchars($request->name, ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($request->email, ENT_QUOTES, 'UTF-8');
        $telephone = htmlspecialchars($request->telephone, ENT_QUOTES, 'UTF-8');
        //$sujet = htmlspecialchars($request->sujet, ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($request->message, ENT_QUOTES, 'UTF-8');

        // Créer les données à envoyer
        $data = [
            'name' => $name,
            'email' => $email,
            'telephone' => $telephone,
            /*'sujet' => $sujet,*/
            'message' => $message,
        ];

        // Envoi d'email via un job
        $email_user = $email;
        $email_admin = 'contact@orekamobility.com';

        SendContactEmail::dispatch($email_user, $email_admin, $data);


        // Votre logique de traitement (envoi d'email, sauvegarde en BD, etc.)

        $successMessage = "Merci d'avoir contacté OREKA Mobility ! Nous avons bien reçu votre demande et notre équipe la traitera dans les plus brefs délais. À très bientôt !";

        return response()->json([
            'contact_succs' => $successMessage,
            'success' => true
        ]);


    } //end method


}
