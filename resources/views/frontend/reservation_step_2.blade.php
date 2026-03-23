@extends('frontend.main_master')

@section('title') Choix de la formule | Oreka Mobility @endsection

@push('links')
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/step2.css')}}">
@endpush

@section('content')

<div class="booking-hero-strip">
    <div class="container">
        <div class="hero-strip-inner">
            <div class="hero-strip-text">
                <h1>Choisissez <span>votre formule</span></h1>
                <p>Sélectionnez le nombre de places ou d'heures souhaitées</p>
            </div>
            <div class="wizard-track">
                <div class="wizard-step done"><div class="wizard-step__dot"><i class="bx bx-check" style="font-size:18px;"></i></div><div class="wizard-step__label">Informations</div></div>
                <div class="wizard-line done"></div>
                <div class="wizard-step active"><div class="wizard-step__dot">2</div><div class="wizard-step__label">Formule</div></div>
                <div class="wizard-line"></div>
                <div class="wizard-step"><div class="wizard-step__dot">3</div><div class="wizard-step__label">Confirmation</div></div>
            </div>
        </div>
    </div>
</div>

<div class="booking-layout">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="plan-banner-new">
                    <div class="pbn-icon"><i id="pbn-icon" class="bx bx-cycling"></i></div>
                    <div class="pbn-text">
                        <h5 id="pbn-title">Chargement…</h5>
                        <p id="pbn-sub"></p>
                    </div>
                    <a href="{{ route('accueil') }}#pricing" class="pbn-change"><i class="bx bx-transfer-alt me-1"></i>Changer</a>
                </div>

                <div class="offer-card">
                    <div class="offer-card__header">
                        <div class="icon-wrap"><i class="bx bx-time-five"></i></div>
                        <div><h5>Tarif Quotidienne</h5><div class="sub">Location individuelle de vélo</div></div>
                    </div>
                    <div class="info-note-new"><i class="bx bx-info-circle"></i><div><strong>Retard :</strong> toute heure entamée est facturée au tarif horaire en vigueur.</div></div>
                    <div class="offer-list" id="list-duree"></div>
                </div>

                <div class="offer-card">
                    <div class="offer-card__header">
                        <div class="icon-wrap"><i class="bx bx-star"></i></div>
                        <div><h5 id="plan-section-title">Offres du plan</h5><div class="sub" id="plan-section-sub"></div></div>
                    </div>
                    <div class="offer-list" id="list-plan"></div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="sidebar-new">

                    <div class="client-card">
                        <div class="client-card__header"><i class="bx bx-user-circle"></i><h6>Vos informations</h6></div>
                        <div class="client-card__body" id="client-info"></div>
                    </div>

                    <div class="recap-card">
                        <div class="recap-card__header">
                            <h6>Récapitulatif</h6>
                            <span id="recap-count" style="font-size:12px;color:var(--muted);">0 offre</span>
                        </div>
                        <div id="recap-body"><div class="recap-empty"><i class="bx bx-cart"></i>Aucune offre sélectionnée</div></div>
                    </div>

                    <div class="total-strip">
                        <span class="t-label">Total à payer</span>
                        <span class="t-amount" id="total-price">0 F</span>
                    </div>

                    <div style="display:flex;gap:10px;">
                        <a href="{{ route('reservation_step_1') }}" class="btn-back-new"><i class="bx bx-left-arrow-alt"></i> Retour</a>
                        <button class="btn-pay-new" id="continue-btn">Payer <i class="bx bx-lock-alt"></i></button>
                    </div>
                    <div style="text-align:center;margin-top:12px;font-size:12px;color:var(--muted);display:flex;align-items:center;justify-content:center;gap:6px;">
                        <i class="bx bx-shield-quarter" style="color:var(--g2);font-size:16px;"></i> Paiement sécurisé via FedaPay
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
    const PLANS_DATA = {
        'velo-sport':{icon:'bx bx-run',title:'Vélo Sport',sub:'Séance de sport · 1h · Coach professionnel',sectionTitle:'Offres Vélo Sport',sectionSub:'3 000 F / séance · Abonnement 12 000 F',offres:[
            {id:'vs-seance',name:'Vélo Sport — Séance individuelle',price:3000,unit:'/ séance',desc:'Durée 1h · 10 places',avantages:['Vélo','Casque','Bouteille d\'eau','Coach pro'],max:10},
            {id:'vs-abonnement',name:'Vélo Sport — Abonnement mensuel',price:12000,unit:'/ mois',desc:'Accès illimité au mois · -33%',avantages:['Vélo','Casque','Bouteille d\'eau','Coach pro'],max:5},
        ]},
        'randonnee':{icon:'bx bx-map',title:'Randonner à Vélo',sub:'Circuit 30–43 km · 3h · Famille ou amis',sectionTitle:'Offres Randonnée',sectionSub:'6 000 F adulte · 3 000 F enfant',offres:[
            {id:'rand-adulte',name:'Randonnée — Adulte',price:6000,unit:'/ personne',desc:'3h · 30–43 km · 10 places',avantages:['Vélo','Casque','Eau','Superviseur','Éclairage','Antivol','Pompe'],max:10},
            {id:'rand-enfant',name:'Randonnée — Enfant (10–15 ans)',price:3000,unit:'/ enfant',desc:'3h · Tarif réduit · 10 places',avantages:['Vélo adapté','Casque','Eau','Superviseur','Éclairage','Antivol','Pompe'],max:10},
        ]},
        'tourisme':{icon:'bx bx-landmark',title:'Vélo Tourisme',sub:'Visite guidée Cotonou · Ouidah · Porto-Novo',sectionTitle:'Offres Vélo Tourisme',sectionSub:'30 000 F / inscription · Repas local inclus',offres:[
            {id:'tour-inscription',name:'Vélo Tourisme — Inscription',price:30000,unit:'/ personne',desc:'4h · Sites historiques + repas · 10 places',avantages:['Vélo','Casque','Eau','Guide pro','Éclairage','Antivol','Pompe','Repas'],max:10},
        ]},
        'apprentissage':{icon:'bx bx-chalkboard',title:'Apprentissage du Vélo',sub:'Vélo École Adulte & Kids · Moniteurs diplômés',sectionTitle:'Offres Vélo École',sectionSub:'15 000 F adulte · 10 000 F kids · 3 séances incluses',offres:[
            {id:'app-adulte',name:'Vélo École Adulte',price:15000,unit:'/ pack',desc:'3 séances de 1h30 · Adultes',avantages:['Vélo adapté','Casque','Moniteur diplômé','3 séances'],max:5},
            {id:'app-kids',name:'Vélo École Kids',price:10000,unit:'/ pack',desc:'3 séances de 45 min · Dès 2 ans et demi',avantages:['Vélo adapté','Casque','Moniteur diplômé','3 séances'],max:5},
        ]},
    };
    const DUREE=[
        {id:'d-1h',name:'Location 1 heure',price:1500,unit:'+ 15 min offertes',desc:'Temps bonus inclus',avantages:[],max:10},
        {id:'d-2h',name:'Location 2 heures',price:2500,unit:'+ 30 min offertes',desc:'Temps bonus inclus',avantages:[],max:10},
        {id:'d-3h',name:'Location 3 heures',price:3500,unit:'+ 30 min offertes',desc:'Temps bonus inclus',avantages:[],max:10},
    ];
    let qty={};
    const urlPlan=new URLSearchParams(window.location.search).get('plan');
    const planKey=urlPlan||localStorage.getItem('selectedPlan')||'velo-sport';
    const plan=PLANS_DATA[planKey]||PLANS_DATA['velo-sport'];
    const s1=JSON.parse(localStorage.getItem('reservationStep1')||'{}');

    document.getElementById('pbn-icon').className=plan.icon;
    document.getElementById('pbn-title').textContent=plan.title;
    document.getElementById('pbn-sub').textContent=plan.sub;
    document.getElementById('plan-section-title').textContent=plan.sectionTitle;
    document.getElementById('plan-section-sub').textContent=plan.sectionSub;

    const ci=document.getElementById('client-info');
    if(s1.firstName){ci.innerHTML=`<div class="client-row"><span class="lbl">Client</span><span class="val">${s1.firstName} ${s1.lastName}</span></div><div class="client-row"><span class="lbl">Email</span><span class="val">${s1.email}</span></div><div class="client-row"><span class="lbl">Téléphone</span><span class="val">${s1.phone}</span></div><div class="client-row"><span class="lbl">Date</span><span class="val">${s1.startDate||'—'}</span></div>${s1.additionalInfo?`<div class="client-row"><span class="lbl">Notes</span><span class="val">${s1.additionalInfo}</span></div>`:''}`;}
    else{ci.innerHTML='<div style="padding:12px;font-size:13px;color:var(--muted)">Aucune info disponible.</div>';}

    function renderLine(o){
        qty[o.id]=0;
        const tags=(o.avantages||[]).map(a=>`<span class="offer-tag">${a}</span>`).join('');
        return `<div class="offer-line" id="line-${o.id}"><div class="offer-line__info"><p class="offer-line__name">${o.name}</p><p class="offer-line__desc">${o.desc}</p>${tags?`<div class="offer-tags">${tags}</div>`:''}</div><div class="offer-line__price"><span class="amount">${o.price.toLocaleString('fr-FR')} F</span><span class="unit">${o.unit}</span></div><div class="qty-wrap" id="qw-${o.id}"><button class="qty-btn-new qty-minus" data-id="${o.id}" disabled>−</button><span class="qty-val" id="qv-${o.id}">0</span><button class="qty-btn-new qty-plus" data-id="${o.id}">+</button></div></div>`;
    }

    DUREE.forEach(o=>document.getElementById('list-duree').insertAdjacentHTML('beforeend',renderLine(o)));
    plan.offres.forEach(o=>document.getElementById('list-plan').insertAdjacentHTML('beforeend',renderLine(o)));
    const all=[...DUREE,...plan.offres];

    document.addEventListener('click',e=>{
        const btn=e.target.closest('.qty-plus,.qty-minus');
        if(!btn)return;
        const id=btn.getAttribute('data-id');
        const o=all.find(x=>x.id===id);if(!o)return;
        const isP=btn.classList.contains('qty-plus');
        const cur=qty[id]||0;const max=o.max||10;
        if(isP&&cur<max)qty[id]=cur+1;
        if(!isP&&cur>0)qty[id]=cur-1;
        const v=qty[id];
        document.getElementById('qv-'+id).textContent=v;
        document.querySelector(`.qty-minus[data-id="${id}"]`).disabled=(v===0);
        document.querySelector(`.qty-plus[data-id="${id}"]`).disabled=(v>=max);
        document.getElementById('qw-'+id).classList.toggle('active',v>0);
        updateRecap();
    });

    function updateRecap(){
        const body=document.getElementById('recap-body');
        let total=0,count=0,html='';
        all.forEach(o=>{
            const q=qty[o.id]||0;
            if(q>0){count++;const sub=o.price*q;total+=sub;html+=`<div class="recap-item"><button class="ri-remove" onclick="resetQty('${o.id}')">×</button><span class="ri-name">${o.name}</span><span class="ri-qty">×${q}</span><span class="ri-price">${sub.toLocaleString('fr-FR')} F</span></div>`;}
        });
        body.innerHTML=html||'<div class="recap-empty"><i class="bx bx-cart"></i>Aucune offre sélectionnée</div>';
        document.getElementById('recap-count').textContent=count+' offre'+(count>1?'s':'');
        document.getElementById('total-price').textContent=total.toLocaleString('fr-FR')+' F';
    }

    window.resetQty=function(id){
        qty[id]=0;
        const el=document.getElementById('qv-'+id);if(el)el.textContent='0';
        const qw=document.getElementById('qw-'+id);if(qw)qw.classList.remove('active');
        const m=document.querySelector(`.qty-minus[data-id="${id}"]`);if(m)m.disabled=true;
        const p=document.querySelector(`.qty-plus[data-id="${id}"]`);if(p)p.disabled=false;
        updateRecap();
    };

    document.getElementById('continue-btn').addEventListener('click',function(){
        const sel=[];
        all.forEach(o=>{const q=qty[o.id]||0;if(q>0)sel.push({name:o.name,price:o.price*q,qty:q,unitPrice:o.price});});
        if(sel.length===0){const rb=document.getElementById('recap-body');rb.style.outline='2px solid #e53e3e';rb.style.borderRadius='8px';setTimeout(()=>{rb.style.outline='';rb.style.borderRadius='';},2000);return;}
        const total=sel.reduce((s,x)=>s+x.price,0);
        localStorage.setItem('reservationStep2',JSON.stringify({services:sel,totalAmount:total,plan:planKey,savedAt:new Date().toISOString()}));
        this.innerHTML='<i class="bx bx-loader-alt bx-spin"></i> Traitement…';this.disabled=true;
        fetch('{{ route("reservation_step_3") }}',{method:'POST',headers:{'Content-Type':'application/json','X-CSRF-TOKEN':'{{ csrf_token() }}'},body:JSON.stringify({firstName:s1.firstName,lastName:s1.lastName,email:s1.email,phone:s1.phone,additionalInfo:s1.additionalInfo,startDate:s1.startDate,selectedServices:sel,totalAmount:total})})
        .then(r=>r.json()).then(d=>{if(d.success){window.location.href=d.checkout_url;}else{alert('Erreur : '+d.message);this.innerHTML='Payer <i class="bx bx-lock-alt"></i>';this.disabled=false;}})
        .catch(()=>{alert('Erreur réseau.');this.innerHTML='Payer <i class="bx bx-lock-alt"></i>';this.disabled=false;});
    });
});
</script>
@endpush