@extends('layouts.app')

@section('title', 'Home - Fortune Delight Properties')

@section('content')


        <!--========  Start Sidebar Area ========-->
        <div id="sidebar-area" class="sidebar">
            <div class="sidebar-overlay"></div>
            <div class="sidebar-wrapper">
                <button class="sidebar-close-btn">
                    <svg class="icon-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="12.7px" viewBox="0 0 16 12.7" style="enable-background:new 0 0 16 12.7" xml:space="preserve">
                        <g>
                            <rect x="0" y="5.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.1569 7.5208)" width="16" height="2"></rect>
                            <rect x="0" y="5.4" transform="matrix(0.7071 0.7071 -0.7071 0.7071 6.8431 -3.7929)" width="16" height="2"></rect>
                        </g>
                    </svg>
                </button>
                <div class="sidebar-content">
                    <div class="sidebar-logo">
                        <a class="dark-logo" href="index.html"><img src="{{ asset('public/assets/images/logo/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="sidebar-menu-wrap"></div>
                    <div class="sidebar-about">
                        <h6>Explore the world</h6>
                        <div class="sidebar-header">
                            <h3>World's leading Business agency</h3>
                        </div>
                    </div>
                    <!-- Instagram Feed Section -->
                    <div class="instafeed-wrapper">
                    <div class="insta-item">
                        <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('public/assets/images/sidebar/sidebar1.jpeg') }}" alt="">
                        <span class="overlay"><i class="fa-brands fa-instagram"></i></span>
                        </a>
                    </div>
                    <div class="insta-item">
                        <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('public/assets/images/sidebar/sidebar-2.jpg') }}" alt="">
                        <span class="overlay"><i class="fa-brands fa-instagram"></i></span>
                        </a>
                    </div>
                    <div class="insta-item">
                        <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('public/assets/images/sidebar/sidebar-3.jpg') }}" alt="">
                        <span class="overlay"><i class="fa-brands fa-instagram"></i></span>
                        </a>
                    </div>
                    <div class="insta-item">
                        <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('public/assets/images/sidebar/sidebar-4.jpg') }}" alt="">
                        <span class="overlay"><i class="fa-brands fa-instagram"></i></span>
                        </a>
                    </div>
                    <div class="insta-item">
                        <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('public/assets/images/sidebar/sidebar-5.jpg') }}" alt="">
                        <span class="overlay"><i class="fa-brands fa-instagram"></i></span>
                        </a>
                    </div>
                    <div class="insta-item">
                        <a href="https://www.instagram.com" target="_blank">
                        <img src="{{ asset('public/assets/images/sidebar/sidebar-6.jpg') }}" alt="">
                        <span class="overlay"><i class="fa-brands fa-instagram"></i></span>
                        </a>
                    </div>
                    </div>
                    <!-- mail submit -->
                    <p class="text-center mt-40">Get latest update for our trusted applications</p>
                    <form class="newsletter-form" action="https://formspree.io/f/mzbnjrnb" method="post">
                        <div class="form-group">
                            <input type="email" name="email" class="email" value="" placeholder="Enter Your Email" autocomplete="on" required="">
                            <button type="submit">
                                <i class="far fa-paper-plane"></i>
                                <span class="btn-title"></span>
                            </button>
                        </div>
                    </form>

                    <ul class="sidebar-social">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="g-plus"><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--======== / Sidebar Area ========-->



        <!--==============================
        Hero Section Six
        ==============================-->
        <section class="tv-hero-section style-6 overflow-hidden z-2 bg-light">
            <div class="hero-inner position-relative ">
                <div class="container-fluid px-0">
                    <div class="hero-slider-2 position-relative swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide pageTurn">
                                <div class="hero-area position-relative">
                                    <div class="bg image" data-bg-src="{{ asset('public/assets/image/hero/slider1.jpg') }}"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="hero-content">
                                                    <span class="sub-title">
                                                        <img src="{{ asset('public/assets/images/hero/check2.webp') }}" alt="..">Luxury Living, Off-Plan Investment, and Premium Rentals
                                                    </span>
                                                    <h1 class="hero-title text-white">Discover Your Dream <br> Home in Dubai</h1>
                                                    <div class="text-icon position-relative">
                                                        <p class="text">Fortune Delight Properties connects you with premium residential spaces, curated luxury villas, <br> and exclusive waterfront apartments across the UAE's most prestigious neighborhoods.</p>
                                                    </div>
                                                    <div class="border my-50"></div>
                                                    <div class="hero-user">
                                                        <a href="about.html" class="theme-btn br-30">
                                                            <span class="link-effect">
                                                                <span class="effect-1">Explore Listings</span>
                                                                <span class="effect-1">Contact an Agent</span>
                                                            </span>
                                                        <span class="arrow-all">
                                                            <i>
                                                                <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            </i>
                                                        </span>
                                                        </a>                                    
                                                        <div class="hero-social-proof">
                                                            <div class="social">
                                                                <img src="{{ asset('public/assets/images/social/social-img01.webp') }}" alt="Client 01">
                                                                <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Client 02">
                                                                <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Client 03">
                                                            </div>
                                                            <div class="happy-customers">
                                                                <div class="text">1.6M+</div>
                                                                <div class="rating-viewers">
                                                                    active customers
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
                            <div class="swiper-slide blurSkew">
                                <div class="hero-area position-relative">
                                    <div class="bg image" data-bg-src="{{ asset('public/assets/image/hero/slider2.jpg') }}"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="hero-content">
                                                    <span class="sub-title">
                                                        <img src="{{ asset('public/assets/images/hero/check2.webp') }}" alt="..">Luxury Living, Off-Plan Investment, and Premium Rentals
                                                    </span>
                                                    <h1 class="hero-title text-white">Invest in Dubai’s Most Exclusive <br> Off-Plan Projects</h1>
                                                    <div class="text-icon position-relative">
                                                        <p class="text">Unlock high-yield investment opportunities with early access to upcoming luxury developments, <br> flexible payment structures, and guaranteed capital growth.</p>
                                                    </div>
                                                    <div class="border my-50"></div>
                                                    <div class="hero-user">
                                                        <a href="about.html" class="theme-btn br-30">
                                                            <span class="link-effect">
                                                                <span class="effect-1">View Off-Plan Projects</span>
                                                                <span class="effect-1">Download Investor Guide</span>
                                                            </span>
                                                        <span class="arrow-all">
                                                            <i>
                                                                <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            </i>
                                                        </span>
                                                        </a>                                    
                                                        <div class="hero-social-proof">
                                                            <div class="social">
                                                                <img src="{{ asset('public/assets/images/social/social-img01.webp') }}" alt="Client 01">
                                                                <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Client 02">
                                                                <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Client 03">
                                                            </div>
                                                            <div class="happy-customers">
                                                                <div class="text">1.6M+</div>
                                                                <div class="rating-viewers">
                                                                    active customers
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

                            <div class="swiper-slide pageTurn">
                                <div class="hero-area position-relative">
                                    <div class="bg image" data-bg-src="{{ asset('public/assets/image/hero/slider3.jpg') }}"></div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="hero-content">
                                                    <span class="sub-title">
                                                        <img src="{{ asset('public/assets/images/hero/check2.webp') }}" alt="..">Luxury Living, Off-Plan Investment, and Premium Rentals
                                                    </span>
                                                    <h1 class="hero-title text-white">Elevated Living Across the <br> Capital & Coastline</h1>
                                                    <div class="text-icon position-relative">
                                                        <p class="text">From sleek city apartments to expansive family townhouses, <br> explore premium rental properties managed by a team committed to exceptional service.</p>
                                                    </div>
                                                    <div class="border my-50"></div>
                                                    <div class="hero-user">
                                                        <a href="about.html" class="theme-btn br-30">
                                                            <span class="link-effect">
                                                                <span class="effect-1">Find a Rental</span>
                                                                <span class="effect-1">List Your Property</span>
                                                            </span>
                                                        <span class="arrow-all">
                                                            <i>
                                                                <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                            </i>
                                                        </span>
                                                        </a>                                    
                                                        <div class="hero-social-proof">
                                                            <div class="social">
                                                                <img src="{{ asset('public/assets/images/social/social-img01.webp') }}" alt="Client 01">
                                                                <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Client 02">
                                                                <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Client 03">
                                                            </div>
                                                            <div class="happy-customers">
                                                                <div class="text">1.6M+</div>
                                                                <div class="rating-viewers">
                                                                    active customers
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
                            <div class="hero-btn-wrapper">
                                <div class="array-button">
                                    <button class="array-prev"><i class="fa fa-arrow-left-long"></i></button>
                                    <button class="array-next active"><i class="fa fa-arrow-right-long"></i></button>
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
            <div class="tv-marquee-inner position-relative">
                <div class="container-fluid p-0 overflow-hidden">
                    <div class="slider__marquee clearfix br-0 marquee-wrap style-2">
                        <ul class="marquee_mode marquee__group">
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Luxury Villas</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Premium Apartments</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Off-Plan Investments</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Commercial Spaces</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Property Management</li>
                            <li class="item m-item"><img class="icon" src="{{ asset('public/assets/images/icons/marquee-icon.png') }}" alt=""> Premium Rentals</li>
                        </ul>
                    </div>
                 </div>
            </div>
        </div>


        
        <!--==============================
        About Section Five
        ==============================-->
        <section class="tv-about-section style-5 bg-light space">
            <div class="container">
                <div class="row gy-30 align-items-center">
                    <div class="col-lg-12">
                        <div class="about-title-area d-flex justify-content-between sm-flex-column sm-mb-30">
                            <div class="title-wrap three" data-wow-duration="1.5s" data-wow-delay=".4s">
                                <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>About Company</div>
                            </div>
                            <div class="title-wrap three" data-wow-duration="1.5s" data-wow-delay=".4s">
                                <h2 class="sec-title">Proven track record of delivering <br> premier property solutions with <br> transparency and speed</h2>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="row gy-30">
                    <div class="col-xl-3 col-lg-6">
                        <div class="about-left-box">
                            <div class="box-top">
                                <div class="icon"><img src="{{ asset('public/assets/images/about/hm5-icon1.webp') }}" alt=""></div>
                                <h2><span class="count-number odometer" data-count="4">0</span></h2>
                            </div>
                            <div class="box-midle">
                                <h6>Years of Experiences</h6>
                                <div class="border mb-25"></div>
                                <p>Transforming real estate dreams into reality. We connect clients with premium residential spaces, off-plan investments, and luxury commercial properties across the UAE.</p>
                            </div>
                            <div class="box-bottom">
                                <div class="social">
                                    <img src="{{ asset('public/assets/images/social/social-img01.webp') }}" alt="">
                                    <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="">
                                    <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="">
                                    <img src="{{ asset('public/assets/images/social/social-img04.webp') }}" alt="">
                                </div>
                                <h6>1,000+ Happy clients</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="about-midle">
                            <div class="about-card overlay-anim4">
                                <img class="image" src="{{ asset('public/assets/image/about/hm5-img01.webp') }}" alt="David Watson">
                                <div class="about-details">
                                    <h5>“Innovative property solutions tailored <br>to secure their future in Dubai”</h5>
                                    <p class="title">Anstacia Shorna <span>/ Vice President</span></p>
                                </div>
                                <div class="video-btn">
                                    <a class="popup-video" href="https://www.youtube.com" data-fancybox="video-gallery">
                                        <i class="fa-sharp fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="about-right">
                            <div class="about-tags">
                                <h4 class="title">Our Expertise</h4>
                                <div class="widget-box">
                                    <div class="tag-list">
                                        <span class="tag">LUXURY LIVING</span>
                                        <span class="tag active">OFF-PLAN</span>
                                        <span class="tag">INVESTMENTS</span>
                                        <span class="tag">LEASING</span>
                                        <span class="tag">PROPERTY MGMT</span>
                                    </div>
                                </div>
                            </div>
                            <div class="about-contact-card">
                                <div class="p-top-right wow slideInRight z-0"><img src="{{ asset('public/assets/images/about/hm5-shape01.webp') }}" alt="Shape"></div>
                                <h4>Reach out Us</h4>
                                <a href="tel:+001234567890"><i class="fa-solid fa-phone-volume"></i>+880 234 (6900) 896</a>
                                <a href="mailto:example@gmail.com"><i class="fa-solid fa-envelope"></i>example@gmail.com</a>
                                <ul class="social-icon">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--==============================
        Service Section six
       <!--==============================-->
        <section class="tv-service-section bg-light style-6">
            <div class="tv-service-inner space position-relative overflow-hidden bg-light2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-title-area d-flex justify-content-between sm-flex-column sm-mb-30">
                                <!-- Section Title -->
                                <div class="title-wrap" data-wow-duration="1.5s" data-wow-delay=".4s">
                                    <div class="sub-title-2"><i class="fa-solid fa-circle-check"></i> Services</div>
                                    <h2 class="sec-title">We Provide Exceptional<br>Real Estate Services</h2>
                                </div>
                                <div class="service-btn-wrapper">
                                    <div class="array-button">
                                        <button class="array-prev"><i class="fa fa-arrow-left-long"></i></button>
                                        <button class="array-next active"><i class="fa fa-arrow-right-long"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row gy-30">
                        <div class="col-lg-12"> 
                            <div class="service-slider swiper">
                                <div class="swiper-wrapper">
                                    
                                    <!-- Service Item 1: Social Media Marketing -->
                                    <div class="swiper-slide">
                                        <div class="service-box-six">
                                            <div class="inner">
                                                <div class="image-box">
                                                    <div class="thumb"><img src="{{ asset('public/assets/image/service/hm6-img03.webp') }}" alt="Social Media Marketing"></div>
                                                    <div class="content">
                                                        <div class="icon-inner">
                                                            <div class="icon"><img src="{{ asset('public/assets/images/service/hm6-icon03.webp') }}" alt="Marketing Icon"></div>
                                                            <h4 class="text">Property Buying <br> & Sales</h4>
                                                        </div>
                                                        <div class="border my-25"></div>
                                                        <a href="social-media-marketing.html" class="theme-btn style2 br-30">
                                                            <span class="link-effect">
                                                                <span class="effect-1">Explore More</span>
                                                                <span class="effect-1">Explore More</span>
                                                            </span>
                                                            <span class="arrow-all-2">
                                                                <i>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
        
                                    <!-- Service Item 2: Website Development -->
                                    <div class="swiper-slide">
                                        <div class="service-box-six">
                                            <div class="inner">
                                                <div class="image-box">
                                                    <div class="thumb"><img src="{{ asset('public/assets/image/service/hm6-img01.webp') }}" alt="Website Development"></div>
                                                    <div class="content">
                                                        <div class="icon-inner">
                                                            <div class="icon"><img src="{{ asset('public/assets/images/service/hm6-icon01.webp') }}" alt="Web Dev Icon"></div>
                                                            <h4 class="text">Property <br> Management</h4>
                                                        </div>
                                                        <div class="border my-25"></div>
                                                        <a href="website-development.html" class="theme-btn style2 br-30">
                                                            <span class="link-effect">
                                                                <span class="effect-1">Explore More</span>
                                                                <span class="effect-1">Explore More</span>
                                                            </span>
                                                            <span class="arrow-all-2">
                                                                <i>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
        
                                    <!-- Service Item 3: User Interface UI/UX Design -->   
                                    <div class="swiper-slide">
                                        <div class="service-box-six">
                                            <div class="inner">
                                                <div class="image-box">
                                                    <div class="thumb"><img src="{{ asset('public/assets/image/service/hm6-img02.webp') }}" alt="UI/UX Design"></div>
                                                    <div class="content">
                                                        <div class="icon-inner">
                                                            <div class="icon"><img src="{{ asset('public/assets/images/service/hm6-icon02.webp') }}" alt="UI/UX Icon"></div>
                                                            <h4 class="text">Luxury Rentals <br> & Leasing</h4>
                                                        </div>
                                                        <div class="border my-25"></div>
                                                        <a href="ui-ux-design.html" class="theme-btn style2 br-30">
                                                            <span class="link-effect">
                                                                <span class="effect-1">Explore More</span>
                                                                <span class="effect-1">Explore More</span>
                                                            </span>
                                                            <span class="arrow-all-2">
                                                                <i>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                </i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Service Item 4: 3D Vector Graphic Designing -->
                                    <div class="swiper-slide">
                                        <div class="service-box-six">
                                            <div class="inner">
                                                <div class="image-box">
                                                    <div class="thumb"><img src="{{ asset('public/assets/image/service/hm6-img04.webp') }}" alt="3D Vector Graphic Designing"></div>
                                                    <div class="content">
                                                        <div class="icon-inner">
                                                            <div class="icon"><img src="{{ asset('public/assets/images/service/hm6-icon04.webp') }}" alt="Graphic Icon"></div>
                                                            <h4 class="text">Real Estate <br> Investment Advisory</h4>
                                                        </div>
                                                        <div class="border my-25"></div>
                                                        <a href="3d-graphics.html" class="theme-btn style2 br-30">
                                                            <span class="link-effect">
                                                                <span class="effect-1">Explore More</span>
                                                                <span class="effect-1">Explore More</span>
                                                            </span>
                                                            <span class="arrow-all-2">
                                                                <i>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                    <svg width="10" height="10" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M10.0035 3.90804L1.41153 12.5L0 11.0885L8.59097 2.49651H1.01922V0.5H12V11.4808H10.0035V3.90804Z"></path>
                                                                    </svg>
                                                                </i>
                                                            </span>
                                                        </a>
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
            </div>
        </section>


        <!--==============================
        Video Section 
        ==============================-->
        <section class="tv-video-section">
            <div class="bg image"><img class="mw-inherit" src="{{ asset('public/assets/image/video/hm5-bg01.webp') }}" alt=""></div>
            <div class="container space-top">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-area">
                            <div class="video-box">
                                <a class="popup-video play-btn style-2" href="https://www.youtube.com/" data-fancybox="video-gallery">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                            <div class="text"><h4>Discover the <br> Fortune Delight Experience</h4></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="stats-container">
                            <div class="stat-box one">
                                <div class="box-inner">
                                    <div class="box-left">
                                        <div class="icon"><img src="{{ asset('public/assets/images/video/hm5-icon01.webp') }}" alt=""></div>
                                    </div>
                                    <div class="box-right">
                                        <div class="count-box"><span class="count-number odometer" data-count="12"></span><span class="plus">K+</span></div>
                                        <p class="text">Happy Families & Investors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="stat-box two">
                                <div class="box-inner">
                                    <div class="box-left">
                                        <div class="icon"><img src="{{ asset('public/assets/images/video/hm5-icon02.webp') }}" alt=""></div>
                                    </div>
                                    <div class="box-right">
                                        <div class="count-box"><span class="count-number odometer" data-count="99"></span>%</div>
                                        <p class="text">Client Retention Rate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--==============================
        Choose Section Five
        ==============================-->
        <section class="tv-choose-section style-5 space-top overflow-hidden position-relative">
            <div class="bg image"><img src="{{ asset('public/assets/image/choose/hm5-bg01.webp') }}" alt=""></div>
            <div class="container space-bottom">
                <div class="row gy-30 align-items-center">
                    <div class="col-lg-12">
                        <div class="choose-title-area d-flex justify-content-between sm-flex-column sm-mb-30">
                            <div class="title-wrap three" data-wow-duration="1.5s" data-wow-delay=".4s">
                                <div class="sub-title-2 two text-white"><i class="fa-solid fa-circle-check"></i>Why Choose Us</div>
                            </div>
                            <div class="title-wrap three" data-wow-duration="1.5s" data-wow-delay=".4s">
                                <h2 class="sec-title text-white">Proven track record of securing<br>premium property investments</h2>
                            </div>                            
                        </div>
                    </div>
                </div>
                 <div class="row gy-30">
                    <div class="col-lg-6">
                        <div class="choose-left">
                            <div class="title-box active" data-target="img1">
                                <div class="icon"><img src="{{ asset('public/assets/images/choose/hm5-icon01.webp') }}" alt=""></div>
                                <div class="content">
                                    <span>Market Insights</span>
                                    <h4 class="title">Tailored Property Solutions</h4>
                                    <p class="description">We curate a bespoke selection of residential and commercial properties that perfectly align with your investment goals and lifestyle preferences.</p>
                                </div>
                            </div>
                            <div class="title-box" data-target="img2">
                                <div class="icon"><img src="{{ asset('public/assets/images/choose/hm5-icon02.webp') }}" alt=""></div>
                                <div class="content">
                                    <span>Our Team</span>
                                    <h4 class="title">Elite Property Specialists</h4>
                                    <p class="description">Our highly experienced advisors navigate complex market trends to provide you with seamless, legally sound, and high-yielding real estate opportunities.</p>
                                </div>
                            </div>
                            <div class="title-box" data-target="img3">
                                <div class="icon border-none"><img src="{{ asset('public/assets/images/choose/hm5-icon03.webp') }}" alt=""></div>
                                <div class="content">
                                    <span>End-to-End Care</span>
                                    <h4 class="title">Dedicated Post-Sale Management</h4>
                                    <p class="description">From initial consultation to handover and property management, our team offers continuous, around-the-clock support for total peace of mind.</p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-lg-6">
                        <div class="choose-right">
                            <img src="{{ asset('public/assets/images/choose/hm5-img01.webp') }}" class="active" id="img1" alt="">
                            <img src="{{ asset('public/assets/images/choose/hm5-img02.webp') }}" id="img2" alt="">
                            <img src="{{ asset('public/assets/images/choose/hm5-img03.webp') }}" id="img3" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-50 xs-pt-20 space-bottom position-relative pos">
                <!--  Brand Section -->
                <div class="tv-brands-section style-3 position-relative z-3 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sponsors-outer  brand-outher">
                                    <div class="brands-slider-three swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="brand-item">
                                                    <a class="image" href="#">
                                                        <img src="{{ asset('public/assets/images/brands/hm4-img01.webp') }}" alt="Brand 01">
                                                        <img src="{{ asset('public/assets/images/brands/hm4-img01.webp') }}" alt="Brand 01">
                                                    </a>
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
        Project Section Four
        ==============================-->
        <section class="tv-project-section style-4 bg-light">
            <div class="container-fluid space px-80 lg-px-15">
                <!-- Section Title -->
                <div class="title-wrap text-center three" data-wow-delay=".2s">
                    <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Projects</div>
                    <h2 class="sec-title">We’ve successfully delivered <br>premier real estate milestones</h2>                            
                </div>
                <div class="row gx-0 position-relative">
                    <div class="thumbs">
                        <div class="thumb" data-thumb="1"><img src="{{ asset('public/assets/image/project/hm6-img01.webp') }}" alt=""></div>
                        <div class="thumb active" data-thumb="2"><img src="{{ asset('public/assets/image/project/hm6-img02.webp') }}" alt=""></div>
                        <div class="thumb" data-thumb="3"><img src="{{ asset('public/assets/image/project/hm6-img03.webp') }}" alt=""></div>
                        <div class="thumb" data-thumb="4"><img src="{{ asset('public/assets/image/project/hm6-img04.webp') }}" alt=""></div>
                    </div>
                    <!-- box 1 -->
                    <div class="col-lg-3 col-md-6" data-thumb="1">
                        <div class="project-box-five">
                            <span class="serial">01</span>
                            <div class="video-btn">
                                <a class="popup-video" href="https://www.youtube.com/" data-fancybox="video-gallery">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                            <div class="project-info">
                                <h4 class="title"><a href="#">Marina Sky Villas<br> Dubai Marina – Premium Residential</a></h4>
                                <div class="description"><p class="text">2025 – Completed</p></div>
                                <div class="project-badge">
                                    <a href="#">MOCKUP</a>
                                    <a href="#">DESIGN</a>
                                </div>
                                <a href="project-details.html" class="theme-btn project-btn">
                                    <span class="link-text">Learn More</span>
                                    <i class="icon-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- box 2 -->
                    <div class="col-lg-3 col-md-6" data-thumb="2">
                        <div class="project-box-five">
                            <span class="serial">02</span>
                            <div class="video-btn">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=SMKPKGW083c" data-fancybox="video-gallery">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                            <div class="project-info">
                                <h4 class="title"><a href="#">The Onyx Residences <br> Business Bay – Luxury Living</a></h4>
                                <div class="description"><p class="text">2025 – Handed Over</p></div>
                                <div class="project-badge">
                                    <a href="#">MOCKUP</a>
                                    <a href="#">DESIGN</a>
                                </div>
                                <a href="project-details.html" class="theme-btn project-btn">
                                    <span class="link-text">Learn More</span>
                                    <i class="icon-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- box 3 -->
                    <div class="col-lg-3 col-md-6" data-thumb="3">
                        <div class="project-box-five">
                            <span class="serial">03</span>
                            <div class="video-btn">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=SMKPKGW083c" data-fancybox="video-gallery">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                            <div class="project-info">
                                <h4 class="title"><a href="#">Al Reem Oasis<br> Abu Dhabi – Waterfront Community</a></h4>
                                <div class="description"><p class="text">2026 – Completed</p></div>
                                <div class="project-badge">
                                    <a href="#">MOCKUP</a>
                                    <a href="#">DESIGN</a>
                                </div>
                                <a href="project-details.html" class="theme-btn project-btn">
                                    <span class="link-text">Learn More</span>
                                    <i class="icon-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- box 4 -->
                    <div class="col-lg-3 col-md-6" data-thumb="4">
                        <div class="project-box-five">
                            <span class="serial">04</span>
                            <div class="video-btn">
                                <a class="popup-video" href="https://www.youtube.com/watch?v=SMKPKGW083c" data-fancybox="video-gallery">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </a>
                            </div>
                            <div class="project-info">
                                <h4 class="title"><a href="#">Fortune Commercial Tower <br> Downtown Dubai – Corporate Spaces</a></h4>
                                <div class="description"><p class="text">2026 – Handed Over</p></div>
                                <div class="project-badge">
                                    <a href="#">MOCKUP</a>
                                    <a href="#">DESIGN</a>
                                </div>
                                <a href="project-details.html" class="theme-btn project-btn">
                                    <span class="link-text">Learn More</span>
                                    <i class="icon-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <!--==============================
        Cta Section Four
        ==============================-->
        <section class="tv-cta-section style-4 py-90 xs-py-60 overflow-hidden bg-light position-relative z-2 ">
            <div class="bg image"><img src="{{ asset('public/assets/images/cta/hm5-bg02.webp') }}" alt=""></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="row align-items-center gy-30">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="cta-left">
                            <h2 class="sec-title text-white mb-0">Empowering Your Property <br> Investments with Innovative <br> Solutions</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="cta-right text-right sm-text-left">
                            <a href="contact.html" class="theme-btn style-2 br-30">
                                <span class="link-effect">
                                    <span class="effect-1">Browse all Properties</span>
                                    <span class="effect-1">Browse all Properties</span>
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
                </div>
            </div>            
        </section>



        <!--==============================
        Team Section Four
        ==============================-->
        <section class="tv-team-section style-4 bg-light space">
            <div class="container">
                <div class="row gy-30">
                    <div class="col-lg-6">
                        <div class="team-left">
                            <!-- Section Title -->
                            <div class="title-wrap three">
                                <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Our Team</div>
                                <h2 class="sec-title">Meet the expert team  <br>powering our goals  <br>and ambitions </h2>
                                <p>Fortune Delight Properties brings together a elite group of real estate professionals,<br> investment advisors, and property management specialists. <br>We blend deep market insights with a client-first<br> approach to turn your property aspirations into rewarding realities.</p>
                                <a href="team.html" class="theme-btn br-30 mt-20">
                                        <span class="link-effect">
                                            <span class="effect-1">All Member</span>
                                            <span class="effect-1">All Member</span>
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
                            <div class="team-left-thumb br-30 wow img-anim-right data-item-hover overflow-hidden">
                                <figure class="data-img-hover" data-style="01" data-intensity="0.2" data-speedin="1" data-speedout="1">
                                    <img src="{{ asset('public/assets/images/team/hm5-img05.webp') }}" alt="">
                                </figure>                               
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row gy-25">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tv-team-card-four">
                                    <div class="team-photo">
                                        <img src="{{ asset('public/assets/images/team/hm5-img01.webp') }}" alt="Jobaer Khanom">
                                        <div class="team-social">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name"><a href="#">Jobaer Khanom</a></h4>
                                        <p class="team-role">Senior Property Consultant</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tv-team-card-four">
                                    <div class="team-photo">
                                        <img src="{{ asset('public/assets/images/team/hm5-img02.webp') }}" alt="Jobaer Khanom">
                                        <div class="team-social">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name"><a href="#">Sayma. Farna</a></h4>
                                        <p class="team-role">Luxury Real Estate Advisor</p>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tv-team-card-four">
                                    <div class="team-photo">
                                        <img src="{{ asset('public/assets/images/team/hm5-img03.webp') }}" alt="Jobaer Khanom">
                                        <div class="team-social">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name"><a href="#">Sandra D. Rainey</a></h4>
                                        <p class="team-role">Portfolio Investment Manager</p>
                                    </div>
                                </div>                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tv-team-card-four">
                                    <div class="team-photo">
                                        <img src="{{ asset('public/assets/images/team/hm5-img04.webp') }}" alt="Jobaer Khanom">
                                        <div class="team-social">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name"><a href="#">Jubin E. Nawtail</a></h4>
                                        <p class="team-role">Client Relations Specialist</p>
                                    </div>
                                </div>                                                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tv-team-card-four">
                                    <div class="team-photo">
                                        <img src="{{ asset('public/assets/images/team/hm5-img01.webp') }}" alt="Jobaer Khanom">
                                        <div class="team-social">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name"><a href="#">Jobaer Khanom</a></h4>
                                        <p class="team-role">Client Relations Specialist</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="tv-team-card-four">
                                    <div class="team-photo">
                                        <img src="{{ asset('public/assets/images/team/hm5-img02.webp') }}" alt="Jobaer Khanom">
                                        <div class="team-social">
                                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name"><a href="#">Sayma. Farna</a></h4>
                                        <p class="team-role">Client Relations Specialist</p>
                                    </div>
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!--==============================
        Contact Section Five
        ==============================-->
        <section class="tv-contact-section style-5 space position-relative">
            <div class="p-top-left wow slideInLeft z-0 xs-d-none"><img src="{{ asset('public/assets/images/contact/hm5-shape01.webp') }}" alt=""></div>
            <div class="bg image"><img src="{{ asset('public/assets/images/contact/hm5-bg01.webp') }}" alt=""></div>
                <div class="container">
                    <div class="row align-items-end gy-30">
                        <div class="col-lg-6">
                            <div class="title-wrap three white">
                                <div class="sub-title-2 text-white two"><i class="fa-solid fa-circle-check"></i>Get in Toch</div>
                                <h2 class="sec-title">Need help? We're Here...</h2>
                            </div>
                            <div class="contact-form style-5">
                                <h2 class="sec-title">Request for a call back</h2>
                                <form id="contact_form" class="contact_form" action="https://formspree.io/f/mzbnjrnb" method="post">
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <input type="text" id="fullName" name="name" placeholder="Your Name" required autocomplete="on">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="userEmail" name="email" placeholder="E-Mail" required autocomplete="on">
                                        </div>
                                    </div>
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <select class="custom-select" id="service" name="service" autocomplete="off">
                                                <option value="" disabled selected>Select Service</option>
                                                <option value="air">Air Freight</option>
                                                <option value="ocean">Ocean Freight</option>
                                                <option value="rail">Rail transport</option>
                                                <option value="cargo">Cargo ship</option>
                                                <option value="bulk">Bulk cargo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="msg" name="msg" placeholder="Write Message" required></textarea>
                                    </div>
                                    <button type="submit" class="theme-btn"  data-loading-text="Please wait...">
                                            <span class="btn-title mr-10">Send Message</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
        </section>



        <!--============================
        Team Section Four
        ==============================-->
        <section class="tv-team-section style-3 bg-light position-relative z-2">
            <div class="tv-team-inner py-65 overflow-hidden position-relative">
                <div class="scribble-shape scribble md-d-none"><img src="{{ asset('public/assets/images/team/hm4-scribble.webp') }}" alt=""></div>
                <div class="bg image"><img src="{{ asset('public/assets/images/team/hm4-bg1.webp') }}" alt=""></div>
                <div class="overlay bg-theme mbm-overlay"></div>
                <div class="container">
                    <div class="row d-flex gy-30 align-items-center align-items-md-start">
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="client-social-proof">
                                <div class="social">
                                    <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Client 02">
                                    <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="Client 03">
                                    <h4>10K</h4>
                                </div>
                                <h4 class="text">Our Satisfied <br> Customers</h4>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-6">
                            <div class="team-text">
                                <h2 class="sec-title text-white">Meet Our Super Professional <br> Team Members</h2>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="team-right text-start text-lg-end">
                                <a href="contact.html" class="theme-btn br-30 mt-15">
                                    <span class="link-effect">
                                        <span class="effect-1">Discover More</span>
                                        <span class="effect-1">Discover More</span>
                                    </span>
                                    <span class="arrow-all">
                                        <i>
                                            <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <svg width="16" height="19" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 6H10M10 6L6 2M10 6L6 10" stroke="#1053f3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!--==============================
        Testimonial Section Two
        ==============================-->
        <section class="tv-testimonial-section bg-light2 style2  overflow-hidden">
    <div class="tv-testimonial-inner mx-30 ml-mx-0 position-relative overflow-hidden space">
        <div class="container">
            <div class="row gy-30 justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="testi-image-wrapper mr-60 ml-mr-0 direction-rtl xs-direction-ltr">
                        <div class="testi-image overlay-anim4 img-anim-left wow fadeInLeft" style="visibility: visible; animation-name: img-anim-left;">
                            <img src="{{ asset('public/assets/images/testimonial/hm6-img01.webp') }}" alt="Our team collaborating with clients">
                        </div>
                        <div class="testi-single-card direction-ltr xs-d-none">
                            <div class="bg image"><img src="{{ asset('public/assets/images/testimonial/hm2-bg02.webp') }}" alt=""></div>
                            <div class="p-top-right wow slideInRight"><img src="{{ asset('public/assets/images/testimonial/hm2-shape1.webp') }}" alt="Decorative shape"></div>
                            <div class="count"><span class="count-number odometer" data-count="10">0</span>K<span class="plus">+</span></div>
                            <h4 class="title">Trusted by Happy Customers Around the World</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-wrap" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Testimonials</div>
                        <h2 class="sec-title">Real Success Stories From <br> Our Valued Clients</h2>
                    </div>
                    <div class="testi-slider-two swiper">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="quote-icon">
                                                <i class="icon-quote"></i>
                                            </div>
                                            <div>
                                                <p class="text">The digital transformation strategy implemented by the team completely overhauled our legacy processes. Their automation solutions dramatically increased our operational efficiency and brought absolute clarity to our data tracking workflows.</p>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-info">
                                            <img src="{{ asset('public/assets/images/social/social-img01.webp') }}" alt="Marcus Vance" class="user-image">
                                            <div>
                                                <h5 class="user-name">Marcus Vance</h5>
                                                <p class="user-title">Operations Director</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="quote-icon">
                                                <i class="icon-quote"></i>
                                            </div>
                                            <div>
                                                <p class="text">Our web application required a robust, scalable architecture alongside a highly intuitive UI/UX redesign. They delivered flawlessly ahead of schedule, resulting in a 40% boost in user engagement within the first month of launch.</p>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-info">
                                            <img src="{{ asset('public/assets/images/social/social-img02.webp') }}" alt="Elena Rostova" class="user-image">
                                            <div>
                                                <h5 class="user-name">Elena Rostova</h5>
                                                <p class="user-title">Co-Founder & CTO</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="inner-box">
                                        <div class="content">
                                            <div class="quote-icon">
                                                <i class="icon-quote"></i>
                                            </div>
                                            <div>
                                                <p class="text">Their performance marketing strategies coupled with deep business analysis completely changed our market positioning. The level of ongoing technical support and professional guidance we receive is absolutely top-notch.</p>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-info">
                                            <img src="{{ asset('public/assets/images/social/social-img03.webp') }}" alt="David K. Chen" class="user-image">
                                            <div>
                                                <h5 class="user-name">David K. Chen</h5>
                                                <p class="user-title">Managing Director</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="array-button">
                            <button class="array-prev"><i class="fa-light fa-arrow-left-long"></i></button>
                            <button class="array-next active"><i class="fa-light fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





        
        <!--==============================
        Blog Section
        ==============================-->
        <!--<section class="tv-blog-section space bg-color2">-->
        <!--    <div class="container">-->
                <!-- Section Title -->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-12">-->
        <!--                    <div class="title-wrap text-center">-->
        <!--                        <div class="sub-title-2  text-theme"><i class="fa-solid fa-circle-check"></i>Latest Blog</div>-->
        <!--                        <h2 class="sec-title">Read our Latest Insights from <br> Update Blog Posts</h2>-->
        <!--                    </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div class="row gy-25">-->
        <!--            <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                <article class="blog-single-box style-3">-->
        <!--                    <div class="inner-box">-->
        <!--                        <div class="blog-image">-->
        <!--                            <img src="{{ asset('public/assets/images/blog/blog-grid02.webp') }}" alt="Blog Image">-->
        <!--                            <div class="category-tag">BUSINESS</div>-->
        <!--                        </div>-->
        <!--                        <div class="blog-content">-->
        <!--                            <h4 class="title"><a href="blog-details.html">10 Free  Marketing tools <br> Growing Business</a></h4>-->
        <!--                            <p class="text">Technically into chain to references to main extensive Dramatically faster</p>-->
        <!--                            <div class="pt-25 pb-20"><div class="border dark"></div></div>-->
        <!--                            <div class="blog-meta">-->
        <!--                                <div class="date">01 Jan, 2026</div>-->
        <!--                                <span>By - FDP</span>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </article>-->
        <!--            </div>-->
        <!--            <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                <article class="blog-single-box style-3">-->
        <!--                    <div class="inner-box">-->
        <!--                        <div class="blog-image">-->
        <!--                            <img src="{{ asset('public/assets/images/blog/blog-grid03.webp') }}" alt="Blog Image">-->
        <!--                            <div class="category-tag">MARKETING</div>-->
        <!--                        </div>-->
        <!--                        <div class="blog-content">-->
        <!--                            <h4 class="title"><a href="blog-details.html">Most popular Promt for Sales <br> Growth in 2025</a></h4>-->
        <!--                            <p class="text">Technically into chain to references to main extensive Dramatically faster</p>-->
        <!--                            <div class="pt-25 pb-20"><div class="border dark"></div></div>-->
        <!--                            <div class="blog-meta">-->
        <!--                                <div class="date">01 Jan, 2026</div>-->
        <!--                                <span>By - FDP</span>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </article>-->
        <!--            </div>-->
        <!--            <div class="col-lg-4 col-md-6 col-sm-6">-->
        <!--                <article class="blog-single-box style-3">-->
        <!--                    <div class="inner-box">-->
        <!--                        <div class="blog-image">-->
        <!--                            <img src="{{ asset('public/assets/images/blog/blog03.webp') }}" alt="Blog Image">-->
        <!--                            <div class="category-tag">TECHNOLOGY</div>-->
        <!--                        </div> -->
        <!--                        <div class="blog-content">-->
        <!--                            <h4 class="title"><a href="blog-details.html">Installation Sales Navigator <br>Extension on Chrome</a></h4>-->
        <!--                            <p class="text">Technically into chain to references to main extensive Dramatically faster</p>-->
        <!--                            <div class="pt-25 pb-20"><div class="border dark"></div></div>-->
        <!--                            <div class="blog-meta">-->
        <!--                                <div class="date">01 Jan, 2026</div>-->
        <!--                                <span>By - FDP</span>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </article>-->
        <!--            </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--</section>-->



        <!--==============================
        Newsletter Section
        ==============================-->
        <section class="newsletter-section mb--75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter">
                            <div class="arrow-shape md-d-none"><img src="{{ asset('public/assets/images/newsletter/arrow-shape.webp') }}" alt=""></div>
                            <div class="bg image"><img class="br-30" src="{{ asset('public/assets/image/cta/hm2-bg01.webp') }}" alt=""></div>
                            <!--<div class="bg image"><img class="br-30" src="{{ asset('public/assets/images/newsletter/hm1-bg01.webp') }}" alt=""></div>-->
                            <div class="thumb d-none d-xl-block">
                                <!--<img src="{{ asset('public/assets/images/newsletter/img01.webp') }}" alt="thumb">-->
                             </div>
                             <div class="image-text">
                                <img src="{{ asset('public/assets/images/icons/check-circle2.png') }}" alt="">
                                <h3 class="title title-anim" data-animation="bounce-in">Subscribe Our Newsletter <br> For Latest Updates</h3>
                             </div>
                                <form class="newsletter-form" action="https://formspree.io/f/mzbnjrnb" method="post">
                                    <div class="form-group">
                                        <input type="email" name="email" class="email" value="" placeholder="Email Address" autocomplete="on" required="">
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