@extends('layout')

@section('title', config('app.name') . ' - Contact')

@section('content')
 


        <!-- page-title -->
        <div class="prt-page-title-row-3">
            <div class="prt-page-title-row-inner-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Contact Us</h2>
                            </div>
                            <div class="breadcrumb-wrapper-main">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a href="{{ route('home') }}" class="home">&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                        <span>Contact Us</span>
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

<section class="prt-row contact-us clearfix">
    <div class="container">
        <div class="row prt-vertical_sep">
            <div class="col-lg-6 col-md-12">
                <div class="section-title">
                    <div class="title-header">
                        <h3>QUICK CONTACT</h3>
                        <h2 class="title">Let’s Build Fuel Trust <br> Together — <span>Reach Out</span></h2>
                    </div>
                    <div class="title-desc">
                        <p>Whether you're a driver, fleet operator, NGO, or regulator — we’re here to help you measure and manage fuel smarter, safer, and more transparently.</p>
                    </div>
                </div>

                <div class="prt-horizontal_sep width-100 mt-25 mb-20 mr-40 res-991-mr-0"></div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top icon-flip-hover">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor prt-icon_element-size-lg">
                                    <i class="flaticon-headphones"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3>Talk to Us</h3>
                                </div>
                                <h3 class="fs-18 mb-0">Phone:</h3>
                                <p>{{ config('app.contact_phone') }}</p>
                                <h3 class="fs-18 mb-0">Email:</h3>
                                <a href="mailto:ola.abraham.1520@gmail.com">ola.abraham.1520@gmail.com</a>
                            </div>
                        </div>
                    </div>
          
                </div>
            </div>

            <div class="col-lg-6 col-md-12 pl-60 res-991-pl-15 res-991-mt-20">
                <div class="section-title">
                    <div class="title-header">
                        <h3>CONTACT US</h3>
                        <h2 class="title">Send Us a <span> Message</span></h2>
                    </div>
                    <div class="title-desc">
                        <p>We’re ready to collaborate, answer your questions, or explore partnership opportunities.</p>
                    </div>
                </div>
                <div class="prt-bgcolor-white res-991-margin_right0 mt-20">
                    <form id="contact_form" class="wrap-form contact_form padding_top15" method="post" action="#">
                        <div class="row prt-boxes-spacing-10px">
                            <div class="col-sm-6 prt-box-col-wrapper">
                                <label>
                                    <span class="text-input margin_bottom0">
                                        <input name="your-name" type="text" value="" placeholder="Your Name*" required="required">
                                    </span>
                                </label>
                            </div>
                            <div class="col-sm-6 prt-box-col-wrapper">
                                <label>
                                    <span class="text-input margin_bottom0">
                                        <input name="Email" type="text" value="" placeholder="Email Address*" required="required">
                                    </span>
                                </label>
                            </div>
                            <div class="col-sm-12 prt-box-col-wrapper">
                                <label>
                                    <span class="text-input margin_bottom0">
                                        <input name="Phone Number" type="text" value="" placeholder="Phone Number" required="required">
                                    </span>
                                </label>
                            </div>
                            <div class="col-sm-12 prt-box-col-wrapper">
                                <label>
                                    <span class="text-input margin_bottom0">
                                        <textarea name="your-message" cols="40" rows="5" placeholder="Your Message" aria-required="true"></textarea>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="submit prt-btn prt-btn-size-md prt-btn-shape-square prt-btn-style-fill prt-btn-color-skincolor w-100" type="submit">Send Now!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

</div><!--site-main end-->

@endsection 