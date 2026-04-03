@extends('frontend.main_master')

@section('title') Mur du Patrimoine – Cotonou, OREKA Mobility @endsection

@section('description') Découvrez le Mur du Patrimoine de Cotonou, fresque monumentale qui retrace l'âme et l'histoire du Bénin. Réservez un vélo et partez à la rencontre de ce musée à ciel ouvert. @endsection

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
    <div class="blogbanner" style="background-image: url('{{ asset('assets/img/profiles/mur.jpg')}}'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Mur du Patrimoine – L'histoire du Bénin en fresques</h1>
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
                <p>Le Mur du Patrimoine est l'une des œuvres urbaines les plus saisissantes de Cotonou. Cette immense fresque murale déploie sur des dizaines de mètres une galerie vivante de l'histoire, de la culture et des traditions du Bénin. Royaumes du Dahomey, cérémonies vodoun, figures héroïques, scènes de vie quotidienne ancestrale — tout y est représenté avec une richesse de détails et une force artistique qui en font un véritable musée à ciel ouvert, accessible à tous, au cœur de la ville.</p>
                <p>Longeant ce mur à vélo, on prend le temps de s'arrêter devant chaque panneau, de décrypter les symboles, de laisser les images raconter ce que les livres d'histoire peinent parfois à transmettre. Les artistes béninois qui ont réalisé cette œuvre collective ont su capturer l'essence d'un peuple fier de ses racines. Chaque matin, des habitants du quartier s'y retrouvent, des écoliers viennent en visite guidée, et des photographes du monde entier tentent de capturer la beauté de ces fresques baignées de lumière tropicale.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="{{ asset('assets/img/blogquote.svg')}}" alt="quotes">
                <p>Longer le Mur du Patrimoine à vélo, c'est traverser des siècles d'histoire béninoise en quelques minutes. Chaque fresque est une fenêtre ouverte sur une civilisation d'une profondeur rare. C'est le genre d'endroit qui vous oblige à poser le vélo et à rester là, simplement, à regarder et à ressentir.</p>
                <h6>Rodrigue Hounsou – Guide culturel et cycliste</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le Mur du Patrimoine s'intègre parfaitement dans le circuit culturel à vélo du centre de Cotonou. Depuis la Place Bio Guerra, il est accessible en une dizaine de minutes à peine, ce qui en fait une étape naturelle dans un parcours urbain qui associe histoire, art et découverte de la ville. Le circuit complet incluant le Mur du Patrimoine, la Place Bio Guerra et le bord de lagune couvre environ 10 kilomètres et peut se réaliser en deux heures, avec les pauses contemplatives devant les fresques. Une étape idéale aussi bien pour les passionnés d'art et d'histoire que pour les familles souhaitant initier les enfants à la culture béninoise de façon vivante et ludique.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/murb.jpg')}}" class="img-fluid" alt="Fresques du Mur du Patrimoine de Cotonou">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="{{ asset('assets/img/profiles/murbenin.jpg')}}" class="img-fluid" alt="Détail artistique du Mur du Patrimoine Bénin">
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
