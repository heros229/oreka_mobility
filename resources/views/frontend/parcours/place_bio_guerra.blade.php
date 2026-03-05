@extends('frontend.main_master')

@section('title') Place Bio Guerra – Cotonou, Bénin @endsection

@section('description') Découvrez la Place Bio Guerra, cœur battant de Cotonou. Réservez un vélo et explorez ce lieu iconique du Bénin. @endsection

@section('content')

    <!-- Breadscrumb Section -->
    <div class="blogbanner" style="background-image: url('assets/img/profiles/bio-guera.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Place Bio Guerra – Le cœur vivant de Cotonou</h1>
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
                <p>Nichée au cœur de Cotonou, la capitale économique du Bénin, la Place Bio Guerra est bien plus qu'un simple carrefour urbain. C'est un symbole de vie, d'échanges et d'authenticité béninoise. Nommée en hommage à un notable historique de la région, cette place anime le quartier commercial central et reste l'un des repères les plus connus des habitants comme des visiteurs. Entourée de marchés colorés, de restaurants de rue proposant des spécialités locales comme l'akassa ou le tchigan, et de boutiques artisanales, la Place Bio Guerra offre une immersion totale dans la culture urbaine béninoise.</p>
                <p>Le matin, l'air y est chargé des effluves d'épices et des cris des commerçants qui s'installent. À vélo, la découverte de la place prend une toute autre dimension : vous pouvez slalomer librement entre les étals du Grand Marché Dantokpa tout proche, rejoindre le bord de la lagune de Cotonou en quelques minutes, ou longer les artères animées vers le quartier Haie Vive. Le soir, la place s'illumine et se transforme en scène de vie sociale où se croisent familles, commerçants et touristes. Que vous soyez passionné de culture, amateur de street food ou simplement en quête de sensations urbaines authentiques, la Place Bio Guerra et ses environs vous offriront des souvenirs inoubliables.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="assets/img/blogquote.svg" alt="quotes">
                <p>Pédaler sur les rues qui bordent la Place Bio Guerra, c'est toucher l'âme de Cotonou. Chaque coup de pédale vous rapproche d'une ville généreuse, chaotique et magnifique à la fois. Le vélo est sans doute la meilleure façon de vivre ce lieu unique au rythme des Cotonois.</p>
                <h6>Aminata Kossou – Cycliste voyageuse</h6>
            </blockquote>
            <div class="blog-description">
                <p>La Place Bio Guerra se trouve dans le quartier Gbèdjromèdé, à deux pas du célèbre marché Dantokpa, le plus grand marché en plein air d'Afrique de l'Ouest. Le circuit à vélo recommandé depuis la place couvre environ 8 kilomètres : place Bio Guerra, bord de lagune, marché Dantokpa, puis retour. Ce parcours peut se faire en une heure trente à deux heures selon vos arrêts, avec un vélo fourni avec casque et antivol inclus. La meilleure période pour cette balade est la saison sèche, de novembre à février, pour profiter pleinement de la douceur du climat béninois et d'un ciel dégagé sur toute la ville.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/Statut-Bio-Guera-4.jpg" class="img-fluid" alt="Marché animé près de la Place Bio Guerra">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/R.jpg" class="img-fluid" alt="La lagune de Cotonou à vélo depuis la Place Bio Guerra">
                    </div>
                </div>
            </div>
           
            <div class="blogdetails-pagination">
                <ul style="justify-content: flex-end;">
                    <li style="text-align: right;">
                        <a href="{{ route('sofitel') }}" class="next-link">Next Post <i class="fas fa-regular fa-arrow-right"></i> </a>
                        <a href="{{ route('sofitel') }}"><h3>Hôtel Sofitel Marina Cotonou</h3> </a>
                    </li>
                </ul>
            </div>
            <div class="review-sec mb-0">
                <div class="review-header">
                    <h4>Reviews<span>(3)</span></h4>
                    <div class="reviewbox-list-rating">
                        <p>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star filled"></i>
                            <i class="fas fa-star half-filled"></i>
                            <i class="fas fa-star empty"></i>
                            <span> (3.8 out of 5)</span>
                        </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-09.jpg" class="img-fluid" alt="Aminata">
                            </span>
                            <div class="review-design">
                                <h6>Aminata K.</h6>
                                <p>15 Jan 2025</p>
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
                    <p>Une expérience inoubliable ! J'ai loué un vélo pour découvrir la Place Bio Guerra et ses alentours. L'atmosphère du marché, les zémidjans qui klaxonnent, les odeurs de cuisine de rue… tout cela à vélo, c'est magique. Je recommande à 100 % la balade jusqu'à la lagune en fin d'après-midi.</p>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-08.jpg" class="img-fluid" alt="Luca">
                            </span>
                            <div class="review-design">
                                <h6>Luca M.</h6>
                                <p>03 Dec 2024</p>
                            </div>
                        </div>
                        <div class="reviewbox-list-rating">
                            <p>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star half-filled"></i>
                                <i class="fas fa-star empty"></i>
                                <span> (3.5 out of 5)</span>
                            </p>
                        </div>
                    </div>
                    <p>Mon premier jour à Cotonou à vélo depuis la Place Bio Guerra — fantastique ! La place est chaotique et magnifique à la fois. Le personnel de l'agence m'a donné d'excellents conseils d'itinéraire, le casque était inclus ce qui m'a beaucoup rassuré. Une découverte à ne absolument pas manquer.</p>
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