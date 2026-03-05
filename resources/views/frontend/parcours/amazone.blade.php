@extends('frontend.main_master')

@section('title') Place des Amazones – Abomey-Calavi, Bénin @endsection

@section('description') Découvrez la Place des Amazones, hommage aux légendaires guerrières du Dahomey. Réservez un vélo et plongez dans l'histoire du Bénin. @endsection

@section('content')

    <!-- Breadscrumb Section -->
    <div class="blogbanner" style="background-image: url('assets/img/profiles/place-des-amazones.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Place des Amazones – L'héritage des guerrières du Dahomey</h1>
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
                <p>La Place des Amazones rend hommage aux légendaires Agojié, les guerrières d'élite du royaume du Dahomey qui firent trembler les armées coloniales au XIXe siècle. Ces femmes soldats, recrutées dès leur plus jeune âge au service du roi d'Abomey, étaient réputées pour leur courage sans faille, leur discipline de fer et leur redoutable efficacité au combat. Craintes de leurs ennemis et vénérées de leur peuple, les Amazones du Dahomey sont aujourd'hui un symbole universel de force féminine et de résistance africaine, portées à la connaissance du monde entier notamment grâce au film Black Panther : Wakanda Forever.</p>
                <p>Pédaler jusqu'à la Place des Amazones, c'est retracer à sa propre cadence un fragment de cette histoire épique. La place, ornée de sculptures évocatrices représentant ces guerrières en position de combat, constitue l'une des haltes les plus impressionnantes du circuit culturel à vélo que nous proposons entre Cotonou et Abomey-Calavi. Autour d'elle, le quartier déploie une atmosphère chargée d'histoire, avec ses artisans, ses conteurs et ses habitants fiers de cet héritage hors du commun.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="assets/img/blogquote.svg" alt="quotes">
                <p>Arriver à vélo devant les sculptures des Amazones, c'est recevoir un choc d'histoire en pleine poitrine. Ces femmes ont tout affronté. S'en souvenir ici, au Bénin, sur leur terre, est un privilège que le voyage à vélo rend encore plus intime et puissant.</p>
                <h6>Mariama Diallo – Historienne et voyageuse</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le circuit à vélo depuis Cotonou vers la Place des Amazones couvre environ 12 kilomètres, en longeant la route de l'Aéroport avant de traverser les quartiers résidentiels d'Abomey-Calavi. Le parcours peut se faire en deux heures environ, avec des arrêts recommandés aux fresques murales qui jalonnent le trajet et racontent l'épopée des Agojié. Pour aller plus loin dans la découverte, il est possible de prolonger la balade jusqu'au Palais Royal d'Abomey, inscrit au patrimoine mondial de l'UNESCO, situé à une heure de route supplémentaire. Un voyage dans le temps à ne manquer sous aucun prétexte.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/amazone.jpg" class="img-fluid" alt="Sculpture des Amazones du Dahomey au Bénin">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/monument-amazone.jpg" class="img-fluid" alt="Fresque murale Amazones du Dahomey Bénin">
                    </div>
                </div>
            </div>
          
            <div class="blogdetails-pagination">
               <ul>
                    <li>
                        <a href="{{ route('devoue') }}" class="prev-link"><i class="fas fa-regular fa-arrow-left"></i> Previous Post</a>
                        <a href="{{ route('devoue') }}"><h3>Monument aux Dévoués – Cotonou</h3></a>
                    </li>
                     <li >
                        <a href="{{ route('peche') }}" class="next-link">Next Post <i class="fas fa-regular fa-arrow-right"></i> </a>
                        <a href="{{ route('peche') }}"><h3>Route des Pèches</h3> </a>
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
                            <span> (4.5 out of 5)</span>
                        </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-04.jpg" class="img-fluid" alt="Mariama">
                            </span>
                            <div class="review-design">
                                <h6>Mariama D.</h6>
                                <p>18 Fév 2025</p>
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
                    <p>Un circuit à vélo chargé d'histoire et d'émotion. Les sculptures de la Place des Amazones sont impressionnantes, et les habitants du quartier sont fiers de vous en raconter l'histoire. J'ai prolongé la balade jusqu'aux fresques murales — un vrai musée à ciel ouvert. Expérience inoubliable, je recommande vivement.</p>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-10.jpg" class="img-fluid" alt="Kofi">
                            </span>
                            <div class="review-design">
                                <h6>Kofi A.</h6>
                                <p>30 Jan 2025</p>
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
                    <p>Très belle découverte culturelle. Le trajet depuis Cotonou à vélo est agréable, même si les 12 kilomètres demandent une bonne condition physique sous la chaleur béninoise. Prévoyez de partir tôt le matin. La place en elle-même vaut vraiment le déplacement — une puissance symbolique rare.</p>
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