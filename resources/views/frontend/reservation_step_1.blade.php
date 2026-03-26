@extends('frontend.main_master')

@section('title') Réservation | Oreka Mobility @endsection

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

    <!-- Breadscrumb Section -->
    <!-- Breadscrumb Section -->
    <div class="breadcrumb-bar" style="margin-bottom: 100px">
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-md-12 col-12">
                    <div class="hero-strip-inner">
                        <div class="hero-strip-text">
                            <h1>Réservez votre <span>activité vélo</span></h1>
                            <p>Quelques informations suffisent pour démarrer votre aventure</p>
                        </div>
                        <div class="wizard-track">
                            <div class="wizard-step active"><div class="wizard-step__dot">1</div><div class="wizard-step__label">Informations</div></div>
                            <div class="wizard-line"></div>
                            <div class="wizard-step"><div class="wizard-step__dot">2</div><div class="wizard-step__label">Formule</div></div>
                            <div class="wizard-line"></div>
                            <div class="wizard-step"><div class="wizard-step__dot">3</div><div class="wizard-step__label">Confirmation</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadscrumb Section -->
    <!-- /Breadscrumb Section -->

{{--<div class="booking-hero-strip">
    <div class="container">
        <div class="hero-strip-inner">
            <div class="hero-strip-text">
                <h1>Réservez votre <span>activité vélo</span></h1>
                <p>Quelques informations suffisent pour démarrer votre aventure</p>
            </div>
            <div class="wizard-track">
                <div class="wizard-step active"><div class="wizard-step__dot">1</div><div class="wizard-step__label">Informations</div></div>
                <div class="wizard-line"></div>
                <div class="wizard-step"><div class="wizard-step__dot">2</div><div class="wizard-step__label">Formule</div></div>
                <div class="wizard-line"></div>
                <div class="wizard-step"><div class="wizard-step__dot">3</div><div class="wizard-step__label">Confirmation</div></div>
            </div>
        </div>
    </div>
</div>--}}


