<?= $this->extend("layouts/base_template"); ?>
<?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>

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
<div class="section kids-fashion-page page-banner-section">
    <div class="shape-2"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Kids Fashion</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kids Fashion</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

<!-- Dancing Section Start -->
<div class="container">
    <div class="row mt-5 mb-5">
        <table class="table">
            <thead class="table-black">
                <tr>
                    <td colspan="2">KIDS FASHION RULES</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>The maximum age limit of the participant should be 14 years.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>The participant should be accompanied by only one Parent/Guardian.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>The participants will arrange their outfits themselves. If there would be any specific theme it would be communicated in advance to the parent/guardian.</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>If the rules are violated, Judges has the rights to disqualify the participant.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Judge's results will be final. No arguments will be entertained regarding the same.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Dancing Section End -->
<?= $this->endSection(); ?>