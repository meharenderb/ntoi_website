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
                        <h2 class="title">OTP Verification</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Verify OTP</li>
                        </ul>
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
                            <?php if (session()->getFlashdata('success')) : ?>
                                <div id="hideAlert" class="col alert alert-success"><?= session()->getFlashdata('success') ?></div>
                            <?php endif; ?>
                            <?php if (session()->getFlashdata('error')) : ?>
                                <div id="hideAlert" class="col alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                            <?php endif; ?>

                            <div id="successMsg" class="col alert alert-success d-none"></div>
                            <div id="errorMsg" class="col alert alert-success d-none"></div>
                            <?php $session = \Config\Services::session(); ?>
                            <p>An OTP verification code for <?= ($session->get('email')) ? $session->get('email') : '';  ?> is sent to your email. Please enter otp to verify your registration status.</p>
                            <?php print_r($_SESSION); ?>
                        </div>
                        <!-- Section Title End -->

                        <div class="login-register-form">
                            <?= form_open('verify_otp_page', 'id="otpForm"'); ?>

                            <div class="col-md-12 single-form">
                                <label>Enter OTP Code <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="otp" name="otp" maxlength="6">
                                <span class="text-danger" id="otp_error"></span>
                                <span class="text-danger"><?= display_error($validation, 'otp'); ?></span>
                            </div>

                            <div class="col-md-3 form-btn mt-3">
                                <button class="btn btn-success otpSubmit" type="submit" name="otpSubmit">Verify</button>
                            </div>
                            <?= form_close(); ?>
                        </div>
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