<?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<div class="meeta-header-section meeta-header-2">

    <!-- Header Middle Start -->
    <div class="header-middle header-sticky">
        <div class="container">

            <div class="header-wrap">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/public/assets/images/ntoi/logo_original.png" alt="Logo" style="max-width: 176px;"></a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Navigation Start -->
                <div class="header-navigation d-none d-lg-block">
                    <ul class="main-menu">
                        <li class="<?= ($uri->getSegment(1) == '') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="#">Categories</a>
                            <ul class="sub-menu">
                                <li class="<?= ($uri->getSegment(1) == 'Dancing-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Dancing-Category">Dancing</a></li>
                                <li class="<?= ($uri->getSegment(1) == 'Singing-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Singing-Category">Singing</a></li>
                                <li class="<?= ($uri->getSegment(1) == 'Modelling-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Modelling-Category">Modelling</a></li>
                                <li class="<?= ($uri->getSegment(1) == 'Acting-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Acting-Category">Acting</a></li>
                            </ul>
                        </li>
                        <li class="<?= ($uri->getSegment(1) == 'About-Show') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/About-Show">About</a></li>

                        <!-- <li class="<?= ($uri->getSegment(1) == 'Prizes-and-offers') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Prizes-and-offers">Prizes & Offers</a></li> -->

                        <!-- <li><a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog Grid</a></li>
                            <li><a href="blog-standard.html">Latest News</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li> -->
                        <!-- <li><a href="#">Contact</a></li> -->
                    </ul>
                </div>
                <!-- Header Navigation End -->

                <!-- Header Meta Start -->
                <div class="header-meta">

                    <div class="header-btn d-none d-md-block">
                        <a href="<?= base_url(); ?>/registration" class="btn btn-primary">Registration</a>
                    </div>

                    <!-- Header Toggle Start -->
                    <div class="header-toggle d-lg-none">
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Header Toggle End -->

                </div>
                <!-- Header Meta End -->

            </div>

        </div>
    </div>
    <!-- Header Middle End -->

</div>

<!-- Offcanvas Start-->
<div class="offcanvas offcanvas-start" id="offcanvasExample">
    <div class="offcanvas-header">
        <!-- Offcanvas Logo Start -->
        <div class="offcanvas-logo">
            <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/public/assets/images/ntoi/logo_web.png" alt=""></a>
        </div>
        <!-- Offcanvas Logo End -->
        <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
    </div>

    <!-- Offcanvas Body Start -->
    <div class="offcanvas-body">
        <div class="offcanvas-menu offcanvas-menu-2">
            <ul class="main-menu">
                <li class="active-menu"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="<?= ($uri->getSegment(1) == 'registration') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/registration">Registration</a></li>
                <li class="<?= ($uri->getSegment(1) == 'About-Show') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/About-Show">About</a></li>
                <li class="<?= ($uri->getSegment(1) == 'Dancing-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Dancing-Category">Dancing</a></li>
                <li class="<?= ($uri->getSegment(1) == 'Singing-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Singing-Category">Singing</a></li>
                <li class="<?= ($uri->getSegment(1) == 'Modelling-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Modelling-Category">Modelling</a></li>
                <li class="<?= ($uri->getSegment(1) == 'Acting-Category') ? 'active-menu' : '' ?>"><a href="<?= base_url(); ?>/Acting-Category">Acting</a></li>
                <!-- <li><a href="#">Contact</a></li> -->
            </ul>
        </div>
    </div>
    <!-- Offcanvas Body End -->
</div>
<!-- Offcanvas End -->