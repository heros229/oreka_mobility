@extends('frontend.main_master')

@php
    $locale = App::getLocale(); // 'fr' ou 'en'

    $seoData = [
        'fr' => [
            'velo-sport'    => ['title' => 'Vélo Sport à Cotonou | Séances Encadrées avec Coach | Oreka Mobility',                       'desc' => 'Rejoignez nos séances de Vélo Sport encadrées par un coach professionnel à Cotonou. 3 000 F / séance, 10 places disponibles. Réservez en ligne !'],
            'randonnee'     => ['title' => 'Randonnée à Vélo à Cotonou | Circuits 30–43 km | Oreka Mobility',                            'desc' => 'Partez en randonnée vélo sur des circuits de 30 à 43 km autour de Cotonou. 6 000 F adulte, 3 000 F enfant. Superviseur et équipement inclus.'],
            'tourisme'      => ['title' => 'Vélo Tourisme | Visite Guidée Cotonou · Ouidah · Porto-Novo | Oreka Mobility',               'desc' => 'Découvrez le Bénin à vélo avec nos visites guidées. 30 000 F / inscription, repas local inclus, guide professionnel. 10 places seulement !'],
            'apprentissage' => ['title' => 'Apprentissage du Vélo à Cotonou | Adulte & Enfant | Oreka Mobility',                         'desc' => 'Apprenez à faire du vélo avec nos moniteurs diplômés. Vélo École Adulte 15 000 F, Kids dès 2 ans et demi 10 000 F. 3 séances incluses.'],
        ],
        'en' => [
            'velo-sport'    => ['title' => 'Sport Cycling in Cotonou | Coached Sessions | Oreka Mobility',                               'desc' => 'Join our Sport Cycling sessions coached by a certified professional in Cotonou. 3,000 F / session, 10 spots available. Book online!'],
            'randonnee'     => ['title' => 'Cycling Trail in Cotonou | 30–43 km Circuits | Oreka Mobility',                              'desc' => 'Go on a cycling trail on 30 to 43 km circuits around Cotonou. 6,000 F adult, 3,000 F child. Supervisor and equipment included.'],
            'tourisme'      => ['title' => 'Cycling Tourism | Guided Tour Cotonou · Ouidah · Porto-Novo | Oreka Mobility',               'desc' => 'Discover Benin by bike with our guided tours. 30,000 F / registration, local meal included, professional guide. Only 10 spots!'],
            'apprentissage' => ['title' => 'Learn to Cycle in Cotonou | Adults & Children | Oreka Mobility',                             'desc' => 'Learn to ride a bike with our qualified instructors. Adult Cycling School 15,000 F, Kids from age 2.5 — 10,000 F. 3 sessions included.'],
        ],
    ];

    $currentSeo = $seoData[$locale][$plan] ?? $seoData[$locale]['velo-sport'];
@endphp

@section('title') {{ $currentSeo['title'] }} @endsection
@section('description') {{ $currentSeo['desc'] }} @endsection



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

    <link rel="stylesheet" href="{{ asset('assets/css/details_pricing.css')}}">
@endpush


