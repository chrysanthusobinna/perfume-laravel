@extends('layout')

@section('title', config('app.name') . ' - Privacy Policy')

@section('content')
        <!-- page-title -->
        <div class="prt-page-title-row">
            <div class="prt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Privacy Policy</h2>
                            </div>
                            <div class="breadcrumb-wrapper-main">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner bread-white">
                                        <span>
                                            <a href="{{ route('home') }}" class="home">&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                        <span>Privacy Policy</span>
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
                            <h2 class="mt-20 mb-10">Privacy Policy</h2>

                            <p>
                                At <strong>{{ config('app.name') }}</strong>, we are committed to ensuring the privacy, integrity, and security of your data. This Privacy Policy outlines how we collect, use, store, and protect information when you use our Personal Fuel Meter device, mobile applications, and associated analytics services.
                            </p>

                            <h4>Overview</h4>
                            <p>
                                {{ config('app.name') }} (short for Personal Fuel Meter) is a hardware-based solution that leverages advanced sensors, IoT connectivity, and real-time analytics to monitor and verify fuel quality and quantity. As part of our service offering, we collect operational data to enhance performance, identify patterns, and help individuals and organizations prevent fuel-related losses.
                            </p>

                            <h4>Information We Collect</h4>
                            <p>We may collect the following categories of information:</p>
                            <ul>
                                <li><strong>Device Data:</strong> Fuel flow rate, fuel volume, density readings, timestamps, and geolocation (if enabled).</li>
                                <li><strong>User Information:</strong> Name, email address, phone number, organization name, and contact preferences when you register a device or contact support.</li>
                                <li><strong>Usage Logs:</strong> Session logs, diagnostics, firmware updates, and performance analytics from the {{ config('app.name') }} device or dashboard.</li>
                                <li><strong>Support Requests:</strong> Communications with our team regarding installation, calibration, or analytics subscriptions.</li>
                            </ul>

                            <h4>How We Use Your Information</h4>
                            <p>We use the data collected to:</p>
                            <ul>
                                <li>Deliver and manage your fuel monitoring service</li>
                                <li>Verify accuracy of readings and generate analytics</li>
                                <li>Notify users of potential fuel anomalies or fraud</li>
                                <li>Improve device performance through updates and insights</li>
                                <li>Respond to technical inquiries and customer service requests</li>
                            </ul>

                            <h4>Data Storage and Retention</h4>
                            <p>
                                All data is securely stored in encrypted environments hosted by trusted cloud infrastructure providers. We retain data only as long as it is necessary for operational and legal purposes. Users with active subscriptions may access historical logs and reports via their dashboard.
                            </p>

                            <h4>Data Sharing and Third Parties</h4>
                            <p>
                                We do <strong>not</strong> sell or rent your personal information. We may share data with trusted third-party vendors strictly for service delivery purposes, such as cloud storage, payment processors, or analytics providers, under confidentiality agreements.
                            </p>
                            <p>
                                We may also disclose information if required by law, regulation, or legal request by governmental authorities.
                            </p>

                            <h4>Data Security</h4>
                            <p>
                                {{ config('app.name') }} uses a combination of encryption, access controls, and secure communication protocols to protect your information. We conduct periodic security reviews and ensure compliance with best practices to guard against unauthorized access, loss, or alteration of data.
                            </p>

                            <h4>Your Rights and Choices</h4>
                            <p>You have the right to:</p>
                            <ul>
                                <li>Access your data upon request</li>
                                <li>Request correction of inaccurate personal information</li>
                                <li>Request deletion of your data, subject to contractual or legal requirements</li>
                                <li>Withdraw consent for communications or analytics usage</li>
                            </ul>
                                                         <p>
                                 To exercise your rights, please <a href="{{ route('contact') }}">contact us</a>.
                             </p>

                            <h4>Cookies and Tracking</h4>
                            <p>
                                Our website may use cookies to enhance user experience, gather anonymized usage metrics, and support service delivery. You may configure your browser to reject cookies, though some features may be affected.
                            </p>

                            <h4>International Data Transfers</h4>
                            <p>
                                If you are located outside Nigeria, please be aware that your information may be transferred to and processed in Nigeria or other countries where our servers or partners operate. We ensure that adequate safeguards are in place where required.
                            </p>

                            <h4>Policy Updates</h4>
                            <p>
                                We may update this Privacy Policy periodically to reflect legal, regulatory, or technical changes. All updates will be posted on this page.
                            </p>

                            <h4>Contact Us</h4>
                                                         <p>
                                 If you have any questions or concerns regarding this Privacy Policy or your data, please <a href="{{ route('contact') }}">contact us</a>.
                             </p>
                        </div>
                                        
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