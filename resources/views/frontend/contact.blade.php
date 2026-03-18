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
                    <h2 class="breadcrumb-title">Contactez-nous</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="{{ route('accueil') }}">Accueil</a></li> <span style="color: white">&nbsp; /&nbsp; </span>
                            <li class="breadcrumb-item active" aria-current="page">Contactez-nous</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->


    <!-- Contact us -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-info-area">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.1">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-phone-call"></i></span>
                            <h3>Numéro de téléphone</h3>
                            <a href="tel:+2290153096850">+229 015 309 6850</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.2">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-mail"></i></span>
                            <h3>Adresse e-mail</h3>
                            <a href="mailto:contact@orekamobility.com">contact@orekamobility.com</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.3">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-map-pin"></i></span>
                            <h3>Localisation</h3>
                            <a href="javascript:void(0);">Cotonou/Menontin
                                Rue collège Martin Luther King
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.4">
                        <div class="single-contact-info flex-fill">
                            <span><i class="feather-clock"></i></span>
                            <h3>Heures d’ouverture</h3>
                            <a href="javascript:void(0);">Mardi au Dimanche de
                                07h à 19h</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-info-area" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="0.5">
                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <img src="{{ asset('assets/img/contact-info.jpg')}}" class="img-fluid" alt="Contact">
                    </div>
                    <div class="col-lg-6">
                        <div id="contactContainer">
                            <form id="contactForm"  action="{{ route('contact.message') }}"  method="POST">
                            @csrf

                            <div class="row">
                                <h1>Contactez-nous !</h1>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Nom <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Votre nom*" required>
                                        <span class="text-danger"  id="nameError"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Adresse e-mail <span class="text-danger">*</span></label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Votre email*" required>
                                        <span class="text-danger"  id="emailError"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Numéro de téléphone <span class="text-danger">*</span></label>
                                        <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Votre telephone*" required>
                                        <span class="text-danger"  id="telephoneError"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-block">
                                        <label>Message <span class="text-danger">*</span></label>
                                        <textarea class="form-control" name="message" id="message" rows="4" cols="50" placeholder="Votre message*" required></textarea>
                                        <span class="text-danger"  id="messageError"></span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn contact-btn">Envoyer la demande</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact us -->

@endsection

@push('scripts')

    <script>
        document.querySelector('#contactForm button[type="submit"]').addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();

            // Validation manuelle
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const telephone = document.getElementById('telephone').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !telephone || !message) {
                alert('Veuillez remplir tous les champs.');
                return;
            }

            const form = document.getElementById('contactForm');

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: new FormData(form)
            })
                .then(response => response.json())
                .then(data => {
                    if (data.contact_succs) {
                        document.getElementById('contactContainer').innerHTML = `
                <div style="background-color: #55cd55; color: black; padding: 20px; border-radius: 5px;">
                    ${data.contact_succs}
                </div>
            `;
                    }
                })
                .catch(error => console.error('Erreur:', error));
        });
    </script>



@endpush

