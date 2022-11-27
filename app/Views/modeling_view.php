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
<div class="section modeling-page page-banner-section">
    <div class="shape-2"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Modeling</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modelling</li>
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
    <div class="row mt-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td colspan="2">MODELLING RULES</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>The minimum age limit of the participants should be 17 years.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>All participants should wear natural makeup.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>The minimum height of the participants should be around 5 feet 4 inches(5.4).</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>All female participants must have to walk in heels.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>The participants will arrange their outfits themselves. If there would be any specific theme - it would be comunicated in advance.</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>If the rules are violated, judges has the rights to disqualify the participants</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-5 mb-5">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <td colspan="2">KIDS FASHION RULES</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>The maximum age limit should be 10 years</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>The participants should be accompanied be only one parent/Guardian.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- <div class="row mt-5">
        <table class="table">
            <thead class="table-purple">
                <tr>
                    <td colspan="2">DUET DANCE</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>There will be only two participants in this category.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>The length of the music should not exceed 1 minute 30 seconds.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Each participant must bring his/her own single track in a cd or a pen drive marked with participant name and ready to play.</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Props (if any) have to be managed by participant group. They should not cause any damage to the stage. Use of fire, alcohol, offensive material and dangerous props is prohibited.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Song of any language is permitted.</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>If the rules are violated, Judges has the rights to disqualify the group.</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Judge's results will be final. No arguments will be entertained regarding the same.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row mt-5 mb-5">
        <table class="table">
            <thead class="table-purple">
                <tr>
                    <td colspan="2">GROUP DANCE</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>There should be minimum number of 3 participants. The maximum limit for no. of participants in a group is 10.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>The length of the music should not exceed 1 minutes 30 seconds.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Each participant must bring his/her own single track in a cd or a pen drive marked with participant name and ready to play.</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Props (if any) have to be managed by participant group. They should not cause any damage to the stage. Use of fire, alcohol, offensive material and dangerous props is prohibited.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Song of any language is permitted.</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>If the rules are violated, Judges has the rights to disqualify the group.</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Judge's results will be final. No arguments will be entertained regarding the same.</td>
                </tr>
            </tbody>
        </table>
    </div> -->
</div>

<!-- Dancing Section End -->
<?= $this->endSection(); ?>