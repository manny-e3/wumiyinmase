<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'WUMIYIN & MASE NIGERIA LIMITED - Logistics & Freight Services')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <!--[if lt IE 9]><script src="{{ asset('js/html5shiv.js') }}"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('js/respond.js') }}"></script><![endif]-->
    <style>
        :root {
            --theme-color1: #000000 !important;
            --theme-color2: #fcdb65 !important;
            --theme-color3: #fcdb65 !important;
            --theme-color1-rgb: 0, 0, 0 !important;
            --theme-color2-rgb: 252, 219, 101 !important;
            --theme-color3-rgb: 252, 219, 101 !important;
            --text-color-bg-theme-color2: #000000 !important;
            --text-color-bg-theme-color3: #000000 !important;
            --headings-color: #000000 !important;
            --link-hover-color: #fcdb65 !important;
        }

        /* Specific Overrides for Text Legibility & Contrast */
        .theme-btn.btn-style-one, 
        .theme-btn.btn-style-one .btn-title {
            color: #000000 !important;
            font-weight: 700;
        }
        .theme-btn.btn-style-one:hover {
            background-color: #111111 !important;
            border-color: #111111 !important;
            color: #ffffff !important;
        }
        .theme-btn.btn-style-one:hover .btn-title {
            color: #ffffff !important;
        }
        
        .main-menu .navigation > li.current > a,
        .main-menu .navigation > li:hover > a {
            color: #fcdb65 !important;
        }
        .main-menu .navigation > li > ul > li:hover > a {
            color: #fcdb65 !important;
        }
        
        .scroll-to-top {
            background-color: #fcdb65 !important;
            color: #000000 !important;
        }
        .scroll-to-top:hover {
            background-color: #111111 !important;
            color: #fcdb65 !important;
        }

        /* Preloader, badges, active bullets accents */
        .company-badge {
            color: #fcdb65 !important;
        }
        .sec-title .sub-title {
            color: #fcdb65 !important;
        }
        .about-block .icon {
            color: #fcdb65 !important;
        }
        .service-block .inner-box .content-box .icon {
            color: #fcdb65 !important;
        }
        .contact-details__info li .icon {
            background-color: rgba(252, 219, 101, 0.1) !important;
            color: #fcdb65 !important;
        }
        .whatsapp-float {
            box-shadow: 0 4px 15px rgba(252, 219, 101, 0.3) !important;
        }


        .main-menu .navigation > li > a {
            font-weight: 600;
        }
        .header-top .top-left .list-style-one li {
            color: #ffffff;
        }
        .company-badge {
            font-size: 1.1rem;
            font-weight: 700;
            color: #eb5424;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .page-title {
            background-size: cover;
            background-position: center;
        }
        /* WhatsApp Floating Button Style */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            left: 30px;
            background-color: #25d366;
            color: #fff !important;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 5px 15px rgba(0, 0, 0, 0.3);
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .whatsapp-float:hover {
            background-color: #128c7e;
            transform: scale(1.1);
        }
        .whatsapp-float i {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">
            <!-- Header Top -->
            <div class="header-top">
                <div class="top-left">
                    <!-- Info List -->
                    <ul class="list-style-one">
                        <li><i class="fa fa-map-marker-alt"></i>NAHCO COMPLEX, MM Int'l Airport Ikeja Lagos Nigeria 
</li>
                        <!-- <li><i class="fa fa-clock"></i> Mon - Sat: 8:00am - 6:00pm</li> -->
                        <li><i class="fa fa-phone-volume"></i> <a href="tel:+2348069675585">+234 806 967 5585</a>,  &nbsp; <a href="tel:+2347037395331">+234 703 739 5331</a></li>
                    </ul>
                </div>

                <div class="top-right">
                    <ul class="social-icon-one">
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <!-- Header Top -->

            <!-- Header Lower -->
            <div class="header-lower">
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/wumiyinmaselogo.png') }}" alt="Wumiyin & Mase Nigeria Limited" style="max-height: 75px; mix-blend-mode: multiply; display: block; margin: auto;" />
                            </a>
                        </div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer">
                        <nav class="nav main-menu">
                            <ul class="navigation">
                                <li class="{{ request()->routeIs('home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('about') ? 'current' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                <li class="dropdown {{ request()->routeIs('services*') ? 'current' : '' }}">
                                    <a href="{{ route('services') }}">Services</a>
                                    <ul>
                                        <li><a href="{{ route('services') }}">All Services</a></li>
                                        <li><a href="{{ route('service.detail', 'global-air-ocean-freight') }}">Air & Ocean Freight</a></li>
                                        <li><a href="{{ route('service.detail', 'household-goods-relocation') }}">Household Goods & Relocation</a></li>
                                        <li><a href="{{ route('service.detail', 'pet-shipping') }}">Specialized Pet Shipping</a></li>
                                        <li><a href="{{ route('service.detail', 'customs-clearance') }}">Customs Clearance & Permits</a></li>
                                        <li><a href="{{ route('service.detail', 'warehousing-haulage') }}">Warehousing & Local Haulage</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box">
                            <a href="{{ route('contact') }}" class="theme-btn btn-style-one alternate"><span class="btn-title">Get A Quote</span></a>
                            <!-- Mobile Nav toggler -->
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <nav class="menu-box">
                    <div class="upper-box">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/wumiyinmaselogo.png') }}" alt="Wumiyin & Mase Nigeria Limited" style="max-height: 40px; mix-blend-mode: multiply;" />
                            </a>
                        <div class="close-btn"><i class="icon fa fa-times"></i></div>
                    </div>
                    <ul class="navigation clearfix">
                        <!-- Keep empty / Menu will come through JavaScript from main menu -->
                    </ul>
                    <ul class="contact-list-one">
                        <li>
                            <div class="contact-info-box">
                                <i class="icon lnr-icon-phone-handset"></i>
                                <span class="title">Call Now</span>
                                <a href="tel:+2348069675585">+234 806 967 5585</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact-info-box">
                                <span class="icon lnr-icon-envelope1"></span>
                                <span class="title">Send Email</span>
                                <a href="mailto:info@wumiyinmase.com">info@wumiyinmase.com</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- End Mobile Menu -->

            <!-- Sticky Header  -->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="logo">
                            <a href="{{ route('home') }}" title="">
                                <img src="{{ asset('images/wumiyinmaselogo.png') }}" alt="Wumiyin & Mase Nigeria Limited" style="max-height: 45px; mix-blend-mode: multiply;" />
                            </a>
                        </div>
                        <div class="nav-outer">
                            <nav class="main-menu">
                                <div class="navbar-collapse show collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <!-- Keep empty / Menu copied via JS -->
                                    </ul>
                                </div>
                            </nav>
                            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Sticky Menu -->
        </header>
        <!--End Main Header -->

        <!-- Main Content Yield -->
        @yield('content')

        <!--Main Footer -->
        <footer class="main-footer">
            <div class="bg-image" style="background-image: url('{{ asset('images/background/5.jpg') }}')"></div>
            <div class="anim-icons">
                <span class="icon icon-plane-3 bounce-x"></span>
            </div>

            <!-- Contact info -->
            <div class="contacts-outer">
                <div class="auto-container">
                    <div class="row">
                        <!-- Contact Info Block -->
                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-international-shipping-2"></i></div>
                                <h4 class="title">Address</h4>
                                <div class="text">NAHCO COMPLEX, MM Int'l Airport Ikeja Lagos Nigeria </div>
                            </div>
                        </div>

                        <!-- Contact Info Block -->
                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="300ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-stock-1"></i></div>
                                <h4 class="title">Contact</h4>
                                <div class="text">
                                    <a href="mailto:info@wumiyinmase.com">info@wumiyinmase.com</a>
                                   <a href="tel:+2348069675585">+234 806 967 5585</a>,  &nbsp; <a href="tel:+2347037395331">+234 703 739 5331</a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Info Block -->
                        <div class="contact-info-block col-lg-4 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="600ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon flaticon-24-hours-2"></i></div>
                                <h4 class="title">Timing</h4>
                                <div class="text">Mon - Sat: 8 am - 6 pm, Sunday: CLOSED</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact info -->

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="auto-container">
                    <div class="row">
                        <!--Footer Column-->
                        <div class="footer-column col-xl-4 col-lg-12 col-md-6 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('images/wumiyinmaselogo.png') }}" alt="Wumiyin & Mase Nigeria Limited" style="max-height: 50px;" />
                                    </a>
                                </div>
                                <div class="text">Moving cargo across borders can feel overwhelming. At Wumiyin & Mase Nigeria Limited, we eliminate the stress from your supply chain.</div>
                                <a href="{{ route('about') }}" class="theme-btn btn-style-one hvr-light small"><span class="btn-title">About Us</span></a>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-xl-4 col-lg-3 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="widget-title">Services</h3>
                                <ul class="user-links">
                                    <li><a href="{{ route('service.detail', 'global-air-ocean-freight') }}">Global Air & Ocean Freight</a></li>
                                    <li><a href="{{ route('service.detail', 'household-goods-relocation') }}">Household Relocation</a></li>
                                    <li><a href="{{ route('service.detail', 'pet-shipping') }}">Specialized Pet Shipping</a></li>
                                    <li><a href="{{ route('service.detail', 'customs-clearance') }}">Customs Clearance & Permits</a></li>
                                    <li><a href="{{ route('service.detail', 'warehousing-haulage') }}">Warehousing & Local Haulage</a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <!-- <div class="footer-column col-xl-3 col-lg-4 col-md-6 col-sm-12">
                            <div class="footer-widget gallery-widget">
                                <h3 class="widget-title">Projects</h3>
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="#"><img src="{{ asset('images/resource/project-thumb-1.jpg') }}" alt="" /></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#"><img src="{{ asset('images/resource/project-thumb-2.jpg') }}" alt="" /></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#"><img src="{{ asset('images/resource/project-thumb-3.jpg') }}" alt="" /></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#"><img src="{{ asset('images/resource/project-thumb-4.jpg') }}" alt="" /></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#"><img src="{{ asset('images/resource/project-thumb-5.jpg') }}" alt="" /></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="#"><img src="{{ asset('images/resource/project-thumb-6.jpg') }}" alt="" /></a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!--Footer Column-->
                        <div class="footer-column col-xl-4 col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget">
                                <h3 class="widget-title">Newsletter</h3>
                                <div class="widget-content">
                                    <div class="subscribe-form">
                                        <div class="text">Subscribe our newsletter to get our latest update & news</div>
                                        <form method="post" action="#">
                                            <div class="form-group">
                                                <!-- <input type="email" name="email" class="email" value="" placeholder="Email Address" required="" />
                                                <button type="button" class="theme-btn btn-style-one">
                                                    <span class="btn-title"><i class="fa fa-paper-plane"></i></span>
                                                </button> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="copyright-text">
                            <p>&copy; {{ date('Y') }} WUMIYIN & MASE NIGERIA LIMITED. All Rights Reserved.</p>
                        </div>

                        <ul class="social-icon-two">
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Main Footer -->
    </div>

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/2348069675585" class="whatsapp-float" target="_blank" rel="noopener noreferrer" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/main-slider-script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
</body>
</html>
