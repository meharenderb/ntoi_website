<?= $this->extend("layouts/base_template"); ?>
<?php $uri = new \CodeIgniter\HTTP\URI(current_url()); ?>
<?php $validation = \Config\Services::validation(); ?>
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
                        <h2 class="title">Registration</h2>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registration</li>
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
<div class="section login-register-section section-padding">
    <div class="container">

        <!-- Login & Register Wrapper Start -->
        <div class="login-register-wrap">
            <div class="row gx-5">
                <div class="col-lg-8 m-auto">

                    <!-- Login & Register Box Start -->
                    <div class="login-register-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <?php if (session()->getFlashdata('EXIST')) : ?>
                                <div id="hideAlert" class="col alert alert-danger"><?= session()->getFlashdata('EXIST') ?></div>
                            <?php endif; ?>
                            <div id="successMsg" class="col alert alert-success d-none"></div>
                            <div id="errorMsg" class="col alert alert-success d-none"></div>
                            <h2 class="title">NTOI Registration </h2>
                            <!--<span class="badge bg-danger text-white">1000/- Rupees Registration Fees!</span>-->
                        </div>
                        <!-- Section Title End -->

                        <div class="login-register-form">
                            <?= form_open('register', 'id="regForm"'); ?>
                            <div class="col single-form">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name') ?>">
                                <span class="text-danger small" id="name_error"></span>
                                <!-- Error -->
                                <?php if ($validation->getError('name')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('name'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-4 single-form">
                                    <label>Gender <span class="text-danger">*</span></label>
                                    <select class="form-select selectBox" name="gender" id="gender" value="<?= set_value('gender') ?>">
                                        <option selected disabled value="0">Choose...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    <span class="text-danger small" id="gender_error"></span>
                                </div>
                                <div class="col-sm-12 col-md-4 single-form">
                                    <label>Age <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="age" min="1" max="60" id="age" value="<?= set_value('age') ?>">
                                    <span class="text-danger small" id="age_error"></span>
                                </div>
                                <div class="col-sm-12 col-md-4 single-form">
                                    <label>Date of birth <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="dob" id="dob" value="<?= set_value('dob') ?>">
                                    <span class="text-danger small" id="dob_error"></span>
                                </div>
                                <!-- Error -->
                                <?php if ($validation->getError('gender')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('gender'); ?>
                                    </div>
                                <?php } ?>
                                <?php if ($validation->getError('age')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('age'); ?>
                                    </div>
                                <?php } ?>
                                <?php if ($validation->getError('dob')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('dob'); ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Father Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="father_name" id="father_name" value="<?= set_value('father_name') ?>">
                                <span class="text-danger small" id="fname_error"></span>
                                <?php if ($validation->getError('father_name')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('father_name'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Mother Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="mother_name" id="mother_name" value="<?= set_value('mother_name') ?>">
                                <span class="text-danger small" id="mname_error"></span>
                                <?php if ($validation->getError('mother_name')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('mother_name'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                                <span class="text-danger small" id="email_error"></span>
                                <?php if ($validation->getError('email')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('email'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 single-form">
                                    <label>Mobile No. <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" name="mobile_no" id="mobile_no" value="<?= set_value('mobile_no') ?>">
                                    <span class="text-danger small" id="mobile_error"></span>
                                    <?php if ($validation->getError('mobile_no')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('mobile_no'); ?>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="col-sm-12 col-md-6 single-form">
                                    <label>Whatsapp Mobile No.</label>
                                    <input type="tel" class="form-control" name="alt_mobile" id="alt_mobile" value="<?= set_value('alt_mobile') ?>">
                                    <span class="text-danger small" id="alt_mobile_error"></span>
                                    <?php if ($validation->getError('alt_mobile')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('alt_mobile'); ?>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label class="m-0">Category <span class="text-danger">*</span></label>
                                <div class="single-form form-check form-check-inline">
                                    <input class="form-check-input cate" type="checkbox" id="inlineCheckbox1" value="dancing" name="category[]">
                                    <label class="form-check-label" for="inlineCheckbox1">Dancing</label>
                                </div>
                                <div class="single-form form-check form-check-inline">
                                    <input class="form-check-input cate" type="checkbox" id="inlineCheckbox2" value="modeling" name="category[]">
                                    <label class="form-check-label" for="inlineCheckbox2">Modeling</label>
                                </div>
                                <div class="single-form form-check form-check-inline">
                                    <input class="form-check-input cate" type="checkbox" id="inlineCheckbox3" value="singing" name="category[]">
                                    <label class="form-check-label" for="inlineCheckbox3">Singing</label>
                                </div>
                                <div class="single-form form-check form-check-inline">
                                    <input class="form-check-input cate" type="checkbox" id="inlineCheckbox4" value="rapping" name="category[]">
                                    <label class="form-check-label" for="inlineCheckbox4">Rapping</label>
                                </div>
                                <div class="single-form form-check form-check-inline">
                                    <input class="form-check-input cate" type="checkbox" id="inlineCheckbox5" value="acting" name="category[]">
                                    <label class="form-check-label" for="inlineCheckbox5">Acting</label>
                                </div>
                                <div>
                                    <span class="text-danger small" id="category_error"></span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Qualification <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="qualification" id="qualification" value="<?= set_value('qualification') ?>">
                                <span class="text-danger small" id="qual_error"></span>
                                <?php if ($validation->getError('qualification')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('qualification'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-6 single-form">
                                    <label>State <span class="text-danger">*</span></label>
                                    <select class="selectBox form-select" name="state" id="state" value="<?= set_value('state') ?>">
                                        <option value="">Choose...</option>
                                        <?php foreach ($stateList as  $v) : ?>
                                            <option value="<?= $v['state_title'] ?>"><?= $v['state_title'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <span class="text-danger small" id="state_error"></span>
                                    <?php if ($validation->getError('state')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('state'); ?>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="col-sm-12 col-md-6 single-form">
                                    <label>City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" id="city" value="<?= set_value('city') ?>">
                                    <span class="text-danger small" id="city_error"></span>
                                    <?php if ($validation->getError('city')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('city'); ?>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="col-sm-12 col-md-6 single-form">
                                    <label>Pincode <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" maxLength="6" placeholder="Pincode " name="pincode" id="pincode" value="<?= set_value('pincode') ?>">
                                    <span class="text-danger small" id="pincode_error"></span>
                                    <?php if ($validation->getError('pincode')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('pincode'); ?>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="row" id="hwRow">
                                <div class="col-sm-12 col-md-6 single-form">
                                    <label>Weight <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="weight" id="weight" step=".01" value="<?= set_value('weight') ?>">
                                    <span class="text-danger small" id="weight_error"></span>
                                    <?php if ($validation->getError('weight')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('weight'); ?>
                                    </div>
                                <?php } ?>
                                </div>
                                <div class="col-sm-12 col-md-6 single-form">
                                    <label>Height <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" name="height" id="height" step=".01" value="<?= set_value('height') ?>">
                                    <span class="text-danger small" id="height_error"></span>
                                    <?php if ($validation->getError('height')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('height'); ?>
                                    </div>
                                <?php } ?>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Skills <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="skills" id="skills" value="<?= set_value('skills') ?>">
                                <span class="text-danger small" id="skills_error"></span>
                                <?php if ($validation->getError('skills')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('skills'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Facebook Profile Link <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fbl" id="fbl" value="<?= set_value('fbl') ?>">
                                <span class="text-danger small" id="fbl_error"></span>
                                <?php if ($validation->getError('fbl')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('fbl'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Instagram Profile Link <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="igl" id="igl" value="<?= set_value('igl') ?>">
                                <span class="text-danger small" id="igl_error"></span>
                                <?php if ($validation->getError('igl')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('igl'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Video Link</label>
                                <input type="url" class="form-control" name="links" id="links" value="<?= set_value('links') ?>">
                                <span class="text-danger small" id="links_error"></span>
                                <?php if ($validation->getError('links')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('links'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-sm-12 col-md-12 single-form">
                                <label>Address <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="address" id="address"><?= set_value('address') ?></textarea>
                                <span class="text-danger small" id="address_error"></span>
                                <?php if ($validation->getError('address')) { ?>
                                    <div class='text-danger small mt-2'>
                                        <?= $error = $validation->getError('address'); ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="form-btn">
                                <button class="btn btn-primary regSubmit" type="submit">Register</button>
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