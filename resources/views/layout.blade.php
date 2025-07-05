<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="{{ config('app.url', 'https://yourdomain.com') }}">
<meta name="keywords" content="PerFuMe, Personal Fuel Meter, fuel monitoring device, fuel quality tracking, fuel quantity analysis, vehicle telemetry, real-time fuel analytics, smart fuel sensor, vehicle fuel management, IoT fuel tracker, tank monitoring system, petrol station automation, fuel economy insights, fuel fraud detection, diesel meter, smart fuel dashboard, {{ config('app.name') }}">
<meta name="description" content="{{ config('app.name') }} is a smart fuel monitoring solution designed to deliver real-time fuel quantity and quality analysis using intelligent sensor technology.">
<title>@yield('title', config('app.name') . ' – Intelligent Fuel Monitoring & Analytics')</title>

<link rel="shortcut icon" href="/images/favicon.png">
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/animate.css">
<link rel="stylesheet" type="text/css" href="/css/flaticon.css">
<link rel="stylesheet" type="text/css" href="/css/themify-icons.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="/css/slick.css">
<link rel="stylesheet" type="text/css" href="/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="/css/shortcodes.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/megamenu.css">
<link rel="stylesheet" type="text/css" href="/css/responsive.css">
<!-- REVOLUTION LAYERS STYLES -->
<link rel='stylesheet' id='rs-plugin-settings-css' href="/revolution/css/rs6.css">

</head>
<body>

    <!-- page start -->
    <div class="page">
        <div class="min-box">
 
        <!--header start-->
        <header id="masthead" class="header prt-header-style-01">
            <!-- topbar -->
            <div class="top_bar bg-base-dark clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"><i class="fa fa-envelope"></i></div>
                                        <div class="top_bar_content"><a href="mailto:ola.abraham.1520@gmail.com">ola.abraham.1520@gmail.com</a></div>
                                    </div>
                                    <div class="top_bar_contact_item">
                                        <div class="top_bar_icon"><i class="fa fa-phone"></i></div>
                                        <div class="top_bar_content"><a href="tel:+2347033984844">{{ config('app.contact_phone') }}</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-info">
                 
                                        <div class="top_bar_content-main">Follow On :</div>
                                        <div class="top_bar_contact_item top_bar_social ml-auto p-0">
                                            <ul class="social-icons d-flex">
                                                <li>
                                                    <a class="prt-social-facebook" href="/https://www.facebook.com/" rel="noopener" aria-label="facebook"><i class=" fa fa-facebook-f"></i></a></li>
                                                <li>
                                                    <a class="prt-social-twitter" href="/https://twitter.com/" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li>
                                                    <a class="prt-social-linkedin" href="/https://www.linkedin.com/" rel="noopener" aria-label="google"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- topbar end -->
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu bg-base-white">
                <div class="site-header-menu-inner prt-stickable-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex flex-row  justify-content-between align-items-center">
                                    <!-- site-branding -->
                                    <div class="site-branding ">
                                        <h1>
                                        <a class="home-link" href="{{ route('home') }}" title="Elexio" rel="home">
                                            <img id="logo-img" height="35" width="155" class="img-fluid auto_size" src="/images/logo.png" alt="logo-img">
                                        </a>
                                        </h1>
                                    </div><!-- site-branding end -->
                                    <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                        <span class="menubar-box">
                                            <span class="menubar-inner"></span>
                                        </span>
                                    </div>
                                    <!-- menu -->
                                    <nav class="main-menu menu-mobile ms-auto" id="menu">
                                        <ul class="menu">
                                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                                <a href="{{ route('home') }}">Home</a>
                                            </li>
                                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                                <a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav><!-- menu end -->
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header>
        <!--header end-->   

        @yield('content')

        <footer class="widget-footer bg-base-grey clearfix">
                <div class="second-footer prt-bgimage-yes bg-footer prt-bg">
                    <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-lg-4 widget-area">
                                <div class="widget widget_text clearfix">
                                    <h3 class="widget-title">About {{ config('app.name') }}</h3>
                                    <div class="textwidget widget-text pb-10">
                                        <p>{{ config('app.name') }} is a smart personal fuel meter built to solve fuel adulteration, short supply, and customer distrust. Backed by advanced sensors and real-time data.</p>
                                    </div>
    
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4 widget-area">
                                <div class="widget widget_nav_menu clearfix">
                                    <h3 class="widget-title">Quick Links</h3>
                                    <ul id="menu-footer-quick-links">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                                        <li><a href="{{ route('terms-conditions') }}">Terms & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6 col-lg-4 widget-area">
                                <div class="widget widget-recent-post clearfix">
                                    <h3 class="widget-title">Contact Info</h3>
                                    <div class="textwidget widget-text">
                                        <ul class="widget_contact_wrapper pl-0 res-575-pb-0">
                                            <li><strong>Email:</strong> <a href="mailto:ola.abraham.1520@gmail.com">ola.abraham.1520@gmail.com</a></li>
                                            <li><strong>Phone:</strong> <a href="tel:+2347033984844">{{ config('app.contact_phone') }}</a></li>
                                        </ul>      
                                    </div>
                                </div>
                            </div>
                
                        </div>
                    </div>
                </div>
                <div class="bottom-footer-text text-center text-base-white copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="justify-content-between">
                                    <span class="cpy-text text-center">Copyright © 2022 <a href="{{ route('home') }}"> Elexio </a>. All Rights Reserved.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        
        
        <!-- back-to-top start -->
        <a id="totop" href="/#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- back-to-top end -->

    </div><!-- page end -->


    <!-- Javascript -->
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/jquery-migrate-3.4.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.js"></script> 
    <script src="/js/jquery-validate.js"></script> 
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery-waypoints.js"></script>    
    <script src="/js/numinate.min.js"></script>
    <script src="/js/imagesloaded.min.js"></script>
    <script src="/js/circle-progress.min.js"></script>
    <script src="/js/main.js"></script>

    <!-- Revolution Slider -->    
    <script src='/revolution/js/revolution.tools.min.js'></script>
    <script src='/revolution/js/rs6.min.js'></script>
    <script src="/revolution/js/slider.js"></script>
    <!-- Javascript end-->

</body>

 </html>