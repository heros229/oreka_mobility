@extends('frontend.main_master')

@section('title') Réservation confirmée | Oreka Mobility @endsection
@section('description') Votre réservation a été confirmée avec succès. @endsection

@push('links')
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/step3.css')}}">
@endpush

@section('content')

{{-- Confetti --}}
<div class="confetti-wrap" id="confetti"></div>

{{-- HERO --}}
<div class="success-hero">
    <div class="container">
        <div class="success-hero__inner">
            <div class="check-circle"><i class="bx bx-check-double"></i></div>
            <h1>Réservation <span>confirmée !</span></h1>
            <p>Merci pour votre confiance — votre activité vélo vous attend.</p>
            <div class="tx-badge">
                <i class="bx bx-receipt"></i>
                Référence de transaction : <strong>#{{ $transaction->id }}</strong>
            </div>
            {{-- Wizard --}}
            <div class="wizard-track mt-4">
                <div class="wizard-step done"><div class="wizard-step__dot"><i class="bx bx-check"></i></div><div class="wizard-step__label">Informations</div></div>
                <div class="wizard-line done"></div>
                <div class="wizard-step done"><div class="wizard-step__dot"><i class="bx bx-check"></i></div><div class="wizard-step__label">Formule</div></div>
                <div class="wizard-line done"></div>
                <div class="wizard-step active"><div class="wizard-step__dot"><i class="bx bx-check" style="font-size:16px;"></i></div><div class="wizard-step__label">Confirmation</div></div>
            </div>
        </div>
    </div>
</div>

{{-- MAIN --}}
<div class="success-layout">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                {{-- Résumé client --}}
                <div class="s-card">
                    <div class="s-card__header">
                        <div class="icon-wrap"><i class="bx bx-user"></i></div>
                        <h5>Informations du réservant</h5>
                    </div>
                    <div class="s-card__body">
                        <div class="summary-grid" id="client-summary">
                            <div class="summary-item"><div class="lbl">Nom complet</div><div class="val" id="s-name">—</div></div>
                            <div class="summary-item"><div class="lbl">Email</div><div class="val" id="s-email">—</div></div>
                            <div class="summary-item"><div class="lbl">Téléphone</div><div class="val" id="s-phone">—</div></div>
                            <div class="summary-item"><div class="lbl">Date choisie</div><div class="val" id="s-date">—</div></div>
                        </div>
                    </div>
                </div>

                {{-- Services réservés --}}
                <div class="s-card">
                    <div class="s-card__header">
                        <div class="icon-wrap"><i class="bx bx-list-check"></i></div>
                        <h5>Détail de votre réservation</h5>
                    </div>
                    <div class="s-card__body">
                        <table class="services-table">
                            <thead>
                                <tr>
                                    <th>Offre</th>
                                    <th style="text-align:center;">Qté</th>
                                    <th style="text-align:right;">Montant</th>
                                </tr>
                            </thead>
                            <tbody id="services-tbody">
                                <tr><td colspan="3" style="text-align:center;color:var(--muted);padding:20px;">Chargement…</td></tr>
                            </tbody>
                        </table>
                        <div class="total-row">
                            <span class="tl">Total payé</span>
                            <span class="ta" id="s-total">—</span>
                        </div>
                    </div>
                </div>

                {{-- Prochaines étapes --}}
                <div class="s-card">
                    <div class="s-card__header">
                        <div class="icon-wrap"><i class="bx bx-info-circle"></i></div>
                        <h5>Que se passe-t-il ensuite ?</h5>
                    </div>
                    <div class="s-card__body">
                        <div class="next-steps">
                            <div class="next-step-item">
                                <div class="ns-num">1</div>
                                <div><h6>Email de confirmation</h6><p>Un email avec votre reçu vous a été envoyé à l'adresse renseignée.</p></div>
                            </div>
                            <div class="next-step-item">
                                <div class="ns-num">2</div>
                                <div><h6>Préparez-vous</h6><p>Venez en tenue confortable à la date choisie. Tout le matériel vous sera fourni sur place.</p></div>
                            </div>
                            <div class="next-step-item">
                                <div class="ns-num">3</div>
                                <div><h6>Besoin d'aide ?</h6><p>Contactez-nous via WhatsApp ou email. Nous sommes là du lundi au samedi 8h–18h.</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Actions --}}
                <div class="action-grid">
                    <button id="btn-download-invoice" class="btn-download">
                        <i class="bx bx-download" style="font-size:20px;"></i> Télécharger le reçu
                    </button>
                    <a href="{{ route('accueil') }}" class="btn-home">
                        <i class="bx bx-home-alt" style="font-size:20px;"></i> Retour à l'accueil
                    </a>
                </div>

                {{-- Contact rapide --}}
                <div style="text-align:center;margin-top:28px;display:flex;align-items:center;justify-content:center;gap:24px;flex-wrap:wrap;">
                    <a href="https://wa.me/22901000000" style="display:flex;align-items:center;gap:8px;color:var(--g2);font-weight:600;font-size:14px;text-decoration:none;">
                        <i class="bx bxl-whatsapp" style="font-size:20px;color:#25D366;"></i> WhatsApp
                    </a>
                    <a href="mailto:contact@orekamobility.com" style="display:flex;align-items:center;gap:8px;color:var(--g2);font-weight:600;font-size:14px;text-decoration:none;">
                        <i class="bx bx-envelope" style="font-size:20px;"></i> contact@orekamobility.com
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- Formulaire caché --}}
<form id="download-invoice-form" method="POST" action="{{ route('download_reservation') }}" style="display:none;">
    @csrf
    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
    <input type="hidden" name="step1_data" id="input-step1">
    <input type="hidden" name="step2_data" id="input-step2">
