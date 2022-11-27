<?php $validation = \Config\Services::validation(); ?>
<?= $this->extend("layouts/base_template"); ?>
<?= $this->section("main"); ?>
<!-- Preloader start -->
<div id="preloader">
    <div class="preloader">
        <span></span>
        <span></span>
    </div>
</div>
<!-- Preloader End -->

<!-- Header Start -->
<?= $this->include('layouts/header_menu'); ?>
<!-- Header End -->

<!-- Page Banner Start -->
<div class="section page-banner-section">
    <div class="shape-2"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Thank You</h2>
                        <!-- <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Verification</li>
                        </ul> -->
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Login & Register Start -->
<div class="section login-register-section otp-section-padding">
    <div class="container">

        <!-- Login & Register Wrapper Start -->
        <div class="login-register-wrap">
            <div class="row gx-5">
                <div class="col-lg-6 m-auto">

                    <!-- Login & Register Box Start -->
                    <div class="login-register-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            

                            <div id="successMsg" class="col alert alert-success d-none"></div>
                            <div id="errorMsg" class="col alert alert-success d-none"></div>
                            <div class="col-md-12 d-flex justify-content-center"><img src="<?= base_url(); ?>/public/assets/images/ntoi/logo_blue.png" alt="Logo" style="max-width: 200px;"></div>
                            <h2 class="thankYouTitle">Thank you! For registering in National Talent of India, Please check your email. A confirmation sent to your email.</h2>
                        </div>
                        <!-- Section Title End -->
                    </div>
                    <!-- Login & Register Box End -->

                </div>
            </div>
        </div>
        <!-- Login & Register Wrapper End -->

    </div>
</div>
<!-- Login & Register End -->
<?= $this->endSection(); ?>