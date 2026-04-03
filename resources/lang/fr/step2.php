<?php

return [

    // ── SEO ──────────────────────────────────────────────────────
    'seo_title'         => 'Réservation — Étape 2 | Choisissez Votre Formule | Oreka Mobility',
    'seo_desc'          => 'Sélectionnez le nombre de places ou d\'heures pour votre activité vélo. Récapitulatif en temps réel et paiement sécurisé.',

    // ── Hero / Wizard ─────────────────────────────────────────────
    'hero_title'        => 'Choisissez maintenant',
    'hero_title_span'   => 'la formule',
    'hero_subtitle'     => 'Sélectionnez le nombre de places ou d\'heures souhaitées',
    'step1_label'       => 'Informations',
    'step2_label'       => 'Formule',
    'step3_label'       => 'Confirmation',

    // ── Bannière plan ─────────────────────────────────────────────
    'pbn_loading'       => 'Chargement…',
    'pbn_change'        => 'Changer',

    // ── Carte location quotidienne ────────────────────────────────
    'daily_title'       => 'Tarif Quotidienne',
    'daily_sub'         => 'Location individuelle de vélo',
    'delay_note'        => 'toute heure entamée est facturée au tarif horaire en vigueur.',
    'delay_label'       => 'Retard :',

    // ── Récapitulatif & sidebar ───────────────────────────────────
    'client_title'      => 'Vos informations',
    'recap_title'       => 'Récapitulatif',
    'recap_empty'       => 'Aucune offre sélectionnée',
    'recap_offer'       => 'offre',
    'recap_offers'      => 'offres',
    'total_label'       => 'Total à payer',
    'no_client_info'    => 'Aucune info disponible.',
    'client_label_name' => 'Client',
    'client_label_date' => 'Date',
    'client_label_notes'=> 'Notes',

    // ── Boutons ───────────────────────────────────────────────────
    'btn_back'          => 'Retour',
    'btn_pay'           => 'Payer',
    'btn_processing'    => 'Traitement…',
    'secure_label'      => 'Paiement sécurisé via FedaPay',

    // ── Offres location à la durée ────────────────────────────────
    'duree' => [
        ['id' => 'd-1h', 'name' => 'Location 1 heure',   'unit' => '+ 15 min offertes', 'desc' => 'Temps bonus inclus'],
        ['id' => 'd-2h', 'name' => 'Location 2 heures',  'unit' => '+ 30 min offertes', 'desc' => 'Temps bonus inclus'],
        ['id' => 'd-3h', 'name' => 'Location 3 heures',  'unit' => '+ 30 min offertes', 'desc' => 'Temps bonus inclus'],
    ],

    // ── Plans ─────────────────────────────────────────────────────
    'plans' => [
        'velo-sport' => [
            'icon'         => 'bx bx-run',
            'title'        => 'Vélo Sport',
            'sub'          => 'Séance de sport · 1h · Coach professionnel',
            'sectionTitle' => 'Offres Vélo Sport',
            'sectionSub'   => '3 000 F / séance · Abonnement 12 000 F',
            'offres'       => [
                ['id' => 'vs-seance',     'name' => 'Vélo Sport — Séance individuelle', 'unit' => '/ séance', 'desc' => 'Durée 1h · 10 places',              'avantages' => ["Vélo", "Casque", "Bouteille d'eau", "Coach pro"]],
                ['id' => 'vs-abonnement', 'name' => 'Vélo Sport — Abonnement mensuel',  'unit' => '/ mois',   'desc' => 'Accès illimité au mois · -33%',      'avantages' => ["Vélo", "Casque", "Bouteille d'eau", "Coach pro"]],
            ],
        ],
        'randonnee' => [
            'icon'         => 'bx bx-map',
            'title'        => 'Randonner à Vélo',
            'sub'          => 'Circuit 30–43 km · 3h · Famille ou amis',
            'sectionTitle' => 'Offres Randonnée',
            'sectionSub'   => '6 000 F adulte · 3 000 F enfant',
            'offres'       => [
                ['id' => 'rand-adulte', 'name' => 'Randonnée — Adulte',           'unit' => '/ personne', 'desc' => '3h · 30–43 km · 10 places',         'avantages' => ["Vélo", "Casque", "Eau", "Superviseur", "Éclairage", "Antivol", "Pompe"]],
                ['id' => 'rand-enfant', 'name' => 'Randonnée — Enfant (10–15 ans)','unit' => '/ enfant',   'desc' => '3h · Tarif réduit · 10 places',      'avantages' => ["Vélo adapté", "Casque", "Eau", "Superviseur", "Éclairage", "Antivol", "Pompe"]],
            ],
        ],
        'tourisme' => [
            'icon'         => 'bx bx-landmark',
            'title'        => 'Vélo Tourisme',
            'sub'          => 'Visite guidée Cotonou · Ouidah · Porto-Novo',
            'sectionTitle' => 'Offres Vélo Tourisme',
            'sectionSub'   => '30 000 F / inscription · Repas local inclus',
            'offres'       => [
                ['id' => 'tour-inscription', 'name' => 'Vélo Tourisme — Inscription', 'unit' => '/ personne', 'desc' => '4h · Sites historiques + repas · 10 places', 'avantages' => ["Vélo", "Casque", "Eau", "Guide pro", "Éclairage", "Antivol", "Pompe", "Repas"]],
            ],
        ],
        'apprentissage' => [
            'icon'         => 'bx bx-chalkboard',
            'title'        => 'Apprentissage du Vélo',
            'sub'          => 'Vélo École Adulte & Kids · Moniteurs diplômés',
            'sectionTitle' => 'Offres Vélo École',
            'sectionSub'   => '15 000 F adulte · 10 000 F kids · 3 séances incluses',
            'offres'       => [
                ['id' => 'app-adulte', 'name' => 'Vélo École Adulte', 'unit' => '/ pack', 'desc' => '3 séances de 1h30 · Adultes',          'avantages' => ["Vélo adapté", "Casque", "Moniteur diplômé", "3 séances"]],
                ['id' => 'app-kids',   'name' => 'Vélo École Kids',   'unit' => '/ pack', 'desc' => '3 séances de 45 min · Dès 2 ans et demi', 'avantages' => ["Vélo adapté", "Casque", "Moniteur diplômé", "3 séances"]],
            ],
        ],
    ],
];