</form>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── Données localStorage ──
    const s1 = JSON.parse(localStorage.getItem('reservationStep1') || '{}');
    const s2 = JSON.parse(localStorage.getItem('reservationStep2') || '{}');

    // ── Résumé client ──
    if (s1.firstName) {
        document.getElementById('s-name').textContent  = s1.firstName + ' ' + s1.lastName;
        document.getElementById('s-email').textContent = s1.email;
        document.getElementById('s-phone').textContent = s1.phone;
        document.getElementById('s-date').textContent  = s1.startDate || '—';
    }

    // ── Services ──
    const tbody = document.getElementById('services-tbody');
    const services = s2.services || [];
    if (services.length > 0) {
        tbody.innerHTML = services.map(sv => `
            <tr>
                <td>${sv.name}</td>
                <td style="text-align:center;"><span class="qty-pill">×${sv.qty || 1}</span></td>
                <td style="text-align:right;" class="price">${(sv.price).toLocaleString('fr-FR')} F</td>
            </tr>
        `).join('');
    } else {
        tbody.innerHTML = '<tr><td colspan="3" style="text-align:center;color:var(--muted);padding:20px;">Aucun service enregistré.</td></tr>';
    }

    // ── Total ──
    const total = s2.totalAmount || 0;
    document.getElementById('s-total').textContent = total.toLocaleString('fr-FR') + ' F CFA';

    // ── Téléchargement ──
    document.getElementById('btn-download-invoice').addEventListener('click', function () {
        document.getElementById('input-step1').value = JSON.stringify(s1);
        document.getElementById('input-step2').value = JSON.stringify(s2);
        document.getElementById('download-invoice-form').submit();
    });

    // ── Confetti ──
    const wrap = document.getElementById('confetti');
    const colors = ['#b5f035','#4ade80','#2D7A3A','#fff','#fbbf24'];
    for (let i = 0; i < 60; i++) {
        const el = document.createElement('span');
        const size = Math.random() * 10 + 6;
        el.style.cssText = `
            left:${Math.random()*100}%;
            width:${size}px; height:${size}px;
            background:${colors[Math.floor(Math.random()*colors.length)]};
            opacity:${Math.random()*.8+.2};
            animation-duration:${Math.random()*2+1.5}s;
            animation-delay:${Math.random()*.8}s;
        `;
        wrap.appendChild(el);
    }
    setTimeout(() => wrap.remove(), 3500);
});
</script>
@endpush