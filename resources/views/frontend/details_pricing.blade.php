@extends('frontend.main_master')

@php
    $seoData = [
        'velo-sport' => [
            'title' => 'Vélo Sport à Cotonou | Séances Encadrées avec Coach | Oreka Mobility',
            'desc'  => 'Rejoignez nos séances de Vélo Sport encadrées par un coach professionnel à Cotonou. 3 000 F / séance, 10 places disponibles. Réservez en ligne !',
        ],
        'randonnee' => [
            'title' => 'Randonnée à Vélo à Cotonou | Circuits 30–43 km | Oreka Mobility',
            'desc'  => 'Partez en randonnée vélo sur des circuits de 30 à 43 km autour de Cotonou. 6 000 F adulte, 3 000 F enfant. Superviseur et équipement inclus.',
        ],
        'tourisme' => [
            'title' => 'Vélo Tourisme | Visite Guidée Cotonou · Ouidah · Porto-Novo | Oreka Mobility',
            'desc'  => 'Découvrez le Bénin à vélo avec nos visites guidées. 30 000 F / inscription, repas local inclus, guide professionnel. 10 places seulement !',
        ],
        'apprentissage' => [
            'title' => 'Apprentissage du Vélo à Cotonou | Adulte & Enfant | Oreka Mobility',
            'desc'  => 'Apprenez à faire du vélo avec nos moniteurs diplômés. Vélo École Adulte 15 000 F, Kids dès 2 ans et demi 10 000 F. 3 séances incluses.',
        ],
    ];

    $currentSeo = $seoData[$plan] ?? $seoData['velo-sport'];
@endphp

@section('title') {{ $currentSeo['title'] }} @endsection
@section('description') {{ $currentSeo['desc'] }} @endsection

@push('links')

<link rel="stylesheet" href="{{ asset('assets/css/details_pricing.css')}}">
@endpush

