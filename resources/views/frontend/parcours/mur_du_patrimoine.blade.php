@extends('frontend.main_master')

@section('title') Mur du Patrimoine – Cotonou, Bénin @endsection

@section('description') Découvrez le Mur du Patrimoine de Cotonou, fresque monumentale qui retrace l'âme et l'histoire du Bénin. Réservez un vélo et partez à la rencontre de ce musée à ciel ouvert. @endsection

@section('content')

    <!-- Breadscrumb Section -->
    <div class="blogbanner" style="background-image: url('assets/img/profiles/mur.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Mur du Patrimoine – L'histoire du Bénin en fresques</h1>
            <ul class="entry-meta meta-item justify-content-center">
                <li>
                    <div class="post-author">
                        <div class="post-author-img">
                            <img src="assets/img/profiles/avatar-01.jpg" alt="author">
                        </div>
                        <a href="javascript:void(0)"><span> Équipe TourBénin </span></a>
                    </div>
                </li>
                <li class="date-icon"><i class="fa-solid fa-calendar-days"></i> Mars 2025</li>
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
                <img src="assets/img/blogquote.svg" alt="quotes">
                <p>Longer le Mur du Patrimoine à vélo, c'est traverser des siècles d'histoire béninoise en quelques minutes. Chaque fresque est une fenêtre ouverte sur une civilisation d'une profondeur rare. C'est le genre d'endroit qui vous oblige à poser le vélo et à rester là, simplement, à regarder et à ressentir.</p>
                <h6>Rodrigue Hounsou – Guide culturel et cycliste</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le Mur du Patrimoine s'intègre parfaitement dans le circuit culturel à vélo du centre de Cotonou. Depuis la Place Bio Guerra, il est accessible en une dizaine de minutes à peine, ce qui en fait une étape naturelle dans un parcours urbain qui associe histoire, art et découverte de la ville. Le circuit complet incluant le Mur du Patrimoine, la Place Bio Guerra et le bord de lagune couvre environ 10 kilomètres et peut se réaliser en deux heures, avec les pauses contemplatives devant les fresques. Une étape idéale aussi bien pour les passionnés d'art et d'histoire que pour les familles souhaitant initier les enfants à la culture béninoise de façon vivante et ludique.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/murb.jpg" class="img-fluid" alt="Fresques du Mur du Patrimoine de Cotonou">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/murbenin.jpg" class="img-fluid" alt="Détail artistique du Mur du Patrimoine Bénin">
                    </div>
                </div>
            </div>
      
            <div class="blogdetails-pagination">
                <ul>
                    <li>
                        <a href="{{ route('peche') }}" class="prev-link"><i class="fas fa-regular fa-arrow-left"></i> Previous Post</a>
                        <a href="{{ route('peche') }}"><h3>Route des Pêches – Entre océan et lagune, le Bénin sauvage</h3></a>
                    </li>
                </ul>
            </div>
            <div class="review-sec mb-0">
                <div class="review-header">
                    <h4>Reviews<span>(2)</span></h4>
                    <div class="reviewbox-list-rating">
                        <p>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star half-filled"></i>
                            <span> (4.6 out of 5)</span>
                        </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-05.jpg" class="img-fluid" alt="Rodrigue">
                            </span>
                            <div class="review-design">
                                <h6>Rodrigue H.</h6>
                                <p>08 Mars 2025</p>
                            </div>
                        </div>
                        <div class="reviewbox-list-rating">
                            <p>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <span> (5 out of 5)</span>
                            </p>
                        </div>
                    </div>
                    <p>En tant que guide culturel, j'emmène régulièrement mes visiteurs devant ce mur. À vélo, c'est encore plus beau — on arrive doucement, on s'arrête librement, on repart à son rythme. Les fresques sont d'une qualité artistique remarquable et les touristes étrangers sont toujours impressionnés. Un incontournable de Cotonou.</p>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-03.jpg" class="img-fluid" alt="Sophie">
                            </span>
                            <div class="review-design">
                                <h6>Sophie T.</h6>
                                <p>14 Fév 2025</p>
                            </div>
                        </div>
                        <div class="reviewbox-list-rating">
                            <p>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star empty"></i>
                                <span> (4 out of 5)</span>
                            </p>
                        </div>
                    </div>
                    <p>Une belle surprise lors de mon circuit à vélo dans Cotonou. Les fresques sont colorées, expressives et racontent vraiment quelque chose. J'aurais aimé trouver des cartels explicatifs en plusieurs langues pour mieux comprendre chaque scène représentée, mais les habitants du quartier sont très accueillants et ravis de vous expliquer les symboles. Une étape à ne pas manquer.</p>
                </div>
            </div>

            <div class="card-body text-center" style="padding: 40px 0;">
                <a href="{{ route('reservation_step_1') }}" class="btn btn-primary submit-review">
                    <i class="fa-solid fa-calendar-check"></i> Réserver maintenant
                </a>
            </div>
        </div>
    </div>
    <!-- /Blog Grid-->

@endsection