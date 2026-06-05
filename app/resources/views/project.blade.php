@extends('layouts.app')

@section('title', 'Featured Projects - Fortune Delight Properties')

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
                            <h2 class="title">Our Projects</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('home') }}"><i class="fa-solid fa-house-chimney"></i>Home</a></li>
                                <li><span>/</span> Projects</li>
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
Project Section
==============================-->
<section class="tv-project-section inner space bg-light">
    <div class="container">
        <!-- Section Title -->
        <div class="title-wrap text-center" data-wow-duration="1.5s" data-wow-delay=".4s">
            <div class="sub-title-2 text-theme"><i class="fa-solid fa-circle-check"></i>Portfolio</div>
            <h2 class="sec-title">Luxury Developments & Communities</h2>
            <p>Explore our curated selection of high-yield off-plan properties and ultra-luxury completed homes in Dubai.</p>
        </div>
        <!-- Filter Buttons -->
        <div class="project-filter-buttons mb-40 mt-35">
            <ul class="menu-filtering">
                <li class="active" data-filter="*"> All Projects </li>
                <li data-filter=".penthouse"> Penthouses </li>
                <li data-filter=".villa"> Villas </li>
                <li data-filter=".apartment"> Apartments </li>
                <li data-filter=".commercial"> Commercial </li>
            </ul>
        </div>

        <!-- Case Studies -->
        <div class="row gy-40 image_load">
            <!-- Case 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6 grid-item penthouse apartment">
                <div class="project-single-box">
                    <div class="thumb"><img class="img" src="{{ asset('public/assets/images/project/project01.webp') }}" alt="Palm Flower Penthouses"></div>
                    <div class="project-info">
                        <h4 class="title"><a href="{{ route('contact') }}">Palm Flower Penthouses - Palm Jumeirah</a></h4>
                        <div class="project-badge">
                            <span>PENTHOUSES</span>
                            <span>Handover Q4 2026</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case 2 -->
            <div class="col-lg-4 col-md-6 col-sm-6 grid-item apartment">
                <div class="project-single-box">
                    <div class="thumb"><img class="img" src="{{ asset('public/assets/images/project/project02.webp') }}" alt="Downtown Heights"></div>
                    <div class="project-info">
                        <h4 class="title"><a href="{{ route('contact') }}">Downtown Heights - Downtown Dubai</a></h4>
                        <div class="project-badge">
                            <span>APARTMENTS</span>
                            <span>St. Regis Residences</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case 3 -->
            <div class="col-lg-4 col-md-6 col-sm-6 grid-item villa">
                <div class="project-single-box">
                    <div class="thumb"><img class="img" src="{{ asset('public/assets/images/project/project03.webp') }}" alt="Delight Villas"></div>
                    <div class="project-info">
                        <h4 class="title"><a href="{{ route('contact') }}">Delight Villas - Dubai Hills Estate</a></h4>
                        <div class="project-badge">
                            <span>VILLAS</span>
                            <span>5 & 6 Bed Luxury</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case 4 -->
            <div class="col-lg-4 col-md-6 col-sm-6 grid-item penthouse">
                <div class="project-single-box">
                    <div class="thumb"><img class="img" src="{{ asset('public/assets/images/project/project04.webp') }}" alt="The Shoreline Residences"></div>
                    <div class="project-info">
                        <h4 class="title"><a href="{{ route('contact') }}">The Shoreline Penthouses - JBR</a></h4>
                        <div class="project-badge">
                            <span>PENTHOUSES</span>
                            <span>Private Beach Access</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case 5 -->
            <div class="col-lg-4 col-md-6 col-sm-6 grid-item apartment">
                <div class="project-single-box">
                    <div class="thumb"><img class="img" src="{{ asset('public/assets/images/project/project05.webp') }}" alt="Marina Vista Tower"></div>
                    <div class="project-info">
                        <h4 class="title"><a href="{{ route('contact') }}">Marina Vista Tower - Dubai Marina</a></h4>
                        <div class="project-badge">
                            <span>APARTMENTS</span>
                            <span>Panoramic Sea Views</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Case 6 -->
            <div class="col-lg-4 col-md-6 col-sm-6 grid-item commercial">
                <div class="project-single-box">
                    <div class="thumb"><img class="img" src="{{ asset('public/assets/images/project/project06.webp') }}" alt="Delight Offices"></div>
                    <div class="project-info">
                        <h4 class="title"><a href="{{ route('contact') }}">Delight Offices - Business Bay</a></h4>
                        <div class="project-badge">
                            <span>COMMERCIAL</span>
                            <span>Premium Executive Suites</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection