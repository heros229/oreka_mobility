@extends('frontend.main_master')

@section('title') {{ __('step1.seo_title') }} @endsection
@section('description') {{ __('step1.seo_desc') }} @endsection

@push('links')
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/step1.css')}}">
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
                            <h1>{{ __('step1.hero_title') }} <span> {{ __('step1.hero_title_span') }}</span></h1>
                            <p>{{ __('step1.hero_subtitle') }}</p>
                        </div>
                        <div class="wizard-track">
                            <div class="wizard-step active">
                                <div class="wizard-step__dot">1</div>
                                <div class="wizard-step__label">{{ __('step1.step1_label') }}</div>
                            </div>
                            <div class="wizard-line"></div>
                            <div class="wizard-step">
                                <div class="wizard-step__dot">2</div>
                                <div class="wizard-step__label">{{ __('step1.step2_label') }}</div>
                            </div>
                            <div class="wizard-line"></div>
                            <div class="wizard-step">
                                <div class="wizard-step__dot">3</div>
                                <div class="wizard-step__label">{{ __('step1.step3_label') }}</div>
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

                    {{-- Badge plan sélectionné --}}
                    <div class="selected-plan-badge" id="plan-badge" style="display:none;">
                        <div class="spb-icon"><i id="badge-icon" class="bx bx-cycling"></i></div>
                        <div>
                            <h6 id="badge-title" style="color:white">{{ __('step1.badge_title') }}</h6>
                            <p id="badge-sub">{{ __('step1.badge_sub') }}</p>
                        </div>
                    </div>

                    {{-- Formulaire informations personnelles --}}
                    <div class="booking-card-new">
                        <div class="booking-card-new__header">
                            <div class="icon-wrap"><i class="bx bx-user"></i></div>
                            <h5>{{ __('step1.form_title') }}</h5>
                        </div>
                        <div class="booking-card-new__body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="field-group">
                                        <label>{{ __('step1.label_prenom') }} <span>*</span></label>
                                        <input type="text" class="field-input" id="f-prenom"
                                               placeholder="{{ __('step1.ph_prenom') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-group">
                                        <label>{{ __('step1.label_nom') }} <span>*</span></label>
                                        <input type="text" class="field-input" id="f-nom"
                                               placeholder="{{ __('step1.ph_nom') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-group">
                                        <label>Email <span>*</span></label>
                                        <input type="email" class="field-input" id="f-email"
                                               placeholder="{{ __('step1.ph_email') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="field-group">
                                        <label>{{ __('step1.label_phone') }} <span>*</span></label>
                                        <div class="field-input-wrap">
                                            <input type="text" class="field-input" id="f-phone"
                                                   placeholder="{{ __('step1.ph_phone') }}"
                                                   style="padding-right:44px;">
                                            <span class="field-icon"><i class="bx bx-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field-group" style="margin-bottom:0;">
                                        <label>{{ __('step1.label_notes') }}</label>
                                        <textarea class="field-input" id="f-notes" rows="4"
                                                  placeholder="{{ __('step1.ph_notes') }}"
                                                  style="resize:vertical;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Choix de la date --}}
                    <div class="booking-card-new">
                        <div class="booking-card-new__header">
                            <div class="icon-wrap"><i class="bx bx-calendar-event"></i></div>
                            <h5>{{ __('step1.date_title') }}</h5>
                        </div>
                        <div class="booking-card-new__body">
                            <div class="field-group" style="margin-bottom:0;">
                                <label>{{ __('step1.label_date') }} <span>*</span></label>
                                <div class="date-card">
                                    <div class="date-icon"><i class="bx bx-calendar"></i></div>
                                    <input type="text" class="datetimepicker" id="f-date"
                                           placeholder="{{ __('step1.ph_date') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Bouton continuer --}}
                    <div style="display:flex;justify-content:flex-end;padding-top:8px;">
                        <button class="btn-continue-new" id="continue-btn">
                            {{ __('step1.btn_continue') }} <i class="bx bx-right-arrow-alt"></i>
                        </button>
                    </div>

                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <div class="sidebar-info-card">
                        <div class="sic-header">
                            <h4 style="color:white">{{ __('step1.how_title') }}</h4>
                            <p>{{ __('step1.how_subtitle') }}</p>
                        </div>
                        <div class="sic-body">
                            <div class="sic-step">
                                <div class="step-num">1</div>
                                <div>
                                    <h6>{{ __('step1.how_step1_title') }}</h6>
                                    <p>{{ __('step1.how_step1_desc') }}</p>
                                </div>
                            </div>
                            <div class="sic-step">
                                <div class="step-num">2</div>
                                <div>
                                    <h6>{{ __('step1.how_step2_title') }}</h6>
                                    <p>{{ __('step1.how_step2_desc') }}</p>
                                </div>
                            </div>
                            <div class="sic-step">
                                <div class="step-num">3</div>
                                <div>
                                    <h6>{{ __('step1.how_step3_title') }}</h6>
                                    <p>{{ __('step1.how_step3_desc') }}</p>
                                </div>
                            </div>
                            <div class="sic-secure">
                                <i class="bx bx-shield-quarter" style="font-size:18px;"></i>
                                {{ __('step1.secure_label') }}
                            </div>
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

            // ── Labels des plans selon la langue ───────────────────────
            const PLAN_LABELS = {
                fr: {
                    'velo-sport':         { icon: 'bx bx-run',       title: 'Vélo Sport',            sub: 'Séance de sport · 3 000 F / séance'    },
                    'randonnee':          { icon: 'bx bx-map',        title: 'Randonner à Vélo',      sub: 'Circuit 30–43 km · 6 000 F adulte'     },
                    'tourisme':           { icon: 'bx bx-landmark',   title: 'Vélo Tourisme',         sub: 'Visite guidée · 30 000 F / inscription' },
                    'tourisme-prestige':  { icon: 'bx bx-landmark',   title: 'Vélo Tourisme — Formule Prestige', sub: 'Visite guidée · 14 000 F / inscription' },
                    'tourisme-vip':       { icon: 'bx bx-landmark',   title: 'Vélo Tourisme — Formule VIP',      sub: 'Visite guidée · 30 000 F / inscription' },
                    'apprentissage':      { icon: 'bx bx-chalkboard', title: 'Apprentissage du Vélo', sub: 'Vélo École Adulte & Kids'              },
                },
                en: {
                    'velo-sport':         { icon: 'bx bx-run',       title: 'Sport Cycling',   sub: 'Sport session · 3,000 F / session'      },
                    'randonnee':          { icon: 'bx bx-map',        title: 'Cycling Trail',   sub: '30–43 km circuit · 6,000 F adult'       },
                    'tourisme':           { icon: 'bx bx-landmark',   title: 'Cycling Tourism', sub: 'Guided tour · 30,000 F / registration'  },
                    'tourisme-prestige':  { icon: 'bx bx-landmark',   title: 'Cycling Tourism — Prestige Formula', sub: 'Guided tour · 14,000 F / registration' },
                    'tourisme-vip':       { icon: 'bx bx-landmark',   title: 'Cycling Tourism — VIP Formula',      sub: 'Guided tour · 30,000 F / registration' },
                    'apprentissage':      { icon: 'bx bx-chalkboard', title: 'Learn to Cycle',  sub: 'Cycling School Adults & Kids'           },
                },
            };

            // ── Détection du plan ───────────────────────────────────────
            const urlPlan    = new URLSearchParams(window.location.search).get('plan');
            const urlFormule = new URLSearchParams(window.location.search).get('formule');

            if (urlPlan) localStorage.setItem('selectedPlan', urlPlan);
            if (urlFormule) localStorage.setItem('selectedFormule', urlFormule);

            const planKey    = urlPlan    || localStorage.getItem('selectedPlan');
            const formuleKey = urlFormule || localStorage.getItem('selectedFormule');

            // Clé composite pour le tourisme
            const badgeKey = (planKey === 'tourisme' && formuleKey)
                ? `tourisme-${formuleKey}`
                : planKey;

            // ── Affichage du badge plan ─────────────────────────────────
            if (badgeKey && PLAN_LABELS[LOCALE][badgeKey]) {
                const pl = PLAN_LABELS[LOCALE][badgeKey];
                document.getElementById('plan-badge').style.display = 'flex';
                document.getElementById('badge-icon').className     = pl.icon;
                document.getElementById('badge-title').innerHTML    = pl.title;
                document.getElementById('badge-sub').innerHTML      = pl.sub;
            }


            /*if (planKey && PLAN_LABELS[LOCALE][planKey]) {
                const pl = PLAN_LABELS[LOCALE][planKey];
                document.getElementById('plan-badge').style.display  = 'flex';
                document.getElementById('badge-icon').className      = pl.icon;
                document.getElementById('badge-title').textContent   = pl.title;
                document.getElementById('badge-sub').textContent     = pl.sub;
            }*/

            // ── Gestion du champ téléphone ──────────────────────────────
            const phone = document.getElementById('f-phone');
            phone.addEventListener('focus', () => { if (!phone.value) phone.value = '01'; });
            phone.addEventListener('input', () => {
                let v = phone.value.replace(/[^0-9]/g, '');
                if (!v.startsWith('01')) v = '01' + v.replace(/^01/, '');
                if (v.length > 10) v = v.substring(0, 10);
                phone.value = v;
            });
            phone.addEventListener('keydown', e => {
                if ((e.key === 'Backspace' || e.key === 'Delete') && phone.value.length <= 2) {
                    e.preventDefault();
                    phone.value = '01';
                }
            });

            // ── Restauration des données sauvegardées ───────────────────
            const saved = JSON.parse(localStorage.getItem('reservationStep1') || '{}');
            if (saved.firstName) {
                document.getElementById('f-prenom').value = saved.firstName;
                document.getElementById('f-nom').value    = saved.lastName;
                document.getElementById('f-email').value  = saved.email;
                phone.value = saved.phone || '';
                document.getElementById('f-notes').value  = saved.additionalInfo || '';
                document.getElementById('f-date').value   = saved.startDate || '';
            }

            // ── Bouton Continuer ────────────────────────────────────────
            document.getElementById('continue-btn').addEventListener('click', function () {
                const fields = [
                    { el: document.getElementById('f-prenom'), check: v => v.trim() },
                    { el: document.getElementById('f-nom'),    check: v => v.trim() },
                    { el: document.getElementById('f-email'),  check: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()) }, // ← remplace v.trim()
                    { el: phone,                               check: v => v.length >= 10 },
                    { el: document.getElementById('f-date'),   check: v => v.trim() },
                ];

                let first = null;
                fields.forEach(f => {
                    f.el.classList.remove('error');
                    if (!f.check(f.el.value)) {
                        f.el.classList.add('error');
                        if (!first) first = f.el;
                    }
                });

                if (first) {
                    first.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    first.focus();
                    return;
                }

                localStorage.setItem('reservationStep1', JSON.stringify({
                    firstName:      document.getElementById('f-prenom').value,
                    lastName:       document.getElementById('f-nom').value,
                    email:          document.getElementById('f-email').value,
                    phone:          phone.value,
                    additionalInfo: document.getElementById('f-notes').value,
                    startDate:      document.getElementById('f-date').value,
                    savedAt:        new Date().toISOString(),
                }));

                const plan = localStorage.getItem('selectedPlan') || 'velo-sport';
                window.location.href = "{{ route('reservation_step_2') }}?plan=" + plan;
            });
        });
    </script>
@endpush
