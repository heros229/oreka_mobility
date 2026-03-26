
@extends('frontend.main_master')

@section('title') Hôtel Sofitel Marina Cotonou – OREKA Mobility @endsection

@section('description') Découvrez le Sofitel Marina Cotonou, joyau de l'hospitalité au bord de l'Atlantique. Réservez un vélo et explorez Cotonou depuis cet hôtel iconique. @endsection

@push('links')

    <style>

        .hero-sec-main .header-two {
            background: #0a152f;
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

@section('content')

    <!-- Breadscrumb Section -->
    <div class="blogbanner" style="background-image: url('assets/img/profiles/sofitel.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Sofitel Marina Cotonou – L'élégance face à l'Atlantique</h1>
            <ul class="entry-meta meta-item justify-content-center">
                <li>
                    <div class="post-author">

                        <a href="javascript:void(0)"><span> OREKA Mobility </span></a>
                    </div>
                </li>
                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> Mars 2026</li>
            </ul>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <!-- Blog Grid-->
    <div class="blog-section">
        <div class="container">
            <div class="blog-description">
                <p>Perché en bordure de l'océan Atlantique, le Sofitel Marina Cotonou est sans conteste l'adresse la plus prestigieuse de la capitale économique du Bénin. Avec ses 193 chambres et suites offrant des vues imprenables sur l'océan, cet établissement cinq étoiles mêle avec élégance le luxe international et l'art de vivre béninois. Inauguré en 2012, il s'est rapidement imposé comme le symbole de la modernité de Cotonou, accueillant aussi bien les grands événements diplomatiques que les voyageurs en quête d'une expérience haut de gamme sur la côte ouest-africaine.</p>
                <p>Partir à vélo depuis le Sofitel Marina, c'est s'offrir une aventure unique entre deux mondes. En quelques coups de pédales, vous quittez l'univers feutré du palace pour plonger dans l'effervescence authentique de Cotonou : le front de mer animé, les artères commerçantes de Haie Vive, les marchés colorés et les terrasses de street food qui jalonnent le boulevard de la Marina. Le contraste est saisissant, et c'est précisément ce qui rend cette balade inoubliable.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="{{ asset('assets/img/blogquote.svg')}}" alt="quotes">
                <p>Quitter le Sofitel à l'aube, vélo en main, et longer l'océan Atlantique jusqu'au marché du Port — c'est l'un des plus beaux réveils que l'Afrique de l'Ouest puisse offrir. La brise marine, les pêcheurs qui rentrent, la ville qui s'éveille doucement… une magie que seul le vélo permet de ressentir pleinement.</p>
                <h6>Olivier Marchand – Voyageur & cycliste</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le Sofitel Marina se situe sur le boulevard de la Marina, dans le quartier résidentiel et diplomatique de Cotonou, à environ 15 minutes du centre-ville. Le circuit à vélo depuis l'hôtel longe le front de mer sur près de 10 kilomètres, permettant de rejoindre la Place de l'Étoile Rouge, le Palais des Congrès, puis de remonter vers le quartier des Ambassades avant de rentrer le long de la lagune. Une balade accessible à tous les niveaux, à réaliser de préférence tôt le matin pour profiter de la fraîcheur de l'océan et éviter la circulation dense de la journée.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/so-R.jpg')}}" class="img-fluid" alt="Piscine du Sofitel Marina Cotonou face à l'Atlantique">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/Sofi-R.jpg')}}" class="img-fluid" alt="Vue sur l'océan Atlantique depuis le Sofitel Marina Cotonou">
                    </div>
                </div>
            </div>

            <div class="card-body text-center" style="padding: 40px 0;">
                <a href="{{ route('accueil') }}#pricing" class="btn btn-primary submit-review">
                    <i class="fa-solid fa-calendar-check"></i> Réserver maintenant
                </a>
            </div>
        </div>
    </div>
    <!-- /Blog Grid-->

@endsection
