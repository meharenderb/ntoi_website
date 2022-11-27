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
<div class="section about-page page-banner-section">
    <div class="shape-2"></div>
    <div class="container">
        <div class="page-banner-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Banner Content Start -->
                    <div class="page-banner text-center">
                        <h2 class="title">About Show</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Show</li>
                        </ul>
                    </div>
                    <!-- Page Banner Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner End -->

        <!-- About Section Start -->
        <div class="meeta-about-section section-padding" style="background: #000">
            <div class="container">

                <div class="row gy-5 align-items-center">
                    <div class="col-lg-7">

                        <!-- About Images Start -->
                        <div class="meeta-about-images" style="background-image: url(<?= base_url(); ?>/public/assets/images/shape/shape-4.png);">
                            <div class="image">
                                <img src="<?= base_url(); ?>/public/assets/images/ntoi/about-page/about_side2.png" alt="About">
                            </div>
                        </div>
                        <!-- About Images End -->

                    </div>
                    <div class="col-lg-5">

                        <!-- Section Title Start -->
                        <div class="meeta-section-title-2 meeta-about-title">
                            <h4 class="sub-title">About the show</h4>
                            <h3 class="main-title">National Talent<br> of India</h3>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content Start -->
                        <div class="meeta-about-content">

                            <p class="text-light">NATIONAL TALENT OF INDIA (NTOI 2023) is a talent show that features model's, singer(rapper), dancer, actor's whether they are kids or performer of any age there's no age limit. This show portrays a huge variety of talent with a new set of aspiring performers looking to compete for the Cash Prize, Trophy & Certificate. Auditions will be held all over India. We will find out the talent from the corners of India to show the hidden talent in front of our audience .This show promises to deliver some of the wildest acts to ever the "NTOI" stage.</p>
                            <p class="text-light">The reality show trend have been in the market for a long time. Each one having their own method of selecting the talent, exploring the potential by giving opportunities with different task and then finally selecting the best. Decades after, still every reality show continues to follow the same process. And nowhere the finalists gets a real life changing experience.</p>

                        </div>
                        <!-- About Content End -->

                    </div>
                </div>

            </div>
        </div>
        <!-- About Section End -->
<?= $this->endSection(); ?>