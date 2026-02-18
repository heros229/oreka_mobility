@extends('frontend.main_master')

@section('title') Réservation réussie | Oreka Mobility @endsection

@section('description') Votre réservation a été confirmée avec succès. Téléchargez votre reçu. @endsection

@section('content')

    <!-- Breadcrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Réservation réussie</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="{{ route('accueil') }}">Accueil</a></li>
                            <span style="color: white">&nbsp; /&nbsp; </span>
                            <li class="breadcrumb-item active" aria-current="page">Réservation réussie</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb Section -->

    <!-- Booking Success -->
    <div class="booking-new-module">
        <div class="container">

            <div class="booking-wizard-head">
                <div class="row align-items-center">
                    <div class="col-xl-4 col-lg-3">
                        <div class="booking-head-title">
                            <h4>Réservez votre activité</h4>
                            <p>Suivez les étapes ci-dessous</p>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-9">
                        <div class="booking-wizard-lists">
                            <ul>
                                <li class="active activated">
                                    <span>
                                        <img src="{{ asset('assets/img/icons/booking-head-icon-01.svg')}}" alt="Étape 1">
                                    </span>
                                    <h6>Information & Date</h6>
                                </li>
                                <li class="active activated">
                                    <span>
                                        <img src="{{ asset('assets/img/icons/booking-head-icon-02.svg')}}" alt="Étape 2">
                                    </span>
                                    <h6>Choix de la formule</h6>
                                </li>
                                <li class="active">
                                    <span>
                                        <img src="{{ asset('assets/img/icons/booking-head-icon-05.svg')}}" alt="Étape 3">
                                    </span>
                                    <h6>Confirmation</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="booking-card">
                <div class="success-book">
						<span class="success-icon">
							<i class="fa-solid fa-check-double"></i>
						</span>
                    <h5>Merci ! Votre réservation a été enregistrée</h5>
                    <p style="color: #fe9701;">Référence de transaction : <strong>#{{ $transaction->id }}</strong></p>
                </div>
            </div>

            {{-- Formulaire caché pour envoyer les données localStorage au serveur --}}
            <form id="download-invoice-form" method="POST" action="{{ route('download_reservation') }}">
                @csrf
                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                <input type="hidden" name="step1_data" id="input-step1">
                <input type="hidden" name="step2_data" id="input-step2">
            </form>

            <div class="text-center mt-4">
                <button id="btn-download-invoice" class="btn btn-primary">
                    <i class="bx bx-download me-2"></i>Télécharger votre réservation
                </button>
                <a href="{{ route('accueil') }}" class="btn btn-secondary">Retour à l'accueil</a>
            </div>

        </div>

    </div>
    <!-- /Booking Success -->

@endsection

@push('scripts')
<script>
    document.getElementById('btn-download-invoice').addEventListener('click', function () {
        // Récupérer les données du localStorage
        const step1 = localStorage.getItem('reservationStep1') || '{}';
        const step2 = localStorage.getItem('reservationStep2') || '{}';

        // Injecter dans le formulaire
        document.getElementById('input-step1').value = step1;
        document.getElementById('input-step2').value = step2;

        // Soumettre le formulaire
        document.getElementById('download-invoice-form').submit();
    });
</script>
@endpush
