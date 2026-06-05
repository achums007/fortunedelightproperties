@extends('layouts.app')

<<<<<<< HEAD
@section('title', 'Our Services - Fortune Delight Properties')

@section('content')
<!-- Start Breadcrumb Section -->
<!-- ========================================== -->
<section class="tv-breadcrumb-section">
    <div class="tv-breadcrumb-inner mx-30 ml-mx-0 position-relative overflow-hidden br-30 ml-br-0">
        <div class="bg image"><img src="{{ asset('public/assets/images/bg-img/breadcrumb.webp') }}" alt="Breadcrumb"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-outer">
                        <div class="page-title">
                            <h2 class="title">Services</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('home') }}"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                                <li><span>/</span> Services</li>
                            </ul>
                        </div>
                        <div class="image-box md-d-none">
                            <div class="shapes">
                                <div class="shape shape-1"><img src="{{ asset('public/assets/images/shapes/circle.webp') }}" alt="Circle"></div>
                                <div class="shape shape-2 spin2"><img src="{{ asset('public/assets/images/shapes/star.webp') }}" alt="Star"></div>
                                <div class="shape shape-3 "><img src="{{ asset('public/assets/images/shapes/snake.webp') }}" alt="Snake"></div>
                                <div class="shape shape-4 jump3"><img src="{{ asset('public/assets/images/shapes/doot.webp') }}" alt="Dot"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
=======
@section('title', 'Home - Fortune Delight Properties')

@section('content')
>>>>>>> main

<!--==============================
Feature Section One
==============================-->
<section class="tv-feature-section bg-light space">
    <div class="container">
        <div class="row gy-30">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="tv-feature-item wow fadeInLeft" data-wow-delay=".5s">
                    <div class="client-social-proof">
                        <div class="social">
                            <img src="{{ asset('public/assets/images/social/social-img01.webp') }}" alt="Client 01">
                            <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Client 02">
                            <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Client 03">
                            <h4>+5K</h4>
                        </div>
                        <div class="count-box mt-30"><span class="count-number odometer" data-count="5200">5,200</span></div>
                        <div class="rating-viewers">Satisfied Homeowners</div>
                        <a href="{{ route('contact') }}" class="theme-btn style2 mt-20 br-30">
                            <span class="link-effect">
                                <span class="effect-1">Contact An Agent</span>
                                <span class="effect-1">Contact An Agent</span>
                            </span>
                            <span class="arrow-all-2">
                                <i>
                                    <svg width="11" height="12" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z" fill="white"></path>
                                    </svg>
                                    <svg width="11" height="12" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z" fill="white"></path>
                                    </svg>
                                </i>
                            </span>
                        </a>
                        <div class="scribble-shape1 moving">
                            <img src="{{ asset('public/assets/images/feature/scribble.webp') }}" alt="Scribble">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="tv-feature-box wow fadeInLeft" data-wow-delay=".7s">
                    <div class="icon-top">
                        <div class="icon">
                            <i>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z" fill="white"></path>
                                </svg>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z" fill="white"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="logo mb-40"><img src="{{ asset('public/assets/images/about/hm5-icon1.webp') }}" alt="Brokerage Icon"></div>
                    <h2>Exclusive <br>Dubai Listings</h2>
                    <p>Access high-value properties in Palm Jumeirah, Downtown, and Dubai Marina before they hit the open market.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="tv-feature-box bg-theme3 wow fadeInLeft" data-wow-delay=".9s">
                    <div class="icon-top">
                        <div class="icon style2 bg-dark">
                            <i>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z" fill="white"></path>
                                </svg>
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z" fill="white"></path>
                                </svg>
                            </i>
                        </div>
                    </div>
                    <div class="logo mb-40"><img src="{{ asset('public/assets/images/about/hm5-icon2.webp') }}" alt="Advisory Icon"></div>
                    <h2>Client-First <br>Investment Advice</h2>
                    <p>Receive tailor-made real estate strategies that maximize capital appreciation and rental yield return on investment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Service Section Two
