<?= $this->extend("layouts/base_template"); ?>
<?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>

<?= $this->section("main"); ?>
<div class="main-wrapper">

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

    <!-- Hero Section Start  -->
    <div class="meeta-hero-section-4 d-flex align-items-center" style="background-image: url(<?= base_url(); ?>/public/assets/images/ntoi/hero-main.jpg);">
        <div class="shape">
            <img src="<?= base_url(); ?>/public/assets/images/shape/hero-4-shape.png" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <div class="hero-date" data-aos-delay="700" data-aos="fade-up">
                            <!--<h3 class="date">₹ 3 Lakh</h3>-->
                            <!-- <span class="year">Winner <br> Prize</span> -->
                        </div>
                        <!--<span class="place" data-aos-delay="800" data-aos="fade-up">Winner Prize!</span>-->
                        <h2 class="title" data-aos-delay="900" data-aos="fade-up">National Talent of India</h2>
                        <div class="header-btn d-md-block mt-3">
                        <a href="<?= base_url(); ?>/registration" class="btn btn-primary" style="border-radius: 30px;">Registration</a>
                    </div>
                    </div>
                    <!-- Hero Content End -->
                </div>

            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- Register & Countdown Section Start -->

    <!-- Register & Countdown Section End -->

    <!-- About Section Start -->
    <div class="meeta-about-section-4 section-padding">
        <img class="shape-1" src="<?= base_url(); ?>/public/assets/images/shape/counter-shape-2.png" alt="">
        <img class="shape-2" src="<?= base_url(); ?>/public/assets/images/shape/hero-sahpe-1.png" alt="">
        <img class="shape-3" src="<?= base_url(); ?>/public/assets/images/shape/ab-shape-4.png" alt="">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">

                    <!-- About Images Start -->
                    <div class="meeta-about-counter-wrap">
                        <!-- <div class="single-about-counter text-center">
                            <span class="value">1<sup>st</sup></span>
                            <p class="text">Audition Round</p>
                        </div>
                        <div class="single-about-counter text-center">
                            <span class="value">3<sup>rd</sup></span>
                            <p class="text">Finales & Public Support Round</p>
                        </div>
                        <div class="single-about-counter text-center">
                            <span class="value">2<sup>nd</sup></span>
                            <p class="text">Technical & Studio Round</p>
                        </div> -->
                        <div class="speaker-image">
                            <a href="<?= base_url(); ?>/Dancing-Category"><img src="<?= base_url(); ?>/public/assets/images/ntoi/about_us.png" alt="about-us"></a>
                        </div>
                    </div>
                    <!-- About Images End -->

                </div>
                <div class="col-lg-6">
                    <div class="meeta-about-content-wrap">
                        <!-- Section Title Start -->
                        <div class="meeta-section-title-2 section-title-4">
                            <h2 class="main-title"><strong>ABOUT US</strong> </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content Start -->
                        <div class="meeta-about-content-4">

                            <p>SOD State of dance is a well known event in India which is organizing different types of dancing shows from many years. After the successfull completion of our previous season in( 2019 )in this new year we are back with our next season named as NATIONAL TALENT OF INDIA (NTOI) in which you're getting new opportunities like modelling, dancing, singing & acting.</p>
                            <P>Audition will be held all over India. We will find out the talent from the corners of India to show the hidden talent in front of our audience. NTOI is the doorway through which the best hidden talent of our country will reach each and every house.</P>
                            <a href="<?= base_url('/About-Show'); ?>" class="btn btn-dark mt-2">Read More...</a>
                            <div class="about-list">
                                <ul>
                                    <li class="about-list-item">
                                        <div class="about-icon">
                                            <img src="<?= base_url(); ?>/public/assets/images/ntoi/call_us.png" alt="">
                                        </div>
                                        <div class="about-text">
                                            <h3 class="title">Call us at</h3>
                                            <p class="m-0">7078150405 </p>
                                        </div>
                                    </li>
                                    <li class="about-list-item">
                                        <div class="about-icon">
                                            <img src="<?= base_url(); ?>/public/assets/images/ntoi/email_us.png" alt="">
                                        </div>
                                        <div class="about-text">
                                            <h3 class="title">Email us @</h3>
                                            <p class="m-0">ntofindia@gmail.com </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- About Content End -->
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- About Section End -->

    <!-- Video Start -->
    <div class="meeta-video-section-2">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <!-- Section Title Start -->
                    <video class="home_vid" loop autoplay muted>
                        <source src="<?= base_url('/public/assets/images/ntoi/NTOI_2023_Promo.mp4'); ?>" type="video/mp4">
                        <!-- <source src="movie.ogg" type="video/ogg"> -->
                        Your browser does not support the video tag.
                    </video>
                    <!-- <div class="meeta-section-title-2 section-title-4">
                            <h2 class="main-title">Make the event great</h2>
                        </div> -->
                    <!-- Section Title End -->
                    <!-- <a class="popup-video" href="<? //base_url('/public/assets/images/ntoi/NTOI_2023_Promo.mp4'); 
                                                        ?>"><i class="fas fa-play"></i></a> -->
                </div>
            </div>
        </div>

    </div>
    <!-- Video End -->

    <!-- Speakers Start -->
    <div class="meeta-speakers-4 section-padding">
        <div class="meeta-speakers-wrap">
            <!-- Section Title Start -->
            <div class="meeta-section-title-2 section-title-4 text-center">
                <h4 class="sub-title">NTOI 2023</h4>
                <h2 class="main-title text-white">Categories</h2>
            </div>
            <!-- Section Title End -->
            <div class="meeta-speakers-content-wrap-4">
                <div class="row g-0">

                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Speakers Start -->
                        <div class="single-speaker-4 text-center">
                            <div class="speaker-image">
                                <a href="<?= base_url(); ?>/Dancing-Category"><img src="<?= base_url(); ?>/public/assets/images/ntoi/front-page-thumb/dancing_thumb1.jpg" alt="Dance Category"></a>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name"><a href="<?= base_url(); ?>/Dancing-Category">Dancing Category</a></h4>
                                <p class="speaker-designation">NTOI 2023</p>
                            </div>
                        </div>
                        <!-- Single Speakers End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Speakers Start -->
                        <div class="single-speaker-4 grey-bg text-center">
                            <div class="speaker-image">
                                <a href="<?= base_url(); ?>/Modelling-Category"><img src="<?= base_url(); ?>/public/assets/images/ntoi/front-page-thumb/modelling_thumb1.jpg" alt="Modelling"></a>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name"><a href="<?= base_url(); ?>/Modelling-Category">Modelling Category</a></h4>
                                <p class="speaker-designation">NTOI 2023</p>
                            </div>
                        </div>
                        <!-- Single Speakers End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Speakers Start -->
                        <div class="single-speaker-4 text-center">
                            <div class="speaker-image">
                                <a href="<?= base_url(); ?>/Singing-Category"><img src="<?= base_url(); ?>/public/assets/images/ntoi/front-page-thumb/singing_thumb.jpg" alt="Singing"></a>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name"><a href="<?= base_url(); ?>/Singing-Category">Singing Category</a></h4>
                                <p class="speaker-designation">NTOI 2023</p>
                            </div>
                        </div>
                        <!-- Single Speakers End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Single Speakers Start -->
                        <div class="single-speaker-4 grey-bg text-center">
                            <div class="speaker-image">
                                <a href="<?= base_url(); ?>/Acting-Category"><img src="<?= base_url(); ?>/public/assets/images/ntoi/front-page-thumb/acting_thumb.jpg" alt="Kids Fashion"></a>
                            </div>
                            <div class="speaker-content">
                                <h4 class="speaker-name"><a href="<?= base_url(); ?>/Acting-Category">Acting Category</a></h4>
                                <p class="speaker-designation">NTOI 2023</p>
                            </div>
                        </div>
                        <!-- Single Speakers End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Speakers End -->

    <!-- Pricing Start -->
    <div class="meeta-pricing meeta-pricing-2 section-padding">

        <div class="container">

            <!-- Section Title Start -->
            <div class="meeta-section-title-2 text-center">
                <h4 class="sub-title">NTOI 2023</h4>
                <h2 class="main-title text-white">3 Rounds of NTOI</h2>
            </div>
            <!-- Section Title End -->

            <div class="row gy-5 justify-content-center meeta-pricing-row">
                <div class="col-lg-4 col-md-8">

                    <!-- Single Pricing Start -->
                    <div class="single-pricing">
                        <div class="pricing-header">
                            <h3 class="price_title">Audition</h3>
                            <div class="price">
                                <span>1<sup>st</sup></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Pricing End -->

                </div>
                <div class="col-lg-4 col-md-8">

                    <!-- Single Pricing Start -->
                    <div class="single-pricing active">
                        <div class="pricing-header">
                            <h3 class="price_title">Technical & Studio</h3>
                            <div class="price">
                                <span>2<sup>nd</sup></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Pricing End -->

                </div>
                <div class="col-lg-4 col-md-8">

                    <!-- Single Pricing Start -->
                    <div class="single-pricing">
                        <div class="pricing-header">
                            <h3 class="price_title">Public Support/Finales</h3>
                            <div class="price">
                                <span>3<sup>rd</sup></span>
                            </div>
                        </div>
                    </div>
                    <!-- Single Pricing End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

    <!-- Event Sponsors Start -->
    <div class="meeta-event-sponsors-4 mt-5 mb-5">
        <div class="container">
            <!-- Sponsor Start -->
            <div class="meeta-sponsor-wrap">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-1">

                            <div class="meeta-sponsor-logo sponsor-logo-1">
                                <!-- <a href="#"><img src="<?= base_url(); ?>/public/assets/images/sponsors-5.png" alt=""></a> -->
                            </div>
                            <!-- <div class="meeta-sponsor-logo sponsor-logo-2">
                                <a href="#"><img src="<?= base_url(); ?>/public/assets/images/sponsors-9.png" alt=""></a>
                            </div> -->

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-2">

                            <div class="meeta-sponsor-logo sponsor-logo-3">
                                <a href="<?= base_url(); ?>/Prizes-and-offers"><img src="<?= base_url(); ?>/public/assets/images/ntoi/benefits_of_winner.jpg" alt=""></a>
                            </div>
                            <!-- <div class="meeta-sponsor-logo sponsor-logo-4">
                                <a href="#"><img src="<?= base_url(); ?>/public/assets/images/sponsors-11.png" alt=""></a>
                            </div> -->

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-3">

                            <div class="meeta-sponsor-logo sponsor-logo-5">
                                <a href="<?= base_url(); ?>/Terms-and-conditions"><img src="<?= base_url(); ?>/public/assets/images/ntoi/t&c.jpg" alt=""></a>
                            </div>
                            <!-- <div class="meeta-sponsor-logo sponsor-logo-6">
                                <a href="#"><img src="<?= base_url(); ?>/public/assets/images/sponsors-10.png" alt=""></a>
                            </div> -->

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <!-- Sponsor Box Start -->
                        <div class="meeta-sponsor-item-box sponsor-box-4">
                            <div class="meeta-sponsor-logo sponsor-logo-7">
                                <!-- <a href="#"><img src="<?= base_url(); ?>/public/assets/images/sponsors-8.png" alt=""></a> -->
                            </div>
                            <!-- <div class="meeta-sponsor-logo sponsor-logo-8">
                                <a href="#"><img src="<?= base_url(); ?>/public/assets/images/sponsors-12.png" alt=""></a>
                            </div> -->

                        </div>
                        <!-- Sponsor Box End -->
                    </div>
                </div>
            </div>
            <!-- Sponsor End -->

        </div>
    </div>
    <!-- Event Sponsors End -->

</div>
<?= $this->endSection(); ?>