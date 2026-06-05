@extends('layouts.app')

@section('title', 'About Us - Fortune Delight Properties')

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
                                    <h2 class="title">About Us</h2>
                                    <ul class="page-breadcrumb">
                                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                                        <li><span>/</span> About Us</li>
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


         <!--==============================
        Freature Section One
        ==============================-->
        <section class="tv-feature-section bg-light space-top">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="tv-feature-item wow fadeInLeft" data-wow-delay=".5s">
                            <div class="client-social-proof">
                                <div class="social">
                                    <img src="{{ asset('public/assets/images/social/social-img01.webp') }}" alt="Client 01">
                                    <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Client 02">
                                    <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Client 03">
                                    <h4>+3K</h4>
                                </div>
                                <div class="count-box mt-30"><span class="count-number odometer" data-count="3600">3,600</span></div>
                                <div class="rating-viewers">active customers</div>
                                <a href="{{ route('contact') }}" class="theme-btn style2 mt-20 br-30">
                                    <span class="link-effect">
                                        <span class="effect-1">Explore More</span>
                                        <span class="effect-1">Explore More</span>
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
                            <div class="logo mb-40"><img src="{{ asset('public/assets/images/about/hm5-icon1.webp') }}" alt="Sales Icon"></div>
                            <h2>Luxury Residential <br>Brokerage</h2>
                            <p>Connecting investors with exclusive shoreline villas, penthouses, and townhouses.</p>
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
                        <div class="logo mb-40"><img src="{{ asset('public/assets/images/feature/hm1-icon02.webp') }}" alt="Investment Icon"></div>
                        <h2>Off-Plan & High-Yield <br>Investments</h2>
                        <p>Providing direct VIP access to new property launches from Dubai's premier developers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--==============================
        About Section Three
        ==============================-->
         <section class="tv-about-section style-3 space bg-light">
            <div class="container">
                <div class="row gy-30 align-items-center">
                    <div class="col-lg-4">
                        <div class="about-left">
                            <div class="about-thumb">
                                <img class="br-20" src="{{ asset('public/assets/image/about/hm5-img01.webp') }}" alt="About Image">
                            </div>
                            <div class="pt-50 pb-30 md-d-none">
                                <div class="border"></div>
                            </div>
                            <div class="counter">
                                    <div class="about-counter">
                                        <div class="count-box"><span class="count-number odometer" data-count="8">8</span></div>
                                        <div class="text">
                                            <span>+</span>
                                            <p>Years of <br> Experience</p>
                                        </div>
                                        <div class="scribble md-d-none"><img src="{{ asset('public/assets/images/icons/scribble-2.webp') }}" alt="Scribble"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="about-content-wrap">
                            <!-- Section Title -->
                            <div class="title-wrap three">
                                <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Get to Know Us</div>
                                <h2 class="sec-title">Connecting Clients with Dubai's Finest Premium Residences</h2>
                                <p>Fortune Delight Properties is a premier real estate boutique in Dubai. We specialize in luxury residential sales, premium waterfront villas, high-yield off-plan investments, and complete property management solutions with maximum transparency.</p>
                            </div>
                            <!--Skills-->
                            <div class="skills">
                                <!--Skill Item-->
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <div class="skill-title">Market Analysis & Valuations</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="92">
                                                <div class="skill-percentage">
                                                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="92">92</span>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Skill Item-->
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <div class="skill-title">Residency & Golden Visa Advisory</div>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-inner">
                                            <div class="bar progress-line" data-width="88">
                                                <div class="skill-percentage">
                                                    <div class="count-box"><span class="count-text" data-speed="3000" data-stop="88">88</span>%
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn mt-40 br-30">
                                <span class="link-effect">
                                    <span class="effect-1">Discover More</span>
                                    <span class="effect-1">Discover More</span>
                                </span>
                                <span class="arrow-all">
                                    <i>
                                        <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex align-items-end">
                        <div class="about-right ml-40 xs-ml-0">
                            <div class="video-box">
                                <div class="circle-box">
                                        <a class="logo-box popup-video" href="https://www.youtube.com" data-fancybox="video-gallery">
                                            <img src="{{ asset('public/assets/images/hero/spin-icon.webp') }}" alt="Spin Icon">
                                        </a>
                                        <div class="text-inner" style="animation: 10s linear 0s infinite normal none running text-rotate;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="192.5" height="192.5" viewBox="0 0 250.5 250.5">
                                                <path d="M.25,125.25a125,125,0,1,1,125,125,125,125,0,0,1-125-125" id="e-path-35ee1b2"></path>
                                                <text>
                                                    <textPath id="e-text-path-35ee1b2" href="#e-path-35ee1b2" startOffset="0%">DUBAI  REAL ESTATE  INVESTMENT  EXCELLENCE</textPath>
                                                </text>
                                            </svg>
                                        </div>
                                </div>
                            </div>
                            <div class="profile-card overlay-anim1 mt-40">
                                <img class="image overlay-anim1" src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Director Image">
                                <div class="profile-details">
                                    <h5 class="name">EXECUTIVE TEAM</h5>
                                    <p class="title">Managing Directors</p>
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
                    <div class="slider__marquee clearfix marquee-wrap style-2 br-0">
                        <ul class="marquee_mode marquee__group">
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt="Marquee Icon"> Luxury Villas</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt="Marquee Icon"> Premium Apartments</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt="Marquee Icon"> Off-Plan Investments</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt="Marquee Icon"> Waterfront Penthouses</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt="Marquee Icon"> Golden Visa Advisory</li>
                        </ul>
                    </div>
                 </div>
            </div>
        </div>




        <!--==============================
        Team Section Two
        ==============================-->
        <section class="tv-team-section style-2 bg-light position-relative z-2">
            <div class="team-inner space overflow-hidden position-relative mx-30 xxl-mx-0">
                <div class="bg image"><img src="{{ asset('public/assets/images/team/hm2-bg01.webp') }}" alt="Background"></div>
                <div class="container">
                    <div class="row gy-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="team-content-wrap">
                                <div class="title-wrap white" data-wow-duration="2s" data-wow-delay=".0s">
                                    <div class="sub-title-2 text-white two"><i class="fa-solid fa-circle-check"></i>Our Team</div>
                                    <h2 class="sec-title">Meet Our RERA-Certified Property Brokers</h2>
                                </div>
                                <div class="team-btn-wrapper">
                                    <div class="array-button">
                                        <button class="array-prev"><i class="fa fa-arrow-left-long"></i></button>
                                        <button class="array-next active"><i class="fa fa-arrow-right-long"></i></button>
                                    </div>
                                </div>
                                <div class="team-social-wrapper">
                                    <div class="client-social-proof">
                                        <div class="social">
                                            <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Broker 01">
                                            <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Broker 02">
                                            <h4>+15</h4>
                                        </div>
                                        <h4 class="text">Specialist <br> Advisors</h4>
                                        <div class="scribble-shape scribble md-d-none">
                                            <img src="{{ asset('public/assets/images/team/hm2-scribble.webp') }}" alt="Scribble">
                                         </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="tv-team-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="tv-team-card style-2">
                                            <div class="team-photo">
                                            <img src="{{ asset('public/assets/images/team/hm2-img01.webp') }}" alt="Agent 01">
                                            <div class="team-social">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            </div>
                                            <div class="team-info">
                                                <div class="info-inner">
                                                    <h3 class="team-name text-white"><a href="#">Sophia Sterling</a></h3>
                                                    <p class="team-role text-white">Palm Jumeirah Specialist</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tv-team-card style-2">
                                            <div class="team-photo">
                                                <img src="{{ asset('public/assets/images/team/hm2-img02.webp') }}" alt="Agent 02">
                                                <div class="team-social">
                                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                                </div>
                                            </div>
                                            <div class="team-info">
                                                <div class="info-inner">
                                                    <h3 class="team-name text-white"><a href="#">Imran Khan</a></h3>
                                                    <p class="team-role text-white">Downtown Dubai Advisor</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="tv-team-card style-2">
                                            <div class="team-photo">
                                            <img src="{{ asset('public/assets/images/team/hm2-img01.webp') }}" alt="Agent 03">
                                            <div class="team-social">
                                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                            </div>
                                            </div>
                                            <div class="team-info">
                                                <div class="info-inner">
                                                    <h3 class="team-name text-white"><a href="#">Elena Rostova</a></h3>
                                                    <p class="team-role text-white">Waterfront Leasing Manager</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <!--==============================
        Achivement Section One
        ==============================-->
        <section class="tv-achivement-section bg-light space-top overflow-hidden">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-lg-6 col-xxl-6">
                        <div class="achivement-content-wrapper">
                            <!-- Section Title -->
                            <div class="title-wrap three" data-wow-duration="1.5s" data-wow-delay=".4s">
                                <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Achievement</div>
                                <h2 class="sec-title">Guiding Investors to Achieve Premium Returns and Financial Freedom</h2>
                                <p>Fortune Delight Properties is committed to providing bespoke property consulting and secure transaction handling for families, professionals, and international corporate investors looking to build a legacy in Dubai.</p>
                            </div>
                            <div class="inner-contact">
                                    <div class="icon">
                                        <img src="{{ asset('public/assets/images/callus/call-iocn.webp') }}" alt="Phone Icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="call-text">Need Help?</h6>
                                        <a class="call-phone" href="tel:+97140000000">+971 4 000 0000</a>
                                    </div>
                            </div>
                            <a href="{{ route('contact') }}" class="theme-btn mt-40 br-30">
                                <span class="link-effect">
                                    <span class="effect-1">Discover More</span>
                                    <span class="effect-1">Discover More</span>
                                </span>
                                <span class="arrow-all">
                                    <i>
                                        <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </i>
                                </span>
                            </a>
                       </div>
                    </div>
                    <div class="col-lg-3 col-xxl-3 lpm-d-none">
                        <div class="achivement-image-wrapper">
                            <div class="thumb-bg">
								<svg version="1.1" viewBox="0 0 586.23 500.74" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-1.0738 -1.2546)"><path d="m211.33 501.74c-187.01-7.406-269.07-172.39-164.01-329.74 130.19-194.98 434.71-232.19 520.53-63.614 85.759 168.44-126.35 402.46-356.52 393.35zm63.333-96.994c199.68-42.298 301.86-265.24 140.24-305.98-121.19-30.549-281.94 59.67-317 177.91-27.173 91.643 57.87 153.26 176.77 128.07z"/></g></svg>
							</div>
                            <div class="thumb img-anim-right"><img src="{{ asset('public/assets/image/about/hm5-img01.webp') }}" alt="Achievement"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xxl-3">
                        <div class="achivement-right-wrapper">
                            <div class="content">
                                <span><img class="spin2" src="{{ asset('public/assets/images/achivement/spin.webp') }}" alt="Spin"></span>
                                <h4>Achievements</h4>
                            </div>
                            <div class="counter-box">
                                <div class="counter-inner">
                                    <div class="icon"><img src="{{ asset('public/assets/images/achivement/hm2-icon01.webp') }}" alt="Icon"></div>
                                    <div class="count"><span class="count-number odometer" data-count="2">2</span>B<span class="plus">+</span></div>
                                </div>
                                <p>AED 2B+ Transactions Completed</p>
                            </div>
                            <div class="counter-box">
                                <div class="counter-inner">
                                    <div class="icon"><img src="{{ asset('public/assets/images/achivement/hm2-icon02.webp') }}" alt="Icon"></div>
                                    <div class="count"><span class="count-number odometer" data-count="1">1</span>K<span class="plus">+</span></div>
                                </div>
                                <p>1,000+ Luxury Keys Handed Over</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!--==============================
        Brand Section
        ==============================-->
        <div class="tv-brands-section bg-light position-relative z-3 ">
            <div class="brand-inner bg-light2 overflow-hidden position-relative space br-30 ml-br-0 mx-30 xxl-mx-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sponsors-outer  brand-outher bg-light2">
                                <div class="trusted-partners d-flex align-items-center mb-60">
                                    <span class="line"></span>
                                    <div class="title">PARTNERED WITH DUBAI'S <span class="text-theme">PREMIER</span> PROPERTY DEVELOPERS</div>
                                    <span class="line"></span>
                                </div>
                                <div class="brands-slider-two swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="brand-item" style="font-family: Georgia, serif; font-weight: bold; color: #fff; text-align: center; line-height: 50px;">EMAAR</div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item" style="font-family: Georgia, serif; font-weight: bold; color: #fff; text-align: center; line-height: 50px;">NAKHEEL</div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item" style="font-family: Georgia, serif; font-weight: bold; color: #fff; text-align: center; line-height: 50px;">DAMAC</div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item" style="font-family: Georgia, serif; font-weight: bold; color: #fff; text-align: center; line-height: 50px;">SOBHA</div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="brand-item" style="font-family: Georgia, serif; font-weight: bold; color: #fff; text-align: center; line-height: 50px;">MERAAS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <!--==============================
        Proces Section Two
        ==============================-->
        <section class="tv-process-section style-2 bg-light position-relative">
            <div class="process-inner mx-30 ml-mx-0 space  overflow-hidden xxl-br-0 position-relative">
                <div class="container position-relative">
                    <!-- Section Title -->
                    <div class="title-wrap text-center three" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="sub-title-2"><i class="fa-solid fa-circle-check"></i>Strategy</div>
                        <h2 class="sec-title text-dark">From Client Search to <br> Seamless Keys Handover</h2>
                    </div>
                    <div class="row gx-0">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                              <!-- Box 1 -->
                            <div class="process-box">
                                <div class="process-img">
									<svg viewBox="0 0 255.15 255.45" class="clip-svg">
										<clipPath id="clip-shape-1">
										<path d="m121.5 257.34c-12.412-0.72765-28.182-2.8044-31.586-17.301-2.793-4.7182 1.5857-17.575-0.91518-18.486-6.9121 8.0007-15.665 16.497-27.297 14.062-12.112-3.5031-20.188-14.556-28.777-23.182-7.8713-8.1452-15.98-19.896-9.8053-31.396 1.7993-7.4536 22.589-17.642 5.6303-15.507-12.465 2.6063-25.259-7.6117-25.342-20.399-1.5559-14.691-1.4603-30.117 3.0379-44.264 5.6087-11.603 19.422-12.54 30.554-11.632-10.032-8.1008-18.117-21.786-10.943-34.369 9.9376-12.778 21.593-25.07 35.927-32.791 13.707-5.7697 23.972 8.0297 31.682 13.692-1.3068-11.36-0.29036-26.277 12.613-30.597 17.13-4.2617 35.742-3.8162 52.583 1.479 12.999 5.2971 11.29 20.476 10.951 31.352 8.3856-11.327 25.183-20.051 37.491-8.9629 11.685 9.7824 24.383 20.724 29.954 35.2 3.327 12.905-5.8445 22.582-15.258 29.719 12.816-1.0321 28.867 0.70354 33.387 15.198 3.5614 16.402 2.9324 34.088-1.9799 50.147-4.8191 10.631-17.912 13.661-28.426 11.082-3.9402 5.1302 14.868 13.858 10.483 24.117 0.75317 12.174-10.641 19.899-17.882 28.095-9.3379 8.628-20.586 20.096-34.604 15.289-7.848 0.12536-13.831-15.895-17.691-12.727 1.3139 10.463 0.62546 23.95-10.484 28.943-10.509 3.8647-22.254 4.0698-33.304 3.2383z"/>
										</clipPath>
									</svg>
                                    <img src="{{ asset('public/assets/image/process/hm3-img01.webp') }}" alt="Idea Planning" class="main-img" style="clip-path: url(#clip-shape-1);" >
                                </div>

                                <h3>Property Search</h3>
                                <p>Understanding your exact budget, community preferences, and lifestyle needs.</p>
                                <div class="process-number"><span>01</span></div>
                             </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                              <!-- Box 2 -->
                            <div class="process-box style-2">
                                <div class="process-img">
									<svg viewBox="0 0 255.15 255.45" class="clip-svg">
										<clipPath id="clip-shape-2">
										<path d="m121.5 257.34c-12.412-0.72765-28.182-2.8044-31.586-17.301-2.793-4.7182 1.5857-17.575-0.91518-18.486-6.9121 8.0007-15.665 16.497-27.297 14.062-12.112-3.5031-20.188-14.556-28.777-23.182-7.8713-8.1452-15.98-19.896-9.8053-31.396 1.7993-7.4536 22.589-17.642 5.6303-15.507-12.465 2.6063-25.259-7.6117-25.342-20.399-1.5559-14.691-1.4603-30.117 3.0379-44.264 5.6087-11.603 19.422-12.54 30.554-11.632-10.032-8.1008-18.117-21.786-10.943-34.369 9.9376-12.778 21.593-25.07 35.927-32.791 13.707-5.7697 23.972 8.0297 31.682 13.692-1.3068-11.36-0.29036-26.277 12.613-30.597 17.13-4.2617 35.742-3.8162 52.583 1.479 12.999 5.2971 11.29 20.476 10.951 31.352 8.3856-11.327 25.183-20.051 37.491-8.9629 11.685 9.7824 24.383 20.724 29.954 35.2 3.327 12.905-5.8445 22.582-15.258 29.719 12.816-1.0321 28.867 0.70354 33.387 15.198 3.5614 16.402 2.9324 34.088-1.9799 50.147-4.8191 10.631-17.912 13.661-28.426 11.082-3.9402 5.1302 14.868 13.858 10.483 24.117 0.75317 12.174-10.641 19.899-17.882 28.095-9.3379 8.628-20.586 20.096-34.604 15.289-7.848 0.12536-13.831-15.895-17.691-12.727 1.3139 10.463 0.62546 23.95-10.484 28.943-10.509 3.8647-22.254 4.0698-33.304 3.2383z"/>
										</clipPath>
									</svg>
                                    <img src="{{ asset('public/assets/image/process/hm3-img02.webp') }}" alt="Idea Planning" class="main-img" style="clip-path: url(#clip-shape-2);" >
                                </div>
                                <h3>Viewing & Valuation</h3>
                                <p>Scheduling private community visits and preparing comprehensive valuation guides.</p>
                                <div class="process-number"><span>02</span></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                              <!-- Box 1 -->
                            <div class="process-box style-3">
                                <div class="process-img">
									<svg viewBox="0 0 255.15 255.45" class="clip-svg">
										<clipPath id="clip-shape-3">
										<path d="m121.5 257.34c-12.412-0.72765-28.182-2.8044-31.586-17.301-2.793-4.7182 1.5857-17.575-0.91518-18.486-6.9121 8.0007-15.665 16.497-27.297 14.062-12.112-3.5031-20.188-14.556-28.777-23.182-7.8713-8.1452-15.98-19.896-9.8053-31.396 1.7993-7.4536 22.589-17.642 5.6303-15.507-12.465 2.6063-25.259-7.6117-25.342-20.399-1.5559-14.691-1.4603-30.117 3.0379-44.264 5.6087-11.603 19.422-12.54 30.554-11.632-10.032-8.1008-18.117-21.786-10.943-34.369 9.9376-12.778 21.593-25.07 35.927-32.791 13.707-5.7697 23.972 8.0297 31.682 13.692-1.3068-11.36-0.29036-26.277 12.613-30.597 17.13-4.2617 35.742-3.8162 52.583 1.479 12.999 5.2971 11.29 20.476 10.951 31.352 8.3856-11.327 25.183-20.051 37.491-8.9629 11.685 9.7824 24.383 20.724 29.954 35.2 3.327 12.905-5.8445 22.582-15.258 29.719 12.816-1.0321 28.867 0.70354 33.387 15.198 3.5614 16.402 2.9324 34.088-1.9799 50.147-4.8191 10.631-17.912 13.661-28.426 11.082-3.9402 5.1302 14.868 13.858 10.483 24.117 0.75317 12.174-10.641 19.899-17.882 28.095-9.3379 8.628-20.586 20.096-34.604 15.289-7.848 0.12536-13.831-15.895-17.691-12.727 1.3139 10.463 0.62546 23.95-10.484 28.943-10.509 3.8647-22.254 4.0698-33.304 3.2383z"/>
										</clipPath>
									</svg>
                                    <img src="{{ asset('public/assets/image/process/hm3-img03.webp') }}" alt="Idea Planning" class="main-img" style="clip-path: url(#clip-shape-3);" >
                                </div>
                                <h3>Closing & Handover</h3>
                                <p>Securing the title deed, DLD registration, and key handover for your new property.</p>
                                <div class="process-number"><span>03</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   

        <!--==============================
        Newsletter Section
        ==============================-->
        <section class="newsletter-section mb--75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter">
                            <div class="arrow-shape md-d-none"><img src="{{ asset('public/assets/images/newsletter/arrow-shape.webp') }}" alt="Arrow"></div>
                            <div class="bg image"><img class="br-30" src="{{ asset('public/assets/images/newsletter/hm1-bg01.webp') }}" alt="BG"></div>
                            <div class="thumb d-none d-xl-block">
                                <img src="{{ asset('public/assets/images/newsletter/img01.webp') }}" alt="thumb">
                             </div>
                             <div class="image-text">
                                <img src="{{ asset('public/assets/images/icons/check-circle2.png') }}" alt="Check">
                                <h3 class="title title-anim" data-animation="bounce-in">Subscribe Our Newsletter <br> For Latest Updates</h3>
                             </div>
                                <form class="newsletter-form" action="https://formspree.io/f/mzbnjrnb" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" placeholder="Email Address" autocomplete="on" required="">
                                        <button type="submit">
                                            <i class="far fa-paper-plane"></i>
                                            <span class="btn-title"></span>
                                        </button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