==============================-->
<section class="tv-service-section space-bottom inner style-2 bg-light">
    <div class="tv-service-inner position-relative overflow-hidden mx-30 ml-mx-0">
        <div class="container">
            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="title-wrap two white">
                        <div class="sub-title-2"><i class="fa-solid fa-circle-check"></i>Services</div>
                        <h2 class="sec-title text-dark">Premium Real Estate Services <br>Tailored For Global Investors</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <!-- service box -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="tv-service-single-box wow fadeInUp" data-wow-delay=".2s">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/service/hm1-icon01.webp') }}" alt="Residential Icon"></div>
                            <h4 class="title">Residential <br>Sales & Leasing</h4>
                            <div class="border2 mt-20 mb-20"></div>
                            <p class="text">Access standard apartments, penthouses, and luxury villas across Dubai. We guide you from initial viewing to final DLD registration.</p>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mt-40">
                                <span class="link-effect">
                                    <span class="effect-1">Inquire Now</span>
                                    <span class="effect-1">Inquire Now</span>
                                </span>
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="tv-service-single-box wow fadeInUp" data-wow-delay=".3s">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/service/hm1-icon02.webp') }}" alt="Off-Plan Icon"></div>
                            <h4 class="title">Off-Plan <br>Consultancy</h4>
                            <div class="border2 mt-20 mb-20"></div>
                            <p class="text">Maximize your wealth with exclusive off-plan launches from Emaar, Nakheel, Select Group, and DAMAC. Benefit from priority layouts and payment plans.</p>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mt-40">
                                <span class="link-effect">
                                    <span class="effect-1">Explore Launches</span>
                                    <span class="effect-1">Explore Launches</span>
                                </span>
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="tv-service-single-box wow fadeInUp" data-wow-delay=".4s">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/service/hm1-icon03.webp') }}" alt="Management Icon"></div>
                            <h4 class="title">Property <br>Management</h4>
                            <div class="border2 mt-20 mb-20"></div>
                            <p class="text">Complete property management for local and overseas owners. We handle marketing, tenancy contracts, maintenance, and rent collections.</p>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mt-40">
                                <span class="link-effect">
                                    <span class="effect-1">Manage My Asset</span>
                                    <span class="effect-1">Manage My Asset</span>
                                </span>
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="tv-service-single-box wow fadeInUp" data-wow-delay=".5s">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/service/details-icon01.webp') }}" alt="Golden Visa Icon"></div>
                            <h4 class="title">Golden Visa <br>Advisory</h4>
                            <div class="border2 mt-20 mb-20"></div>
                            <p class="text">We help you secure the 10-year UAE Golden Visa through real estate investments of AED 2,000,000 or more, coordinating with local authorities.</p>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mt-40">
                                <span class="link-effect">
                                    <span class="effect-1">Learn More</span>
                                    <span class="effect-1">Learn More</span>
                                </span>
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="tv-service-single-box wow fadeInUp" data-wow-delay=".6s">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/service/details-icon02.webp') }}" alt="Valuation Icon"></div>
                            <h4 class="title">Valuation & <br>Market Appraisal</h4>
                            <div class="border2 mt-20 mb-20"></div>
                            <p class="text">Receive data-driven, accurate property evaluations based on recent DLD transactions. Get full clarity on what your asset is worth today.</p>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mt-40">
                                <span class="link-effect">
                                    <span class="effect-1">Request Valuation</span>
                                    <span class="effect-1">Request Valuation</span>
                                </span>
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="tv-service-single-box wow fadeInUp" data-wow-delay=".7s">
                        <div class="inner-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/service/details-icon03.webp') }}" alt="Commercial Icon"></div>
                            <h4 class="title">Commercial <br>Real Estate</h4>
                            <div class="border2 mt-20 mb-20"></div>
                            <p class="text">Expert guidance for acquiring commercial spaces in Dubai's premium business hubs, including Downtown Dubai, JLT, and Business Bay.</p>
                            <a href="{{ route('contact') }}" class="theme-btn w-100 mt-40">
                                <span class="link-effect">
                                    <span class="effect-1">View Spaces</span>
                                    <span class="effect-1">View Spaces</span>
                                </span>
                                <i class="fa-solid fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>                                                                        
            </div>
        </div>
    </div>
</section>

<!--==============================
Marquee Section
==============================-->
<div class="tv-marquee-section bg-light position-relative">
    <div class="tv-marquee-inner mx-30 ml-mx-0 position-relative">
        <div class="container-fluid p-0 overflow-hidden">
            <div class="slider__marquee clearfix marquee-wrap">
                <ul class="marquee_mode marquee__group">
                    <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Luxury Sales</li>
                    <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Off-Plan Launches</li>
                    <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Property Management</li>
                    <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Golden Visa</li>
                    <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Dubai Real Estate</li>
                </ul>
            </div>
         </div>
    </div>
</div>

<!--==============================
Process Section One
==============================-->
<section class="tv-process-section bg-light position-relative">
    <div class="p-top-center z-1 wow slideInTop">
        <img src="{{ asset('public/assets/images/process/hm1-shape01.png') }}" alt="">
    </div>
    <div class="process-inner bg-theme3 mx-30 ml-mx-0 br_bl-30 br_br-30 ml-br-0 space overflow-hidden xxl-br-0 position-relative">
        <div class="container position-relative">
            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="process-title mt--25">
                        <h2 class="text-white text-center">PR<span class="text-theme">O</span>CESS</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tv-process-item wow fadeInRightBig" data-wow-delay=".2s">
                        <h4 class="title-text">STEP 01</h4>
                        <div class="process-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/process/hm1-icon1.webp') }}" alt="Consultation"></div>
                            <h3 class="title">Consultation</h3>
                            <p>We analyze your investment targets, preferred neighborhoods, and budget restrictions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tv-process-item wow fadeInRightBig" data-wow-delay=".3s">
                        <h4 class="title-text">STEP 02</h4>
                        <div class="process-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/process/hm1-icon2.webp') }}" alt="Selection"></div>
                            <h3 class="title">Match & Select</h3>
                            <p>We source top-tier off-plan properties or secondary market listings tailored to you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tv-process-item wow fadeInRightBig" data-wow-delay=".4s">
                        <h4 class="title-text">STEP 03</h4>
                        <div class="process-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/process/hm1-icon3.webp') }}" alt="Acquisition"></div>
                            <h3 class="title">Acquisition</h3>
                            <p>We coordinate documentation, DLD signing, and handle legal aspects of the transfer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="tv-process-item wow fadeInRightBig" data-wow-delay=".5s">
                        <h4 class="title-text">STEP 04</h4>
                        <div class="process-box">
                            <div class="icon"><img src="{{ asset('public/assets/images/process/hm1-icon4.webp') }}" alt="Management"></div>
                            <h3 class="title">Yield & Management</h3>
                            <p>We rent out and manage the asset, delivering high cash flow returns to you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
=======
            </div>
        </section>


>>>>>>> main
@endsection