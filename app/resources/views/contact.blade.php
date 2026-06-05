@extends('layouts.app')

@section('title', 'Contact Us - Fortune Delight Properties')

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
                            <h2 class="title">Contact Us</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('home') }}"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                                <li><span>/</span> Contact Us</li>
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
Contact Section 
==============================-->
<section class="tv-contact-section inner space bg-light">
    <div class="container">
        <div class="row gy-30">
            <div class="col-lg-5">
                <div class="contact-content-wrap">
                    <!-- Section Title -->
                    <div class="title-wrap" data-wow-duration="1.5s" data-wow-delay=".4s">
                        <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Contact Us</div>
                        <h2 class="sec-title">Connect with Our Luxury Real Estate Consultants</h2>
                        <p>Our experienced agents are here to assist you with property acquisitions, leasing, management, and residency options.</p>
                    </div>
                    <div class="contact-info">
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fa-sharp fa-regular fa-location-dot"></i>
                            </div>
                            <div class="info">
                                <h4 class="title">Our Head Office</h4>
                                <p>Office 1802, Marina Plaza, <br> Dubai Marina, Dubai - UAE</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fa-light fa-circle-phone"></i>
                            </div>
                            <div class="info">
                                <h4 class="title">Call us Anytime</h4>
                                <div class="content">
                                    Sales Hotline: <a href="tel:+97140000000">+971 4 000 0000</a><br>
                                    Leasing Dept: <a href="tel:+971500000000">+971 50 000 0000</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon">
                                <i class="fa-light fa-envelope"></i>
                            </div>
                            <div class="info">
                                <h4 class="title">Send E-Mail</h4>
                                <div class="content">
                                    <a href="mailto:info@fortunedelight.ae">info@fortunedelight.ae</a><br>
                                    <a href="mailto:sales@fortunedelight.ae">sales@fortunedelight.ae</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">Facebook</span>
                                <span class="effect-1">Facebook</span>
                            </span>
                        </a>
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">Twitter/X</span>
                                <span class="effect-1">Twitter/X</span>
                            </span>
                        </a>
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">LinkedIn</span>
                                <span class="effect-1">LinkedIn</span>
                            </span>
                        </a>
                        <a href="#">
                            <span class="link-effect">
                                <span class="effect-1">Instagram</span>
                                <span class="effect-1">Instagram</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form">
                    <h2 class="title mt--5 mb-35">Request a Call Back</h2>
                    <form id="contact_form" class="contact_form" action="https://formspree.io/f/mzbnjrnb" method="post">
                        <div class="form-grid">
                            <div class="form-group">
                                <span class="icon"><i class="fa-slab-press fa-regular fa-user"></i></span>
                                <input type="text" id="fullName" name="name" placeholder="Your Name" required autocomplete="on">
                            </div>
                            <div class="form-group">
                                <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                                <input type="email" id="userEmail" name="email" placeholder="Email Address" required autocomplete="on">
                            </div>
                        </div>
                        <div class="form-grid">
                            <div class="form-group">
                                <span class="icon"><i class="fa-solid fa-phone"></i></span>
                                <input type="text" id="phone" name="phone" placeholder="Phone No." required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <select class="custom-select" id="service" name="service" autocomplete="off">
                                    <option value="" disabled selected>Select Property Service</option>
                                    <option value="buy">Buying Property</option>
                                    <option value="sell">Selling Property</option>
                                    <option value="rent">Leasing Property</option>
                                    <option value="manage">Property Management</option>
                                    <option value="visa">Golden Visa Consultation</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="msg" name="msg" placeholder="Write Message" required></textarea>
                        </div>
                        <div class="form-group terms">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">I consent to storing my data for inquiry purposes.</label>
                        </div>
                        <button type="submit" class="theme-btn mt-30" data-loading-text="Please wait...">
                            <span class="link-effect">
                                <span class="effect-1">Submit Message</span>
                                <span class="effect-1">Submit Message</span>
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
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--==============================
Contact Map
==============================-->
<div class="tv-contact-map">
    <div class="container-fluid p-0">
        <div class="row">
            <!--Map-->
            <div class="map-box">
                <iframe class="map-canvas" src="https://maps.google.com/maps?q=Marina%20Plaza%2C%20Dubai%20Marina%2C%20Dubai&t=m&z=14&output=embed&iwloc=near" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<!--==============================
Branch Section
==============================-->
<section class="tv-branch-section space bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="title-wrap three text-center" data-wow-duration="1.5s" data-wow-delay=".4s">
            <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Our Branches</div>
            <h2 class="sec-title">Visit Our Offices</h2>
            <p>Speak to our agents directly at one of our premium locations in Dubai or our international desk in London.</p>
        </div>
        <div class="row gy-30">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="branch-single-box">
                    <div class="image-box">
                        <div class="image">
                            <img src="{{ asset('public/assets/images/resource/branch01.webp') }}" alt="Dubai Marina Head Office">
                        </div>
                    </div>
                    <div class="branch-content">
                        <div class="branch-header">
                            <h4 class="location-name">Dubai Marina</h4>
                            <p class="location-type">HEAD OFFICE</p>
                        </div>
                        <div class="divider"></div>
                        <p class="address">Office 1802, Marina Plaza, Dubai Marina - UAE</p>
                        <div class="phone"><a href="tel:+97140000000">+971 4 000 0000</a></div>
                        <div class="email"><a href="mailto:info@fortunedelight.ae">info@fortunedelight.ae</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="branch-single-box">
                    <div class="image-box">
                        <div class="image">
                            <img src="{{ asset('public/assets/images/resource/branch02.webp') }}" alt="Downtown Sales Center">
                        </div>
                    </div>
                    <div class="branch-content">
                        <div class="branch-header">
                            <h4 class="location-name">Downtown Dubai</h4>
                            <p class="location-type">SALES CENTER</p>
                        </div>
                        <div class="divider"></div>
                        <p class="address">Boulevard Plaza Tower 1, Downtown Dubai - UAE</p>
                        <div class="phone"><a href="tel:+97140000001">+971 4 000 0001</a></div>
                        <div class="email"><a href="mailto:sales@fortunedelight.ae">sales@fortunedelight.ae</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="branch-single-box">
                    <div class="image-box">
                        <div class="image">
                            <img src="{{ asset('public/assets/images/resource/branch03.webp') }}" alt="London Mayfair Desk">
                        </div>
                    </div>
                    <div class="branch-content">
                        <div class="branch-header">
                            <h4 class="location-name">London Mayfair</h4>
                            <p class="location-type">INTERNATIONAL DESK</p>
                        </div>
                        <div class="divider"></div>
                        <p class="address">25 Berkeley Square, Mayfair, London - UK</p>
                        <div class="phone"><a href="tel:+442070000000">+44 20 7000 0000</a></div>
                        <div class="email"><a href="mailto:uk@fortunedelight.ae">uk@fortunedelight.ae</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection