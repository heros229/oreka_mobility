<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jan 2026 16:24:34 GMT -->
<head>

   @include('frontend.body.header')

</head>

<body>

<div class="main-wrapper">

    <!-- Hero Sec Main -->
    <div class="hero-sec-main">
        <!-- Header -->
        <header class="header header-two">
            @include('frontend.body.navbar')
        </header>
        <!-- /Header -->

        @yield('banner')

    </div>
    <!-- /Hero Sec Main -->

    @yield('content')


    <!-- Footer -->

    @include('frontend.body.footer')

    <!-- /Footer -->

</div>

<!-- scrollToTop start -->
<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
    </svg>
</div>
<!-- scrollToTop end -->

    @include('frontend.body.script')

</body>

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jan 2026 16:26:59 GMT -->
</html>
