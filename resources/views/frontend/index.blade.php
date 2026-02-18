@extends('frontend.main_master')

@section('title') NordKapital Beratung | Expert du Crédit Personnel en Allemagne | Solutions de Financement
@endsection

@section('description')Découvrez des solutions de financement personnalisées pour tous vos projets. Taux attractifs, réponse en 24h et accompagnement expert. Plus de 90 000 clients nous font confiance !@endsection


@push('links')

    <style>

        .hero-sec-main .header-two {
            background: transparent;
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

    </style>

@endpush

@section('banner')

    <!-- Banner -->
    <section class="banner-section banner-sec-two banner-slider">
        <div class="banner-img-slider owl-carousel">
            <div class="slider-img">
                <img src="{{ asset('assets/img/bg/hero_section.png')}}" alt="Img">
            </div>
            {{--<div class="slider-img">
                <img src="{{ asset('assets/img/bg/home-banner-img-02.png')}}" alt="Img">
            </div>
            <div class="slider-img">
                <img src="{{ asset('assets/img/bg/home-banner-img-03.png')}}" alt="Img">
            </div>--}}
        </div>
        <div class="container">
            <div class="home-banner">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="hero-sec-contents" style="padding-bottom: 100px; padding-top: 90px;">
                            <div class="banner-title ">
                                <h1>Location de Vélos Sport & Loisirs
                                    <span>Réservez. Roulez. Profitez.</span>
                                </h1>
                                <p>Vélos disponibles à l’heure, séances encadrées avec coach et sorties touristiques en groupe.
                                    Une expérience sportive et conviviale accessible à tous.
                                </p>
                            </div>
                            {{--<div class="banner-form">
                                <form action="https://dreamsrent.dreamstechnologies.com/html/template/listing-grid.html">
                                    <div class="banner-search-list">
                                        <div class="input-block">
                                            <label><i class="bx bx-map"></i>Location</label>
                                            <select class="select">
                                                <option>Choose Location</option>
                                                <option>Newyork</option>
                                            </select>
                                        </div>
                                        <div class="input-block">
                                            <label><i class="bx bx-calendar"></i>Pickup Date</label>
                                            <div class="date-widget">
                                                <div class="group-img">
                                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-block">
                                            <label><i class="bx bx-calendar"></i>Pickup Date</label>
                                            <div class="date-widget">
                                                <div class="group-img">
                                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-block">
                                            <label><i class="bx bxs-ship"></i>Yacht Type</label>
                                            <select class="select">
                                                <option>Catamaran</option>
                                                <option>Motor yachts</option>
                                                <option>Sailing yachts</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-block-btn">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="bx bx-search-alt me-2"></i> Search
                                        </button>
                                    </div>
                                </form>
                            </div>--}}
                            <div class="view-more-btn text-center mt-5">
                                <a href="{{ route('reservation_step_1') }}" class="btn btn-primary">Réserver un vélo maintenant</a>
                            </div>
                            {{--<div class="banner-user-group text-center" style="padding-top: 40px">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/img/profiles/avatar-01.jpg')}}" alt="Img"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/img/profiles/avatar-02.jpg')}}" alt="Img"></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><img src="{{ asset('assets/img/profiles/avatar-03.jpg')}}" alt="Img"></a>
                                    </li>
                                    <li class="users-text">
                                        <h5>+1000 Cyclistes nous font confiance</h5>
                                        <span>Déjà des centaines de sportifs et passionnés ont vécu l’expérience avec nous. </span>
                                    </li>
                                </ul>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Banner -->

@endsection


