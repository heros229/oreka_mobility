@extends('frontend.main_master')

@section('title') Monument aux Dévoués – Cotonou, OREKA Mobility @endsection

@section('description') Découvrez le Monument aux Dévoués, lieu de mémoire et de recueillement au cœur de Cotonou. Réservez un vélo et rendez hommage à ce symbole de courage béninois. @endsection

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
    <div class="blogbanner" style="background-image: url('{{ asset('assets/img/profiles/gg.jpeg')}}'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Monument aux Dévoués – Un lieu de mémoire et de fierté</h1>
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
                <p>Le Monument aux Dévoués est l'un des lieux de mémoire les plus poignants de Cotonou. Érigé en hommage aux victimes de la tragique explosion du dépôt de munitions du 23 octobre 2000, il rend hommage aux soldats, pompiers et secouristes qui ont sacrifié leur vie pour protéger la population civile lors de cette catastrophe qui endeuilla profondément le Bénin. Situé dans un espace de recueillement sobre et digne, le monument incarne la reconnaissance d'une nation envers ceux qui ont tout donné.</p>
                <p>Visiter ce lieu à vélo, c'est s'accorder un moment de pause et de réflexion au cœur d'un trajet qui traverse la mémoire collective béninoise. Le monument se trouve dans un quartier accessible et calme, idéal pour une halte contemplative entre deux étapes d'une balade urbaine. Autour de lui, la ville continue de vivre et de se construire — un contraste qui rappelle avec force la résilience du peuple de Cotonou face à l'adversité.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="{{ asset('assets/img/blogquote.svg')}}" alt="quotes">
                <p>S'arrêter devant le Monument aux Dévoués à vélo, c'est ressentir tout le poids de l'histoire et toute la noblesse d'un peuple. Ce lieu m'a profondément touché. On ne visite pas simplement Cotonou, on la comprend, on la ressent.</p>
                <h6>Jean-Pierre Adande – Voyageur culturel</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le monument s'intègre naturellement dans le circuit culturel à vélo que nous proposons depuis le centre de Cotonou. En partant de la Place de l'Étoile Rouge, vous rejoignez le monument en moins de dix minutes, avant de poursuivre vers le quartier Gbèdjromèdé ou de longer la lagune vers le port de pêche. Ce parcours d'environ 9 kilomètres mêle histoire, culture et découverte urbaine, et peut être parcouru en deux heures environ. C'est une étape incontournable pour quiconque souhaite comprendre l'âme profonde de Cotonou au-delà des clichés touristiques.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/obelisque.png')}}" class="img-fluid" alt="Détail du Monument aux Dévoués de Cotonou">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/obelisque-1.jpg')}}" class="img-fluid" alt="Circuit vélo au Monument aux Dévoués Cotonou">
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