@push('links')

    <style>

        .hero-sec-main .header-two {
            background: #0A152F;
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

        input.form-control, textarea.form-control {
            transition: border 0.3s ease;
        }

    </style>

@endpush



@section('content')

    {{-- ============================
        HERO
        ============================ --}}

   {{-- <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <h2 id="hero-title" class="breadcrumb-title">Contactez-nous</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class=""><a href="{{ route('accueil') }}">Accueil</a></li> <span style="color: white">&nbsp; /&nbsp; </span>
                            <li class="breadcrumb-item active" aria-current="page">Contactez-nous</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->--}}

    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <div class="plan-hero" id="plan-hero">

                        <div class="plan-hero__content">
                            <div class="plan-badge"><i class="fa-solid fa-bicycle"></i> <span id="hero-badge">OREKA Mobility</span></div>
                            <h1 id="hero-title">Titre du Plan</h1>
                            <div class="plan-hero__meta" style="text-align: center">
                                <span><i class="fa-regular fa-clock"></i> <span id="hero-duree">—</span></span>
                                <span><i class="fa-solid fa-users"></i> <span id="hero-places">—</span></span>
                                <span><i class="fa-solid fa-map-pin"></i> Cotonou, Bénin</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->

    <div class="d-none">
        <div class="plan-hero " id="plan-hero">
            <div class="plan-hero__bg" id="hero-bg"></div>
        </div>
    </div>



   {{--<div class="plan-sticky-bar">
        <div class="container">
            <div class="plan-sticky-bar__price" id="sticky-price">— <span>/ séance</span></div>
            <a href="javascript:void(0)"
            onclick="goToReservation()"
            class="btn-reserve-main">
                <i class="fa-solid fa-calendar-check"></i> Réserver maintenant
            </a>
        </div>
    </div>--}}

    {{-- ============================
        MAIN CONTENT
        ============================ --}}
    <div class="plan-detail-wrap">
        <div class="container">
            <div class="row">
                {{-- LEFT COL --}}
                <div class="col-lg-8">

                    {{-- GALERIE --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title"><i class="fa-regular fa-images" ></i> Galerie Photos</h4>

                        <div class="detail-product">
                            {{-- <div class="gallery-skeleton" id="gallery-skeleton"></div> --}}
                            <div class="slider detail-bigimg" id="plan-slider-main"></div>
                            <div class="slider slider-nav-thumbnails" id="plan-slider-thumbs"></div>
                        </div>
                        <p class="gallery-hint" id="gallery-hint" style="display:none;">
                            <i class="fa-regular fa-hand-pointer"></i> Cliquez sur une image pour l'agrandir
                        </p>
                    </div>



                    {{-- DESCRIPTION --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title"><i class="fa-regular fa-file-lines" style="color:var(--plan-color)"></i> Description</h4>
                        <p id="plan-desc-1" style="line-height:1.8;color:#444;margin-bottom:14px;"></p>
                        <p id="plan-desc-2" style="line-height:1.8;color:#444;margin-bottom:20px;"></p>
                        <a href="javascript:void(0)"
                        onclick="goToReservation()"
                        class="btn-reserve-main" style="width:fit-content;">
                            <i class="fa-solid fa-calendar-check"></i> Réserver ce plan
                        </a>
                    </div>

                    {{-- AVANTAGES --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title"><i class="fa-solid fa-gift" style="color:var(--plan-color)"></i> Ce qui est inclus</h4>
                        <div class="avantages-grid" id="plan-avantages"></div>
                    </div>

                    {{-- INFOS PRATIQUES --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title"><i class="fa-solid fa-circle-info" style="color:var(--plan-color)"></i> Infos pratiques</h4>
                        <div class="info-cards" id="plan-infos"></div>
                    </div>

                    {{-- VIDÉO --}}
                    <div class="plan-section d-none">
                        <h4 class="plan-section__title"><i class="fa-solid fa-play" style="color:var(--plan-color)"></i> Vidéo</h4>
                        <div class="plan-video-wrap">
                            <img id="plan-video-thumb" src="" alt="Aperçu vidéo">
                            <a class="plan-video-play" id="plan-video-link" href="#" data-fancybox="video">
                                <i class="bx bx-play"></i>
                            </a>
                        </div>
                        <p class="video-caption" id="plan-video-caption"></p>
                    </div>

                    {{-- FAQ --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title"><i class="fa-regular fa-circle-question" style="color:var(--plan-color)"></i> Questions fréquentes</h4>
                        <div id="plan-faq"></div>
                    </div>

                </div>

                {{-- SIDEBAR --}}
                <div class="col-lg-4">
                    <div class="sidebar-booking">
                        <div class="sidebar-price" id="sidebar-price">— <span>/ séance</span></div>
                        <div style="font-size:13px;color:var(--oreka-muted);margin-top:2px;" id="sidebar-price-note"></div>
                        <hr class="sidebar-divider">
                        <div id="sidebar-features"></div>
                        <hr class="sidebar-divider">
                        <a href="javascript:void(0)"
                        onclick="goToReservation()"
                        class="btn-reserve-sidebar">
                            <i class="fa-solid fa-calendar-check"></i> &nbsp; Réserver maintenant
                        </a>
                        <a href="{{ route('contact') }}" class="btn-enquire-sidebar" >
                            <i class="fa-regular fa-envelope"></i> &nbsp; Nous contacter
                        </a>
                        <p class="sidebar-guarantee">
                            <i class="fa-solid fa-shield-halved" style="color:var(--plan-color)"></i>
                            Paiement sécurisé · Confirmation instantanée
                        </p>
                    </div>

                    {{-- INFOS CONTACT --}}
                    <div class="plan-section" style="margin-top:24px;">
                        <h4 class="plan-section__title" style="font-size:17px;"><i class="fa-solid fa-headset" style="color:var(--plan-color)"></i> Besoin d'aide ?</h4>
                        <div style="font-size:14px;color:#444;line-height:2;">
                            <div><i class="fa-brands fa-whatsapp" style="color:#25D366;margin-right:8px;"></i><a href="https://wa.me/2290153096850" style="color:#444;">+229 015 309 6850</a></div>
                            <div><i class="fa-regular fa-envelope" style="color:var(--plan-color);margin-right:8px;"></i><a href="mailto:contact@orekamobility.com" style="color:#444;">contact@orekamobility.com</a></div>
                            <div><i class="fa-regular fa-clock" style="color:var(--plan-color);margin-right:8px;"></i>Lun–Sam : 8h–18h</div>
                        </div>
                    </div>

                    {{-- PARTAGE --}}
                    <div class="plan-section" style="margin-top:24px;">
                        <h4 class="plan-section__title" style="font-size:17px;"><i class="fa-solid fa-share-nodes" style="color:var(--plan-color)"></i> Partager</h4>
                        <div style="display:flex;gap:12px;">
                            <a href="#" onclick="shareOnFacebook()" style="width:40px;height:40px;border-radius:50%;background:#1877f2;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" onclick="shareOnWhatsApp()" style="width:40px;height:40px;border-radius:50%;background:#25D366;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#" onclick="shareOnTwitter()" style="width:40px;height:40px;border-radius:50%;background:#1da1f2;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" onclick="shareOnInstagram()" style="width:40px;height:40px;border-radius:50%;background:#e1306c;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PLANS SIMILAIRES --}}
            <div class="similar-plans">
                <h3>Vous aimerez aussi</h3>
                <div class="row" id="similar-plans-row"></div>
            </div>
        </div>
    </div>



    {{-- ============================
       STICKY BAR
       ============================ --}}
    <div class="plan-sticky-bar">
        <div class="container">
            <div class="plan-sticky-bar__price" id="sticky-price">— <span>/ séance</span></div>
            <a href="javascript:void(0)"
               onclick="goToReservation()"
               class="btn-reserve-main">
                <i class="fa-solid fa-calendar-check"></i> Réserver
            </a>
        </div>
    </div>



    {{-- ENQUIRY MODAL --}}
    <div class="modal new-modal fade enquire-mdl" id="enquiry" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Nous contacter</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form class="enquire-modal">
                        <div class="modal-form-group"><label>Nom</label><input type="text" class="form-control" placeholder="Votre nom"></div>
                        <div class="modal-form-group"><label>Email</label><input type="email" class="form-control" placeholder="votre@email.com"></div>
                        <div class="modal-form-group"><label>Téléphone</label><input type="text" class="form-control" placeholder="+229 ..."></div>
                        <div class="modal-form-group"><label>Message</label><textarea class="form-control" rows="4"></textarea></div>
                        <div class="modal-btn modal-btn-sm">
                            <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
<script>
    $(function() {

        // ============================================================
        // DONNÉES GALERIE
        // ============================================================
        const GALLERY_DATA = {
            'velo-sport': [
                '{{ asset("assets/img/cars/velo2.jpg") }}',
                '{{ asset("assets/img/cars/velo.png") }}',
                'https://images.unsplash.com/photo-1571068316344-75bc76f77890?w=1200&q=85',
                '{{ asset("assets/img/cars/velo-sport.webp") }}',
                '{{ asset("assets/img/cars/velo1.jpg") }}',
            ],
            'randonnee': [
                '{{ asset("assets/img/cars/randonee1.jpg") }}',
                '{{ asset("assets/img/cars/randonee.jpg") }}',
                '{{ asset("assets/img/cars/4.jpg") }}',
                '{{ asset("assets/img/cars/randonee3.jpg") }}',
                '{{ asset("assets/img/cars/randonee4.jpg") }}',
            ],
            'tourisme': [
                '{{ asset("assets/img/cars/11.png") }}',
                '{{ asset("assets/img/cars/tourisme.png") }}',
                '{{ asset("assets/img/cars/tourisme1.jpg") }}',
                '{{ asset("assets/img/cars/2.webp") }}',
            ],
            'apprentissage': [
                '{{ asset("assets/img/cars/apprentissage.jpg") }}',
                '{{ asset("assets/img/cars/velo-ecole.jpg") }}',
                '{{ asset("assets/img/cars/4.jpg") }}',
                'https://images.unsplash.com/photo-1541625602330-2277a4c46182?w=1200&q=85',
                '{{ asset("assets/img/cars/12.png") }}',
            ],
        };

        // ============================================================
        // DONNÉES PLANS
        // ============================================================
        const PLANS = {
            'velo-sport': {
                colorClass: 'plan-velo-sport',
                badge: 'Séance Sportive',
                title: 'Vélo Sport',
                duree: '1 heure / séance',
                places: '10 places maximum',
                prixLabel: '3 000 F CFA',
                prixNote: 'Abonnement mensuel : 12 000 F CFA',
                /*prixSuffix: '/ séance',*/
                prixSuffix: '', /*Ici c'est les infirmations qui restent au niveau u sticky je mets ici*/
                hero: '{{ asset("assets/img/cars/velo.png") }}',
                desc1: "Rejoignez notre séance de Vélo Sport chaque matin et transformez votre routine en véritable défi sportif. Encadrés par un coach professionnel certifié, vous travaillerez l'endurance, la cadence et la puissance dans une ambiance dynamique et motivante. Que vous soyez débutant ou sportif confirmé, chaque séance est adaptée à votre niveau.",
                desc2: "En groupe de 10 cyclistes maximum, l'émulation collective vous pousse à vous dépasser. Vélo, casque et bouteille d'eau vous sont fournis. Un échauffement, une session intensive et un retour au calme structurent chaque heure pour maximiser les bénéfices sans risque de blessure.",
                avantages: [
                    {icon:'fa-bicycle',        label:'Vélo de qualité'},
                    {icon:'fa-hard-hat',       label:'Casque homologué'},
                    {icon:'fa-bottle-water',   label:"Bouteille d'eau"},
                    {icon:'fa-person-running', label:'Coach professionnel'},
                    {icon:'fa-users',          label:'Groupe de 10 max'},
                    {icon:'fa-calendar-check', label:'Abonnement mensuel'},
                ],
                infos: [
                    {val:'1h',      lbl:'Durée'},
                    {val:'10',      lbl:'Places dispo'},
                    {val:'3 000F',  lbl:'Par séance'},
                ],
                videoThumb: '{{ asset("assets/img/cars/thumb_velo.png") }}',
                videoUrl:     'https://www.youtube.com/watch?v=XVkkuTwaXgY&list=RDXVkkuTwaXgY&start_radio=1',
                videoCaption: "Aperçu d'une séance de Vélo Sport OREKA — ambiance, coach et participants",
                faq: [
                    {q:"Dois-je apporter mon propre vélo ?",          a:"Non, tout le matériel est fourni par OREKA : vélo, casque et bouteille d'eau. Venez simplement en tenue sportive adaptée."},
                    {q:"Quel niveau sportif faut-il avoir ?",          a:"Les séances sont accessibles à tous les niveaux. Le coach adapte l'intensité à chaque participant. Débutants bienvenus !"},
                    {q:"Comment fonctionne l'abonnement mensuel ?",   a:"L'abonnement à 12 000 F CFA vous donne accès à toutes les séances du mois, soit une économie de 33% par rapport au tarif à la séance."},
                    {q:"Puis-je annuler ma réservation ?",             a:"Oui, l'annulation est possible jusqu'à 24h avant la séance. Contactez-nous par WhatsApp ou email."},
                ],
                reviews: [
                    {init:'K', name:'Kofi Mensah',  date:'15 Jan 2025', note:5, text:"Super expérience ! Le coach est très professionnel et motivant. J'ai adoré l'ambiance du groupe."},
                    {init:'A', name:'Aminata D.',   date:'3 Fév 2025',  note:5, text:"J'ai pris l'abonnement mensuel et je ne regrette pas du tout. Les vélos sont de bonne qualité."},
                    {init:'R', name:'Roland T.',    date:'20 Fév 2025', note:4, text:"Très bonne séance, bien encadrée. Parfait pour se remettre en forme après le boulot."},
                ],
                similar: ['randonnee','tourisme','apprentissage'],
            },

            'randonnee': {
                colorClass: 'plan-randonnee',
                badge: 'Aventure & Nature',
                title: 'Randonner à Vélo',
                duree: '3 heures',
                places: '10 places maximum',
                prixLabel: '6 000 F CFA',
                prixNote: 'Enfants 10–15 ans : 3 000 F CFA',
                /*prixSuffix: '/ adulte',*/
                prixSuffix: '', /*Ici c'est les infirmations qui restent au niveau u sticky je mets ici*/
                hero: '{{ asset("assets/img/cars/randonee.jpg") }}',
                desc1: "Partez pour une aventure à deux roues sur un circuit sécurisé de 30 à 43 km à travers les paysages splendides du Bénin. En famille, en couple ou entre amis, cette randonnée guidée vous emmène hors des sentiers battus, le long de paysages côtiers, de mangroves et de villages traditionnels.",
                desc2: "Un superviseur expérimenté vous accompagne tout au long du parcours pour assurer votre sécurité. Tout le matériel nécessaire est fourni : vélo adapté, casque, éclairage avant et arrière, antivol et pompe. Accessible dès 10 ans avec un tarif réduit enfant.",
                avantages: [
                    {icon:'fa-bicycle',     label:'Vélo adapté'},
                    {icon:'fa-hard-hat',    label:'Casque homologué'},
                    {icon:'fa-bottle-water',label:"Bouteille d'eau"},
                    {icon:'fa-user-shield', label:'Superviseur'},
                    {icon:'fa-lightbulb',   label:'Éclairage complet'},
                    {icon:'fa-lock',        label:'Antivol'},
                    {icon:'fa-circle-dot',  label:'Pompe incluse'},
                    {icon:'fa-child',       label:'Tarif enfant'},
                ],
                infos: [
                    {val:'3h',   lbl:'Durée'},
                    {val:'43km', lbl:'Distance max'},
                    {val:'10',   lbl:'Places dispo'},
                ],
                videoThumb:   '{{ asset("assets/img/cars/thumb_randonne.png") }}',
                videoUrl:     'https://www.youtube.com/watch?v=XVkkuTwaXgY&list=RDXVkkuTwaXgY&start_radio=1',
                videoCaption: 'Parcours à vélo le long des paysages du Bénin — une randonnée inoubliable',
                faq: [
                    {q:"Le circuit est-il adapté aux débutants ?",         a:"Oui ! Il n'y a pas de dénivelé important. Le superviseur adapte le rythme au groupe."},
                    {q:"À partir de quel âge peut-on participer ?",        a:"Les enfants à partir de 10 ans avec le tarif réduit (3 000 F CFA)."},
                    {q:"Que se passe-t-il en cas de météo défavorable ?",  a:"La randonnée est reportée. Vous êtes prévenus la veille par WhatsApp."},
                    {q:"Peut-on faire une randonnée en semaine ?",         a:"Principalement le week-end. Des dates spéciales pour les groupes sur demande."},
                ],
                reviews: [
                    {init:'M', name:'Mariame K.',   date:'8 Mars 2025',  note:5, text:"Une expérience incroyable en famille ! Les enfants ont adoré. Le paysage est magnifique."},
                    {init:'J', name:'Jean-Paul A.', date:'22 Fév 2025',  note:5, text:"Fait cette randonnée avec ma femme pour notre anniversaire. Circuit magnifique le long de la côte."},
                    {init:'F', name:'Fatoumata B.', date:'10 Jan 2025',  note:4, text:"Très belle randonnée, bien guidée. Le vélo fourni était de bonne qualité."},
                ],
                similar: ['velo-sport','tourisme','apprentissage'],
            },

            'tourisme': {
                colorClass: 'plan-tourisme',
                badge: 'Tourisme Premium',
                title: 'Vélo Tourisme',
                duree: '4 heures',
                places: '10 places maximum',
                prixLabel: '30 000 F CFA',
                prixNote: 'Repas gastronomique & guide inclus',
                /*prixSuffix: '/ inscription',*/
                prixSuffix: '', /*Ici c'est les infirmations qui restent au niveau u sticky je mets ici*/
                hero: '{{ asset("assets/img/cars/tourisme.png") }}',
                desc1: "Offrez-vous une immersion culturelle et gastronomique unique à travers Cotonou, Ouidah et Porto-Novo à bord de votre vélo. Accompagné d'un guide touristique professionnel, vous découvrirez les sites emblématiques et l'histoire fascinante du Bénin.",
                desc2: "Ce plan Premium inclut une pause gastronomique dans un restaurant partenaire sélectionné. Tout le matériel de qualité est fourni pour une expérience confortable et mémorable.",
                avantages: [
                    {icon:'fa-bicycle',         label:'Vélo premium'},
                    {icon:'fa-hard-hat',        label:'Casque'},
                    {icon:'fa-bottle-water',    label:"Bouteille d'eau"},
                    {icon:'fa-map-location-dot',label:'Guide touristique pro'},
                    {icon:'fa-lightbulb',       label:'Éclairage complet'},
                    {icon:'fa-lock',            label:'Antivol'},
                    {icon:'fa-circle-dot',      label:'Pompe incluse'},
                    {icon:'fa-utensils',        label:'Repas gastronomique'},
                ],
                infos: [
                    {val:'4h',      lbl:'Durée'},
                    {val:'3 villes',lbl:'Destinations'},
                    {val:'10',      lbl:'Places dispo'},
                ],
                videoThumb:   'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=900&q=80',
                videoUrl:     'https://www.youtube.com/watch?v=XVkkuTwaXgY&list=RDXVkkuTwaXgY&start_radio=1',
                videoCaption: 'Visite à vélo des sites historiques de Ouidah et Porto-Novo avec OREKA',
                faq: [
                    {q:"Quelles villes sont visitées ?",              a:"Cotonou, Ouidah (temples vaudou, route des esclaves) et Porto-Novo (palais royal, marchés)."},
                    {q:"Le repas est-il vraiment inclus ?",           a:"Oui, dans un restaurant partenaire sélectionné. La boisson peut être à la charge du participant."},
                    {q:"Est-ce adapté aux touristes étrangers ?",     a:"Absolument ! Nos guides parlent français et anglais."},
                    {q:"Comment se déroule la réservation ?",        a:"Réservez en ligne et payez via FedaPay. Confirmation par email avec tous les détails."},
                ],
                reviews: [
                    {init:'S', name:'Sophie L.',  date:'12 Mars 2025', note:5, text:"Une journée absolument magique ! Le guide était passionné. Le restaurant choisi était excellent."},
                    {init:'D', name:'David N.',   date:'28 Fév 2025',  note:5, text:"Venu au Bénin pour affaires, j'ai profité d'un week-end pour cette visite. Quelle découverte !"},
                    {init:'C', name:'Chantal A.', date:'5 Fév 2025',   note:5, text:"Le meilleur moyen de découvrir Porto-Novo. Le guide est cultivé et passionné."},
                ],
                similar: ['velo-sport','randonnee','apprentissage'],
            },

            'apprentissage': {
                colorClass: 'plan-apprentissage',
                badge: 'Vélo École',
                title: 'Apprentissage',
                duree: '1h30 adulte / 45min enfant',
                places: 'Cours individuel ou petit groupe',
                prixLabel: '10 000 F CFA',
                prixNote: 'Adultes : 15 000 F CFA — 3 séances incluses',
                /*prixSuffix: '/ enfant (3 séances)',*/
                prixSuffix: '', /*Ici c'est les infirmations qui restent au niveau u sticky je mets ici*/
                hero: '{{ asset("assets/img/cars/velo-ecole.jpg") }}',
                desc1: "Notre Vélo École OREKA vous accompagne pas à pas dans l'apprentissage du vélo, quel que soit votre âge. Pour les adultes, nos moniteurs diplômés utilisent une méthode pédagogique progressive. En 3 séances de 1h30, vous gagnez confiance et autonomie.",
                desc2: "Pour les enfants, notre programme est adapté dès 2 ans et demi. En cours individuel ou en petit groupe, nous apprenons aux plus jeunes à pédaler en sécurité et avec enthousiasme.",
                avantages: [
                    {icon:'fa-bicycle',         label:'Vélo adapté fourni'},
                    {icon:'fa-hard-hat',        label:'Casque de sécurité'},
                    {icon:'fa-chalkboard-user', label:'Moniteur diplômé'},
                    {icon:'fa-graduation-cap',  label:'Méthode progressive'},
                    {icon:'fa-child-reaching',  label:'Dès 2 ans et demi'},
                    {icon:'fa-people-group',    label:'Individuel ou groupe'},
                ],
                infos: [
                    {val:'3',    lbl:'Séances incluses'},
                    {val:'1h30', lbl:'Durée adulte'},
                    {val:'45min',lbl:'Durée enfant'},
                ],
                videoThumb:   '{{ asset("assets/img/cars/thumb_apprentissage.png") }}',
                videoUrl:     'https://www.youtube.com/watch?v=XVkkuTwaXgY&list=RDXVkkuTwaXgY&start_radio=1',
                videoCaption: "Découvrez notre méthode d'apprentissage bienveillante pour adultes et enfants",
                faq: [
                    {q:"Quel est l'âge minimum pour les enfants ?",       a:"Dès 2 ans et demi avec des draisienness adaptées, puis des vélos à pédales progressivement."},
                    {q:"Combien de séances sont nécessaires ?",           a:"3 séances suffisent dans la grande majorité des cas, enfants comme adultes."},
                    {q:"Cours en groupe ou en individuel ?",              a:"Les deux formules sont disponibles. Indiquez votre préférence lors de la réservation."},
                    {q:"Si mon enfant n'est pas prêt en 3 séances ?",    a:"Nous ajoutons des séances complémentaires à tarif réduit jusqu'à la maîtrise complète."},
                ],
                reviews: [
                    {init:'P', name:'Patricia V.', date:'20 Mars 2025', note:5, text:"Ma fille de 4 ans avait peur du vélo. En 3 séances, elle pédale toute seule ! Moniteur incroyable."},
                    {init:'O', name:'Olivier M.',  date:'1 Mars 2025',  note:5, text:"À 35 ans j'ai enfin appris à faire du vélo grâce à OREKA. Méthode efficace, aucun jugement."},
                    {init:'N', name:'Nadia C.',    date:'14 Fév 2025',  note:5, text:"Mon fils de 6 ans pédale en équilibre dès la 2ème séance. Je recommande à tous les parents !"},
                ],
                similar: ['velo-sport','randonnee','tourisme'],
            },
        };

        const SIMILAR_META = {
            'velo-sport':    { title:'Vélo Sport',        price:'3 000 F', desc:'Séance de sport en groupe avec coach',  img:'{{ asset("assets/img/cars/velo-sport.webp") }}', slug:'velo-sport' },
            'randonnee':     { title:'Randonner à Vélo',  price:'6 000 F', desc:'Circuit 30–43 km en pleine nature',     img:'https://images.unsplash.com/photo-1534787238916-9ba6764efd4f?w=400&q=70', slug: 'randonnee' },
            'tourisme':      { title:'Vélo Tourisme',     price:'30 000 F',desc:'Visite guidée des villes du Bénin',     img:'{{ asset("assets/img/cars/tourisme.png") }}',    slug:'tourisme' },
            'apprentissage': { title:'Apprentissage',     price:'10 000 F',desc:'Vélo école adultes & enfants',          img:'{{ asset("assets/img/cars/apprentissage.jpg") }}',slug:'apprentissage' },
        };

        // ============================================================
        // HELPERS
        // ============================================================
        function getParam() {
            const p = new URLSearchParams(window.location.search).get('plan');
            return PLANS[p] ? p : 'velo-sport';
        }

        function renderStars(n) {
            return '★'.repeat(n) + '☆'.repeat(5 - n);
        }

        // ============================================================
        // GALERIE — init propre avec requestAnimationFrame
        // ============================================================
        /* ── Initialisation de la galerie ── */
        function initGallery(planKey, planTitle) {
            const images  = GALLERY_DATA[planKey] || GALLERY_DATA['velo-sport'];
            const mainEl  = document.getElementById('plan-slider-main');
            const thumbEl = document.getElementById('plan-slider-thumbs');
            // const skeleton = document.getElementById('gallery-skeleton');
            const hint    = document.getElementById('gallery-hint');

            // Vider les conteneurs avant d'ajouter de nouveaux éléments
            mainEl.innerHTML = '';
            thumbEl.innerHTML = '';

            // Injecter les slides
            images.forEach((url, i) => {
                mainEl.innerHTML  += `<div class="product-img"><img src="${url}" alt="${planTitle} ${i+1}" loading="lazy"></div>`;
                thumbEl.innerHTML += `<div><img src="${url}" alt="thumb ${i+1}" loading="lazy"></div>`;
            });

            // Attendre que le DOM soit mis à jour
            setTimeout(() => {
                const allImages = mainEl.querySelectorAll('img');
                let imagesLoaded = 0;
                const totalImages = allImages.length;

                function checkAllLoaded() {
                    imagesLoaded++;
                    if (imagesLoaded === totalImages) {
                        // Toutes les images sont chargées, on initialise Slick
                        initializeSlick();
                    }
                }

                function initializeSlick() {
                    const $main  = $(mainEl);
                    const $thumb = $(thumbEl);

                    // Détruire les instances existantes si présentes
                    if ($main.hasClass('slick-initialized')) {
                        $main.slick('unslick');
                    }
                    if ($thumb.hasClass('slick-initialized')) {
                        $thumb.slick('unslick');
                    }

                    // Initialiser Slick
                    $main.slick({
                        slidesToShow:   1,
                        slidesToScroll: 1,
                        arrows:         false,
                        fade:           true,
                        speed:          400,
                        cssEase:        'cubic-bezier(.25,.46,.45,.94)',
                        asNavFor:       '#plan-slider-thumbs',
                        lazyLoad:       'ondemand',
                        initialSlide: 0
                    });

                    $thumb.slick({
                        slidesToShow:   5,
                        slidesToScroll: 1,
                        asNavFor:       '#plan-slider-main',
                        focusOnSelect:  true,
                        dots:           false,
                        arrows:         false,
                        responsive: [
                            { breakpoint: 768, settings: { slidesToShow: 4 } },
                            { breakpoint: 480, settings: { slidesToShow: 3 } },
                        ],
                    });

                    // Cacher le skeleton et afficher la galerie
                    // skeleton.style.display = 'none';
                    hint.style.display = '';
                }

                // Si aucune image, initialiser quand même
                if (totalImages === 0) {
                    initializeSlick();
                    return;
                }

                // Vérifier le chargement des images
                allImages.forEach(img => {
                    if (img.complete && img.naturalWidth > 0) {
                        checkAllLoaded();
                    } else {
                        img.addEventListener('load', checkAllLoaded, { once: true });
                        img.addEventListener('error', checkAllLoaded, { once: true });
                    }
                });

                // Fallback au cas où certaines images ne déclenchent pas d'événement
                setTimeout(() => {
                    if (imagesLoaded < totalImages) {
                        initializeSlick();
                    }
                }, 3000);
            }, 50); // Petit délai pour que le DOM soit mis à jour
        }

        // ============================================================
        // INIT PRINCIPAL
        // ============================================================
        function init() {
            const key = getParam();
            const d   = PLANS[key];

            // Couleur du plan
            document.body.classList.add(d.colorClass);

            // Galerie
            initGallery(key, d.title);

            // Hero
            const bg = document.getElementById('hero-bg');
            bg.style.backgroundImage = `url('${d.hero}')`;
            setTimeout(() => bg.classList.add('loaded'), 100);
            document.getElementById('hero-badge').textContent  = d.badge;
            document.querySelector('.plan-hero h1').textContent = d.title;
            document.getElementById('hero-duree').textContent  = d.duree;
            document.getElementById('hero-places').textContent = d.places;

            // Sticky bar
            document.getElementById('sticky-price').innerHTML = `${d.prixLabel} <span>${d.prixSuffix}</span>`;

            // Descriptions
            document.getElementById('plan-desc-1').textContent = d.desc1;
            document.getElementById('plan-desc-2').textContent = d.desc2;

            // Avantages
            const av = document.getElementById('plan-avantages');
            d.avantages.forEach(a => {
                av.innerHTML += `<div class="avantage-item"><div class="icon"><i class="fa-solid ${a.icon}"></i></div><p>${a.label}</p></div>`;
            });

            // Infos pratiques
            const inf = document.getElementById('plan-infos');
            d.infos.forEach(i => {
                inf.innerHTML += `<div class="info-card"><div class="val">${i.val}</div><div class="lbl">${i.lbl}</div></div>`;
            });

            // Vidéo
            document.getElementById('plan-video-thumb').src        = d.videoThumb;
            document.getElementById('plan-video-link').href        = d.videoUrl;
            document.getElementById('plan-video-caption').textContent = d.videoCaption;

            // FAQ
            const faq = document.getElementById('plan-faq');
            d.faq.forEach(f => {
                faq.innerHTML += `
                <div class="faq-item">
                    <button class="faq-q" onclick="toggleFaq(this)">
                        ${f.q} <span class="arrow">▾</span>
                    </button>
                    <div class="faq-a">${f.a}</div>
                </div>`;
            });

            // Avis
            const rev = document.getElementById('plan-reviews');
            if (rev) {
                d.reviews.forEach(r => {
                    rev.innerHTML += `
                    <div class="review-card">
                        <div class="review-author">
                            <div class="review-avatar">${r.init}</div>
                            <div>
                                <div class="review-name">${r.name}</div>
                                <div class="review-date">${r.date}</div>
                            </div>
                            <div class="review-stars ms-auto">${renderStars(r.note)} <span style="font-size:12px;color:#6b7280">(${r.note}.0)</span></div>
                        </div>
                        <p class="review-text">${r.text}</p>
                    </div>`;
                });
            }

            // Sidebar
            document.getElementById('sidebar-price').innerHTML      = `${d.prixLabel} <span>${d.prixSuffix}</span>`;
            document.getElementById('sidebar-price-note').textContent = d.prixNote;
            const sf = document.getElementById('sidebar-features');
            d.avantages.forEach(a => {
                sf.innerHTML += `<div class="sidebar-feature"><i class="fa-solid fa-circle-check"></i> ${a.label}</div>`;
            });

            // Plans similaires
            const row = document.getElementById('similar-plans-row');
            d.similar.forEach(s => {
                const m = SIMILAR_META[s];
                row.innerHTML += `
                <div class="col-md-4 mb-3">
                    <a href="?plan=${m.slug}" class="similar-card">
                        <img src="${m.img}" alt="${m.title}" loading="lazy">
                        <div class="similar-card__body">
                            <div class="similar-card__title">${m.title}</div>
                            <div class="similar-card__desc">${m.desc}</div>
                            <div class="similar-card__price">${m.price}</div>
                        </div>
                    </a>
                </div>`;
            });
        }

        // ============================================================
        // FONCTIONS GLOBALES (appelées depuis le HTML)
        // ============================================================
        window.toggleFaq = function(btn) {
            const a    = btn.nextElementSibling;
            const open = btn.classList.toggle('open');
            a.style.display = open ? 'block' : 'none';
        };

        window.goToReservation = function() {
            const key = getParam();
            localStorage.setItem('selectedPlan', key);
            window.location.href = "{{ route('reservation_step_1') }}?plan=" + key;
        };

        // ============================================================
        // LANCEMENT
        // ============================================================
        init();

    });
</script>

<script>


    function shareOnFacebook() {
        window.open("https://www.facebook.com/sharer/sharer.php?u=https://orekamobility.com", "_blank");
    }

    function shareOnTwitter() {
        window.open("https://twitter.com/intent/tweet?url=https://orekamobility.com&text=Découvrez%20OREKAMOBILITY%20!", "_blank");
    }

    function shareOnLinkedIn() {
        window.open("https://www.linkedin.com/sharing/share-offsite/?url=https://orekamobility.com", "_blank");
    }

    function shareOnInstagram() {
        window.open("https://instagram.com", "_blank"); // Instagram ne prend pas en charge le partage direct via des liens URL.
    }
</script>

<script>
    function shareOnWhatsApp() {
        const url = "https://orekamobility.com";
        const text = "Découvrez OREKAMOBILITY !";

        window.open(`https://wa.me/?text=${encodeURIComponent(text + " " + url)}`, "_blank");
    }
</script>
@endpush
