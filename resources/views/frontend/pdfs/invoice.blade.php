<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Reçu #{{ $transactionID }}</title>
    <style>
        @page {
            size: A5 landscape;
            margin: 0;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 10px;
            color: #444;
            background: #fff;
            padding: 22px 28px 55px 28px;
        }

        /* ── HEADER ── */
        .header {
            border-bottom: 3px solid #FE9701;
            padding-bottom: 12px;
            margin-bottom: 16px;
        }
        .header-table { width: 100%; border-collapse: collapse; }

        .logo-img { height: 40px; display: block; }
        .company-name {
            font-size: 11px;
            font-weight: 700;
            color: #FE9701;
            margin-top: 5px;
            letter-spacing: 0.5px;
        }
        .company-details { font-size: 8px; color: #888; margin-top: 2px; }

        .invoice-title {
            font-size: 16px;
            font-weight: 800;
            color: #222;
            letter-spacing: 1.5px;
            text-align: right;
            margin-bottom: 5px;
        }
        .invoice-meta {
            font-size: 9px;
            color: #555;
            line-height: 1.8;
            text-align: right;
        }
        .badge-paid {
            display: inline-block;
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 8px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        /* ── DIVIDER ── */
        .divider {
            border: none;
            border-top: 1px solid #f0f0f0;
            margin: 12px 0;
        }

        /* ── CLIENT BOX ── */
        .client-box {
            background: #fafafa;
            border-left: 4px solid #FE9701;
            padding: 10px 14px;
            margin-bottom: 14px;
        }
        .client-label {
            font-size: 7px;
            color: #aaa;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 3px;
        }
        .client-name {
            font-size: 14px;
            font-weight: 700;
            color: #111;
        }
        .client-details-table { width: 100%; border-collapse: collapse; margin-top: 5px; }
        .client-details-table td {
            font-size: 8.5px;
            color: #666;
            padding: 1px 0;
            width: 50%;
        }
        .client-detail-label { color: #aaa; font-size: 7.5px; }

        /* ── ITEMS TABLE ── */
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 12px;
        }
        .items-table thead tr {
            background: #2d2d2d;
        }
        .items-table th {
            text-align: left;
            padding: 7px 12px;
            color: #fff;
            font-size: 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        .items-table th.text-right { text-align: right; }
        .items-table td {
            padding: 8px 12px;
            border-bottom: 1px solid #f2f2f2;
            font-size: 10px;
            color: #333;
            vertical-align: middle;
        }
        .items-table td.text-right { text-align: right; }
        .items-table tbody tr:nth-child(even) td { background: #fafafa; }
        .items-table tbody tr:last-child td { border-bottom: 2px solid #eee; }
        .item-name { font-weight: 600; color: #222; }

        /* ── TOTAL ── */
        .total-section {
            width: 100%;
            border-collapse: collapse;
        }
        .total-section td { padding: 3px 0; }
        .total-row-final {
            border-top: 2px solid #eee;
        }
        .total-row-final td {
            padding-top: 8px;
            font-size: 13px;
            font-weight: 800;
            color: #FE9701;
        }
        .total-label { text-align: left; text-transform: uppercase; letter-spacing: 0.5px; }
        .total-amount { text-align: right; }

        /* ── FOOTER ── */
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 8px 28px;
            background: #f9f9f9;
            border-top: 1px solid #eee;
            text-align: center;
            font-size: 7px;
            color: #bbb;
        }
        .footer strong { color: #FE9701; }

        /* ── REF BOX ── */
        .ref-box {
            background: #fff8ee;
            border: 1px solid #FE9701;
            border-radius: 3px;
            padding: 6px 12px;
            margin-bottom: 14px;
            font-size: 9px;
            color: #555;
        }
        .ref-box strong { color: #FE9701; font-size: 11px; }
    </style>
</head>
<body>

    {{-- ── HEADER ── --}}
    <div class="header">
        <table class="header-table">
            <tr>
                <td style="width: 50%; vertical-align: middle;">
                    @if(file_exists(public_path('assets/img/logo_oreka_3.png')))
                        <img src="{{ public_path('assets/img/logo_oreka_3.png') }}" alt="OREKA" class="logo-img">
                    @else
                        <span style="font-size:22px; font-weight:900; color:#FE9701;">OREKA</span>
                    @endif
                    <div class="company-name">OREKA MOBILITY</div>
                    <div class="company-details">contact@orekamobility.bj  |  Cotonou, Benin</div>
                </td>
                <td style="width: 50%; vertical-align: middle;">
                    <div class="invoice-title">RECU DE RESERVATION</div>
                    <div class="invoice-meta">
                        <div>Date : <strong>{{ date('d/m/Y') }}</strong></div>
                        @if(!empty($start_date))
                            <div>Debut : <strong>{{ $start_date }}</strong></div>
                        @endif
                        <div style="margin-top: 4px;">
                            <span class="badge-paid">PAYE VIA FEDAPAY</span>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    {{-- ── REFERENCE ── --}}
    <div class="ref-box">
        Reference de transaction : <strong>#{{ $transactionID }}</strong>
        &nbsp;&nbsp;&nbsp;
        Date d'emission : {{ date('d/m/Y H:i') }}
    </div>

    {{-- ── CLIENT ── --}}
    <div class="client-box">
        <div class="client-label">Informations Client</div>
        <div class="client-name">{{ $client_name }}</div>
        <table class="client-details-table">
            <tr>
                @if(!empty($client_email))
                <td>
                    <span class="client-detail-label">Email :</span><br>
                    {{ $client_email }}
                </td>
                @endif
                @if(!empty($client_phone))
                <td>
                    <span class="client-detail-label">Telephone :</span><br>
                    {{ $client_phone }}
                </td>
                @endif
                @if(!empty($start_date))
                <td>
                    <span class="client-detail-label">Date de debut :</span><br>
                    {{ $start_date }}
                </td>
                @endif
            </tr>
        </table>
    </div>

    {{-- ── SERVICES ── --}}
    <table class="items-table">
        <thead>
            <tr>
                <th style="width: 75%;">Designation du service</th>
                <th class="text-right">Montant</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
                <tr>
                    <td class="item-name">{{ $item['description'] }}</td>
                    <td class="text-right" style="font-weight: 700;">
                        {{ number_format($item['amount'], 0, ',', ' ') }} FCFA
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="2" style="text-align:center; color:#aaa; padding: 18px;">
                        Aucun service enregistre
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- ── TOTAL ── --}}
    <table class="total-section" style="width: 40%; margin-left: auto;">
        <tr class="total-row-final">
            <td class="total-label">Net Paye</td>
            <td class="total-amount">{{ number_format(intval($total), 0, ',', ' ') }} FCFA</td>
        </tr>
    </table>

    {{-- ── FOOTER ── --}}
    <div class="footer">
        Ce recu est genere electroniquement et fait foi de confirmation de reservation.
        &nbsp;|&nbsp;
        &copy; {{ date('Y') }} <strong>OREKA MOBILITY</strong>. Tous droits reserves.
    </div>

</body>
</html>
