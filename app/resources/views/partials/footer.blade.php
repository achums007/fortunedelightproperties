<!--==============================
Footer Section
==============================-->
<footer class="footer-section z-1 br-30 xxl-br-0 pt-75 bg-dark position-relative mx-30 mb-30 xxl-m-0 overflow-hidden">
    <div class="bg image mbm-screen"><img src="{{ asset('public/assets/images/footer/hm1-bg01.webp') }}" alt=""></div>
    <div class="footer-top space">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 footer-brand">
                    <div class="brand-info wow fadeInUp" data-wow-delay=".2s">
                        <div class="logo">
                            <img src="{{ asset('public/assets/images/logo/logo-2.png') }}" alt="Fortune Delight Properties Logo">
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <h3 class="title">FREE CONVERSATION</h3>
                                <a href="mailto:info@fortunedelight.ae">
                                    <i class="fa-sharp fa-light fa-envelope"></i> info@fortunedelight.ae
                                </a>
                            </div>
                            <div class="contact-item">
                                <h3 class="title">CALL US :</h3>
                                <a href="tel:+97140000000">
                                    <i class="flaticon-phone"></i> +971 4 000 0000
                                </a>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-x-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 p-0 sm-pl-15">
                            <div class="footer-widget wow fadeInUp" data-wow-delay="0.4s">
                                <h4 class="title">Information</h4>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('projects') }}">Our Projects</a></li>
                                    <li><a href="{{ route('blog') }}">Latest Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 p-0 sm-pl-15">
                            <div class="footer-widget wow fadeInUp" data-wow-delay="0.6s">
                                <h4 class="title">Services</h4>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('services') }}">Property Buying</a></li>
                                    <li><a href="{{ route('services') }}">Property Selling</a></li>
                                    <li><a href="{{ route('services') }}">Property Management</a></li>
                                    <li><a href="{{ route('services') }}">Golden Visa Services</a></li>
                                    <li><a href="{{ route('services') }}">Property Valuation</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 md-d-none"></div>
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget ml-0 mb-0 wow fadeInUp" data-wow-delay="0.8s">
                        <h4 class="title">Latest Blog</h4>
                        <div class="recent-post-item">
                            <figure class="image">
                                <a href="{{ route('blog') }}"><img src="{{ asset('public/assets/images/footer/gallery-1.webp') }}" alt=""></a>
                            </figure>
                            <div class="recent-post-info">
                                <h4 class="title"><a href="{{ route('blog') }}">Guide to Buying Off-Plan Property in Dubai</a></h4>
                                <span class="post-date">10 OCT, 2025</span>
                            </div>
                        </div>
                        <div class="recent-post-item mb--20">
                            <figure class="image">
                                <a href="{{ route('blog') }}"><img src="{{ asset('public/assets/images/footer/gallery-2.webp') }}" alt=""></a>
                            </figure>
                            <div class="recent-post-info">
                                <h4 class="title"><a href="{{ route('blog') }}">Top 5 Luxury Communities in Dubai for 2026</a></h4>
                                <span class="post-date">15 NOV, 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row gy-15">
                <div class="col-md-6">
                    <div class="copyright wow fadeInUp" data-wow-delay=".3s">
                        <p class="mb-0">Copyright &copy; 2026 Fortune Delight Properties. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="footer-policy wow fadeInUp" data-wow-delay=".6s">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
