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
                        <h2 class="title">Terms & Conditions</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">T&C</li>
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
            <thead class="table-dark">
                <tr>
                    <td colspan="2">TERMS & CONDITIONS</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Entry forms complete in all respect only shall be consider for the contest.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Parents are not allowed to come inside the hall during audition.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Any heavy props or the one which includes water, sand, fire are not allowed to use on the set of TV studio round</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Company will not provide travel expenses and stay facility to any contestant.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>You have to self arrange your dresses for the performance.</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Duration of your performance should not exceed 1:30 minutes.</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Photography/ videography is strictly prohibited inside the studio</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>If we will not satisfy with the video shoot id the participant then we can shoot again</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>If the company find any undisciplined or misbehave from any candidate, so management have the rights to disqualify the candidates from the contest.</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Company will not be responsinle for the loss of any valuable cash.</td>
                </tr>
                <tr>
                    <td>11.</td>
                    <td>The decision of judges will be final, no arguments and suggestions will be entertained.</td>
                </tr>
                <tr>
                    <td>12.</td>
                    <td>Any deliberate damage/loss caused to the company's property will be recovered from the candidate.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Dancing Section End -->
<?= $this->endSection(); ?>