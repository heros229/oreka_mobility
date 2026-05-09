@extends('frontend.main_master')

@section('title') {{ __('step2.seo_title') }} @endsection
@section('description') {{ __('step2.seo_desc') }} @endsection

@push('links')
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/step2.css')}}">
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

    <!-- Breadcrumb Section -->
    <div class="breadcrumb-bar" style="margin-bottom: 100px">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <div class="hero-strip-inner">
                        <div class="hero-strip-text">
                            <h1>{{ __('step2.hero_title') }} <span>{{ __('step2.hero_title_span') }}</span></h1>
                            <p>{{ __('step2.hero_subtitle') }}</p>
                        </div>
                        <div class="wizard-track">
                            <div class="wizard-step done">
                                <div class="wizard-step__dot"><i class="bx bx-check" style="font-size:18px;"></i></div>
                                <div class="wizard-step__label">{{ __('step2.step1_label') }}</div>
                            </div>
                            <div class="wizard-line done"></div>
                            <div class="wizard-step active">
                                <div class="wizard-step__dot">2</div>
                                <div class="wizard-step__label">{{ __('step2.step2_label') }}</div>
                            </div>
                            <div class="wizard-line"></div>
                            <div class="wizard-step">
                                <div class="wizard-step__dot">3</div>
                                <div class="wizard-step__label">{{ __('step2.step3_label') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb Section -->

    <div class="booking-layout">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    {{-- Bannière plan actif --}}
                    <div class="plan-banner-new d-none">
                        <div class="pbn-icon"><i id="pbn-icon" class="bx bx-cycling"></i></div>
                        <div class="pbn-text">
                            <h5 id="pbn-title">{{ __('step2.pbn_loading') }}</h5>
                            <p id="pbn-sub"></p>
                        </div>
                        <a href="{{ route('accueil') }}#pricing" class="pbn-change" style="color:black">
                            <i class="bx bx-transfer-alt me-1"></i>{{ __('step2.pbn_change') }}
                        </a>
                    </div>

                    {{-- Carte location quotidienne --}}
                    <div class="offer-card">
                        <div class="offer-card__header">
                            <div class="icon-wrap"><i class="bx bx-time-five"></i></div>
                            <div>
                                <h5>{{ __('step2.daily_title') }}</h5>
                                <div class="sub">{{ __('step2.daily_sub') }}</div>
                            </div>
                        </div>
                        <div class="info-note-new">
                            <i class="bx bx-info-circle"></i>
                            <div><strong>{{ __('step2.delay_label') }}</strong> {{ __('step2.delay_note') }}</div>
                        </div>
                        <div class="offer-list" id="list-duree"></div>
                    </div>

                    {{-- Carte offres du plan --}}
                    <div class="offer-card d-none">
                        <div class="offer-card__header">
                            <div class="icon-wrap"><i class="bx bx-star"></i></div>
                            <div>
                                <h5 id="plan-section-title">—</h5>
                                <div class="sub" id="plan-section-sub"></div>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <div class="sidebar-new">

                        {{-- Infos client --}}
                        <div class="client-card">
                            <div class="client-card__header">
                                <i class="bx bx-user-circle"></i>
                                <h6>{{ __('step2.client_title') }}</h6>
                            </div>
                            <div class="client-card__body" id="client-info"></div>
                        </div>

                        {{-- Récapitulatif --}}
                        <div class="recap-card">
                            <div class="recap-card__header">
                                <h6>{{ __('step2.recap_title') }}</h6>
                                <span id="recap-count" style="font-size:12px;color:var(--muted);">0 {{ __('step2.recap_offer') }}</span>
                            </div>
                            <div id="recap-body">
                                <div class="recap-empty">
                                    <i class="bx bx-cart"></i>{{ __('step2.recap_empty') }}
                                </div>
                            </div>
                        </div>

                        {{-- Total --}}
                        <div class="total-strip">
                            <span class="t-label">{{ __('step2.total_label') }}</span>
                            <span class="t-amount" id="total-price">0 F</span>
                        </div>

                        {{-- Boutons --}}
                        <div style="display:flex;gap:10px;">
                            <a href="{{ route('reservation_step_1') }}" class="btn-back-new">
                                <i class="bx bx-left-arrow-alt"></i> {{ __('step2.btn_back') }}
                            </a>
                            <button class="btn-pay-new" id="continue-btn">
                                {{ __('step2.btn_pay') }} <i class="bx bx-lock-alt"></i>
                            </button>
                        </div>
                        <div style="text-align:center;margin-top:12px;font-size:12px;color:var(--muted);display:flex;align-items:center;justify-content:center;gap:6px;">
                            <i class="bx bx-shield-quarter" style="color:var(--g2);font-size:16px;"></i>
                            {{ __('step2.secure_label') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // ── Langue active injectée par Laravel ──────────────────────
            const LOCALE = '{{ App::getLocale() }}'; // 'fr' ou 'en'

            // ── Libellés UI selon la langue ─────────────────────────────
            const UI = {
                fr: {
                    recapEmpty:    'Aucune offre sélectionnée',
                    offerSingular: 'offre',
                    offerPlural:   'offres',
                    clientNone:    'Aucune info disponible.',
                    clientName:    'Client',
                    clientPhone:   'Téléphone',
                    clientDate:    'Date',
                    clientNotes:   'Notes',
                    btnPay:        'Payer <i class="bx bx-lock-alt"></i>',
                    btnProcessing: '<i class="bx bx-loader-alt bx-spin"></i> Traitement…',
                    errorNet:      'Erreur réseau.',
                    errorPfx:      'Erreur : ',
                },
                en: {
                    recapEmpty:    'No offer selected',
                    offerSingular: 'offer',
                    offerPlural:   'offers',
                    clientNone:    'No information available.',
                    clientName:    'Client',
                    clientPhone:   'Phone',
                    clientDate:    'Date',
                    clientNotes:   'Notes',
                    btnPay:        'Pay<i class="bx bx-lock-alt"></i>',
                    btnProcessing: ' Processing…',
                    errorNet:      'Network error.',
                    errorPfx:      'Error: ',
                },
            };
            const T = UI[LOCALE] || UI.fr;

            // ── Données des plans — bilingue ────────────────────────────
            const PLANS_DATA = {
                fr: {
                    'velo-sport': {
                        icon: 'bx bx-run', title: 'Vélo Sport',
                        sub: 'Séance de sport · 1h · Coach professionnel',
                        sectionTitle: 'Offres Vélo Sport',
                        sectionSub:   '3 000 F / séance · Abonnement 12 000 F',
                        offres: [
                            { id:'vs-seance',     name:"Vélo Sport — Séance individuelle", price:3000,  unit:'/ séance', desc:'Durée 1h · 10 places',            avantages:["Vélo","Casque","Bouteille d'eau","Coach pro"], max:10 },
                            { id:'vs-abonnement', name:"Vélo Sport — Abonnement mensuel",  price:12000, unit:'/ mois',   desc:'Accès illimité au mois · -33%',   avantages:["Vélo","Casque","Bouteille d'eau","Coach pro"], max:5  },
                        ],
                    },
                    'randonnee': {
                        icon: 'bx bx-map', title: 'Randonner à Vélo',
                        sub: 'Circuit 30–43 km · 3h · Famille ou amis',
                        sectionTitle: 'Offres Randonnée',
                        sectionSub:   '6 000 F adulte · 3 000 F enfant',
                        offres: [
                            { id:'rand-adulte', name:"Randonnée — Adulte",            price:6000, unit:'/ personne', desc:'3h · 30–43 km · 10 places',     avantages:["Vélo","Casque","Eau","Superviseur","Éclairage","Antivol","Pompe"], max:10 },
                            { id:'rand-enfant', name:"Randonnée — Enfant (10–15 ans)",price:3000, unit:'/ enfant',   desc:'3h · Tarif réduit · 10 places',  avantages:["Vélo adapté","Casque","Eau","Superviseur","Éclairage","Antivol","Pompe"], max:10 },
                        ],
                    },
                    'tourisme': {
                        icon: 'bx bx-landmark', title: 'Vélo Tourisme',
                        sub: 'Visite guidée Cotonou · Ouidah · Porto-Novo',
                        sectionTitle: 'Offres Vélo Tourisme',
                        sectionSub:   '30 000 F / inscription · Repas local inclus',
                        offres: [
                            { id:'tour-inscription', name:"Vélo Tourisme — Inscription", price:30000, unit:'/ personne', desc:'4h · Sites historiques + repas · 10 places', avantages:["Vélo","Casque","Eau","Guide pro","Éclairage","Antivol","Pompe","Repas"], max:10 },
                        ],
                    },
                    'apprentissage': {
                        icon: 'bx bx-chalkboard', title: 'Apprentissage du Vélo',
                        sub: 'Vélo École Adulte & Kids · Moniteurs diplômés',
                        sectionTitle: 'Offres Vélo École',
                        sectionSub:   '15 000 F adulte · 10 000 F kids · 3 séances incluses',
                        offres: [
                            { id:'app-adulte', name:"Vélo École Adulte", price:15000, unit:'/ pack', desc:'3 séances de 1h30 · Adultes',          avantages:["Vélo adapté","Casque","Moniteur diplômé","3 séances"], max:5 },
                            { id:'app-kids',   name:"Vélo École Kids",   price:10000, unit:'/ pack', desc:'3 séances de 45 min · Dès 2 ans et demi', avantages:["Vélo adapté","Casque","Moniteur diplômé","3 séances"], max:5 },
                        ],
                    },
                },
                en: {
                    'velo-sport': {
                        icon: 'bx bx-run', title: 'Sport Cycling',
                        sub: 'Sport session · 1h · Professional coach',
                        sectionTitle: 'Sport Cycling Offers',
                        sectionSub:   '3,000 F / session · Subscription 12,000 F',
                        offres: [
                            { id:'vs-seance',     name:"Sport Cycling - Single session",       price:3000,  unit:'/ session', desc:'1h duration · 10 spots',              avantages:['Bike','Helmet','Water bottle','Pro coach'], max:10 },
                            { id:'vs-abonnement', name:"Sport Cycling - Monthly subscription", price:12000, unit:'/ month',   desc:'Unlimited access for the month · -33%',avantages:['Bike','Helmet','Water bottle','Pro coach'], max:5  },
                        ],
                    },
                    'randonnee': {
                        icon: 'bx bx-map', title: 'Cycling Trail',
                        sub: '30–43 km circuit · 3h · Family or friends',
                        sectionTitle: 'Trail Offers',
                        sectionSub:   '6,000 F adult · 3,000 F child',
                        offres: [
                            { id:'rand-adulte', name:"Trail - Adult",              price:6000, unit:'/ person', desc:'3h · 30–43 km · 10 spots',    avantages:['Bike','Helmet','Water','Supervisor','Lighting','Lock','Pump'], max:10 },
                            { id:'rand-enfant', name:"Trail - Child (ages 10–15)", price:3000, unit:'/ child',  desc:'3h · Reduced rate · 10 spots', avantages:['Adapted bike','Helmet','Water','Supervisor','Lighting','Lock','Pump'], max:10 },
                        ],
                    },
                    'tourisme': {
                        icon: 'bx bx-landmark', title: 'Cycling Tourism',
                        sub: 'Guided tour Cotonou · Ouidah · Porto-Novo',
                        sectionTitle: 'Cycling Tourism Offers',
                        sectionSub:   '30,000 F / registration · Local meal included',
                        offres: [
                            { id:'tour-inscription', name:"Cycling Tourism - Registration", price:30000, unit:'/ person', desc:'4h · Historic sites + meal · 10 spots', avantages:['Bike','Helmet','Water','Pro guide','Lighting','Lock','Pump','Meal'], max:10 },
                        ],
                    },
                    'apprentissage': {
                        icon: 'bx bx-chalkboard', title: 'Learn to Cycle',
                        sub: 'Cycling School Adults & Kids · Qualified instructors',
                        sectionTitle: 'Cycling School Offers',
                        sectionSub:   '15,000 F adult · 10,000 F kids · 3 sessions included',
                        offres: [
                            { id:'app-adulte', name:"Cycling School - Adult", price:15000, unit:'/ pack', desc:'3 sessions of 1h30 · Adults',        avantages:['Adapted bike','Helmet','Qualified instructor','3 sessions'], max:5 },
                            { id:'app-kids',   name:"Cycling School - Kids",  price:10000, unit:'/ pack', desc:'3 sessions of 45 min · From age 2.5',avantages:['Adapted bike','Helmet','Qualified instructor','3 sessions'], max:5 },
                        ],
                    },
                },
            };

            // ── Offres de location à la durée — bilingue ────────────────
            const DUREE = {
                fr: [
                    { id:'d-1h', name:'Location 1 heure',  price:1000, unit:'+ 15 min offertes', desc:'Temps bonus inclus', avantages:[], max:10 },
                    { id:'d-2h', name:'Location 2 heures', price:2500, unit:'+ 30 min offertes', desc:'Temps bonus inclus', avantages:[], max:10 },
                    { id:'d-3h', name:'Location 3 heures', price:3500, unit:'+ 30 min offertes', desc:'Temps bonus inclus', avantages:[], max:10 },
                ],
                en: [
                    { id:'d-1h', name:'1-hour rental', price:1000, unit:'+ 15 min free', desc:'Bonus time included', avantages:[], max:10 },
                    { id:'d-2h', name:'2-hour rental', price:2500, unit:'+ 30 min free', desc:'Bonus time included', avantages:[], max:10 },
                    { id:'d-3h', name:'3-hour rental', price:3500, unit:'+ 30 min free', desc:'Bonus time included', avantages:[], max:10 },
                ],
            };

            // ── Init ────────────────────────────────────────────────────
            let qty = {};
            const urlPlan  = new URLSearchParams(window.location.search).get('plan');
            const planKey  = urlPlan || localStorage.getItem('selectedPlan') || 'velo-sport';
            const plan     = PLANS_DATA[LOCALE][planKey] || PLANS_DATA[LOCALE]['velo-sport'];
            const duree    = DUREE[LOCALE];
            const s1       = JSON.parse(localStorage.getItem('reservationStep1') || '{}');

            // Bannière plan
            document.getElementById('pbn-icon').className          = plan.icon;
            document.getElementById('pbn-title').textContent       = plan.title;
            document.getElementById('pbn-sub').textContent         = plan.sub;
            document.getElementById('plan-section-title').textContent = plan.sectionTitle;
            document.getElementById('plan-section-sub').textContent   = plan.sectionSub;

            // Infos client
            const $ci = $('#client-info');
            $ci.empty();

            if (s1.firstName) {
                const rows = [
                    { lbl: T.clientName,  val: s1.firstName + ' ' + s1.lastName },
                    { lbl: 'Email',       val: s1.email },
                    { lbl: T.clientPhone, val: s1.phone },
                    { lbl: T.clientDate,  val: s1.startDate || '—' },
                ];

                if (s1.additionalInfo) {
                    rows.push({ lbl: T.clientNotes, val: s1.additionalInfo });
                }

                rows.forEach(row => {
                    $ci.append(
                        $('<div>').addClass('client-row').append(
                            $('<span>').addClass('lbl').text(row.lbl),
                            $('<span>').addClass('val').text(row.val)
                        )
                    );
                });

            } else {
                $ci.append(
                    $('<div>').css({ padding: '12px', fontSize: '13px', color: 'var(--muted)' }).text(T.clientNone)
                );
            }

            // ── Rendu d'une ligne d'offre ───────────────────────────────
            function renderLine(o) {
                qty[o.id] = 0;
                const tags = (o.avantages || []).map(a => `<span class="offer-tag">${a}</span>`).join('');
                return `
        <div class="offer-line" id="line-${o.id}">
            <div class="offer-line__info">
                <p class="offer-line__name">${o.name}</p>
                <p class="offer-line__desc">${o.desc}</p>
                ${tags ? `<div class="offer-tags">${tags}</div>` : ''}
            </div>
            <div class="offer-line__price">
                <span class="amount">${o.price.toLocaleString('fr-FR')} F</span>
                <span class="unit">${o.unit}</span>
            </div>
            <div class="qty-wrap" id="qw-${o.id}">
                <button class="qty-btn-new qty-minus" data-id="${o.id}" disabled>−</button>
                <span class="qty-val" id="qv-${o.id}">0</span>
                <button class="qty-btn-new qty-plus" data-id="${o.id}">+</button>
            </div>
        </div>`;
            }

            duree.forEach(o => {
                qty[o.id] = 0;
                const $line = $('<div>').addClass('offer-line').attr('id', 'line-' + o.id).append(
                    $('<div>').addClass('offer-line__info').append(
                        $('<p>').addClass('offer-line__name').text(o.name),
                        $('<p>').addClass('offer-line__desc').text(o.desc),
                        o.avantages && o.avantages.length
                            ? $('<div>').addClass('offer-tags').append(
                                o.avantages.map(a => $('<span>').addClass('offer-tag').text(a))
                            )
                            : null
                    ),
                    $('<div>').addClass('offer-line__price').append(
                        $('<span>').addClass('amount').text(o.price.toLocaleString('fr-FR') + ' F'),
                        $('<span>').addClass('unit').text(o.unit)
                    ),
                    $('<div>').addClass('qty-wrap').attr('id', 'qw-' + o.id).append(
                        $('<button>').addClass('qty-btn-new qty-minus').attr({'data-id': o.id, disabled: true}).html('−'),
                        $('<span>').addClass('qty-val').attr('id', 'qv-' + o.id).text('0'),
                        $('<button>').addClass('qty-btn-new qty-plus').attr('data-id', o.id).text('+')
                    )
                );
                $('#list-duree').append($line);
            });

            plan.offres.forEach(o => {
                qty[o.id] = 0;
                const $line = $('<div>').addClass('offer-line').attr('id', 'line-' + o.id).append(
                    $('<div>').addClass('offer-line__info').append(
                        $('<p>').addClass('offer-line__name').html(o.name),
                        $('<p>').addClass('offer-line__desc').html(o.desc),
                        o.avantages && o.avantages.length
                            ? $('<div>').addClass('offer-tags').append(
                                o.avantages.map(a => $('<span>').addClass('offer-tag').text(a))
                            )
                            : null
                    ),
                    $('<div>').addClass('offer-line__price').append(
                        $('<span>').addClass('amount').text(o.price.toLocaleString('fr-FR') + ' F'),
                        $('<span>').addClass('unit').text(o.unit)
                    ),
                    $('<div>').addClass('qty-wrap').attr('id', 'qw-' + o.id).append(
                        $('<button>').addClass('qty-btn-new qty-minus').attr({'data-id': o.id, disabled: true}).html('−'),
                        $('<span>').addClass('qty-val').attr('id', 'qv-' + o.id).text('0'),
                        $('<button>').addClass('qty-btn-new qty-plus').attr('data-id', o.id).text('+')
                    )
                );
                $('#list-plan').append($line);
            });

            const all = [...duree, ...plan.offres];

            // ── Gestion des quantités ───────────────────────────────────
            document.addEventListener('click', e => {
                const btn = e.target.closest('.qty-plus,.qty-minus');
                if (!btn) return;
                const id  = btn.getAttribute('data-id');
                const o   = all.find(x => x.id === id); if (!o) return;
                const isP = btn.classList.contains('qty-plus');
                const cur = qty[id] || 0;
                const max = o.max || 10;
                if (isP  && cur < max) qty[id] = cur + 1;
                if (!isP && cur > 0)  qty[id] = cur - 1;
                const v = qty[id];
                document.getElementById('qv-' + id).textContent = v;
                document.querySelector(`.qty-minus[data-id="${id}"]`).disabled = (v === 0);
                document.querySelector(`.qty-plus[data-id="${id}"]`).disabled  = (v >= max);
                document.getElementById('qw-' + id).classList.toggle('active', v > 0);
                updateRecap();
            });

            // ── Récapitulatif ───────────────────────────────────────────
            function updateRecap() {
                const $body = $('#recap-body');
                $body.empty();
                let total = 0, count = 0;

                all.forEach(o => {
                    const q = qty[o.id] || 0;
                    if (q > 0) {
                        count++;
                        const sub = o.price * q;
                        total += sub;

                        $body.append(
                            $('<div>').addClass('recap-item').append(
                                $('<button>').addClass('ri-remove').html('&times;').on('click', function() {
                                    resetQty(o.id);
                                }),
                                $('<span>').addClass('ri-name').text(o.name),
                                $('<span>').addClass('ri-qty').html('×' + q),
                                $('<span>').addClass('ri-price').text(sub.toLocaleString('fr-FR') + ' F')
                            )
                        );
                    }
                });

                if (count === 0) {
                    $body.append(
                        $('<div>').addClass('recap-empty').append(
                            $('<i>').addClass('bx bx-cart'),
                            $('<span>').text(T.recapEmpty)
                        )
                    );
                }

                $('#recap-count').text(count + ' ' + (count > 1 ? T.offerPlural : T.offerSingular));
                $('#total-price').text(total.toLocaleString('fr-FR') + ' F');
            }

            window.resetQty = function(id) {
                qty[id] = 0;
                $('#qv-' + id).text('0');
                $('#qw-' + id).removeClass('active');
                $('.qty-minus[data-id="' + id + '"]').prop('disabled', true);
                $('.qty-plus[data-id="' + id + '"]').prop('disabled', false);
                updateRecap();
            };

            // ── Bouton Payer ────────────────────────────────────────────
            $('#continue-btn').on('click', function () {
                const $btn = $(this);
                const sel  = [];

                all.forEach(o => {
                    const q = qty[o.id] || 0;
                    if (q > 0) sel.push({ name: o.name, price: o.price * q, qty: q, unitPrice: o.price });
                });

                if (sel.length === 0) {
                    const $rb = $('#recap-body');
                    $rb.css({ outline: '2px solid #e53e3e', borderRadius: '8px' });
                    setTimeout(() => $rb.css({ outline: '', borderRadius: '' }), 2000);
                    return;
                }

                const total = sel.reduce((s, x) => s + x.price, 0);
                localStorage.setItem('reservationStep2', JSON.stringify({
                    services: sel, totalAmount: total, plan: planKey, savedAt: new Date().toISOString()
                }));

                $btn.html(T.btnProcessing).prop('disabled', true);

                $.ajax({
                    url:         '{{ route("location_reservation_step_3") }}',
                    method:      'POST',
                    contentType: 'application/json',
                    headers:     { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    data:        JSON.stringify({
                        firstName:        s1.firstName,
                        lastName:         s1.lastName,
                        email:            s1.email,
                        phone:            s1.phone,
                        additionalInfo:   s1.additionalInfo,
                        startDate:        s1.startDate,
                        selectedServices: sel,
                        totalAmount:      total,
                    }),
                    success: function (d) {
                        if (d.success) {
                            window.location.href = d.checkout_url;
                        } else {
                            alert(T.errorPfx + d.message);
                            $btn.html(T.btnPay).prop('disabled', false);
                        }
                    },
                    error: function () {
                        alert(T.errorNet);
                        $btn.html(T.btnPay).prop('disabled', false);
                    },
                });
            });
        });
    </script>
@endpush
