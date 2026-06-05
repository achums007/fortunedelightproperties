<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <title>@yield('title', 'Fortune Delight Properties | Luxury Real Estate Dubai')</title>
    <meta content="Fortune Delight Properties - Luxury Real Estate Agency in Dubai, UAE" name="description">
    <meta content="real estate dubai, luxury villas, dubai marina, palm jumeirah, properties buy sell" name="keywords">
    <meta content="INDEX,FOLLOW" name="robots">

    <!-- Mobile Specific Metas -->
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <!-- Favicons -->
    <link href="{{ asset('public/assets/images/favicons/favicon.png') }}" rel="icon" sizes="32x32" type="image/png">
    <meta content="#ffffff" name="msapplication-TileColor">
    <meta content="#ffffff" name="theme-color">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- All CSS Files -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/flaticon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/odometer.css') }}" rel="stylesheet">
    <!-- Theme Custom CSS -->
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

    <!-- Vite Assets (for Tailwind CSS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="body">
    <div class="page-wrapper bg-light">
        <!-- Preloader -->
        <div class="loading-screen" id="loading-screen">
            <div class="preloader-close">x</div>
            <span class="loader"></span>
        </div>

        @include('partials.header')

        <!-- Main Content -->
        @yield('content')

        @include('partials.footer')
    </div>

    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <div class="arrowUp">
            <i class="fa-light fa-arrow-up"></i>
        </div>
        <div class="water" style="transform: translate(0px, 40%);">
            <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
                <use xlink:href="#wave"></use>
            </svg>
            <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
                <use xlink:href="#wave"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 560 20" style="display: none;">
                <symbol id="wave">
                    <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z" fill="#" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 301.839, 301.839; stroke-dashoffset: 119.488px;"></path>
                    <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z" fill="#"></path>
                    <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z" fill="#"></path>
                    <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z" fill="#"></path>
                </symbol>
            </svg>
        </div>
    </div>

    <!-- Jquery -->
    <script src="{{ asset('public/assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

    <!-- Gsap Js -->
    <script src="{{ asset('public/assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/ScrollSmoother.js') }}"></script>
    <script src="{{ asset('public/assets/js/gsap-scroll-to-plugin.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/ScrollTrigger.min.js') }}"></script>
    
    <!-- Swiper and Other Plugins -->
    <script src="{{ asset('public/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/marquee.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('public/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/lenis.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/splite-type.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/vanilla-tilt.min.js') }}"></script>
    
    <!-- Hover Effect Js -->
    <script src="{{ asset('public/assets/js/three.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/hover.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('public/assets/js/main.js') }}"></script>
</body>

</html>