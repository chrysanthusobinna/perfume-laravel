@extends('layout')

@section('title', config('app.name') . ' - Home')

@section('content')
 
 
 <!-- START decfoxSlider 1 REVOLUTION SLIDER 6.5.9 -->
        <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery">
            <rs-module id="rev_slider_1_1" style="" data-version="6.5.9">
                <rs-slides>
                    <rs-slide data-key="rs-1" data-title="Slide" data-thumb="images/slides/slider-mainbg-001.png" data-anim="ei:d;eo:d;s:d;r:0;t:fade;sl:d;">

                        <img src="/images/slides/slider-mainbg-001.png" title="slider-mainbg-001.jpg" width="1920" height="760" class="rev-slidebg tp-rs-img" data-no-retina>

 
 
 
                        <rs-layer
                            id="slider-1-slide-1-layer-7" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:0px,130px,80px,0px;y:m;yo:-40px,-70px,-80px,-70px;"
                            data-text="w:normal;s:84,84,50,40;l:94,94,60,50;fw:600;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:400;sp:700;sR:400;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:9;font-family:'Saira', sans-serif;"
                        >The Power of
                        </rs-layer>

                        <rs-layer
                            id="slider-1-slide-1-layer-8" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:0px,130px,-90px,0px;y:m;yo:55px,25px,-10px,-10px;"
                            data-text="w:normal;s:84,84,50,40;l:94,94,60,50;fw:600;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:500;sp:900;sR:500;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:9;font-family:'Saira', sans-serif;"
                        >Accurate <span class="text-base-skin">Fueling</span>
                        </rs-layer>

                        <rs-layer
                            id="slider-1-slide-1-layer-9"
                            data-type="text"
                            data-color="#eaeaea"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:180px,330px,0,751px;y:m;yo:175px,140px,29px,-52px;"
                            data-text="w:normal;s:15,17,16,20;l:30,30,24,14;a:left;"
                            data-dim="w:600px,600px,495px,305px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:600;sp:1000;sR:600;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:11;font-family:'Roboto', sans-serif;"
                        >Stop adulterated fuel. {{ config('app.name') }} gives you real-time, portable fuel quality and quantity data powered by advanced sensors.
                        </rs-layer>

                        <a
                            id="slider-1-slide-1-layer-10" 
                            class="rs-layer prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-icon-btn-right prt-btn-color-skincolor"
                            href="{{ route('about') }}" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:0px,140px,-230px,0px;yo:565px,530px,280px,220px;"
                            data-text="w:normal;s:14,14,16,14;l:14,14,16,18;fw:500;"
                            data-padding="t:12,12,12,12;r:30,30,32,30;b:12,12,12,12;l:30,30,30,30;"
                            data-border="bor:100px,100px,100px,100px;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:600;sp:1000;sR:600;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:12;font-family:'Saira', sans-serif;"
                        >GET {{ config('app.name') }}
                        </a>

                    </rs-slide>

                    <rs-slide data-key="rs-2" data-title="Slide" data-thumb="images/slides/slider-mainbg-002.png" data-anim="ei:d;eo:d;s:d;r:0;t:fade;sl:d;">

                        <img src="/images/slides/slider-mainbg-002.png" title="slider-img-01.png" width="1920" height="800" class="rev-slidebg tp-rs-img" data-no-retina>

 
 

 

                        <rs-layer
                            id="slider-1-slide-2-layer-7" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,l,c;xo:0px,130px,80px,0px;y:m;yo:-40px,-70px,-80px,-70px;"
                            data-text="w:normal;s:84,84,50,40;l:94,94,60,50;fw:600;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:400;sp:700;sR:400;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:9;font-family:'Saira', sans-serif;"
                        >Stop Fuel
                        </rs-layer>

                        <rs-layer
                            id="slider-1-slide-2-layer-8" 
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:0px,130px,-90px,0px;y:m;yo:55px,25px,-10px,-10px;"
                            data-text="w:normal;s:84,84,50,40;l:94,94,60,50;fw:600;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:500;sp:900;sR:500;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:9;font-family:'Saira', sans-serif;"
                        >Adulteration <span class="text-base-skin">Now</span>
                        </rs-layer>

                        <rs-layer
                            id="slider-1-slide-2-layer-9"
                            data-type="text"
                            data-color="#eaeaea"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:180px,330px,0,751px;y:m;yo:175px,160px,29px,-52px;"
                            data-text="w:normal;s:15,17,16,20;l:30,30,24,14;a:left;"
                            data-dim="w:600px,600px,495px,305px;"
                            data-vbility="t,t,f,f"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:600;sp:1000;sR:600;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:11;font-family:'Roboto', sans-serif;"
                        >Say goodbye to uncertainty. With {{ config('app.name') }}, get instant, AI-powered fuel quality checks — protect engines, save costs, and trust every pump.
                        </rs-layer>

                        <a
                            id="slider-1-slide-2-layer-10" 
                            class="rs-layer prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-icon-btn-right prt-btn-color-skincolor"
                            href="{{ route('about') }}" target="_self" rel="nofollow"
                            data-type="text"
                            data-rsp_ch="on"
                            data-xy="x:l,l,c,c;xo:0px,140px,-230px,0px;yo:565px,530px,280px,220px;"
                            data-text="w:normal;s:14,14,16,14;l:14,14,16,18;fw:500;"
                            data-padding="t:12,12,12,12;r:30,30,32,30;b:12,12,12,12;l:30,30,30,30;"
                            data-border="bor:100px,100px,100px,100px;"
                            data-frame_0="y:100%;"
                            data-frame_1="e:power4.inOut;st:600;sp:1000;sR:600;"
                            data-frame_999="o:0;st:w;sR:7930;"
                            style="z-index:12;font-family:'Saira', sans-serif;"
                        >LEARN MORE
                        </a>
                    </rs-slide>
                    <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                </rs-slides>
            </rs-module>
        </rs-module-wrap>
        </div>

   
        <!-- site-main start -->
        <div class="site-main">

            <!--about-section-->
            <section class="prt-row about-us-section padding_top_zero-section bg-base-grey prt-bg prt-bgimage-yes bg-img1 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="prt-bg prt-col-bgimage-yes bg-base-white prt-right-span mt_70 res-991-ml_15 spacing-1">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="prt_single_image-wrapper text-md-center res-991-ml-15">
                                            <div class="prt_single_image_text prt-bgcolor-skincolor">Fueling Trust, Empowering People</div>
                                            <img class="img-fluid auto_size" src="/images/single-img-1.jpg" width="586" height="581" alt="single-1">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="pl-15 pt-25">
                                            <!-- section title -->
                                            <div class="section-title">
                                                <div class="title-header">
                                                    <h3>About us</h3>
                                                    <h2 class="title">We’re powering fairness at the fuel pump</h2>
                                                </div>
                                                <div class="title-desc">
                                                    <p>{{ config('app.name') }} is a smart personal fuel meter built to solve a ₦200 trillion problem — fuel adulteration, short supply, and customer distrust. Backed by advanced sensors and real-time data, we help users verify fuel quality and quantity with confidence.</p>
                                                </div>
                                            </div><!-- section title end -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!--featured-icon-box-->
                                                    <div class="featured-icon-box icon-align-before-content">
                                                        <div class="featured-icon">
                                                            <div class="prt-icon prt-icon_element-style-rounded prt-icon_element-fill prt-icon_element-size-xl prt-icon_element-onlytxt mb-10">
                                                                <i class="flaticon-technician text-base-skin"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-desc">
                                                                <h3 class="fs-21">We launched {{ config('app.name') }} to give power back to the people — one accurate refill at a time.</h3>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-icon-box end-->
                                                </div>
                                            </div>
                                            <div class="prt-horizontal_sep width-100 pt-40 res-575-pt-25"></div>
                                            <div class="row prt-vertical_sep">
                                                <div class="col-sm-6">
                                                    <ul class="prt-list prt-list-style-icon d-grid prt-list-icon-color-skincolor">
                                                        <li><i class="fa fa-check-square"></i><span class="prt-list-li-content">Multi-Sensor Accuracy</span></li>
                                                        <li><i class="fa fa-check-square"></i><span class="prt-list-li-content">AI-Powered Analytics</span></li>
                                                        <li><i class="fa fa-check-square"></i><span class="prt-list-li-content">Protects Consumers & Fleets</span></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 pl-30 res-575-pl-15">
                                                    <div class="prt_single_image-wrapper res-575-mt-20 res-575-ml-0">
                                                        <img width="100" height="61" class="img-fluid" src="/images/sign.png" alt="">
                                                    </div>
                                                    <div class="featured-content position-relative">
                                                        <div class="featured-desc">
                                                            <h3 class="fs-18 pt-20">Ola Abraham — Founder</h3>
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
            <!--about-section end-->

            <!--padding_zero-section-->
            <section class="prt-row mb_10 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 m-auto">
                            <!-- section title -->
                            <div class="section-title title-style-center_text">
                                <div class="title-header prt-textcolor-white">
                                    <h3>Our Services</h3>
                                    <h2 class="title">Smart Solutions for Safer, Transparent Fueling</h2>
                                </div>                        
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="row slick_slider slick-arrows-style2 " data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1200,"settings":{"slidesToShow": 3}},{"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":650,"settings":{"slidesToShow": 1}}]}'>
                        
                        <div class="col-md-4 col-sm-6">
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <div class="featured-thumbnail">
                                    <img width="327" height="255" class="img-fluid" src="/images/services/services-328x259.jpg" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-xl">
                                            <i class="flaticon-wireless-charging"></i>
                                        </div>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="{{ route('about') }}">Sensor Calibration</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Ensure accurate readings with precision sensor calibration for your personal fuel meter.</p>
                                    </div>
                                </div>
                                    <div class="featured-btn">
                                      <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="{{ route('about') }}">VIEW MORE</a>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <div class="featured-thumbnail">
                                    <img width="327" height="255" class="img-fluid" src="/images/services/services-01-328x259.jpg" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-xl">
                                            <i class="flaticon-voice-control"></i>
                                        </div>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="{{ route('about') }}">Real-Time Monitoring</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Track fuel quality and quantity instantly from your mobile or dashboard interface.</p>
                                    </div>
                                </div>
                                    <div class="featured-btn">
                                      <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="{{ route('about') }}">VIEW MORE</a>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <div class="featured-thumbnail">
                                    <img width="327" height="255" class="img-fluid" src="/images/services/services-02-328x259.jpg" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-xl">
                                            <i class="flaticon-car"></i>
                                        </div>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="{{ route('about') }}">Fuel Data Analytics</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Make informed decisions using intelligent analytics on fuel usage, fraud alerts, and trends.</p>
                                    </div>
                                </div>
                                    <div class="featured-btn">
                                      <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="{{ route('about') }}">VIEW MORE</a>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <div class="featured-thumbnail">
                                    <img width="327" height="255" class="img-fluid" src="/images/services/services-03-328x259.jpg" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-xl">
                                            <i class="flaticon-charger"></i>
                                        </div>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="{{ route('about') }}">Device Installation</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Professional installation of your {{ config('app.name') }} device for optimal accuracy and seamless setup.</p>
                                    </div>
                                </div>
                                    <div class="featured-btn">
                                      <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="{{ route('about') }}">VIEW MORE</a>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <div class="featured-thumbnail">
                                    <img width="327" height="255" class="img-fluid" src="/images/services/services-01-328x259.jpg" alt="image">
                                </div>
                                <div class="featured-content">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-xl">
                                            <i class="flaticon-wireless-charging"></i>
                                        </div>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="{{ route('about') }}">Support & Subscriptions</a></h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Access regular updates, tech support, and premium analytics via our flexible plans.</p>
                                    </div>
                                </div>
                                    <div class="featured-btn">
                                      <a class="prt-btn btn-inline prt-btn-size-md prt-icon-btn-right" href="{{ route('about') }}">VIEW MORE</a>
                                  </div>
                            </div>
                        </div>

                    </div>
               
                </div>
            </section>
            <!--padding_zero-section end-->


            <section class="prt-row bg-img2 cta-section-1 bg-base-dark prt-bg prt-bgimage-yes clearfix">
                <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured-icon-box icon-align-content style2">
                                <div class="featured-icon">
                                    <div class="prt-icon prt-icon_element-size-lg prt-icon_element-color-skincolor prt-icon_element-style-round">
                                        <i class="flaticon-charging"></i>
                                        <span class="fea_num text-base-white">
                                            <i class="prt-num ti-info"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Transparent Pricing</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Know what you’re paying for. {{ config('app.name') }} gives clear insights into the quantity and quality of every drop of fuel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured-icon-box icon-align-content style2">
                                <div class="featured-icon">
                                    <div class="prt-icon prt-icon_element-size-lg prt-icon_element-color-skincolor prt-icon_element-style-round">
                                        <i class="flaticon-electric-car"></i>
                                        <span class="fea_num text-base-white">
                                            <i class="prt-num ti-info"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Data-Driven Accuracy</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Backed by AI and advanced sensors, {{ config('app.name') }} delivers precise readings to protect your vehicle and budget.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="featured-icon-box icon-align-content style2">
                                <div class="featured-icon">
                                    <div class="prt-icon prt-icon_element-size-lg prt-icon_element-color-skincolor prt-icon_element-style-round">
                                        <i class="flaticon-electric-power"></i>
                                        <span class="fea_num text-base-white">
                                            <i class="prt-num ti-info"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>No Guesswork</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>With {{ config('app.name') }}, you stop guessing and start knowing. Gain full confidence every time you refuel.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="prt-row progress-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 align-self-center">
                <!-- section title -->
                <div class="section-title">
                    <div class="title-header">
                        <h3>We always help</h3>
                        <h2 class="title">Bringing Accuracy & Fairness to Every Refuel</h2>
                    </div>
                </div><!-- section title end -->
                <div class="row pt-20">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="/images/single-img-2.png" alt="single-06">
                    </div>
                    <div class="col-lg-6">
                        <p class="res-991-pt-30 pt-10">
                            With {{ config('app.name') }}, users gain the power to verify fuel quality and quantity in real time — protecting engines, savings, and trust at every pump.
                        </p>
                    </div>
                </div>
                <div class="pt-50 res-991-pb-15 res-767-pt-20 res-991-pt-20">
                    <div class="prt-progress-bar style1 mb-35 res-991-mb-30" data-percent="99%">
                        <div class="progress-bar-title">Measurement Accuracy</div>
                        <div class="progress-bar-inner">
                            <div class="progress-bar progress-bar-color-bar_darkgrey" style="width: 99%;"></div>
                        </div>
                        <div class="progress-bar-percent" data-percentage="99">99%</div>
                    </div>
                    <div class="prt-progress-bar style1" data-percent="99%">
                        <div class="progress-bar-title">Real-Time Analytics Efficiency</div>
                        <div class="progress-bar-inner">
                            <div class="progress-bar progress-bar-color-bar_darkgrey" style="width: 99%;"></div>
                        </div>
                        <div class="progress-bar-percent" data-percentage="99">99%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="bg-base-white pt-40 pb-20 pl-5 res-991-pl-0 res-991-pb-0">
                    <div class="accordion mt_5">
                        <!-- toggle -->
                        <div class="toggle prt-toggle_style_classic style1 prt-toggle-title-bgcolor-grey">
                            <div class="toggle-title"><a href="/#" class="active">What is {{ config('app.name') }}?</a></div>
                            <div class="toggle-content show">
                                <p>
                                    {{ config('app.name') }} (Personal Fuel Meter) is a portable, multi-sensor device that accurately measures fuel quality and quantity in real-time — protecting users from adulteration, short-selling, and poor-quality fuel.
                                </p>
                            </div>
                        </div>
                        <!-- toggle -->
                        <div class="toggle prt-toggle_style_classic style1 prt-toggle-title-bgcolor-grey">
                            <div class="toggle-title"><a href="/#">Who should use {{ config('app.name') }}?</a></div>
                            <div class="toggle-content">
                                <p>
                                    Our target users include everyday fuel consumers, public and private fleet operators, NGOs, insurance companies, and regulators who need verifiable data to prevent loss or fraud.
                                </p>
                            </div>
                        </div>
                        <!-- toggle -->
                        <div class="toggle prt-toggle_style_classic style1 prt-toggle-title-bgcolor-grey">
                            <div class="toggle-title"><a href="/#">How does it detect fraud?</a></div>
                            <div class="toggle-content">
                                <p>
                                    {{ config('app.name') }} uses AI and advanced sensor algorithms to detect inconsistencies in fuel density, flow rate, and quality, instantly flagging suspicious activity or adulteration during refueling.
                                </p>
                            </div>
                        </div>
                        <!-- toggle -->
                        <div class="toggle prt-toggle_style_classic style1 prt-toggle-title-bgcolor-grey">
                            <div class="toggle-title"><a href="/#">What value does it deliver?</a></div>
                            <div class="toggle-content">
                                <p>
                                    {{ config('app.name') }} protects from perplexity and powerlessness by restoring confidence at the pump. It helps reduce losses, supports transparency, and offers data-driven insights for better fuel management.
                                </p>
                            </div>
                        </div>
                        <!-- toggle -->
                        <div class="toggle prt-toggle_style_classic style1 prt-toggle-title-bgcolor-grey">
                            <div class="toggle-title"><a href="/#">Is it easy to use?</a></div>
                            <div class="toggle-content">
                                <p>
                                    Absolutely. It’s designed to be portable, plug-and-play, and compatible with most fuel dispensers. The device works with a companion app or dashboard interface for real-time feedback and analytics.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



        </div><!-- site-main end-->
@endsection 