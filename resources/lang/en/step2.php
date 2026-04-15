<?php

return [

    // ── SEO ──────────────────────────────────────────────────────
    'seo_title'         => 'Booking — Step 2 | Choose Your Plan | Oreka Mobility',
    'seo_desc'          => 'Select the number of spots or hours for your cycling activity. Real-time summary and secure payment.',

    // ── Hero / Wizard ─────────────────────────────────────────────
    'hero_title'        => 'Now choose &nbsp;',
    'hero_title_span'   => 'your plan',
    'hero_subtitle'     => 'Select the number of spots you need',
    'step1_label'       => 'Information',
    'step2_label'       => 'Plan',
    'step3_label'       => 'Confirmation',

    // ── Bannière plan ─────────────────────────────────────────────
    'pbn_loading'       => 'Loading…',
    'pbn_change'        => 'Change',

    // ── Carte location quotidienne ────────────────────────────────
    'daily_title'       => 'Daily Rate',
    'daily_sub'         => 'Individual bike rental',
    'delay_note'        => 'any hour started will be charged at the current hourly rate.',
    'delay_label'       => 'Late return:',

    // ── Récapitulatif & sidebar ───────────────────────────────────
    'client_title'      => 'Your information',
    'recap_title'       => 'Summary',
    'recap_empty'       => 'No offer selected',
    'recap_offer'       => 'offer',
    'recap_offers'      => 'offers',
    'total_label'       => 'Total to pay',
    'no_client_info'    => 'No information available.',
    'client_label_name' => 'Client',
    'client_label_date' => 'Date',
    'client_label_notes'=> 'Notes',

    // ── Boutons ───────────────────────────────────────────────────
    'btn_back'          => 'Back',
    'btn_pay'           => 'Pay now',
    'btn_processing'    => 'Processing…',
    'secure_label'      => 'Secure payment via FedaPay',

    // ── Offres location à la durée ────────────────────────────────
    'duree' => [
        ['id' => 'd-1h', 'name' => '1-hour rental',  'unit' => '+ 15 min free', 'desc' => 'Bonus time included'],
        ['id' => 'd-2h', 'name' => '2-hour rental',  'unit' => '+ 30 min free', 'desc' => 'Bonus time included'],
        ['id' => 'd-3h', 'name' => '3-hour rental',  'unit' => '+ 30 min free', 'desc' => 'Bonus time included'],
    ],

    // ── Plans ─────────────────────────────────────────────────────
    'plans' => [
        'velo-sport' => [
            'icon'         => 'bx bx-run',
            'title'        => 'Sport Cycling',
            'sub'          => 'Sport session · 1h · Professional coach',
            'sectionTitle' => 'Sport Cycling Offers',
            'sectionSub'   => '3,000 F / session · Subscription 12,000 F',
            'offres'       => [
                ['id' => 'vs-seance',     'name' => 'Sport Cycling — Single session',      'unit' => '/ session', 'desc' => '1h duration · 10 spots',               'avantages' => ['Bike', 'Helmet', 'Water bottle', 'Pro coach']],
                ['id' => 'vs-abonnement', 'name' => 'Sport Cycling — Monthly subscription', 'unit' => '/ month',   'desc' => 'Unlimited access for the month · -33%', 'avantages' => ['Bike', 'Helmet', 'Water bottle', 'Pro coach']],
            ],
        ],
        'randonnee' => [
            'icon'         => 'bx bx-map',
            'title'        => 'Cycling Trail',
            'sub'          => '30–43 km circuit · 3h · Family or friends',
            'sectionTitle' => 'Trail Offers',
            'sectionSub'   => '6,000 F adult · 3,000 F child',
            'offres'       => [
                ['id' => 'rand-adulte', 'name' => 'Trail — Adult',              'unit' => '/ person', 'desc' => '3h · 30–43 km · 10 spots',      'avantages' => ['Bike', 'Helmet', 'Water', 'Supervisor', 'Lighting', 'Lock', 'Pump']],
                ['id' => 'rand-enfant', 'name' => 'Trail — Child (ages 10–15)', 'unit' => '/ child',  'desc' => '3h · Reduced rate · 10 spots',   'avantages' => ['Adapted bike', 'Helmet', 'Water', 'Supervisor', 'Lighting', 'Lock', 'Pump']],
            ],
        ],
        'tourisme' => [
            'icon'         => 'bx bx-landmark',
            'title'        => 'Cycling Tourism',
            'sub'          => 'Guided tour Cotonou · Ouidah · Porto-Novo',
            'sectionTitle' => 'Cycling Tourism Offers',
            'sectionSub'   => '30,000 F / registration · Local meal included',
            'offres'       => [
                ['id' => 'tour-inscription', 'name' => 'Cycling Tourism — Registration', 'unit' => '/ person', 'desc' => '4h · Historic sites + meal · 10 spots', 'avantages' => ['Bike', 'Helmet', 'Water', 'Pro guide', 'Lighting', 'Lock', 'Pump', 'Meal']],
            ],
        ],
        'apprentissage' => [
            'icon'         => 'bx bx-chalkboard',
            'title'        => 'Learn to Cycle',
            'sub'          => 'Cycling School Adults & Kids · Qualified instructors',
            'sectionTitle' => 'Cycling School Offers',
            'sectionSub'   => '15,000 F adult · 10,000 F kids · 3 sessions included',
            'offres'       => [
                ['id' => 'app-adulte', 'name' => 'Cycling School — Adult', 'unit' => '/ pack', 'desc' => '3 sessions of 1h30 · Adults',       'avantages' => ['Adapted bike', 'Helmet', 'Qualified instructor', '3 sessions']],
                ['id' => 'app-kids',   'name' => 'Cycling School — Kids',  'unit' => '/ pack', 'desc' => '3 sessions of 45 min · From age 2.5', 'avantages' => ['Adapted bike', 'Helmet', 'Qualified instructor', '3 sessions']],
            ],
        ],
    ],
];
