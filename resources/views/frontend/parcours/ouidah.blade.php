@extends('frontend.main_master')

@section('title') Ouidah – La Route des Pêches à Vélo – OREKA Mobility @endsection

@section('description') Partez à vélo de Cotonou jusqu'à Ouidah le long de la Route des Pêches. Cocotiers, plage atlantique et air marin pour une échappée nature inoubliable. @endsection

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
    <div class="blogbanner" style="background-image: url('{{ asset('assets/img/profiles/ouidah.png')}}'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Ouidah – L'Atlantique, les cocotiers et la liberté du vélo</h1>
            <ul class="entry-meta meta-item justify-content-center">
                <li>
                    <div class="post-author">
                        <a href="javascript:void(0)"><span> OREKA Mobility </span></a>
                    </div>
                </li>
                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> Mai 2026</li>
            </ul>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <!-- Blog Grid-->
    <div class="blog-section">
        <div class="container">
            <div class="blog-description">
                <p>Ouidah, à 42 kilomètres à l'ouest de Cotonou, s'atteint par l'une des plus belles routes côtières d'Afrique de l'Ouest : la Route des Pêches. Cette langue de terre bordée d'un côté par l'océan Atlantique et de l'autre par le lac Ahémé offre un décor naturel exceptionnel, fait de cocotiers penchés sous la brise, de villages de pêcheurs aux pirogues colorées et de plages sauvages où le sable blanc rencontre les vagues de l'Atlantique. Rouler jusqu'à Ouidah à vélo, c'est s'offrir une parenthèse de nature et de liberté, loin de l'agitation urbaine de Cotonou.</p>
                <p>Au fil des kilomètres, le paysage se transforme doucement. Les premiers quartiers animés de la périphérie laissent place à une végétation luxuriante, à l'odeur du sel et au bruit apaisant des vagues. Les cyclistes longent des étendues de sable fin, croisent des pêcheurs qui étendent leurs filets au soleil et découvrent des coins de plage encore préservés où il fait bon s'arrêter, respirer et contempler l'immensité de l'Atlantique. Un trajet de trois à quatre heures selon le rythme, ponctué de pauses naturelles qui rendent l'expérience encore plus mémorable.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="{{ asset('assets/img/blogquote.svg')}}" alt="quotes">
                <p>Pédaler sur la Route des Pêches au lever du soleil, avec le vent de l'Atlantique dans le dos et les cocotiers qui se balancent de chaque côté — c'est une sensation de liberté absolue qu'aucune voiture ne peut offrir. Ouidah à vélo, c'est le Bénin dans toute sa splendeur naturelle.</p>
                <h6>Karim Adjovi – Cycliste & amoureux de la nature</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le départ s'effectue depuis Cotonou, en empruntant la Route des Pêches vers l'ouest. Le circuit longe l'océan sur plus de 40 kilomètres à travers les villages de Fidjrossè, Agoué et Avlékété, avant d'arriver aux abords de Ouidah. À l'arrivée, la plage de Ouidah et ses eaux turquoise récompensent les efforts des cyclistes par un cadre idyllique propice à la détente. Le trajet est accessible à partir d'un niveau intermédiaire et se réalise idéalement tôt le matin pour profiter de la fraîcheur et éviter les heures de forte chaleur.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/ouidah-1.png')}}" class="img-fluid" alt="Route des Pêches entre Cotonou et Ouidah bordée de cocotiers">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/ouidah-2.png')}}" class="img-fluid" alt="Plage sauvage de Ouidah avec vue sur l'océan Atlantique">
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
