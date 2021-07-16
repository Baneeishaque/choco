<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MontealBan Chocolates') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- integration from here -->
    <script src="{{ asset('js/3ts2ksMwXvKRuG480KNifJ2_JNM.js') }}"></script>
    <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700%7CGreat+Vibes">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
    <!--  -->
</head>

<body>
    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-bell">
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="page">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
                    data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="120px" data-xxl-stick-up-offset="140px" data-lg-stick-up="true"
                    data-xl-stick-up="true" data-xxl-stick-up="true">
                    <!-- <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div> -->
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <div class="rd-navbar-collapse">
                                <div class="contacts-ruth">
                                    <div class="unit unit-spacing-xs-2 align-items-center">
                                        <div class="unit-left"><span class="icon linearicons-map-marker"></span></div>
                                        <div class="unit-body"><a href="contact-us.html">Darussalam Complex, Puthupparamba Towm<br/>Puthupparamba PO,Kottakkal</a></div>
                                    </div>
                                </div><a class="button button-sm button-icon button-icon-left button-default-outline-3 button-zakaria" href="grid-blog.html"><span class="icon mdi mdi-email-outline"></span>Get in touch</a>
                            </div>
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <a class="brand" href="index.html"><img class="brand-logo-dark" src="{{asset('images/logo-default-231x49.jpg')}}" alt="" width="231" height="49" srcset="images/logo-default-231x49.png 2x" /><img class="brand-logo-light" src="images/logo-inverse-231x49.png"
                                            alt="" width="231" height="49" srcset="images/logo-inverse-231x49.png 2x" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-button"><a class="button button-sm button-icon button-icon-left button-default-outline-3 button-zakaria" href="grid-blog.html"><span class="icon mdi mdi-email-outline"></span>Get in touch</a></div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                    </li>
                                    <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="grid-gallery.html">Gallery</a></li> -->
                                    <!-- <li class="rd-nav-item"><a class="rd-nav-link" href="what-we-offer.html">What We Offer</a> -->
                                    <!-- RD Navbar Dropdown-->

                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="grid-shop.html">Products</a>
                                        <!-- RD Navbar Dropdown-->
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="grid-blog.html">Blog</a>
                                        <!-- RD Navbar Dropdown-->
                                    </li>

                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- section Start Here -->
        @yield('content')
        <!-- ------------- -->

        <!-- Page Footer-->
        <footer class="section footer-modern">
            <div class="footer-modern-body section-xl">
                <div class="container">
                    <div class="row row-40 row-md-50 justify-content-xl-between">
                        <div class="col-md-10 col-lg-3 col-xl-4 wow fadeInRight">
                            <div class="inset-xl-right-70">
                                <h5 class="footer-modern-title">Gallery</h5>
                                <div class="row row-10 gutters-10" data-lightgallery="group">
                                    <div class="col-4 col-sm-2 col-lg-4">
                                        <!-- Thumbnail Minimal-->
                                        <a class="thumbnail-minimal" href="images/grid-gallery-1-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-1-130x130.jpg" alt="" width="130" height="130" /></a>
                                    </div>
                                    <div class="col-4 col-sm-2 col-lg-4">
                                        <!-- Thumbnail Minimal-->
                                        <a class="thumbnail-minimal" href="images/grid-gallery-2-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-2-130x130.jpg" alt="" width="130" height="130" /></a>
                                    </div>
                                    <div class="col-4 col-sm-2 col-lg-4">
                                        <!-- Thumbnail Minimal-->
                                        <a class="thumbnail-minimal" href="images/grid-gallery-3-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-3-130x130.jpg" alt="" width="130" height="130" /></a>
                                    </div>
                                    <div class="col-4 col-sm-2 col-lg-4">
                                        <!-- Thumbnail Minimal-->
                                        <a class="thumbnail-minimal" href="images/grid-gallery-4-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-4-130x130.jpg" alt="" width="130" height="130" /></a>
                                    </div>
                                    <div class="col-4 col-sm-2 col-lg-4">
                                        <!-- Thumbnail Minimal-->
                                        <a class="thumbnail-minimal" href="images/grid-gallery-5-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-5-130x130.jpg" alt="" width="130" height="130" /></a>
                                    </div>
                                    <div class="col-4 col-sm-2 col-lg-4">
                                        <!-- Thumbnail Minimal-->
                                        <a class="thumbnail-minimal" href="images/grid-gallery-6-original.jpg" data-lightgallery="item"><img src="images/grid-gallery-6-130x130.jpg" alt="" width="130" height="130" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-7 col-lg-5 wow fadeInRight" data-wow-delay=".1s">
                            <h5 class="footer-modern-title">Quick Links</h5>
                            <ul class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block">
                                <li><a href="index.html#">About Us</a></li>
                                <li><a href="our-team.html">Our Team</a></li>
                                <li><a href="index.html#">FAQ</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="what-we-offer.html">What We Offer</a></li>
                                <li><a href="grid-blog.html">Our Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 wow fadeInRight" data-wow-delay=".2s">
                            <h5 class="footer-modern-title">Get in touch</h5>
                            <ul class="contacts-creative">
                                <li>
                                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                                        <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                        <div class="unit-body"><a href="index.html#">Darussalam Complex, Puthupparamba Towm<br/>Puthupparamba PO, Kottakkal - 676501</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                                        <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                                        <div class="unit-body"><a href="tel:#">+91 8714353450</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                                        <div class="unit-left"><span class="icon mdi mdi-email-outline"></span></div>
                                        <div class="unit-body"><a href="mailto:#">Montealben@gmail.com</a></div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline list-social-3 list-inline-sm">
                                <li>
                                    <a class="icon mdi mdi-facebook icon-xxs" href="index.html#"></a>
                                </li>
                                <li>
                                    <a class="icon mdi mdi-twitter icon-xxs" href="index.html#"></a>
                                </li>
                                <li>
                                    <a class="icon mdi mdi-instagram icon-xxs" href="index.html#"></a>
                                </li>
                                <li>
                                    <a class="icon mdi mdi-google-plus icon-xxs" href="index.html#"></a>
                                </li>
                                <li>
                                    <a class="icon mdi mdi-skype icon-xxs" href="index.html#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-modern-panel text-center">
                <div class="container">
                    <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>.&nbsp;</span><span>Monte-Alben</span><span>.&nbsp;</span><span>All Rights Reserved</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy.</a></p>
                </div>
            </div>
        </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>

    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>