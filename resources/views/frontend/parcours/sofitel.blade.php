@extends('frontend.main_master')

@section('title') Hôtel Sofitel Marina Cotonou – Bénin @endsection

@section('description') Découvrez le Sofitel Marina Cotonou, joyau de l'hospitalité au bord de l'Atlantique. Réservez un vélo et explorez Cotonou depuis cet hôtel iconique. @endsection

@section('content')

    <!-- Breadscrumb Section -->
    <div class="blogbanner" style="background-image: url('assets/img/profiles/sofitel.jpg'); background-size: cover; background-position: center;">
        <div class="blogbanner-content">
            <span class="blog-hint">Destination</span>
            <h1>Sofitel Marina Cotonou – L'élégance face à l'Atlantique</h1>
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
                <p>Perché en bordure de l'océan Atlantique, le Sofitel Marina Cotonou est sans conteste l'adresse la plus prestigieuse de la capitale économique du Bénin. Avec ses 193 chambres et suites offrant des vues imprenables sur l'océan, cet établissement cinq étoiles mêle avec élégance le luxe international et l'art de vivre béninois. Inauguré en 2012, il s'est rapidement imposé comme le symbole de la modernité de Cotonou, accueillant aussi bien les grands événements diplomatiques que les voyageurs en quête d'une expérience haut de gamme sur la côte ouest-africaine.</p>
                <p>Partir à vélo depuis le Sofitel Marina, c'est s'offrir une aventure unique entre deux mondes. En quelques coups de pédales, vous quittez l'univers feutré du palace pour plonger dans l'effervescence authentique de Cotonou : le front de mer animé, les artères commerçantes de Haie Vive, les marchés colorés et les terrasses de street food qui jalonnent le boulevard de la Marina. Le contraste est saisissant, et c'est précisément ce qui rend cette balade inoubliable.</p>
            </div>
            <blockquote class="blog-quotes">
                <img src="assets/img/blogquote.svg" alt="quotes">
                <p>Quitter le Sofitel à l'aube, vélo en main, et longer l'océan Atlantique jusqu'au marché du Port — c'est l'un des plus beaux réveils que l'Afrique de l'Ouest puisse offrir. La brise marine, les pêcheurs qui rentrent, la ville qui s'éveille doucement… une magie que seul le vélo permet de ressentir pleinement.</p>
                <h6>Olivier Marchand – Voyageur & cycliste</h6>
            </blockquote>
            <div class="blog-description">
                <p>Le Sofitel Marina se situe sur le boulevard de la Marina, dans le quartier résidentiel et diplomatique de Cotonou, à environ 15 minutes du centre-ville. Le circuit à vélo depuis l'hôtel longe le front de mer sur près de 10 kilomètres, permettant de rejoindre la Place de l'Étoile Rouge, le Palais des Congrès, puis de remonter vers le quartier des Ambassades avant de rentrer le long de la lagune. Une balade accessible à tous les niveaux, à réaliser de préférence tôt le matin pour profiter de la fraîcheur de l'océan et éviter la circulation dense de la journée.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/so-R.jpg" class="img-fluid" alt="Piscine du Sofitel Marina Cotonou face à l'Atlantique">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bloginner-img">
                        <img src="assets/img/profiles/Sofi-R.jpg" class="img-fluid" alt="Vue sur l'océan Atlantique depuis le Sofitel Marina Cotonou">
                    </div>
                </div>
            </div>
           
            <div class="blogdetails-pagination">
                <ul>
                    <li>
                        <a href="{{ route('guerra') }}" class="prev-link"><i class="fas fa-regular fa-arrow-left"></i> Previous Post</a>
                        <a href="{{ route('guerra') }}"><h3>Place Bio Guerra – Le cœur vivant de Cotonou</h3></a>
                    </li>
                     <li >
                        <a href="{{ route('devoue') }}" class="next-link">Next Post <i class="fas fa-regular fa-arrow-right"></i> </a>
                        <a href="{{ route('devoue') }}"><h3>Monument aux dévoués</h3> </a>
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
                            <span> (4.7 out of 5)</span>
                        </p>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-05.jpg" class="img-fluid" alt="Olivier">
                            </span>
                            <div class="review-design">
                                <h6>Olivier M.</h6>
                                <p>10 Fév 2025</p>
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
                    <p>Partir à vélo depuis le Sofitel au lever du soleil sur l'Atlantique, c'est une expérience que je n'oublierai jamais. Le personnel de l'agence avait déposé le vélo directement devant l'hôtel, le casque et la carte du circuit inclus. La balade le long du front de mer jusqu'au marché du Port est absolument magnifique.</p>
                </div>
                <div class="review-card">
                    <div class="review-header-group">
                        <div class="review-widget-header">
                            <span class="review-widget-img">
                                <img src="assets/img/profiles/avatar-06.jpg" class="img-fluid" alt="Nadia">
                            </span>
                            <div class="review-design">
                                <h6>Nadia S.</h6>
                                <p>28 Jan 2025</p>
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
                    <p>En séjour professionnel au Sofitel, j'ai profité d'une matinée libre pour louer un vélo. La balade vers le quartier des Ambassades et le retour par la lagune était superbe. Un vrai bol d'air avant une journée de réunions. Je retire une étoile car le circuit longeant le boulevard principal peut être chargé en circulation après 8h.</p>
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