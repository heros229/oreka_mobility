@extends('frontend.main_master')

@section('title') NordKapital Beratung | Expert du Crédit Personnel en Allemagne | Solutions de Financement
@endsection

@section('description')Découvrez des solutions de financement personnalisées pour tous vos projets. Taux attractifs, réponse en 24h et accompagnement expert. Plus de 90 000 clients nous font confiance !@endsection


@push('links')

    <style>

        .hero-sec-main .header-two {
            background: #0A152F;
            box-shadow: none;
        }
        .hero-sec-main .header-two.header-fixed {
            background: #0A152F;
            position: fixed;
            z-index: 999;
        }

        .owl-carousel .owl-nav .owl-prev,
        .owl-carousel .owl-nav .owl-next {
            display: none !important;
        }

        input.form-control, textarea.form-control {
            transition: border 0.3s ease;
        }

    </style>

@endpush


@section('content')

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Réservation</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="{{ route('accueil') }}">Accueil</a></li> <span style="color: white">&nbsp; /&nbsp; </span>
                            <li class="breadcrumb-item active" aria-current="page">Réservation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

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
                                <li class="active">
                                    <span>
                                        <img src="{{ asset('assets/img/icons/booking-head-icon-01.svg')}}" alt="Étape 1">
                                    </span>
                                    <h6>Information & Date</h6>
                                </li>
                                <li>
                                    <span>
                                        <img src="{{ asset('assets/img/icons/booking-head-icon-02.svg')}}" alt="Étape 2">
                                    </span>
                                    <h6>Choix de la formule</h6>
                                </li>
                                <li>
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
            <div class="booking-detail-info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="booking-information-main">
                            <form action="booking-addon.html">
                                <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>Informations personnelles</h5>
                                        </div>

                                    </div>
                                    <div class="booking-info-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Prénom <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre prénom">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Nom <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre nom">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Adresse Email <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre email">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-block">
                                                    <label class="form-label">Numéro de Téléphone <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" placeholder="Entrez votre numéro de téléphone">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-block">
                                                    <label class="form-label">Informations Complémentaires</label>
                                                    <textarea class="form-control" placeholder="Entrez des informations complémentaires" rows="5"></textarea>
                                                </div>
                                            </div>
                                            {{--<div class="col-md-12">
                                                <div class="input-block m-0">
                                                    <label class="custom_check d-inline-flex location-check m-0"><span>J'ai lu et j'accepte les Termes et Conditions</span> <span class="text-danger"> *</span>
                                                        <input type="checkbox" name="remeber">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="booking-information-card booking-type-card">
                                    <div class="booking-info-head">
                                        <span><i class="bx bxs-location-plus"></i></span>
                                        <h5>Choisissez votre date</h5>
                                    </div>
                                    <div class="booking-info-body">

                                        <div class="booking-timings">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-block date-widget">
                                                        <label class="form-label">Date</label>
                                                        <div class="group-img">
                                                            <input type="text" class="form-control datetimepicker" placeholder="Choisir une date">
                                                            <span class="input-cal-icon"><i class="bx bx-calendar"></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-info-btns d-flex justify-content-end">
                                    {{--<a href="listing-details.html" class="btn btn-secondary">Back to Car details</a>--}}
                                    <a class="btn btn-primary continue-book-btn" href="{{ route('reservation_step_2') }}">Continuer</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const phoneInput = document.querySelector('input[placeholder="Entrez votre numéro de téléphone"]');

            // Pré-remplir avec 01 au focus
            phoneInput.addEventListener('focus', function() {
                if (this.value === '') {
                    this.value = '01';
                }
            });

            // Forcer uniquement les chiffres et max 10 caractères
            phoneInput.addEventListener('input', function(e) {
                let value = this.value.replace(/[^0-9]/g, '');

                // Toujours garder 01 au début
                if (!value.startsWith('01')) {
                    value = '01' + value.replace(/^01/, '');
                }

                // Limiter à 10 chiffres
                if (value.length > 10) {
                    value = value.substring(0, 10);
                }

                this.value = value;
            });

            // Empêcher la suppression du 01
            phoneInput.addEventListener('keydown', function(e) {
                if ((e.key === 'Backspace' || e.key === 'Delete') && this.value.length <= 2) {
                    e.preventDefault();
                    this.value = '01';
                }
            });

            // Pré-remplir les champs
            const step1Data = localStorage.getItem('reservationStep1');
            if (step1Data) {
                const data = JSON.parse(step1Data);
                document.querySelector('input[placeholder="Entrez votre prénom"]').value = data.firstName || '';
                document.querySelector('input[placeholder="Entrez votre nom"]').value = data.lastName || '';
                document.querySelector('input[placeholder="Entrez votre email"]').value = data.email || '';
                phoneInput.value = data.phone || '';
                document.querySelector('textarea[placeholder="Entrez des informations complémentaires"]').value = data.additionalInfo || '';
                document.querySelector('.datetimepicker').value = data.startDate || '';
            }

            // Validation et sauvegarde
            const continueBtn = document.querySelector('.continue-book-btn');
            if (continueBtn) {
                continueBtn.addEventListener('click', function(e) {
                    e.preventDefault();

                    const firstName = document.querySelector('input[placeholder="Entrez votre prénom"]');
                    const lastName = document.querySelector('input[placeholder="Entrez votre nom"]');
                    const email = document.querySelector('input[placeholder="Entrez votre email"]');
                    const phone = phoneInput;
                    const date = document.querySelector('.datetimepicker');

                    // Retirer les bordures rouges existantes
                    [firstName, lastName, email, phone, date].forEach(field => {
                        field.style.border = '';
                    });

                    // Vérifier les champs obligatoires
                    let firstInvalidField = null;
                    if (!firstName.value.trim()) {
                        firstName.style.border = '2px solid red';
                        if (!firstInvalidField) firstInvalidField = firstName;
                    }
                    if (!lastName.value.trim()) {
                        lastName.style.border = '2px solid red';
                        if (!firstInvalidField) firstInvalidField = lastName;
                    }
                    if (!email.value.trim()) {
                        email.style.border = '2px solid red';
                        if (!firstInvalidField) firstInvalidField = email;
                    }
                    if (!phone.value.trim() || phone.value.length < 10) {
                        phone.style.border = '2px solid red';
                        if (!firstInvalidField) firstInvalidField = phone;
                    }
                    if (!date.value.trim()) {
                        date.style.border = '2px solid red';
                        if (!firstInvalidField) firstInvalidField = date;
                    }

                    if (firstInvalidField) {
                        firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        firstInvalidField.focus();
                        return;
                    }

                    // Sauvegarder et continuer
                    const formData = {
                        firstName: firstName.value,
                        lastName: lastName.value,
                        email: email.value,
                        phone: phone.value,
                        additionalInfo: document.querySelector('textarea[placeholder="Entrez des informations complémentaires"]').value,
                        startDate: date.value,
                        savedAt: new Date().toISOString()
                    };

                    localStorage.setItem('reservationStep1', JSON.stringify(formData));
                    window.location.href = continueBtn.getAttribute('href');
                });
            }
        });
    </script>

@endpush

