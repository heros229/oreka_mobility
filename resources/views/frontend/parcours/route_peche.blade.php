@extends('frontend.main_master')

@section('title') Route des Pêches – Bénin @endsection

@section('description') Découvrez la Route des Pêches, cordon littoral sauvage entre océan et lagune. Réservez un vélo et vivez l'une des plus belles balades côtières d'Afrique de l'Ouest. @endsection

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
    <div class="blogbanner" style="background-image: url('assets/img/profiles/route.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Route des Pêches – Entre océan et lagune, le Bénin sauvage</h1>
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
                <p>La Route des Pêches est sans doute l'une des plus belles pistes cyclables naturelles d'Afrique de l'Ouest. Ce cordon littoral d'une soixantaine de kilomètres s'étire depuis Cotonou jusqu'à Grand-Popo, coincé entre les eaux tumultueuses de l'océan Atlantique d'un côté et la sérénité des lagunes côtières de l'autre. Ici, pas d'immeubles ni de trafic urbain — seulement des cocotiers qui se courbent sous la brise marine, des pirogues de pêcheurs qui glissent sur l'eau calme, des villages aux couleurs vives et un horizon infini où ciel et mer se confondent.</p>
                <p>À vélo, la Route des Pêches révèle toute sa splendeur. Chaque coup de pédale vous rapproche d'un Bénin authentique et préservé, loin de l'agitation de Cotonou. On croise les filets qui sèchent au soleil, les enfants qui jouent sur la plage, les femmes qui rentrent du marché avec leur chargement en équilibre sur la tête. Les villages de pêcheurs comme Avlékété, Agatogbo ou Ouidah-Plage jalonnent le parcours et invitent à la pause, à la dégustation de poisson grillé frais sorti de l'océan, et à la conversation avec des habitants d'une générosité remarquable.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="assets/img/blogquote.svg" alt="quotes">
                <p>Pédaler sur la Route des Pêches au lever du soleil, avec l'Atlantique qui gronde à quelques mètres et la lagune qui miroite de l'autre côté — c'est l'une des expériences les plus pures que j'aie jamais vécues à vélo. Le Bénin m'a offert ce matin-là quelque chose d'inoubliable.</p>
                <h6>Théodore Kpakpo – Cycliste et globe-trotteur</h6>
            </blockquote>
            <div class="blog-description">
                <p>Nous proposons deux formules pour explorer la Route des Pêches à vélo. La première, sur une demi-journée, couvre les 25 premiers kilomètres depuis l'entrée de la route jusqu'au village d'Avlékété, avec retour par le même chemin au coucher du soleil. La seconde, sur une journée complète, permet d'atteindre Ouidah-Plage et ses alentours chargés d'histoire — la Porte du Non-Retour se trouvant à quelques kilomètres seulement. Dans les deux cas, le départ se fait tôt le matin pour profiter de la fraîcheur et éviter la chaleur de l'après-midi. Chaque vélo est livré avec un kit complet : casque, antivol, bidon d'eau et carte du parcours.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/velo.jpg" class="img-fluid" alt="Océan Atlantique sur la Route des Pêches au Bénin">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/route-peches-lagune.jpg" class="img-fluid" alt="Lagune côtière sur la Route des Pêches Bénin">
                    </div>
                </div>
            </div>
           
            <div class="blogdetails-pagination">
                <ul>
                    <li>
                        <a href="{{ route('amazone') }}" class="prev-link"><i class="fas fa-regular fa-arrow-left"></i> Previous Post</a>
                        <a href="{{ route('amazone') }}"><h3>Place des Amazones – L'héritage des guerrières du Dahomey</h3></a>
                    </li>
                    <li >
                        <a href="{{ route('patrimoine') }}" class="next-link">Next Post <i class="fas fa-regular fa-arrow-right"></i> </a>
                        <a href="{{ route('patrimoine') }}"><h3>Mur du patrimoine</h3> </a>
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
                            <i class="fas fa-star filled"></i>
                            <span> (4.9 out of 5)</span>
                        </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-08.jpg" class="img-fluid" alt="Théodore">
                            </span>
                            <div class="review-design">
                                <h6>Théodore K.</h6>
                                <p>12 Fév 2025</p>
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
                    <p>La plus belle balade à vélo de ma vie, sans hésitation. L'océan à droite, la lagune à gauche, les cocotiers au-dessus et le sable sous les roues — un décor de carte postale qui dure des kilomètres. Le poisson grillé à Avlékété en milieu de parcours était la cerise sur le gâteau. Merci pour ce circuit exceptionnel.</p>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-09.jpg" class="img-fluid" alt="Claire">
                            </span>
                            <div class="review-design">
                                <h6>Claire B.</h6>
                                <p>25 Jan 2025</p>
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
                    <p>Je suis venue au Bénin sans savoir à quoi m'attendre, et la Route des Pêches a été la révélation de mon séjour. Le circuit journée complète jusqu'à Ouidah-Plage était parfaitement organisé. Le vélo était en excellent état, et la carte fournie très précise. Un moment de liberté absolue entre ciel, eau et nature.</p>
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