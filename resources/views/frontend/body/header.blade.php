<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<meta name="description" content="@yield("description")">
<meta name="robots" content="index, follow">
<meta name="application-name" content="OREKA Mobility" />
<meta name="author" content="OREKA Mobility">
<meta name="image" content="{{ asset('assets/img/logo_oreka.png')}}">


<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="@yield("description")">
<meta property="og:image" content="{{ asset('assets/img/logo_oreka.png') }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="OREKA Mobility" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('title')">
<meta name="twitter:description" content="@yield('description')">
<meta name="twitter:image" content="{{ asset('assets/img/logo_oreka.png') }}">


<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/img/favicon_oreka.png')}}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Fontawesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- Select2 CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css')}}">
<!-- Datepicker CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css')}}">
<!-- Aos CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css')}}">
<!-- Fearther CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/feather.css')}}">
<!-- Owl carousel CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css')}}">
<!-- Fancybox CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/fancybox/fancybox.css')}}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css')}}">
<!-- Boxicons CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/boxicons/css/boxicons.min.css')}}">
<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<!-- Rangeslider CSS -->
<link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/language/style.css')}}">





@stack('links')