<div class="booking-layout">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="selected-plan-badge" id="plan-badge" style="display:none;">
                    <div class="spb-icon"><i id="badge-icon" class="bx bx-cycling"></i></div>
                    <div>
                        <h6 id="badge-title" style="color: white">Plan sélectionné</h6>
                        <p id="badge-sub">Modifiez depuis la page des tarifs</p>
                    </div>
                </div>

                <div class="booking-card-new">
                    <div class="booking-card-new__header">
                        <div class="icon-wrap"><i class="bx bx-user"></i></div>
                        <h5>Informations personnelles</h5>
                    </div>
                    <div class="booking-card-new__body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field-group">
                                    <label>Prénom <span>*</span></label>
                                    <input type="text" class="field-input" id="f-prenom" placeholder="Votre prénom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group">
                                    <label>Nom <span>*</span></label>
                                    <input type="text" class="field-input" id="f-nom" placeholder="Votre nom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group">
                                    <label>Email <span>*</span></label>
                                    <input type="email" class="field-input" id="f-email" placeholder="votre@email.com">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-group">
                                    <label>Téléphone <span>*</span></label>
                                    <div class="field-input-wrap">
                                        <input type="text" class="field-input" id="f-phone" placeholder="Entrez votre numéro" style="padding-right:44px;">
                                        <span class="field-icon"><i class="bx bx-phone"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="field-group" style="margin-bottom:0;">
                                    <label>Informations complémentaires</label>
                                    <textarea class="field-input" id="f-notes" rows="4" placeholder="Allergies, demandes spéciales, nombre de participants…" style="resize:vertical;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="booking-card-new">
                    <div class="booking-card-new__header">
                        <div class="icon-wrap"><i class="bx bx-calendar-event"></i></div>
                        <h5>Choisissez votre date</h5>
                    </div>
                    <div class="booking-card-new__body">
                        <div class="field-group" style="margin-bottom:0;">
                            <label>Date souhaitée <span>*</span></label>
                            <div class="date-card">
                                <div class="date-icon"><i class="bx bx-calendar"></i></div>
                                <input type="text" class="datetimepicker" id="f-date" placeholder="Sélectionnez une date">
                            </div>
                        </div>
                    </div>
                </div>

                <div style="display:flex;justify-content:flex-end;padding-top:8px;">
                    <button class="btn-continue-new" id="continue-btn">
                        Continuer <i class="bx bx-right-arrow-alt"></i>
                    </button>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="sidebar-info-card">
                    <div class="sic-header">
                        <h4 style="color: white">Comment ça marche ?</h4>
                        <p>Réservation en 3 étapes simples</p>
                    </div>
                    <div class="sic-body">
                        <div class="sic-step"><div class="step-num">1</div><div><h6>Vos informations</h6><p>Renseignez vos coordonnées et choisissez une date.</p></div></div>
                        <div class="sic-step"><div class="step-num">2</div><div><h6>Choisissez votre formule</h6><p>Sélectionnez le nombre de places ou d'heures.</p></div></div>
                        <div class="sic-step"><div class="step-num">3</div><div><h6>Paiement & confirmation</h6><p>Payez via FedaPay. Confirmation instantanée par email.</p></div></div>
                        <div class="sic-secure"><i class="bx bx-shield-quarter" style="font-size:18px;"></i> Paiement 100% sécurisé · Données protégées</div>
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
    const PLAN_LABELS = {
        'velo-sport':    {icon:'bx bx-run',       title:'Vélo Sport',            sub:'Séance de sport · 3 000 F / séance'},
        'randonnee':     {icon:'bx bx-map',        title:'Randonner à Vélo',      sub:'Circuit 30–43 km · 6 000 F adulte'},
        'tourisme':      {icon:'bx bx-landmark',   title:'Vélo Tourisme',         sub:'Visite guidée · 30 000 F / inscription'},
        'apprentissage': {icon:'bx bx-chalkboard', title:'Apprentissage du Vélo', sub:'Vélo École Adulte & Kids'},
    };

    const urlPlan = new URLSearchParams(window.location.search).get('plan');
    if (urlPlan) localStorage.setItem('selectedPlan', urlPlan);
    const planKey = urlPlan || localStorage.getItem('selectedPlan');

    if (planKey && PLAN_LABELS[planKey]) {
        const pl = PLAN_LABELS[planKey];
        document.getElementById('plan-badge').style.display = 'flex';
        document.getElementById('badge-icon').className = pl.icon;
        document.getElementById('badge-title').textContent = pl.title;
        document.getElementById('badge-sub').textContent   = pl.sub;
    }

    const phone = document.getElementById('f-phone');
    phone.addEventListener('focus', () => { if (!phone.value) phone.value = '01'; });
    phone.addEventListener('input', () => {
        let v = phone.value.replace(/[^0-9]/g,'');
        if (!v.startsWith('01')) v = '01' + v.replace(/^01/,'');
        if (v.length > 10) v = v.substring(0,10);
        phone.value = v;
    });
    phone.addEventListener('keydown', e => {
        if ((e.key==='Backspace'||e.key==='Delete') && phone.value.length<=2) { e.preventDefault(); phone.value='01'; }
    });

    const saved = JSON.parse(localStorage.getItem('reservationStep1')||'{}');
    if (saved.firstName) {
        document.getElementById('f-prenom').value = saved.firstName;
        document.getElementById('f-nom').value    = saved.lastName;
        document.getElementById('f-email').value  = saved.email;
        phone.value = saved.phone || '';
        document.getElementById('f-notes').value  = saved.additionalInfo || '';
        document.getElementById('f-date').value   = saved.startDate || '';
    }

    document.getElementById('continue-btn').addEventListener('click', function() {
        const fields = [
            {el:document.getElementById('f-prenom'), check:v=>v.trim()},
            {el:document.getElementById('f-nom'),    check:v=>v.trim()},
            {el:document.getElementById('f-email'),  check:v=>v.trim()},
            {el:phone,                               check:v=>v.length>=10},
            {el:document.getElementById('f-date'),   check:v=>v.trim()},
        ];
        let first = null;
        fields.forEach(f => {
            f.el.classList.remove('error');
            if (!f.check(f.el.value)) { f.el.classList.add('error'); if (!first) first = f.el; }
        });
        if (first) { first.scrollIntoView({behavior:'smooth',block:'center'}); first.focus(); return; }
        localStorage.setItem('reservationStep1', JSON.stringify({
            firstName:document.getElementById('f-prenom').value,
            lastName:document.getElementById('f-nom').value,
            email:document.getElementById('f-email').value,
            phone:phone.value,
            additionalInfo:document.getElementById('f-notes').value,
            startDate:document.getElementById('f-date').value,
            savedAt:new Date().toISOString()
        }));
        const plan = localStorage.getItem('selectedPlan') || 'velo-sport';
        window.location.href = "{{ route('reservation_step_2') }}?plan=" + plan;
    });
});
</script>
@endpush
