@extends('frontend.main_master')

@section('title') Échec de la réservation @endsection

@section('description') La réservation a échoué. Veuillez réessayer. @endsection

@section('content')

    <!-- Breadcrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Échec de la réservation</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="{{ route('accueil') }}">Accueil</a></li>
                            <span style="color: white">&nbsp; /&nbsp; </span>
                            <li class="breadcrumb-item active" aria-current="page">Réservation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb Section -->

    <!-- Booking Failed -->
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
                    <span class="success-icon" style="background-color: #dc3545; color: white;">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </span>
                    <h5 style="color: #dc3545;">Oups ! La réservation a échoué.</h5>
                    <p>Nous n'avons pas pu traiter votre demande correctement. Cela peut être dû à un problème de paiement ou de disponibilité.</p>

                    @if(isset($order_number))
                         <h5 class="order-no">Référence de tentative : <span>#{{ $order_number }}</span></h5>
                    @endif
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('accueil') }}" class="btn btn-primary">Retour à l'accueil</a>
                    <a href="javascript:history.back()" class="btn btn-secondary">Réessayer</a>
                </div>

            </div>
        </div>

    </div>
    <!-- /Booking Failed -->

@endsection

