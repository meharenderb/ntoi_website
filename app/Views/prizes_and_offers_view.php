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
<div class="section prizes-page page-banner-section">
    <div class="shape-2"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Prizes & Offers</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Prizes-Offers</li>
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
            <thead class="table-skyblue">
                <tr>
                    <td colspan="2">PRIZES & OFFERS (BENEFITS FOR PARTICIPANTS)</td>
                </tr>
            </thead>
            <tbody>
                <tr>
<td>1.</td>
<td>Cash Prize, Trophy & Certificate.</td>
</tr>
<tr>
<td>2.</td>
<td>All the winners will ne promoted all across the country through newspaper & social media.</td>
</tr>
<tr>
<td>3.</td>
<td>The winners will be given a special chance to perform in professional cover music & dance video.</td>
</tr>
<tr>
<td>4.</td>
<td>Winners will also get the chance of judgement in our upcoming shows.</td>
</tr>
<tr>
<td>5.</td>
<td>All Semi -Finalist will get opportunity to work in various projects of NTOI.</td>
</tr>
<tr>
<td>6.</td>
<td>Female models will be given several opportunities to work in clothing brand and jewellery advertisements.</td>
</tr>
<tr>
<td>7.</td>
<td>Male models and kids models will get opportunities to work in clothing brands advertisements.</td>
</tr>
<tr>
<td>8.</td>
<td>NTOI shall provide makeup facility to all the contestants.</td>
</tr>
<tr>
<td>9.</td>
<td>NTOI shall provide fooding facility to all the contestants.</td>
</tr>
<tr>
<td>10.</td>
<td>After selection you will be legally permitted to use NTOI logo under your profile</td>
</tr>
<tr>
<td>11.</td>
<td>After selection NTOI will provide a good portfolio and interview</td>
</tr>

            </tbody>
        </table>
    </div>
</div>

<!-- Dancing Section End -->
<?= $this->endSection(); ?>