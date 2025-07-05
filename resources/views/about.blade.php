@extends('layout')

@section('title', config('app.name') . ' - About')

@section('content')
        <!-- page-title -->
        <div class="prt-page-title-row">
            <div class="prt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">About Us</h2>
                            </div>
                            <div class="breadcrumb-wrapper-main">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner bread-white">
                                        <span>
                                            <a href="{{ route('home') }}" class="home">&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                        <span>About Us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>

 <!--site-main start-->
<div class="site-main">

<!--prt-row-->
<section class="prt-row services-section bg-base-grey clearfix">
    <div class="prt-team-member-single-content-wrapper prt-team-member-view-default">
        <div class="container">
            <div class=" row prt-team-member-single-content">
                <div class="col-lg-8 m-auto">
                    <div class="prt-service-single-content-area bg-base-white box-shadow pt-50 pb-20 pl-40 pr-40 res-575-pr-15 res-575-pl-15">
                        <div class="prt-service-description">
                            <div class="pb-20">
                                <h3>{{ config('app.name') }} – Personal Fuel Meter</h3>
                                <p>{{ config('app.name') }} stands for Personal Fuel Meter — a revolutionary, portable device developed to tackle a ₦200 trillion global issue: fuel adulteration, fraud, and short delivery at the pump. Powered by advanced multi-sensors and smart algorithms, {{ config('app.name') }} empowers individuals and organizations with real-time fuel quality and quantity monitoring.</p>
                            </div>
                            <div class="prt_fatured_image-wrapper">
                                <img class="img-fluid" src="/images/services/services-01-844x400.jpg" alt="services-1">
                            </div>
                            <div class="pt-40">
                                <h3>Why We Exist</h3>
                                <p>Fuel fraud isn’t just an inconvenience — it’s a global crisis. Customers feel cheated, engines get damaged, and billions are lost yearly due to adulterated and under-measured fuel. At {{ config('app.name') }}, we believe fuel should empower people, not exploit them. Our mission is simple: bring transparency, fairness, and trust to every fuel transaction.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="featured-imagebox featured-imagebox-services style5">
                                    <div class="prt-portfolio-featured-wrapper">
                                        <div class="featured-thumbnail">
                                            <img class="img-fluid" src="/images/services/services-407x184.jpg" alt="image">
                                        </div>
                                        <div class="featured-content">
                                            <div class="cat_block-wrapper">
                                                <h3 class="cat_block">
                                                     Smart Sensor Technology 
                                                </h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>{{ config('app.name') }} uses cutting-edge IoT and AI to deliver real-time, multi-sensor fuel readings for accuracy and transparency.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-team end-->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="featured-imagebox featured-imagebox-services style5">
                                    <div class="prt-portfolio-featured-wrapper">
                                        <div class="featured-thumbnail">
                                            <img class="img-fluid" src="/images/services/services-1-407x184.jpg" alt="image">
                                        </div>
                                        <div class="featured-content">
                                            <div class="cat_block-wrapper">
                                                <h3 class="cat_block">
                                                    Real-Time Protection 
                                                </h3>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Receive instant alerts when fuel is adulterated, under-measured, or suspicious — empowering informed action.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- featured-imagebox-team end-->
                            </div>
                        </div>

                        <div class="pt-30 pb-20">
                            <h3>Our Vision for a Fairer Fuel Economy</h3>
                            <p>We envision a world where everyone — from solo drivers to entire fleets — has the ability to verify and trust every drop of fuel. {{ config('app.name') }} isn’t just a device; it’s a movement against exploitation, waste, and opacity. By harnessing the power of real-time data, advanced algorithms, and IoT connectivity, we are building a future where fairness at the pump is not a privilege, but a right. Join us in rewriting the narrative — from confusion and fraud to clarity and empowerment.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--prt-row end-->

</div><!--site-main end-->

@endsection 