@section('content')




    <!-- Yacht Categories -->
    <section class="yacht-category-sec">
        <div class="sec-bg">
            <img src="assets/img/bg/yacht-cat-sec-bg-01.png" class="anchor-img" alt="Img">
            <img src="assets/img/bg/yacht-cat-sec-bg-02.png" class="vector-round" alt="Img">
            <img src="assets/img/bg/yacht-cat-sec-bg-03.png" class="design-round" alt="Img">
        </div>
        <div class="sec-round-colors">
            <span class="bg-orange round-small"></span>
            <span class="bg-orange round-small"></span>
            <span class="bg-dark-blue round-small"></span>
            <span class="bg-dark-blue round-small"></span>
        </div>
        <div class="container">
            <div class="banner-yacht-type-slider owl-carousel">
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-01.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Location</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-02.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Weekend</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-03.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Apprentissage</h6>
                </div>
                <div class="slider-card slider-card-active">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-04.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Groupe</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-05.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Picnic</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-06.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Tourisme</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-04.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Trip</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-08.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Coaching</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-09.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Réservation</h6>
                </div>
                <div class="slider-card">
                    <div class="banner-slider-icon">
                        <span><img src="{{ asset('assets/img/icons/banner-slider-10.svg')}}" alt="Img"></span>
                    </div>
                    <h6>Paiement</h6>
                </div>

            </div>
            <div class="section-header-two">
                <h2>Nos Activités Vélo</h2>
                <p>Découvrez nos différentes formules de location et nos
                    activités sportives encadrées adaptées à tous les niveaux.
                </p>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="about-img">
                            <div class="about-exp">
                                <span>+1000 cyclistes satisfaits</span>
                            </div>
                            <div class="abt-img">
                                <img src="{{ asset('assets/img/about_us.png')}}" class="img-fluid" alt="About us">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-down">
                        <div class="about-content">
                            <h6>À PROPOS DE NOUS</h6>
                            <h2>Votre partenaire pour le sport et le loisir à vélo</h2>
                            <p>
                                Nous mettons à votre disposition des vélos de qualité, entretenus régulièrement, pour vos séances de sport, vos balades détente et vos sorties en groupe. Notre objectif est de vous offrir une expérience agréable, sécurisée et accessible à tous.
                                Que vous soyez débutant, amateur ou passionné de cyclisme, nous proposons des formules adaptées à votre niveau et à vos envies.
                            </p>

                            <p>
                                Nos activités incluent la location à l’heure, l’apprentissage accompagné pour ceux qui souhaitent progresser, des séances sportives encadrées par un coach, ainsi que des sorties touristiques et récréatives en groupe. Chaque activité est pensée pour allier performance, convivialité et découverte.
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Location simple à l’heure</li>
                                        <li>Apprentissage encadré</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>Séances sportives en groupe</li>
                                        <li>Sorties touristiques accompagnées</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /Yacht Categories -->
    <!-- Seasonal Special -->
    <section class="seasonal-special-sec">
        <div class="container">
            <div class="sec-title">
                <h2>Offre Spéciale Sportif du Weekend</h2>
                <p>
                    Profitez de nos tarifs préférentiels pour pratiquer le vélo en toute liberté.
                    Une occasion idéale pour faire du sport, vous dépasser et partager un moment convivial.
                </p>
                <div class="sec-btns">
                    <a href="{{ route('reservation_step_1') }}" class="btn btn-dark-blue">Réserver maintenant</a>
                    <a href="{{ route('reservation_step_1') }}" class="btn btn-primary d-flex align-items-center">
                        <i class="bx bx-cycling me-2"></i>Voir les détails
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- /Seasonal Special -->

    <!-- services -->
    <section class="section services bg-light-primary">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Comment ça marche ?</h2>
                <p>Réservez votre vélo en quelques étapes simples et profitez pleinement de votre expérience sportive.</p>
            </div>
            <!-- /Heading title -->

            <div class="services-work">
                <div class="row">

                    <!-- Étape 1 -->
                    <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="services-group">
                            <div class="services-content">
                                <div class="services-icon border-secondary">
                                    <img class="icon-img bg-secondary" src="assets/img/icons/services-icon-01.svg" alt="Choose Locations">
                                </div>
                                <h3>1. Choisissez votre formule</h3>
                                <p>
                                    Sélectionnez la formule qui vous convient : location à l’heure, séance encadrée,
                                    vélo picnic ou sortie touristique en groupe.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Étape 2 -->
                    <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="services-group">
                            <div class="services-content">
                                <div class="services-icon border-secondary">
                                    <img class="icon-img bg-primary" src="assets/img/icons/services-icon-02.svg" alt="Choose Locations">
                                </div>
                                <h3>2. Renseignez vos informations</h3>
                                <p>
                                    Indiquez vos coordonnées, choisissez la date et l’horaire,
                                    puis confirmez votre réservation en ligne.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                        <div class="services-group">
                            <div class="services-content">
                                <div class="services-icon border-secondary">
                                    <img class="icon-img bg-secondary" src="assets/img/icons/services-icon-03.svg" alt="Choose Locations">
                                </div>
                                <h3>3. Payez et roulez</h3>
                                <p>
                                    Effectuez votre paiement sécurisé, récupérez votre vélo
                                    et profitez pleinement de votre séance sportive ou de votre sortie.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /services -->

    <!-- Destinations Section -->
    <section class="section destination-section">
        <div class="destination-bg">
            <img src="assets/img/bg/destination-bg-01.png" class="img-fluid shape-01" alt="img">
            <img src="assets/img/bg/destination-bg-02.png" class="img-fluid shape-02" alt="img">
        </div>
        <div class="container">
            <!-- Heading title-->
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="section-heading heading-three mx-auto" data-aos="fade-down">
                        <h2>Nos <span>Parcours</span></h2>
                        <p>
                            Découvrez les différents parcours que nous proposons pour vos activités sportives,
                            vos balades détente et vos sorties en groupe.
                        </p>

                    </div>
                </div>
            </div>
            <!-- /Heading title -->

            <div class="row">
                <div class="col-lg-3 col-sm-6 order-lg-1 order-sm-1">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ asset('assets/img/destination/destination-01.png')}}" alt="image" class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Place Bio Guerra</h5>

                            <a href="javascript:void(0);" class="btn btn-primary">S'inscrire<i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6 order-lg-2 order-sm-5">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ asset('assets/img/destination/destination-02.png')}}" alt="image" class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Sofitel</h5>

                            <a href="javascript:void(0);" class="btn btn-primary">S'inscrire<i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-lg-3 order-sm-3">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ asset('assets/img/destination/destination-03.png')}}" alt="image" class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Monument aux dévoués</h5>

                            <a href="javascript:void(0);" class="btn btn-primary">S'inscrire<i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6 order-lg-4 order-sm-last">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ asset('assets/img/destination/destination-04.png')}}" alt="image" class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Place de l'amazone</h5>

                            <a href="javascript:void(0);" class="btn btn-primary">S'inscrire<i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 order-lg-5 order-sm-2">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ asset('assets/img/destination/destination-05.png')}}" alt="image" class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Mur du patrimoine</h5>

                            <a href="javascript:void(0);" class="btn btn-primary">S'inscrire<i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 order-lg-6 order-sm-4">
                    <div class="destination-wrap" data-aos="fade-down">
                        <div class="destination-img">
                            <img src="{{ asset('assets/img/destination/destination-06.png')}}" alt="image" class="img-fluid">
                        </div>
                        <div class="destination-content">
                            <h5>Route des pèches</h5>

                            <a href="javascript:void(0);" class="btn btn-primary">S'inscrire<i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Destinations Section -->



    <!-- Pricing Plan -->
    <section class="pricing-section pricing-page pricing-section-bottom">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>Nos Tarifs de Location</h2>
                <p>Choisissez l'offre qui vous convient</p>
            </div>
            <!-- /Heading title -->

            <div class="row">
                <!-- Colonne 1: Offre Spéciale Weekend -->
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card price-selected flex-fill">
                        <div class="price-head">
                            <h2>Offre Spéciale Sportif du Weekend</h2>
                            <p>Vélo-Sport avec tarifs exceptionnels pour le weekend</p>
                            <a href="javascript:void(0);"><i class="bx bx-right-arrow-alt"></i></a>
                        </div>
                        <div class="price-body">
                            <img class="img-fluid" src="{{ asset('assets/img/velo.png')}}" alt="Price Plan">
                        </div>
                    </div>
                </div>

                <!-- Colonne 2: Tarif Normal (une seule section) -->
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Tarif Normal de Location</h6>
                                <p>Location individuelle</p>
                            </div>
                            <h4>700F</h4>
                            <span>À partir de /heure</span>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Location Weekend: 700F/heure</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Location+Apprentissage: 1200F</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>1h = 1500F + 15min offert</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>2h = 2500F + 30min offert</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>3h = 3500F + 30min offert</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Temps bonus inclus</li>
                            </ul>
                            <a href="{{ route('reservation_step_1') }}" class="btn viewdetails-btn">Louer</a>
                        </div>
                    </div>
                </div>

                <!-- Colonne 3: Séances en Groupe (Sport & Picnic) -->
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card flex-fill active">
                        <div class="price-head">
                            <div class="price-level price-level-popular">
                                <h6>Séances en Groupe</h6>
                                <p>Samedis matin</p>
                            </div>
                            <h4>3000F</h4>
                            <span>À partir de</span>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Vélo Sport - 3000F (coach sportif)</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>10 places disponibles</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Vélo Picnic - 5000F</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>10 places disponibles</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Tous les samedis matin</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Ambiance conviviale</li>
                            </ul>
                            <a href="{{ route('reservation_step_1') }}" class="btn viewdetails-btn btn-popular">Inscription</a>
                        </div>
                    </div>
                </div>

                <!-- Colonne 4: Séances Premium (Tourisme & Trip) -->
                <div class="col-lg-3 d-flex col-md-6 col-12" data-aos="fade-down">
                    <div class="price-card flex-fill">
                        <div class="price-head">
                            <div class="price-level">
                                <h6>Séances Premium</h6>
                                <p>Expériences guidées</p>
                            </div>
                            <h4>10 000F</h4>
                            <span>Par inscription</span>
                        </div>
                        <div class="price-details">
                            <ul>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Vélo Tourisme - 10 000F</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Avec guide touristique</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>10 places disponibles</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Vélo Trip - 10 000F</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Moniteur OREKA</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>10 places disponibles</li>
                                <li class="price-check"><span><i class="fa-regular fa-circle-check"></i></span>Samedis matin</li>
                            </ul>
                            <a href="{{ route('reservation_step_1') }}" class="btn viewdetails-btn">Réserver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Pricing Plan -->

    <!-- Blog Section -->
    <section class="blog-section-four">
        <div class="container">
            <div class="subscribe-sec">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="subscribe-content">
                            <h2>Restez informé de nos <span>Offres & Activités</span></h2>
                            <p>
                                Recevez en exclusivité nos offres spéciales weekend,
                                nos nouvelles sorties en groupe et nos événements sportifs.
                            </p>
                            <div class="subscribe-form">
                                <form  id="newsletterForm" action="{{ route('message.newsletter') }}" method="POST">
                                    @csrf

                                    <span><i class="bx bx-mail-send"></i></span>
                                    <input type="email" name="email" required class="form-control" placeholder="Entrez votre adresse email">
                                    <div id="emailError2" style="color: red;"></div>
                                    <button type="submit" class="btn btn-subscribe">
                                        <i class="bx bx-send"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="subscribe-img">
                            <img src="{{ asset('assets/img/about/web-app2.png')}}" alt="Inscription Newsletter" class="img-fluid">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/img/bg/app-bg.svg')}}" alt="icon" class="app-bg-01">
            </div>
        </div>
    </section>

    <!-- /Blog Section -->



@endsection


@push('scripts')

    <script>
        $(document).ready(function() {
            $('#newsletterForm').on('submit', function(e) {
                e.preventDefault(); // Empêcher le rechargement de la page

                var formData = $(this).serialize(); // Sérialiser les données du formulaire
                $('#emailError').html(''); // Réinitialiser le message d'erreur avant la soumission

                $.ajax({
                    url: "{{ route('message.newsletter') }}", // La route vers ton contrôleur
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.newsletter_success) {
                            $('#newsletterForm').replaceWith('<div style="background-color: #55cd55; color: black; padding: 10px;">' + response.newsletter_success + '</div>');
                        }
                    },
                    error: function(response) {
                        // Récupérer et afficher les messages d'erreur
                        if (response.status === 422) { // Code de statut pour erreur de validation
                            var errors = response.responseJSON.errors;
                            if (errors.email) {
                                $('#emailError2').html(errors.email[0]); // Affiche l'erreur liée à l'e-mail
                            }
                        } else {
                            alert("Une erreur s'est produite, veuillez réessayer.");
                        }
                    }
                });
            });
        });
    </script>

@endpush
