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
                    <h2 class="breadcrumb-title">Checkout</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="{{ route('accueil') }}">Home</a></li>
                            <span style="color: white">&nbsp; /&nbsp; </span>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
                                <li class="active activated">
                    <span>
                        <img src="{{ asset('assets/img/icons/booking-head-icon-01.svg')}}" alt="Étape 1">
                    </span>
                                    <h6>Information & Date</h6>
                                </li>
                                <li class="active">
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
                    <div class="col-lg-8">
                        <div class="booking-information-main">


                            <div class="booking-information-card">
                                    <div class="booking-info-head justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span><i class="bx bx-add-to-queue"></i></span>
                                            <h5>Extra Services</h5>
                                        </div>
                                        <h6>Total : <span id="total-services">0</span> Services sélectionnés</h6>
                                    </div>
                                    <div class="booking-info-body">
                                        <ul class="adons-lists">
                                            <!-- Offre Spéciale Weekend - Location Simple -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-cycling"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Vélo-Sport Weekend - Location Simple</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">700</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Vélo-Sport Weekend - Location Simple" data-price="700">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Offre spéciale sportif du weekend. Location de vélo-sport à partir de 700F par heure.</p>
                                                </div>
                                            </li>

                                            <!-- Offre Spéciale Weekend - Location + Apprentissage -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-user-voice"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Vélo-Sport Weekend - Location + Apprentissage</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">1200</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Vélo-Sport Weekend - Location + Apprentissage" data-price="1200">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Offre spéciale weekend incluant la location du vélo-sport et un apprentissage avec un coach professionnel.</p>
                                                </div>
                                            </li>

                                            <!-- Tarif Normal - 1 heure -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-time-five"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Location Individuelle - 1 heure</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">1500</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Location Individuelle - 1 heure" data-price="1500">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Tarif normal de location individuelle pour 1 heure à 1500F avec 15 minutes offertes en bonus.</p>
                                                </div>
                                            </li>

                                            <!-- Tarif Normal - 2 heures -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-time-five"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Location Individuelle - 2 heures</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">2500</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Location Individuelle - 2 heures" data-price="2500">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Tarif normal de location individuelle pour 2 heures à 2500F avec 30 minutes offertes en bonus.</p>
                                                </div>
                                            </li>

                                            <!-- Tarif Normal - 3 heures -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-time-five"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Location Individuelle - 3 heures</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">3500</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Location Individuelle - 3 heures" data-price="3500">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Tarif normal de location individuelle pour 3 heures à 3500F avec 30 minutes offertes en bonus.</p>
                                                </div>
                                            </li>

                                            <!-- Vélo Sport - Séance en groupe -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-group"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Vélo Sport - Séance en Groupe</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">3000</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Vélo Sport - Séance en Groupe" data-price="3000">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Séance en groupe tous les samedis matin avec un coach sportif professionnel. Limité à 10 places.</p>
                                                </div>
                                            </li>

                                            <!-- Vélo Picnic -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-leaf"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Vélo Picnic</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">5000</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Vélo Picnic" data-price="5000">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Balade détente et conviviale en groupe tous les samedis matin. Limité à 10 places.</p>
                                                </div>
                                            </li>

                                            <!-- Vélo Tourisme -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-map-alt"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Vélo Tourisme</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">10000</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Vélo Tourisme" data-price="10000">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Séance en groupe accompagnée d'un guide touristique professionnel. Limité à 10 places.</p>
                                                </div>
                                            </li>

                                            <!-- Vélo Trip -->
                                            <li>
                                                <div class="adons-types">
                                                    <div class="d-flex align-items-center adon-name-info">
                                                        <span class="adon-icon"><i class="bx bx-trip"></i></span>
                                                        <div class="adon-name">
                                                            <h6>Vélo Trip</h6>
                                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center adon-info-btn">
                                                                <i class="bx bx-info-circle me-2"></i>Détails
                                                                <i class="bx bx-chevron-down ms-2 arrow-icon"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <span class="adon-price">10000</span>
                                                    <a href="#" class="btn add-addon-btn" data-service="Vélo Trip" data-price="10000">
                                                        <i class="bx bx-plus-circle me-2"></i>Ajouter
                                                    </a>
                                                </div>
                                                <div class="more-adon-info">
                                                    <p>Séance en groupe accompagnée d'un moniteur OREKA professionnel. Limité à 10 places.</p>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                                <div class="booking-info-btns d-flex justify-content-end">
                                    <a href="{{ route('reservation_step_1') }}" class="btn btn-secondary">Retour</a>
                                    <button class="btn btn-primary continue-book-btn" type="button">Continue</button>
                                </div>

                        </div>
                    </div>
                    <div class="col-lg-4 theiaStickySidebar">
                        <div class="booking-sidebar">

                            <!-- Informations Client (remplace Location & Time) -->
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header p-3">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_client" aria-expanded="true">
                                            <div class="booking-sidebar-head p-0">
                                                <h5>Informations Client<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_client" class="accordion-collapse collapse show">
                                        <div class="booking-sidebar-body">
                                            <ul class="location-address-info" id="client-info-list">
                                                <li>
                                                    <h6>Chargement...</h6>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Récapitulatif (remplace Coupon) -->
                            <div class="booking-sidebar-card">
                                <div class="accordion-item border-0 mb-4">
                                    <div class="accordion-header p-3">
                                        <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#accordion_collapse_recap" aria-expanded="true">
                                            <div class="booking-sidebar-head p-0">
                                                <h5>Récapitulatif<i class="fas fa-chevron-down"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion_collapse_recap" class="accordion-collapse collapse show">
                                        <div class="booking-sidebar-body">
                                            <ul class="recap-services-list" id="recap-list">
                                                <li class="text-center text-muted">
                                                    <p>Aucun service sélectionné</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Total -->
                            <div class="total-rate-card">
                                <div class="vehicle-total-price">
                                    <h5>Total</h5>
                                    <span id="total-price">0 FCFA</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <style>
        /* Style pour le bouton validé */
        .add-addon-btn.validated {
            background-color: #FFA500 !important;
            border-color: #FFA500 !important;
            color: white !important;
        }

        /* Style pour le récapitulatif */
        .recap-services-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .recap-services-list li {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .recap-services-list li:last-child {
            border-bottom: none;
        }

        .remove-service-btn {
            background: transparent;
            border: 1px solid #dc3545;
            color: #dc3545;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
            padding: 0;
            line-height: 1;
        }

        .remove-service-btn:hover {
            background: #dc3545;
            color: white;
        }

        .service-name {
            flex: 1;
            font-size: 14px;
        }

        .service-price {
            font-weight: 600;
            color: #333;
            white-space: nowrap;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let selectedServices = [];

            loadClientInfo();
            setupAddButtons();

            function loadClientInfo() {
                const step1Data = localStorage.getItem('reservationStep1');
                const clientInfoList = document.getElementById('client-info-list');

                if (step1Data) {
                    const data = JSON.parse(step1Data);
                    clientInfoList.innerHTML = `
                <li><h6>Client</h6><p>${data.firstName} ${data.lastName}</p></li>
                <li><h6>Email</h6><p>${data.email}</p></li>
                <li><h6>Téléphone</h6><p>${data.phone}</p></li>
                <li><h6>Date de début</h6><p>${data.startDate || 'Non renseignée'}</p></li>
                ${data.additionalInfo ? `<li><h6>Informations complémentaires</h6><p>${data.additionalInfo}</p></li>` : ''}
            `;
                }
            }

            function setupAddButtons() {
                const addButtons = document.querySelectorAll('.add-addon-btn');
                addButtons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        e.preventDefault();
                        const serviceName = this.getAttribute('data-service');
                        const servicePrice = parseInt(this.getAttribute('data-price'));
                        const existingService = selectedServices.find(s => s.name === serviceName);

                        if (existingService) {
                            removeService(serviceName);
                            this.classList.remove('validated');
                            this.innerHTML = '<i class="bx bx-plus-circle me-2"></i>Ajouter';
                        } else {
                            addService(serviceName, servicePrice);
                            this.classList.add('validated');
                            this.innerHTML = '<i class="bx bx-check-circle me-2"></i>Validé';
                        }
                    });
                });
            }

            function addService(name, price) {
                selectedServices.push({ name, price });
                updateRecap();
                updateTotal();
                updateServiceCount();
            }

            function removeService(name) {
                selectedServices = selectedServices.filter(s => s.name !== name);
                updateRecap();
                updateTotal();
                updateServiceCount();
                const button = document.querySelector(`[data-service="${name}"]`);
                if (button) {
                    button.classList.remove('validated');
                    button.innerHTML = '<i class="bx bx-plus-circle me-2"></i>Ajouter';
                }
            }

            function updateRecap() {
                const recapList = document.getElementById('recap-list');
                if (selectedServices.length === 0) {
                    recapList.innerHTML = '<li class="text-center text-muted"><p>Aucun service sélectionné</p></li>';
                    return;
                }
                let html = '';
                selectedServices.forEach(service => {
                    html += `
                <li>
                    <button class="remove-service-btn" onclick="removeServiceFromRecap('${service.name}')">×</button>
                    <span class="service-name">${service.name}</span>
                    <span class="service-price">${service.price.toLocaleString('fr-FR')} FCFA</span>
                </li>
            `;
                });
                recapList.innerHTML = html;
            }

            function updateTotal() {
                const total = selectedServices.reduce((sum, service) => sum + service.price, 0);
                document.getElementById('total-price').textContent = total.toLocaleString('fr-FR') + ' FCFA';
            }

            function updateServiceCount() {
                document.getElementById('total-services').textContent = selectedServices.length;
            }

            window.removeServiceFromRecap = function(serviceName) {
                removeService(serviceName);
            };

            // BOUTON CONTINUER AVEC AJAX
            document.querySelector('.continue-book-btn').addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                const step1Data = JSON.parse(localStorage.getItem('reservationStep1') || '{}');
                const allData = {
                    firstName: step1Data.firstName,
                    lastName: step1Data.lastName,
                    email: step1Data.email,
                    phone: step1Data.phone,
                    additionalInfo: step1Data.additionalInfo,
                    startDate: step1Data.startDate,
                    selectedServices: selectedServices,
                    totalAmount: selectedServices.reduce((sum, service) => sum + service.price, 0)
                };

                // Afficher un loader (optionnel)
                this.innerHTML = '<i class="bx bx-loader-alt bx-spin me-2"></i>Traitement...';
                this.disabled = true;

                // Envoyer avec AJAX
                fetch('{{ route("reservation_step_3") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(allData)
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Rediriger vers l'URL de paiement FedaPay
                            window.location.href = data.checkout_url;
                        } else {
                            alert('Erreur : ' + data.message);
                            // Remettre le bouton normal
                            this.innerHTML = 'Continue Booking';
                            this.disabled = false;
                        }
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        alert('Une erreur est survenue. Veuillez réessayer.');
                        // Remettre le bouton normal
                        this.innerHTML = 'Continue Booking';
                        this.disabled = false;
                    });
            });
        });
    </script>
@endpush
