{{--
@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
--}}

    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations de Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        .info-item {
            margin-bottom: 15px;
        }
        .info-label {
            font-weight: bold;
            color: #2980b9;
        }
        .info-value {
            margin-top: 5px;
        }
        .message {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Informations de Contact</h1>

    <div class="info-item">
        <div class="info-label">Nom :</div>
        <div class="info-value">{{ $data['name'] }}</div>
    </div>

    <div class="info-item">
        <div class="info-label">Email :</div>
        <div class="info-value">{{ $data['email'] }}</div>
    </div>

    <div class="info-item">
        <div class="info-label">Téléphone :</div>
        <div class="info-value">{{ $data['telephone'] }}</div>
    </div>

    {{--<div class="info-item">
        <div class="info-label">Sujet :</div>
        <div class="info-value">{{ $data['sujet'] }}</div>
    </div>--}}

    <div class="info-item">
        <div class="info-label">Message :</div>
        <div class="info-value message">{{ $data['message'] }}</div>
    </div>
</div>
</body>
</html>
