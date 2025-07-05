@extends('layout')

@section('title', config('app.name') . ' - Terms and Conditions')

@section('content')
        <!-- page-title -->
        <div class="prt-page-title-row">
            <div class="prt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">Terms and Conditions</h2>
                            </div>
                            <div class="breadcrumb-wrapper-main">
                                <div class="container">
                                    <div class="breadcrumb-wrapper-inner bread-white">
                                        <span>
                                            <a href="{{ route('home') }}" class="home">&nbsp;&nbsp;Home</a>
                                        </span>
                                        <span class="prt-bread-sep">&nbsp; - &nbsp;</span>
                                        <span>Terms and Conditions</span>
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
                            <h2 class="mt-20 mb-10">Terms and Conditions</h2>

                            <p>
                                Welcome to <strong>{{ config('app.name') }}</strong>. These Terms and Conditions govern your access to and use of our Personal Fuel Meter hardware, software applications, analytics services, website, and any associated platforms or support tools.
                            </p>

                            <h4>Acceptance of Terms</h4>
                            <p>
                                By using {{ config('app.name') }}’s products or services, you acknowledge that you have read, understood, and agreed to be legally bound by these Terms and Conditions. If you do not agree, please discontinue use of our services.
                            </p>

                            <h4>Our Services</h4>
                            <p>
                                {{ config('app.name') }} provides a multi-sensor IoT device designed to monitor, record, and analyze fuel quality and quantity. Our ecosystem includes hardware (the fuel meter), software (mobile/web dashboards), real-time notifications, data insights, installation assistance, and ongoing technical support.
                            </p>

                            <h4>User Responsibilities</h4>
                            <p>As a registered user, you agree to:</p>
                            <ul>
                                <li>Provide accurate registration and device ownership details</li>
                                <li>Operate the device only for its intended fuel-monitoring purpose</li>
                                <li>Secure your login credentials and notify us of any unauthorized access</li>
                                <li>Not misuse, tamper with, modify, or reverse engineer the device or software</li>
                                <li>Comply with all applicable fuel safety and data usage laws in your region</li>
                            </ul>

                            <h4>Intellectual Property</h4>
                            <p>
                                All content, designs, firmware, algorithms, branding, and analytics platforms associated with {{ config('app.name') }} are the intellectual property of {{ config('app.name') }} or its partners. No part of our services may be reproduced, republished, or exploited without prior written consent.
                            </p>

                            <h4>Data Usage & Privacy</h4>
                            <p>
                                                                 We collect operational data to enhance service accuracy and provide users with real-time insights and protection against fuel fraud. Please refer to our <a href="{{ route('privacy-policy') }}">Privacy Policy</a> for detailed information on how we collect, use, and protect your data.
                            </p>

                            <h4>Service Reliability</h4>
                            <p>
                                While we strive to provide consistent service availability, you understand that occasional interruptions may occur due to system maintenance, upgrades, or external factors beyond our control. {{ config('app.name') }} is not responsible for any delays in data syncing caused by network failures or third-party services.
                            </p>

                            <h4>Warranty Disclaimer</h4>
                            <p>
                                {{ config('app.name') }} products and services are provided "as is" and "as available." We disclaim all warranties, express or implied, including accuracy, merchantability, and fitness for a particular purpose. We do not guarantee absolute precision in all fuel readings, as environmental or installation factors may influence output.
                            </p>

                            <h4>Limitation of Liability</h4>
                            <p>
                                In no event shall {{ config('app.name') }} or its affiliates be liable for indirect, incidental, or consequential damages arising from use, misuse, or inability to use our device or services — including engine failure, fuel loss, or business disruption.
                            </p>

                            <h4>Indemnification</h4>
                            <p>
                                You agree to indemnify and hold harmless {{ config('app.name') }}, its directors, agents, and affiliates against any claims, damages, or legal actions arising from your violation of these terms, misuse of the product, or breach of legal compliance.
                            </p>

                            <h4>Termination</h4>
                            <p>
                                We reserve the right to suspend or terminate your access to {{ config('app.name') }} services without prior notice if you violate these terms, engage in fraudulent behavior, or misuse the platform. Upon termination, your access to features, data, or analytics may be revoked.
                            </p>

                            <h4>Governing Law</h4>
                            <p>
                                These Terms and Conditions are governed by and interpreted in accordance with the laws of the Federal Republic of Nigeria. Any disputes shall be resolved exclusively in the Nigerian courts.
                            </p>

                            <h4>Modifications</h4>
                            <p>
                                We may update these Terms and Conditions to reflect changes in business practices, regulations, or technology. Updated versions will be published on our website. Continued use of the service implies acceptance of the latest terms.
                            </p>

                                                         <h4>Contact Information</h4>
                             <p>
                                 If you have any questions about these Terms and Conditions, please <a href="{{ route('contact') }}">contact us</a>.
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