<!--=============================
Header Area
==============================-->
<header class="tv-header header-style6">
    <div class="main-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto logo">
                    <div class="header-logo">
                        <a href="{{ route('home') }}">
                            <img alt="logo" src="{{ asset('public/assets/image/logo/logo_header.png') }}">
                            <img alt="logo" src="{{ asset('public/assets/image/logo/logo_header.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-auto nav-outer">
                    <div class="nav-menu">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul class="navigation">
                                <li><a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                                <li><a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a></li>
                                <li><a class="{{ request()->routeIs('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a></li>
                                <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                                <li><a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
                            </ul>
                        </nav>
                        <div class="navbar-right d-inline-flex d-lg-none">
                            <button class="menu-toggle sidebar-btn" type="button">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-auto header-right-wrapper">
                    <div class="outer-box">
                        <a href="{{ route('contact') }}" class="theme-btn">
                            <span class="link-effect">
                                <span class="effect-1">Get Free Quote</span>
                                <span class="effect-1">Get Free Quote</span>
                            </span>
                            <span class="arrow-all">
                                <i>
                                    <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#061153" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#061153" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </i>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!--==============================
Mobile Menu
============================== -->
<div class="mobile-menu-wrapper">
    <div class="mobile-menu-area">
        <button class="menu-toggle"><i class="fas fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img alt="Pureflow" src="{{ asset('public/assets/image/logo/logo_header.png') }}"></a>
        </div>
        <div class="mobile-menu">
            <ul class="navigation clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
        </div>
        <ul class="contact-list-one">
            <li>
                <div class="contact-info-box">
                    <span class="icon fa-solid fa-phone"></span>
                    <span class="title">Call Us Anytime</span>
                    <a href="tel:+1234567890">+123 (4567) 890</a>
                </div>
            </li>
            <li>
                <div class="contact-info-box">
                    <span class="icon fa-light fa-envelope"></span>
                    <span class="title">Email Us</span>
                    <a href="mailto:example@gmail.com">example@gmail.com</a>
                </div>
            </li>
            <li>
                <div class="contact-info-box">
                    <span class="icon fa-light fa-alarm-clock"></span>
                    <span class="title">Opening Hour</span>
                    Mon - Sat 8:00 - 6:30, Sunday - CLOSED
                </div>
            </li>
        </ul>
        <ul class="social-links">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
    </div>
</div>

<!--==============================
Sticky Header
============================== -->
<div class="sticky-header">
    <div class="container">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto logo">
                    <div class="header-logo">
                        <a href="{{ route('home') }}">
                            <img alt="logo" src="{{ asset('public/assets/image/logo/logo_header.png') }}">
                            <img alt="logo" src="{{ asset('public/assets/image/logo/logo_header.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-auto nav-menu">
                    <nav class="main-menu d-none d-lg-inline-block">
                        <ul class="navigation clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </ul>
                    </nav>
                    <div class="navbar-right d-inline-flex d-lg-none">
                        <button class="menu-toggle sidebar-btn" type="button">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Search -->
<div class="search-popup">
    <button class="close-search style-1"><i class="fa fa-times"></i></button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input id="search1" type="search" name="search-field" value="" placeholder="Search..." required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>