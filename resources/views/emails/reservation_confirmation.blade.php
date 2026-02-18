<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de reservation - Oreka Mobility</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .wrapper {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        /* Header */
        .header {
            background: #1a1a1a;
            padding: 28px 32px;
            text-align: center;
            border-bottom: 4px solid #FE9701;
        }
        .header img { height: 48px; }
        .header-fallback {
            font-size: 26px;
            font-weight: 900;
            color: #FE9701;
            letter-spacing: 2px;
        }
        .header-subtitle {
            color: #aaa;
            font-size: 12px;
            margin-top: 6px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Hero */
        .hero {
            background: linear-gradient(135deg, #FE9701 0%, #e07d00 100%);
            padding: 32px;
            text-align: center;
        }
        .hero-icon {
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: inline-block;
            line-height: 60px;
            font-size: 28px;
            margin-bottom: 14px;
        }
        .hero h1 {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
        }
        .hero p {
            color: rgba(255,255,255,0.88);
            font-size: 14px;
            line-height: 1.5;
        }

        /* Body */
        .body { padding: 32px; }

        .greeting {
            font-size: 16px;
            color: #222;
            margin-bottom: 16px;
            font-weight: 600;
        }
        .intro-text {
            font-size: 14px;
            color: #555;
            line-height: 1.7;
            margin-bottom: 24px;
        }

        /* Transaction ref */
        .ref-box {
            background: #fff8ee;
            border: 1px solid #FE9701;
            border-left: 4px solid #FE9701;
            border-radius: 6px;
            padding: 14px 18px;
            margin-bottom: 24px;
        }
        .ref-label {
            font-size: 10px;
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 4px;
        }
        .ref-value {
            font-size: 18px;
            font-weight: 800;
            color: #FE9701;
        }
        .ref-date {
            font-size: 12px;
            color: #888;
            margin-top: 4px;
        }

        /* Info grid */
        .info-grid {
            display: table;
            width: 100%;
            margin-bottom: 24px;
            border-collapse: collapse;
        }
        .info-cell {
            display: table-cell;
            width: 50%;
            padding: 12px 14px;
            background: #f9f9f9;
            border: 1px solid #eee;
            vertical-align: top;
        }
        .info-cell-label {
            font-size: 10px;
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 4px;
        }
        .info-cell-value {
            font-size: 13px;
            font-weight: 600;
            color: #222;
        }

        /* Services */
        .section-title {
            font-size: 13px;
            font-weight: 700;
            color: #222;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 10px;
            padding-bottom: 6px;
            border-bottom: 2px solid #FE9701;
        }
        .services-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .services-table th {
            background: #2d2d2d;
            color: #fff;
            font-size: 11px;
            padding: 8px 12px;
            text-align: left;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .services-table th.right { text-align: right; }
        .services-table td {
            padding: 9px 12px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 13px;
            color: #333;
        }
        .services-table td.right { text-align: right; font-weight: 600; }
        .services-table tr:nth-child(even) td { background: #fafafa; }

        /* Total */
        .total-box {
            background: #1a1a1a;
            border-radius: 6px;
            padding: 16px 20px;
            display: table;
            width: 100%;
            margin-bottom: 28px;
        }
        .total-label-cell {
            display: table-cell;
            color: #aaa;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            vertical-align: middle;
        }
        .total-amount-cell {
            display: table-cell;
            text-align: right;
            font-size: 22px;
            font-weight: 900;
            color: #FE9701;
            vertical-align: middle;
        }

        /* CTA */
        .cta-box {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 24px;
            text-align: center;
            margin-bottom: 28px;
            border: 1px solid #eee;
        }
        .cta-box p {
            font-size: 13px;
            color: #666;
            margin-bottom: 16px;
            line-height: 1.6;
        }
        .cta-box .note {
            font-size: 11px;
            color: #aaa;
            margin-top: 10px;
        }

        /* Divider */
        .divider {
            border: none;
            border-top: 1px solid #eee;
            margin: 24px 0;
        }

        /* Footer */
        .footer {
            background: #f4f4f4;
            padding: 20px 32px;
            text-align: center;
            border-top: 1px solid #eee;
        }
        .footer p {
            font-size: 11px;
            color: #aaa;
            line-height: 1.7;
        }
        .footer strong { color: #FE9701; }
    </style>
</head>
<body>
<div class="wrapper">

    {{-- HEADER --}}
    <div class="header">
        <div class="header-fallback">OREKA</div>
        <div class="header-subtitle">Mobility &mdash; Cotonou, Benin</div>
    </div>

    {{-- HERO --}}
    <div class="hero">
        <div class="hero-icon">&#10003;</div>
        <h1>Reservation confirmee !</h1>
        <p>Votre paiement a ete accepte avec succes.<br>Retrouvez votre recu en piece jointe.</p>
    </div>

    {{-- BODY --}}
    <div class="body">

        <p class="greeting">Bonjour {{ $clientName }},</p>
        <p class="intro-text">
            Nous avons bien recu votre reservation et votre paiement a ete valide via FedaPay.
            Votre recu de reservation est disponible en <strong>piece jointe</strong> de cet email.
            Vous pouvez le telecharger et le conserver a tout moment.
        </p>

        {{-- REFERENCE --}}
        <div class="ref-box">
            <div class="ref-label">Reference de transaction</div>
            <div class="ref-value">#{{ $transactionId }}</div>
            <div class="ref-date">Date : {{ date('d/m/Y a H:i') }}</div>
        </div>

        {{-- INFOS CLIENT --}}
        <div class="section-title">Vos informations</div>
        <table class="info-grid" style="margin-bottom: 24px;">
            <tr>
                <td class="info-cell">
                    <div class="info-cell-label">Nom complet</div>
                    <div class="info-cell-value">{{ $clientName }}</div>
                </td>
                <td class="info-cell">
                    <div class="info-cell-label">Email</div>
                    <div class="info-cell-value">{{ $clientEmail }}</div>
                </td>
            </tr>
            <tr>
                <td class="info-cell">
                    <div class="info-cell-label">Telephone</div>
                    <div class="info-cell-value">{{ $clientPhone ?: 'Non renseigne' }}</div>
                </td>
                <td class="info-cell">
                    <div class="info-cell-label">Date de debut</div>
                    <div class="info-cell-value">{{ $startDate ?: 'Non renseignee' }}</div>
                </td>
            </tr>
        </table>

        {{-- SERVICES --}}
        <div class="section-title">Services reserves</div>
        <table class="services-table">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th class="right">Montant</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>{{ $item['description'] }}</td>
                        <td class="right">{{ number_format($item['amount'], 0, ',', ' ') }} FCFA</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" style="text-align:center; color:#aaa; padding:16px;">
                            Aucun service enregistre
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- TOTAL --}}
        <div class="total-box">
            <div class="total-label-cell">Total net paye</div>
            <div class="total-amount-cell">{{ number_format($total, 0, ',', ' ') }} FCFA</div>
        </div>

        {{-- CTA --}}
        <div class="cta-box">
            <p>
                Votre <strong>recu PDF</strong> est joint a cet email.<br>
                Vous pouvez le telecharger, l'imprimer ou le conserver dans vos archives.
            </p>
            <p class="note">
                Si vous avez des questions, contactez-nous a<br>
                <strong>contact@orekamobility.bj</strong>
            </p>
        </div>

        <hr class="divider">

        <p style="font-size: 13px; color: #555; line-height: 1.7;">
            Merci de faire confiance a <strong style="color: #FE9701;">Oreka Mobility</strong>.
            Nous vous souhaitons une excellente experience !
        </p>

    </div>

    {{-- FOOTER --}}
    <div class="footer">
        <p>
            &copy; {{ date('Y') }} <strong>OREKA MOBILITY</strong> &mdash; Cotonou, Benin<br>
            contact@orekamobility.bj<br>
            <span style="font-size:10px;">Cet email est envoye automatiquement, merci de ne pas y repondre.</span>
        </p>
    </div>

</div>
</body>
</html>
