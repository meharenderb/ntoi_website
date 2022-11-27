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
<div class="section dancing-page page-banner-section">
    <div class="shape-2"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">Dancing</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dancing</li>
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
                    <td colspan="2">DANCING RULES</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>The length of the music should not exceed 1minute 30 seconds</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Each participants must bring his/her own single instrumental track in a pen drive or in mobile phone marked with participants name and ready to play.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Props (if any) have to be managed by participants itself. They should not cause any damage to the stage. Use of fire, alcohol, offensive material and dangerous props is prohibited.</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Song of any language is permitted.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>If rules are violated, judges has the rights to disqualify the participant.</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Judge's result will be final. No arguments will be entertained regarding the same.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- <div class="row mt-5">
        <table class="table">
            <thead class="table-purple">
                <tr>
                    <td colspan="2">SOLO DANCE</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>The length of the music should not exceed 1 minute 30 seconds.</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Each participant must bring his/her own single track in a cd or a pen drive marked with participant name and ready to play.</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Props (if any) have to be managed by participant itself. They should not cause any damage to the stage. Use of fire, alcohol, offensive material and dangerous props is prohibited.</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>There will be two performances in TV studio Round. One performance is according to participant's choice and for second performance, a song list will be provided by the company. Participants have to prepare their performance by choosing one song from that list.</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>If the rules are violated, Judges has the rights to disqualify the participant.</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Judge's results will be final. No arguments will be entertained regarding the same.</td>
                </tr>
            </tbody>
        </table>
    </div> -->
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
    </div> -->
    <!-- <div class="row mt-5 mb-5">
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