@section('content')

    {{-- ============================  HERO  ============================ --}}
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <div class="plan-hero" id="plan-hero">
                        <div class="plan-hero__content">
                            <div class="plan-badge">
                                <i class="fa-solid fa-bicycle"></i>
                                <span id="hero-badge">OREKA Mobility</span>
                            </div>
                            <h1 id="hero-title">—</h1>
                            <div class="plan-hero__meta" style="text-align:center">
                                <span><i class="fa-regular fa-clock"></i> <span id="hero-duree">—</span></span>
                                <span><i class="fa-solid fa-users"></i> <span id="hero-places">—</span></span>
                                <span><i class="fa-solid fa-map-pin"></i> {{ __('plans.location') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-none">
        <div class="plan-hero" id="plan-hero">
            <div class="plan-hero__bg" id="hero-bg"></div>
        </div>
    </div>

    {{-- ============================  MAIN CONTENT  ============================ --}}
    <div class="plan-detail-wrap">
        <div class="container">
            <div class="row">

                {{-- ── LEFT COL ── --}}
                <div class="col-lg-8">

                    {{-- GALERIE --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title">
                            <i class="fa-regular fa-images"></i> {{ __('plans.gallery_title') }}
                        </h4>
                        <div class="detail-product">
                            <div class="slider detail-bigimg" id="plan-slider-main"></div>
                            <div class="slider slider-nav-thumbnails" id="plan-slider-thumbs"></div>
                        </div>
                        <p class="gallery-hint" id="gallery-hint" style="display:none;">
                            <i class="fa-regular fa-hand-pointer"></i> {{ __('plans.gallery_hint') }}
                        </p>
                    </div>

                    {{-- DESCRIPTION --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title">
                            <i class="fa-regular fa-file-lines" style="color:var(--plan-color)"></i>
                            {{ __('plans.description_title') }}
                        </h4>
                        <p id="plan-desc-1" style="line-height:1.8;color:#444;margin-bottom:14px;"></p>
                        <p id="plan-desc-2" style="line-height:1.8;color:#444;margin-bottom:20px;"></p>
                        <a href="javascript:void(0)" onclick="goToReservation()" class="btn-reserve-main" style="width:fit-content;">
                            <i class="fa-solid fa-calendar-check"></i> {{ __('plans.btn_reserve_plan') }}
                        </a>
                    </div>

                    {{-- AVANTAGES --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title">
                            <i class="fa-solid fa-gift" style="color:var(--plan-color)"></i>
                            {{ __('plans.included_title') }}
                        </h4>
                        <div class="avantages-grid" id="plan-avantages"></div>
                    </div>

                    {{-- INFOS PRATIQUES --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title">
                            <i class="fa-solid fa-circle-info" style="color:var(--plan-color)"></i>
                            {{ __('plans.infos_title') }}
                        </h4>
                        <div class="info-cards" id="plan-infos"></div>
                    </div>

                    {{-- VIDÉO --}}
                    <div class="plan-section d-none">
                        <h4 class="plan-section__title">
                            <i class="fa-solid fa-play" style="color:var(--plan-color)"></i> Vidéo
                        </h4>
                        <div class="plan-video-wrap">
                            <img id="plan-video-thumb" src="" alt="">
                            <a class="plan-video-play" id="plan-video-link" href="#" data-fancybox="video">
                                <i class="bx bx-play"></i>
                            </a>
                        </div>
                        <p class="video-caption" id="plan-video-caption"></p>
                    </div>

                    {{-- FAQ --}}
                    <div class="plan-section">
                        <h4 class="plan-section__title">
                            <i class="fa-regular fa-circle-question" style="color:var(--plan-color)"></i>
                            {{ __('plans.faq_title') }}
                        </h4>
                        <div id="plan-faq"></div>
                    </div>

                </div>

                {{-- ── SIDEBAR ── --}}
                <div class="col-lg-4">
                    {{-- SIDEBAR BOOKING BLOC 1 (toujours visible) --}}
                    <div class="sidebar-booking" id="sidebar-booking-main">
                        <div class="sidebar-price" id="sidebar-price">— <span>{{ __('plans.per_session') }}</span></div>
                        <div style="font-size:13px;color:var(--oreka-muted);margin-top:2px;" id="sidebar-price-note"></div>
                        <hr class="sidebar-divider">
                        <div id="sidebar-features"></div>
                        <hr class="sidebar-divider">
                        <a href="javascript:void(0)" onclick="goToReservation()" class="btn-reserve-sidebar">
                            <i class="fa-solid fa-calendar-check"></i> &nbsp; {{ __('plans.btn_reserve_now') }}
                        </a>
                        <a href="{{ route('contact') }}" class="btn-enquire-sidebar">
                            <i class="fa-regular fa-envelope"></i> &nbsp; {{ __('plans.btn_contact') }}
                        </a>
                        <p class="sidebar-guarantee">
                            <i class="fa-solid fa-shield-halved" style="color:var(--plan-color)"></i>
                            {{ __('plans.sidebar_guarantee') }}
                        </p>
                    </div>

                    {{-- SIDEBAR BOOKING BLOC 2 (visible uniquement pour le tourisme) --}}
                    <div class="sidebar-booking d-none" id="sidebar-booking-secondary" style="margin-top:20px;">
                        <div class="sidebar-price" id="sidebar-price-2">— <span></span></div>
                        <div style="font-size:13px;color:var(--oreka-muted);margin-top:2px;" id="sidebar-price-note-2"></div>
                        <hr class="sidebar-divider">
                        <div id="sidebar-features-2"></div>
                        <hr class="sidebar-divider">
                        <a href="javascript:void(0)" onclick="goToReservation()" class="btn-reserve-sidebar">
                            <i class="fa-solid fa-calendar-check"></i> &nbsp; {{ __('plans.btn_reserve_now') }}
                        </a>
                        <a href="javascript:void(0)" onclick="goToReservation('vip')" class="btn-reserve-sidebar">
                            <i class="fa-solid fa-calendar-check"></i> &nbsp; {{ __('plans.btn_reserve_now') }}
                        </a>
                        <p class="sidebar-guarantee">
                            <i class="fa-solid fa-shield-halved" style="color:var(--plan-color)"></i>
                            {{ __('plans.sidebar_guarantee') }}
                        </p>
                    </div>

                    {{-- BESOIN D'AIDE --}}
                    <div class="plan-section" style="margin-top:24px;">
                        <h4 class="plan-section__title" style="font-size:17px;">
                            <i class="fa-solid fa-headset" style="color:var(--plan-color)"></i>
                            {{ __('plans.help_title') }}
                        </h4>
                        <div style="font-size:14px;color:#444;line-height:2;">
                            <div><i class="fa-brands fa-whatsapp" style="color:#25D366;margin-right:8px;"></i><a href="https://wa.me/2290153096850" style="color:#444;">+229 015 309 6850</a></div>
                            <div><i class="fa-regular fa-envelope" style="color:var(--plan-color);margin-right:8px;"></i><a href="mailto:contact@orekamobility.com" style="color:#444;">contact@orekamobility.com</a></div>
                            <div><i class="fa-regular fa-clock" style="color:var(--plan-color);margin-right:8px;"></i>{{ __('plans.help_hours') }}</div>
                        </div>
                    </div>

                    {{-- PARTAGE --}}
                    <div class="plan-section" style="margin-top:24px;">
                        <h4 class="plan-section__title" style="font-size:17px;">
                            <i class="fa-solid fa-share-nodes" style="color:var(--plan-color)"></i>
                            {{ __('plans.share_title') }}
                        </h4>
                        <div style="display:flex;gap:12px;">
                            <a href="#" onclick="shareOnFacebook()" style="width:40px;height:40px;border-radius:50%;background:#1877f2;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" onclick="shareOnWhatsApp()"  style="width:40px;height:40px;border-radius:50%;background:#25D366;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#" onclick="shareOnTwitter()"   style="width:40px;height:40px;border-radius:50%;background:#1da1f2;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" onclick="shareOnInstagram()" style="width:40px;height:40px;border-radius:50%;background:#e1306c;color:#fff;display:flex;align-items:center;justify-content:center;font-size:16px;"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- PLANS SIMILAIRES --}}
            <div class="similar-plans">
                <h3>{{ __('plans.similar_title') }}</h3>
                <div class="row" id="similar-plans-row"></div>
            </div>
        </div>
    </div>

    {{-- STICKY BAR --}}
    <div class="plan-sticky-bar">
        <div class="container">
            <div class="plan-sticky-bar__price" id="sticky-price">— <span>{{ __('plans.per_session') }}</span></div>
            <a href="javascript:void(0)" onclick="goToReservation()" class="btn-reserve-main">
                <i class="fa-solid fa-calendar-check"></i> {{ __('plans.btn_reserve_short') }}
            </a>
        </div>
    </div>

    {{-- ENQUIRY MODAL --}}
    <div class="modal new-modal fade enquire-mdl" id="enquiry" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('plans.modal_title') }}</h4>
                    <button type="button" class="close-btn" data-bs-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
                    <form class="enquire-modal">
                        <div class="modal-form-group"><label>{{ __('plans.modal_name') }}</label><input type="text" class="form-control" placeholder="{{ __('plans.modal_name_ph') }}"></div>
                        <div class="modal-form-group"><label>Email</label><input type="email" class="form-control" placeholder="{{ __('plans.modal_email_ph') }}"></div>
                        <div class="modal-form-group"><label>{{ __('plans.modal_phone') }}</label><input type="text" class="form-control" placeholder="{{ __('plans.modal_phone_ph') }}"></div>
                        <div class="modal-form-group"><label>{{ __('plans.modal_message') }}</label><textarea class="form-control" rows="4"></textarea></div>
                        <div class="modal-btn modal-btn-sm">
                            <button type="submit" class="btn btn-primary w-100">{{ __('plans.modal_send') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
    <script>
        $(function () {

            // ============================================================
            // LANGUE ACTIVE — injectée par Laravel
            // ============================================================
            const LOCALE = '{{ App::getLocale() }}'; // 'fr' ou 'en'

            // ============================================================
            // DONNÉES GALERIE
            // ============================================================
            const GALLERY_DATA = {
                'velo-sport': [
                    '{{ asset("assets/img/cars/12.jpg") }}',
                    '{{ asset("assets/img/cars/13.jpg") }}',
                    '{{ asset("assets/img/cars/14.jpg") }}',
                    '{{ asset("assets/img/cars/velo1.jpg") }}',
                ],
                'randonnee': [
                    '{{ asset("assets/img/cars/randonee1.jpg") }}',
                    '{{ asset("assets/img/cars/randonee.jpg") }}',
                    '{{ asset("assets/img/cars/randonee3.jpg") }}',
                    '{{ asset("assets/img/cars/randonee4.jpg") }}',
                ],
                'tourisme': [
                    '{{ asset("assets/img/cars/11.png") }}',
                    '{{ asset("assets/img/cars/tourisme.png") }}',
                    '{{ asset("assets/img/cars/15.jpg") }}',
                    '{{ asset("assets/img/cars/16.jpg") }}',
                    '{{ asset("assets/img/cars/2.webp") }}',
                ],
                'apprentissage': [
                    '{{ asset("assets/img/cars/apprentissage.jpg") }}',
                    '{{ asset("assets/img/cars/17.png") }}',
                    'https://images.unsplash.com/photo-1541625602330-2277a4c46182?w=1200&q=85',
                    '{{ asset("assets/img/cars/12.png") }}',
                ],
            };

            // ============================================================
            // DONNÉES PLANS — injectées depuis PHP (FR + EN)
            // ============================================================
            const PLANS = {
                fr: {
                    'velo-sport': {
                        colorClass: 'plan-velo-sport',
                        badge:      'Séance Sportive',
                        title:      'Vélo Sport',
                        duree:      '1 heure / séance',
                        places:     '10 places maximum',
                        prixLabel:  '3 000 F CFA',
                        prixNote:   'Abonnement mensuel : 12 000 F CFA',
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/velo.png") }}',
                        desc1:      "Rejoignez notre séance de Vélo Sport les matins et soirs afin de transformer votre routine en véritable défi sportif. Encadrés par un coach professionnel certifié, vous travaillerez l'endurance, la cadence et la puissance dans une ambiance dynamique et motivante. Que vous soyez débutant ou sportif confirmé, chaque séance est adaptée à votre niveau.",
                        desc2:      "En groupe de 10 cyclistes maximum, l'émulation collective vous pousse à vous dépasser. Vélo, casque et bouteille d'eau vous sont fournis. Un échauffement, une session intensive et un retour au calme structurent chaque heure pour maximiser les bénéfices sans risque de blessure.",
                        avantages:  [{icon:'fa-bicycle',label:'Vélo de qualité'},{icon:'fa-hard-hat',label:'Casque homologué'},{icon:'fa-bottle-water',label:"Bouteille d'eau"},{icon:'fa-person-running',label:'Coach professionnel'},{icon:'fa-users',label:'Groupe de 10 max'},{icon:'fa-calendar-check',label:'Abonnement mensuel'}],
                        infos:      [{val:'1h',lbl:'Durée'},{val:'10',lbl:'Places dispo'},{val:'3 000F',lbl:'Par séance'}],
                        videoThumb: '{{ asset("assets/img/cars/thumb_velo.png") }}',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:"Aperçu d'une séance de Vélo Sport OREKA — ambiance, coach et participants",
                        faq:        [{q:"Dois-je apporter mon propre vélo ?",a:"Non, tout le matériel est fourni par OREKA : vélo, casque et bouteille d'eau. Venez simplement en tenue sportive adaptée."},{q:"Quel niveau sportif faut-il avoir ?",a:"Les séances sont accessibles à tous les niveaux. Le coach adapte l'intensité à chaque participant. Débutants bienvenus !"},{q:"Comment fonctionne l'abonnement mensuel ?",a:"L'abonnement à 12 000 F CFA vous donne accès à toutes les séances du mois, soit une économie de 33% par rapport au tarif à la séance."},{q:"Puis-je annuler ma réservation ?",a:"Oui, l'annulation est possible jusqu'à 24h avant la séance. Contactez-nous par WhatsApp ou email."}],
                        similar:    ['randonnee','tourisme','apprentissage'],
                    },
                    'randonnee': {
                        colorClass: 'plan-randonnee',
                        badge:      'Aventure & Nature',
                        title:      'Randonner à Vélo',
                        duree:      '3 heures',
                        places:     '10 places maximum',
                        prixLabel:  '6 000 F CFA',
                        prixNote:   'Enfants 10–15 ans : 3 000 F CFA',
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/randonee.jpg") }}',
                        desc1:      "Partez pour une aventure à deux roues sur un circuit sécurisé de 30 à 43 km à travers les paysages splendides du Bénin. En famille, en couple ou entre amis, cette randonnée guidée vous emmène hors des sentiers battus, le long de paysages côtiers, de mangroves et de villages traditionnels.",
                        desc2:      "Un superviseur expérimenté vous accompagne tout au long du parcours pour assurer votre sécurité. Tout le matériel nécessaire est fourni : vélo adapté, casque, éclairage avant et arrière, antivol et pompe. Accessible dès 10 ans avec un tarif réduit enfant.",
                        avantages:  [{icon:'fa-bicycle',label:'Vélo adapté'},{icon:'fa-hard-hat',label:'Casque homologué'},{icon:'fa-bottle-water',label:"Bouteille d'eau"},{icon:'fa-user-shield',label:'Superviseur'},{icon:'fa-lightbulb',label:'Éclairage complet'},{icon:'fa-lock',label:'Antivol'},{icon:'fa-circle-dot',label:'Pompe incluse'},{icon:'fa-child',label:'Tarif enfant'}],
                        infos:      [{val:'3h',lbl:'Durée'},{val:'43km',lbl:'Distance max'},{val:'10',lbl:'Places dispo'}],
                        videoThumb: '{{ asset("assets/img/cars/thumb_randonne.png") }}',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:'Parcours à vélo le long des paysages du Bénin — une randonnée inoubliable',
                        faq:        [{q:"Le circuit est-il adapté aux débutants ?",a:"Oui ! Il n'y a pas de dénivelé important. Le superviseur adapte le rythme au groupe."},{q:"À partir de quel âge peut-on participer ?",a:"Les enfants à partir de 10 ans avec le tarif réduit (3 000 F CFA)."},{q:"Que se passe-t-il en cas de météo défavorable ?",a:"La randonnée est reportée. Vous êtes prévenus la veille par WhatsApp."},{q:"Peut-on faire une randonnée en semaine ?",a:"Principalement le week-end. Des dates spéciales pour les groupes sur demande."}],
                        similar:    ['velo-sport','tourisme','apprentissage'],
                    },
                    'tourisme': {
                        colorClass: 'plan-tourisme',
                        badge:      'Tourisme Premium',
                        title:      'Vélo Tourisme',
                        duree:      '4 heures',
                        places:     '10 places maximum',
                        prixLabel:  '30 000 F CFA',
                        prixNote:   'Repas gastronomique & guide inclus',
                        formules: [
                            {
                                label:    'Formule Prestige',
                                prix:     '14 000 F CFA',
                                note:     '10 places disponibles',
                                avantages: [
                                    {icon:'fa-bicycle',          label:'Un vélo'},
                                    {icon:'fa-hard-hat',         label:'Un casque'},
                                    {icon:'fa-bottle-water',     label:"Une bouteille d'eau"},
                                    {icon:'fa-camera',           label:'Visite & photos sur tous les sites payants de Ouidah (sauf musées)'},
                                    {icon:'fa-map-location-dot', label:'Guide touristique professionnel'},
                                    {icon:'fa-cookie-bite',      label:'Un nécessaire à grignoter'},
                                ],
                            },
                            {
                                label:    'Formule VIP',
                                prix:     '30 000 F CFA',
                                note:     '10 places disponibles',
                                avantages: [
                                    {icon:'fa-bicycle',          label:'Un vélo'},
                                    {icon:'fa-hard-hat',         label:'Un casque'},
                                    {icon:'fa-bottle-water',     label:"Une bouteille d'eau"},
                                    {icon:'fa-language',         label:'Guide pro + traducteur (FR, EN, Mandarin, Espagnol)'},
                                    {icon:'fa-map-location-dot', label:'Visite & photos sur tous les sites payants de Ouidah (sauf musées)'},
                                    {icon:'fa-book-open',        label:'Brochure de parcours'},
                                    {icon:'fa-cookie-bite',      label:'Un nécessaire à grignoter'},
                                    {icon:'fa-utensils',         label:'Déjeuner complet au restaurant partenaire'},
                                ],
                            },
                        ],
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/tourisme.png") }}',
                        desc1:      "Visiter les principaux sites touristiques et lieux emblématiques de la ville de Ouidah à vélo, avec un passage dans l’un des restaurants les plus réputés de la ville en goûtant au plat local, le tout accompagné d’un guide touristique professionnel pour une meilleure immersion dans l’histoire et la culture du pays.",
                        //desc2:      "Ce plan Premium inclut une pause gastronomique dans un restaurant partenaire sélectionné. Tout le matériel de qualité est fourni pour une expérience confortable et mémorable.",
                        avantages:  [{icon:'fa-bicycle',label:'Vélo premium'},{icon:'fa-hard-hat',label:'Casque'},{icon:'fa-bottle-water',label:"Bouteille d'eau"},{icon:'fa-map-location-dot',label:'Guide touristique pro'}/*,{icon:'fa-lightbulb',label:'Éclairage complet'}*//*,{icon:'fa-lock',label:'Antivol'}*//*,{icon:'fa-circle-dot',label:'Pompe incluse'}*/,{icon:'fa-utensils',label:'Repas gastronomique'}],
                        infos:      [{val:'4h',lbl:'Durée'},/*{val:'3 villes',lbl:'Destinations'},*/{val:'10',lbl:'Places dispo'}],
                        videoThumb: 'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=900&q=80',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:'Visite à vélo des sites historiques de Ouidah et Porto-Novo avec OREKA',
                        faq:        [{q:"Quelle ville est visitée ?",a:"Cotonou, Ouidah (temples Vaudou, route des esclaves)."},{q:"Le repas est-il vraiment inclus ?",a:"Oui, dans un restaurant partenaire sélectionné. La boisson peut être à la charge du participant."},{q:"Est-ce adapté aux touristes étrangers ?",a:"Absolument ! Nos guides parlent français et anglais."},{q:"Comment se déroule la réservation ?",a:"Réservez en ligne et payez via FedaPay. Confirmation par email avec tous les détails."}],
                        similar:    ['velo-sport','randonnee','apprentissage'],
                    },
                    'apprentissage': {
                        colorClass: 'plan-apprentissage',
                        badge:      'Vélo École',
                        title:      'Apprentissage',
                        duree:      '1h30 adulte / 45min enfant',
                        places:     'Cours individuel ou petit groupe',
                        prixLabel:  '10 000 F CFA',
                        prixNote:   'Adultes : 15 000 F CFA — 3 séances incluses',
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/velo-ecole.jpg") }}',
                        desc1:      "Notre Vélo École OREKA vous accompagne pas à pas dans l'apprentissage du vélo, quel que soit votre âge. Pour les adultes, nos moniteurs diplômés utilisent une méthode pédagogique progressive. En 3 séances de 1h30, vous gagnez confiance et autonomie.",
                        desc2:      "Pour les enfants, notre programme est adapté dès 2 ans et demi. En cours individuel ou en petit groupe, nous apprenons aux plus jeunes à pédaler en sécurité et avec enthousiasme.",
                        avantages:  [{icon:'fa-bicycle',label:'Vélo adapté fourni'},{icon:'fa-hard-hat',label:'Casque de sécurité'},{icon:'fa-chalkboard-user',label:'Moniteur diplômé'},{icon:'fa-graduation-cap',label:'Méthode progressive'},{icon:'fa-child-reaching',label:'Dès 2 ans et demi'},{icon:'fa-people-group',label:'Individuel ou groupe'}],
                        infos:      [{val:'3',lbl:'Séances incluses'},{val:'1h30',lbl:'Durée adulte'},{val:'45min',lbl:'Durée enfant'}],
                        videoThumb: '{{ asset("assets/img/cars/thumb_apprentissage.png") }}',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:"Découvrez notre méthode d'apprentissage bienveillante pour adultes et enfants",
                        faq:        [{q:"Quel est l'âge minimum pour les enfants ?",a:"Dès 2 ans et demi avec des draisiennes adaptées, puis des vélos à pédales progressivement."},{q:"Combien de séances sont nécessaires ?",a:"3 séances suffisent dans la grande majorité des cas, enfants comme adultes."},{q:"Cours en groupe ou en individuel ?",a:"Les deux formules sont disponibles. Indiquez votre préférence lors de la réservation."},{q:"Si mon enfant n'est pas prêt en 3 séances ?",a:"Nous ajoutons des séances complémentaires à tarif réduit jusqu'à la maîtrise complète."}],
                        similar:    ['velo-sport','randonnee','tourisme'],
                    },
                },

                en: {
                    'velo-sport': {
                        colorClass: 'plan-velo-sport',
                        badge:      'Sport Session',
                        title:      'Sport Cycling',
                        duree:      '1 hour / session',
                        places:     '10 spots maximum',
                        prixLabel:  '3,000 F CFA',
                        prixNote:   'Monthly subscription: 12,000 F CFA',
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/velo.png") }}',
                        desc1:      "Join our Sport Cycling sessions in the mornings and evenings to transform your routine into a real athletic challenge. Coached by a certified professional, you will work on endurance, cadence, and power in a dynamic and motivating atmosphere. Whether you are a beginner or an experienced athlete, each session is tailored to your level.",
                        desc2:      "In groups of up to 10 cyclists, the collective energy pushes you to surpass yourself. Bike, helmet, and water bottle are provided. A warm-up, an intensive session, and a cool-down structure each hour to maximise benefits without risk of injury.",
                        avantages:  [{icon:'fa-bicycle',label:'Quality bike'},{icon:'fa-hard-hat',label:'Approved helmet'},{icon:'fa-bottle-water',label:'Water bottle'},{icon:'fa-person-running',label:'Professional coach'},{icon:'fa-users',label:'Group of 10 max'},{icon:'fa-calendar-check',label:'Monthly subscription'}],
                        infos:      [{val:'1h',lbl:'Duration'},{val:'10',lbl:'Available spots'},{val:'3,000F',lbl:'Per session'}],
                        videoThumb: '{{ asset("assets/img/cars/thumb_velo.png") }}',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:'Preview of an OREKA Sport Cycling session — atmosphere, coach and participants',
                        faq:        [{q:"Do I need to bring my own bike?",a:"No, all equipment is provided by OREKA: bike, helmet, and water bottle. Just come in appropriate sports attire."},{q:"What fitness level is required?",a:"Sessions are accessible to all levels. The coach adapts the intensity for each participant. Beginners are welcome!"},{q:"How does the monthly subscription work?",a:"The 12,000 F CFA subscription gives you access to all sessions for the month — a 33% saving compared to the per-session rate."},{q:"Can I cancel my booking?",a:"Yes, cancellation is possible up to 24 hours before the session. Contact us via WhatsApp or email."}],
                        similar:    ['randonnee','tourisme','apprentissage'],
                    },
                    'randonnee': {
                        colorClass: 'plan-randonnee',
                        badge:      'Adventure & Nature',
                        title:      'Cycling Trail',
                        duree:      '3 hours',
                        places:     '10 spots maximum',
                        prixLabel:  '6,000 F CFA',
                        prixNote:   'Children 10–15 years: 3,000 F CFA',
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/randonee.jpg") }}',
                        desc1:      "Set off on a two-wheeled adventure along a safe 30 to 43 km circuit through the stunning landscapes of Benin. With family, as a couple, or with friends, this guided ride takes you off the beaten track, along coastal scenery, mangroves, and traditional villages.",
                        desc2:      "An experienced supervisor accompanies you throughout the route to ensure your safety. All necessary equipment is provided: suitable bike, helmet, front and rear lighting, lock, and pump. Open to children from age 10 with a reduced child rate.",
                        avantages:  [{icon:'fa-bicycle',label:'Suitable bike'},{icon:'fa-hard-hat',label:'Approved helmet'},{icon:'fa-bottle-water',label:'Water bottle'},{icon:'fa-user-shield',label:'Supervisor'},{icon:'fa-lightbulb',label:'Full lighting'},{icon:'fa-lock',label:'Lock'},{icon:'fa-circle-dot',label:'Pump included'},{icon:'fa-child',label:'Child rate'}],
                        infos:      [{val:'3h',lbl:'Duration'},{val:'43km',lbl:'Max distance'},{val:'10',lbl:'Available spots'}],
                        videoThumb: '{{ asset("assets/img/cars/thumb_randonne.png") }}',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:"Cycling through Benin's landscapes — an unforgettable trail",
                        faq:        [{q:"Is the circuit suitable for beginners?",a:"Yes! There is no significant elevation. The supervisor adjusts the pace to the group."},{q:"From what age can children participate?",a:"Children from age 10 at a reduced rate (3,000 F CFA)."},{q:"What happens in case of bad weather?",a:"The ride is postponed. You will be notified the evening before via WhatsApp."},{q:"Can we do a trail on a weekday?",a:"Mainly on weekends. Special dates for groups are available on request."}],
                        similar:    ['velo-sport','tourisme','apprentissage'],
                    },
                    'tourisme': {
                        colorClass: 'plan-tourisme',
                        badge:      'Premium Tourism',
                        title:      'Cycling Tourism',
                        duree:      '4 hours',
                        places:     '10 spots maximum',
                        prixLabel:  '30,000 F CFA',
                        prixNote:   'Gourmet meal & guide included',
                        formules: [
                            {
                                label:    'Prestige Formula',
                                prix:     '14,000 F CFA',
                                note:     '10 spots available',
                                avantages: [
                                    {icon:'fa-bicycle',          label:'One bike'},
                                    {icon:'fa-hard-hat',         label:'One helmet'},
                                    {icon:'fa-bottle-water',     label:'One water bottle'},
                                    {icon:'fa-camera',           label:'Visit & photos at all paid tourist sites in Ouidah (except museums)'},
                                    {icon:'fa-map-location-dot', label:'Professional tour guide'},
                                    {icon:'fa-cookie-bite',      label:'Snack pack for the tour'},
                                ],
                            },
                            {
                                label:    'VIP Formula',
                                prix:     '30,000 F CFA',
                                note:     '10 spots available',
                                avantages: [
                                    {icon:'fa-bicycle',          label:'One bike'},
                                    {icon:'fa-hard-hat',         label:'One helmet'},
                                    {icon:'fa-bottle-water',     label:'One water bottle'},
                                    {icon:'fa-language',         label:'Pro guide + translator (FR, EN, Mandarin, Spanish)'},
                                    {icon:'fa-map-location-dot', label:'Visit & photos at all paid tourist sites in Ouidah (except museums)'},
                                    {icon:'fa-book-open',        label:'Tour route brochure'},
                                    {icon:'fa-cookie-bite',      label:'Snack pack for the tour'},
                                    {icon:'fa-utensils',         label:'Full lunch at a partner restaurant'},
                                ],
                            },
                        ],
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/tourisme.png") }}',
                        desc1:      "Explore Ouidah’s main tourist attractions and iconic landmarks by bike, including a stop at one of the city’s most renowned restaurants to sample a local dish, all accompanied by a professional tour guide to help you immerse yourself in the country’s history and culture.",
                        //desc2:      "This Premium plan includes a gourmet stop at a selected partner restaurant. High-quality equipment is provided for a comfortable and memorable experience.",
                        avantages:  [{icon:'fa-bicycle',label:'Premium bike'},{icon:'fa-hard-hat',label:'Helmet'},{icon:'fa-bottle-water',label:'Water bottle'},{icon:'fa-map-location-dot',label:'Professional tour guide'}/*,{icon:'fa-lightbulb',label:'Full lighting'},{icon:'fa-lock',label:'Lock'},*//*{icon:'fa-circle-dot',label:'Pump included'}*/,{icon:'fa-utensils',label:'Gourmet meal'}],
                        infos:      [{val:'4h',lbl:'Duration'}/*,{val:'3 cities',lbl:'Destinations'}*/,{val:'10',lbl:'Available spots'}],
                        videoThumb: 'https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=900&q=80',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:'Cycling tour of the historic sites of Ouidah and Porto-Novo with OREKA',
                        faq:        [{q:"Which city is being visited??",a:"Cotonou, Ouidah (Vodoun temples, slave route)."},{q:"Is the meal really included?",a:"Yes, at a selected partner restaurant. Drinks may be at the participant's own expense."},{q:"Is it suitable for foreign tourists?",a:"Absolutely! Our guides speak French and English."},{q:"How does the booking process work?",a:"Book online and pay via FedaPay. Confirmation by email with all the details."}],
                        similar:    ['velo-sport','randonnee','apprentissage'],
                    },
                    'apprentissage': {
                        colorClass: 'plan-apprentissage',
                        badge:      'Cycling School',
                        title:      'Learn to Cycle',
                        duree:      '1h30 adult / 45min child',
                        places:     'Individual or small group',
                        prixLabel:  '10,000 F CFA',
                        prixNote:   'Adults: 15,000 F CFA — 3 sessions included',
                        prixSuffix: '',
                        hero:       '{{ asset("assets/img/cars/velo-ecole.jpg") }}',
                        desc1:      "Our OREKA Cycling School guides you step by step in learning to ride, whatever your age. For adults, our qualified instructors use a progressive teaching method. In 3 sessions of 1h30, you gain confidence and independence.",
                        desc2:      "For children, our programme is adapted from age 2.5. In individual or small group lessons, we teach the youngest riders to pedal safely and enthusiastically.",
                        avantages:  [{icon:'fa-bicycle',label:'Suitable bike provided'},{icon:'fa-hard-hat',label:'Safety helmet'},{icon:'fa-chalkboard-user',label:'Qualified instructor'},{icon:'fa-graduation-cap',label:'Progressive method'},{icon:'fa-child-reaching',label:'From age 2.5'},{icon:'fa-people-group',label:'Individual or group'}],
                        infos:      [{val:'3',lbl:'Sessions included'},{val:'1h30',lbl:'Adult duration'},{val:'45min',lbl:'Child duration'}],
                        videoThumb: '{{ asset("assets/img/cars/thumb_apprentissage.png") }}',
                        videoUrl:   'https://www.youtube.com/watch?v=XVkkuTwaXgY',
                        videoCaption:'Discover our supportive learning method for adults and children',
                        faq:        [{q:"What is the minimum age for children?",a:"From age 2.5 with adapted balance bikes, then pedal bikes progressively."},{q:"How many sessions are needed?",a:"3 sessions are enough in the vast majority of cases, for both children and adults."},{q:"Group or individual lessons?",a:"Both options are available. Please indicate your preference when booking."},{q:"What if my child isn't ready after 3 sessions?",a:"We add extra sessions at a reduced rate until full mastery is achieved."}],
                        similar:    ['velo-sport','randonnee','tourisme'],
                    },
                },
            };

            // ============================================================
            // PLANS SIMILAIRES — bilingue
            // ============================================================
            const SIMILAR_META = {
                fr: {
                    'velo-sport':    {title:'Vélo Sport',       price:'3 000 F', desc:'Séance de sport en groupe avec coach',  img:'{{ asset("assets/img/cars/velo-sport.webp") }}',   slug:'velo-sport'},
                    'randonnee':     {title:'Randonner à Vélo', price:'6 000 F', desc:'Circuit 30–43 km en pleine nature',     img:'https://images.unsplash.com/photo-1534787238916-9ba6764efd4f?w=400&q=70', slug:'randonnee'},
                    'tourisme':      {title:'Vélo Tourisme',    price:'30 000 F',desc:'Visite guidée des villes du Bénin',     img:'{{ asset("assets/img/cars/tourisme.png") }}',      slug:'tourisme'},
                    'apprentissage': {title:'Apprentissage',    price:'10 000 F',desc:'Vélo école adultes & enfants',          img:'{{ asset("assets/img/cars/apprentissage.jpg") }}', slug:'apprentissage'},
                },
                en: {
                    'velo-sport':    {title:'Sport Cycling',   price:'3,000 F', desc:'Group sport session with coach',        img:'{{ asset("assets/img/cars/velo-sport.webp") }}',   slug:'velo-sport'},
                    'randonnee':     {title:'Cycling Trail',   price:'6,000 F', desc:'30–43 km circuit in nature',            img:'https://images.unsplash.com/photo-1534787238916-9ba6764efd4f?w=400&q=70', slug:'randonnee'},
                    'tourisme':      {title:'Cycling Tourism', price:'30,000 F',desc:'Guided tour of Beninese cities',        img:'{{ asset("assets/img/cars/tourisme.png") }}',      slug:'tourisme'},
                    'apprentissage': {title:'Learn to Cycle',  price:'10,000 F',desc:'Cycling school for adults & children',  img:'{{ asset("assets/img/cars/apprentissage.jpg") }}', slug:'apprentissage'},
                },
            };

            // ============================================================
            // HELPERS
            // ============================================================
            function getParam() {
                const p = new URLSearchParams(window.location.search).get('plan');
                return PLANS[LOCALE][p] ? p : 'velo-sport';
            }

            // ============================================================
            // GALERIE
            // ============================================================
            function initGallery(planKey, planTitle) {
                const images  = GALLERY_DATA[planKey] || GALLERY_DATA['velo-sport'];
                const mainEl  = document.getElementById('plan-slider-main');
                const thumbEl = document.getElementById('plan-slider-thumbs');
                const hint    = document.getElementById('gallery-hint');

                mainEl.innerHTML = '';
                thumbEl.innerHTML = '';

                images.forEach((url, i) => {
                    mainEl.innerHTML  += `<div class="product-img"><img src="${url}" alt="${planTitle} ${i+1}" loading="lazy"></div>`;
                    thumbEl.innerHTML += `<div><img src="${url}" alt="thumb ${i+1}" loading="lazy"></div>`;
                });

                setTimeout(() => {
                    const allImages = mainEl.querySelectorAll('img');
                    let imagesLoaded = 0;
                    const totalImages = allImages.length;

                    function checkAllLoaded() {
                        imagesLoaded++;
                        if (imagesLoaded === totalImages) initializeSlick();
                    }

                    function initializeSlick() {
                        const $main  = $(mainEl);
                        const $thumb = $(thumbEl);

                        if ($main.hasClass('slick-initialized'))  $main.slick('unslick');
                        if ($thumb.hasClass('slick-initialized')) $thumb.slick('unslick');

                        $main.slick({
                            slidesToShow: 1, slidesToScroll: 1, arrows: false,
                            fade: true, speed: 400, cssEase: 'cubic-bezier(.25,.46,.45,.94)',
                            asNavFor: '#plan-slider-thumbs', lazyLoad: 'ondemand', initialSlide: 0
                        });
                        $thumb.slick({
                            slidesToShow: 5, slidesToScroll: 1, asNavFor: '#plan-slider-main',
                            focusOnSelect: true, dots: false, arrows: false,
                            responsive: [
                                {breakpoint:768, settings:{slidesToShow:4}},
                                {breakpoint:480, settings:{slidesToShow:3}},
                            ],
                        });

                        hint.style.display = '';
                    }

                    if (totalImages === 0) { initializeSlick(); return; }

                    allImages.forEach(img => {
                        if (img.complete && img.naturalWidth > 0) {
                            checkAllLoaded();
                        } else {
                            img.addEventListener('load',  checkAllLoaded, {once:true});
                            img.addEventListener('error', checkAllLoaded, {once:true});
                        }
                    });

                    setTimeout(() => { if (imagesLoaded < totalImages) initializeSlick(); }, 3000);
                }, 50);
            }

            // ============================================================
            // INIT PRINCIPAL
            // ============================================================
            function init() {
                const key  = getParam();
                const d    = PLANS[LOCALE][key];
                const meta = SIMILAR_META[LOCALE];

                // Couleur du plan
                document.body.classList.add(d.colorClass);

                // Galerie
                initGallery(key, d.title);

                // Hero
                const bg = document.getElementById('hero-bg');
                bg.style.backgroundImage = `url('${d.hero}')`;
                setTimeout(() => bg.classList.add('loaded'), 100);
                document.getElementById('hero-badge').textContent           = d.badge;
                document.querySelector('.plan-hero h1').textContent         = d.title;
                document.getElementById('hero-duree').textContent           = d.duree;
                document.getElementById('hero-places').textContent          = d.places;

                // Sticky bar
                document.getElementById('sticky-price').innerHTML           = `${d.prixLabel} <span>${d.prixSuffix}</span>`;
                // Sticky bar — caché pour le tourisme
                const $stickyBar = $('.plan-sticky-bar');
                if (key === 'tourisme') {
                    $stickyBar.addClass('d-none');
                } else {
                    $stickyBar.removeClass('d-none');
                }

                // Descriptions
                document.getElementById('plan-desc-1').innerHTML          = d.desc1;
                document.getElementById('plan-desc-2').innerHTML          = d.desc2;

                // Avantages
                const $av = $('#plan-avantages');
                $av.empty();
                d.avantages.forEach(a => {
                    $av.append(
                        $('<div>').addClass('avantage-item').append(
                            $('<div>').addClass('icon').append(
                                $('<i>').addClass(`fa-solid ${a.icon}`)
                            ),
                            $('<p>').text(a.label)
                        )
                    );
                });

                // Infos pratiques
                const inf = document.getElementById('plan-infos');
                d.infos.forEach(i => {
                    inf.innerHTML += `<div class="info-card"><div class="val">${i.val}</div><div class="lbl">${i.lbl}</div></div>`;
                });

                // Vidéo
                document.getElementById('plan-video-thumb').src             = d.videoThumb;
                document.getElementById('plan-video-link').href             = d.videoUrl;
                document.getElementById('plan-video-caption').textContent   = d.videoCaption;

                // FAQ
                const $faq = $('#plan-faq');
                $faq.empty();
                d.faq.forEach(f => {
                    $faq.append(
                        $('<div>').addClass('faq-item').append(
                            $('<button>').addClass('faq-q').append(
                                $('<span>').text(f.q),
                                $('<span>').addClass('arrow').html('▾')
                            ).on('click', function() {
                                toggleFaq(this);
                            }),
                            $('<div>').addClass('faq-a').text(f.a)
                        )
                    );
                });

                // Sidebar
                document.getElementById('sidebar-price').innerHTML          = `${d.prixLabel} <span>${d.prixSuffix}</span>`;
                document.getElementById('sidebar-price-note').innerHTML = d.prixNote;
                const $sf = $('#sidebar-features');
                $sf.empty();
                d.avantages.forEach(a => {
                    $sf.append(
                        $('<div>').addClass('sidebar-feature').append(
                            $('<i>').addClass('fa-solid fa-circle-check'),
                            $('<span>').text(a.label)
                        )
                    );
                });

                // ── FORMULES TOURISME (double sidebar) ──
                const $sb2    = $('#sidebar-booking-secondary');
                const hasForm = d.formules && d.formules.length === 2;

                if (hasForm) {
                    const f1 = d.formules[0];
                    const f2 = d.formules[1];

                    // Bloc 1 — Prestige (remplace le sidebar principal)
                    $('#sidebar-price').html(`${f1.prix} <span></span>`);
                    $('#sidebar-price-note').html(`<strong>${f1.label}</strong> · ${f1.note}`);
                    const $sf1 = $('#sidebar-features');
                    $sf1.empty();
                    f1.avantages.forEach(a => {
                        $sf1.append(
                            $('<div>').addClass('sidebar-feature').append(
                                $('<i>').addClass('fa-solid fa-circle-check'),
                                $('<span>').text(a.label)
                            )
                        );
                    });

                    // Bloc 2 — VIP (affiche le secondary)
                    $sb2.removeClass('d-none');
                    $('#sidebar-price-2').html(`${f2.prix} <span></span>`);
                    $('#sidebar-price-note-2').html(`<strong>${f2.label}</strong> · ${f2.note}`);
                    const $sf2 = $('#sidebar-features-2');
                    $sf2.empty();
                    f2.avantages.forEach(a => {
                        $sf2.append(
                            $('<div>').addClass('sidebar-feature').append(
                                $('<i>').addClass('fa-solid fa-circle-check'),
                                $('<span>').text(a.label)
                            )
                        );
                    });

                    // Changer les onclick dynamiquement
                    document.querySelector('#sidebar-booking-main .btn-reserve-sidebar')
                        .setAttribute('onclick', "goToReservation('prestige')");

                    document.querySelector('#sidebar-booking-secondary .btn-reserve-sidebar')
                        .setAttribute('onclick', "goToReservation('vip')");

                } else {

                    // Plans normaux — remettre sans formule
                    document.querySelector('#sidebar-booking-main .btn-reserve-sidebar')
                        .setAttribute('onclick', "goToReservation()");

                    // Plans normaux — le bloc 2 reste caché
                    $sb2.addClass('d-none');


                }

                // Plans similaires
                const row = document.getElementById('similar-plans-row');
                d.similar.forEach(s => {
                    const m = meta[s];
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
            // FONCTIONS GLOBALES
            // ============================================================
            window.toggleFaq = function(btn) {
                const a   = btn.nextElementSibling;
                const open = btn.classList.toggle('open');
                a.style.display = open ? 'block' : 'none';
                if (open) {
                    setTimeout(() => btn.scrollIntoView({ behavior: 'smooth', block: 'nearest' }), 50);
                }
            };

            window.goToReservation = function(formule) {
                const key = getParam();
                localStorage.setItem('selectedPlan', key);
                if (formule) localStorage.setItem('selectedFormule', formule);
                window.location.href = "{{ route('reservation_step_1') }}?plan=" + key + (formule ? '&formule=' + formule : '');
            };

            // ============================================================
            // LANCEMENT
            // ============================================================
            init();
        });
    </script>

    <script>
        function shareOnFacebook()  { window.open("https://www.facebook.com/sharer/sharer.php?u=https://orekamobility.com", "_blank"); }
        function shareOnTwitter()   { window.open("https://twitter.com/intent/tweet?url=https://orekamobility.com&text={{ urlencode(App::getLocale() == 'fr' ? 'Découvrez OREKAMOBILITY !' : 'Discover OREKAMOBILITY!') }}", "_blank"); }
        function shareOnLinkedIn()  { window.open("https://www.linkedin.com/sharing/share-offsite/?url=https://orekamobility.com", "_blank"); }
        function shareOnInstagram() { window.open("https://instagram.com", "_blank"); }
        function shareOnWhatsApp() {
            const url  = "https://orekamobility.com";
            const text = "{{ App::getLocale() == 'fr' ? 'Découvrez OREKAMOBILITY !' : 'Discover OREKAMOBILITY!' }}";
            window.open(`https://wa.me/?text=${encodeURIComponent(text + " " + url)}`, "_blank");
        }
    </script>
@endpush
