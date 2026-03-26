
@extends('frontend.main_master')

@section('title') Place Bio Guerra, Cotonou - OREKA Mobility @endsection

@section('description') Découvrez la Place Bio Guerra, cœur battant de Cotonou. Réservez un vélo et explorez ce lieu iconique du Bénin. @endsection

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
    <div class="blogbanner" style="background-image: url('assets/img/profiles/bio-guera.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Place Bio Guerra – Le cœur vivant de Cotonou</h1>
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
                <p>Nichée au cœur de Cotonou, la capitale économique du Bénin, la Place Bio Guerra est bien plus qu'un simple carrefour urbain. C'est un symbole de vie, d'échanges et d'authenticité béninoise. Nommée en hommage à un notable historique de la région, cette place anime le quartier commercial central et reste l'un des repères les plus connus des habitants comme des visiteurs. Entourée de marchés colorés, de restaurants de rue proposant des spécialités locales comme l'akassa ou le tchigan, et de boutiques artisanales, la Place Bio Guerra offre une immersion totale dans la culture urbaine béninoise.</p>
                <p>Le matin, l'air y est chargé des effluves d'épices et des cris des commerçants qui s'installent. À vélo, la découverte de la place prend une toute autre dimension : vous pouvez slalomer librement entre les étals du Grand Marché Dantokpa tout proche, rejoindre le bord de la lagune de Cotonou en quelques minutes, ou longer les artères animées vers le quartier Haie Vive. Le soir, la place s'illumine et se transforme en scène de vie sociale où se croisent familles, commerçants et touristes. Que vous soyez passionné de culture, amateur de street food ou simplement en quête de sensations urbaines authentiques, la Place Bio Guerra et ses environs vous offriront des souvenirs inoubliables.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="{{ asset('assets/img/blogquote.svg')}}" alt="quotes">
                <p>Pédaler sur les rues qui bordent la Place Bio Guerra, c'est toucher l'âme de Cotonou. Chaque coup de pédale vous rapproche d'une ville généreuse, chaotique et magnifique à la fois. Le vélo est sans doute la meilleure façon de vivre ce lieu unique au rythme des Cotonois.</p>
                <h6>Aminata Kossou – Cycliste voyageuse</h6>
            </blockquote>
            <div class="blog-description">
                <p>La Place Bio Guerra se trouve dans le quartier Gbèdjromèdé, à deux pas du célèbre marché Dantokpa, le plus grand marché en plein air d'Afrique de l'Ouest. Le circuit à vélo recommandé depuis la place couvre environ 8 kilomètres : place Bio Guerra, bord de lagune, marché Dantokpa, puis retour. Ce parcours peut se faire en une heure trente à deux heures selon vos arrêts, avec un vélo fourni avec casque et antivol inclus. La meilleure période pour cette balade est la saison sèche, de novembre à février, pour profiter pleinement de la douceur du climat béninois et d'un ciel dégagé sur toute la ville.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/Statut-Bio-Guera-4.jpg')}}" class="img-fluid" alt="Marché animé près de la Place Bio Guerra">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/R.jpg')}}" class="img-fluid" alt="La lagune de Cotonou à vélo depuis la Place Bio Guerra">
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
