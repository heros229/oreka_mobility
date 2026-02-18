<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    //

    public function index() {

        return view('frontend.index');

    } // end method

    public function Reservation_step_1() {

        return view('frontend.reservation_step_1');

    } // end method

    public function Reservation_step_2() {

        return view('frontend.reservation_step_2');

    } //end method

    // Dans IndexController.php
    public function Reservation_step_3(Request $request)
    {
        $data = $request->all();

        \FedaPay\FedaPay::setApiKey(env('FEDAPAY_API_KEY'));
        \FedaPay\FedaPay::setEnvironment(env('FEDAPAY_ENVIRONMENT', 'sandbox'));

        try {
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

        } catch (\Exception $e) {
            \Log::error('FedaPay Error: ' . $e->getMessage());

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

        $transactionId = $request->id; // FedaPay renvoie l'ID

        try {
            // Récupérer la transaction
            $transaction = \FedaPay\Transaction::retrieve($transactionId);

            if ($transaction->status === 'approved') {
                // Paiement réussi
                return view('frontend.reservation_success', compact('transaction'));
            } else {
                // Paiement échoué
                return view('frontend.reservation_failed', compact('transaction'));
            }

        } catch (\Exception $e) {
            return redirect()->route('accueil')->with('error', 'Erreur de vérification');
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
}
