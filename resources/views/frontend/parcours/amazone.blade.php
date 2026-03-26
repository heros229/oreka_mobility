@extends('frontend.main_master')

@section('title') Place des Amazones – Abomey-Calavi, OREKA Mobility @endsection

@section('description') Découvrez la Place des Amazones, hommage aux légendaires guerrières du Dahomey. Réservez un vélo et plongez dans l'histoire du Bénin. @endsection

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
    <div class="blogbanner" style="background-image: url('assets/img/profiles/place-des-amazones.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Place des Amazones – L'héritage des guerrières du Dahomey</h1>
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
                <p>La Place des Amazones rend hommage aux légendaires Agojié, les guerrières d'élite du royaume du Dahomey qui firent trembler les armées coloniales au XIXe siècle. Ces femmes soldats, recrutées dès leur plus jeune âge au service du roi d'Abomey, étaient réputées pour leur courage sans faille, leur discipline de fer et leur redoutable efficacité au combat. Craintes de leurs ennemis et vénérées de leur peuple, les Amazones du Dahomey sont aujourd'hui un symbole universel de force féminine et de résistance africaine, portées à la connaissance du monde entier notamment grâce au film Black Panther : Wakanda Forever.</p>
                <p>Pédaler jusqu'à la Place des Amazones, c'est retracer à sa propre cadence un fragment de cette histoire épique. La place, ornée de sculptures évocatrices représentant ces guerrières en position de combat, constitue l'une des haltes les plus impressionnantes du circuit culturel à vélo que nous proposons entre Cotonou et Abomey-Calavi. Autour d'elle, le quartier déploie une atmosphère chargée d'histoire, avec ses artisans, ses conteurs et ses habitants fiers de cet héritage hors du commun.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="{{ asset('assets/img/blogquote.svg')}}" alt="quotes">
                <p>Arriver à vélo devant les sculptures des Amazones, c'est recevoir un choc d'histoire en pleine poitrine. Ces femmes ont tout affronté. S'en souvenir ici, au Bénin, sur leur terre, est un privilège que le voyage à vélo rend encore plus intime et puissant.</p>
                <h6>Mariama Diallo – Historienne et voyageuse</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le circuit à vélo depuis Cotonou vers la Place des Amazones couvre environ 12 kilomètres, en longeant la route de l'Aéroport avant de traverser les quartiers résidentiels d'Abomey-Calavi. Le parcours peut se faire en deux heures environ, avec des arrêts recommandés aux fresques murales qui jalonnent le trajet et racontent l'épopée des Agojié. Pour aller plus loin dans la découverte, il est possible de prolonger la balade jusqu'au Palais Royal d'Abomey, inscrit au patrimoine mondial de l'UNESCO, situé à une heure de route supplémentaire. Un voyage dans le temps à ne manquer sous aucun prétexte.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/amazone.jpg')}}" class="img-fluid" alt="Sculpture des Amazones du Dahomey au Bénin">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/monument-amazone.jpg')}}" class="img-fluid" alt="Fresque murale Amazones du Dahomey Bénin">
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
