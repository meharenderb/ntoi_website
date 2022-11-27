<?= $this->extend("admin_panel/layouts/base_template"); ?>

<?= $this->section("main"); ?>
<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <?= $this->include('admin_panel/layouts/top_bar'); ?>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="col-md-6">
                <h1 class="h3 mb-0 text-gray-800">Performer Details</h1>
            </div>
            <div class="col-md-3">
                <?= ($data['status'] === 'PENDING') ?
                    'Email Status: <span class="badge bg-warning text-dark mr-1"><i class="fas fa-exclamation-circle"></i> PENDING</span>' :
                    'Email Status:  <span class="badge bg-success text-white mr-1"><i class="fas fa-user-check"></i> VERIFIED</span>'; ?>
            </div>
            <div class="col-md-3" style="display:none;">
                <?= ($data['pstatus'] === 'PENDING') ?
                    'Payment Status: <span class="badge bg-warning text-dark"><i class="fas fa-exclamation-circle"></i> PENDING</span>' :
                    'Payment Status: <span class="badge bg-success text-white"><i class="fas fa-thumbs-up"></i> VERIFIED</span>'; ?>
            </div>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Form details filled by performer</h6>
                <a href="<?= base_url('admin/view-all-performers'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('pay_verified')) : ?>
                    <div id="hideAlert" class="col-md-8 alert alert-success"><i class="fas fa-check-circle"></i> <?= session()->getFlashdata('pay_verified') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('pay_already')) : ?>
                    <div id="hideAlert" class="col-md-4 alert alert-primary"><i class="fas fa-check-circle"></i> <?= session()->getFlashdata('pay_already') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('EMAIL_NOT_VERIFY')) : ?>
                    <div id="hideAlert" class="col-md-4 alert alert-danger"><i class="fas fa-times-circle"></i> <?= session()->getFlashdata('EMAIL_NOT_VERIFY') ?></div>
                <?php endif; ?>
                <?php //form_open("admin/performer/confirm-payment/" . $data['id']); 
                ?>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" value="<?= $data['name'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="<?= $data['email'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Gender</label>
                        <input type="text" class="form-control" value="<?= $data['gender'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Father Name</label>
                        <input type="text" class="form-control" value="<?= $data['father_name'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Mother Name</label>
                        <input type="text" class="form-control" value="<?= $data['mother_name'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Date of birth</label>
                        <input type="text" class="form-control" value="<?= $data['dob'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" value="<?= $data['age'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Mobile</label>
                        <input type="text" class="form-control" value="<?= $data['mobile_no'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Alt Mobile</label>
                        <input type="text" class="form-control" value="<?= $data['alt_mobile_no'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Category</label>
                        <input type="text" class="form-control" value="<?= $data['category'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Qualification</label>
                        <input type="text" class="form-control" value="<?= $data['qualification'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control" value="<?= $data['state'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" value="<?= $data['city'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="text" class="form-control" value="<?= $data['pincode'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Weight</label>
                        <input type="text" class="form-control" value="<?= $data['weight'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Height</label>
                        <input type="text" class="form-control" value="<?= $data['height'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Skills</label>
                        <input type="text" class="form-control" value="<?= $data['skills'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" value="<?= $data['facebook'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" value="<?= $data['instagram'] ?>" disabled>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Links</label>
                        <input type="text" class="form-control" value="<?= $data['links'] ?>" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Address</label>
                        <textarea type="text" class="form-control" disabled><?= $data['address'] ?></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Created at</label>
                        <input type="text" class="form-control" value="<?= date("F j, Y, g:i a", strtotime($data['timestamp'])); ?>" disabled>
                    </div>
                </div>
                <?php if ($data['status'] === 'PENDING') : ?>
                    <div class="d-flex justify-content-end align-items-center mb-3">
                        <label class="form-label mr-3">If they didn't get any email then click here to verify</label>
                        <a href="#" data-toggle="modal" data-target="#emailverifiedModal" class="btn btn-primary"><i class="fas fa-user-check"></i> Verify Email</a>
                    </div>
                <?php endif; ?>
                <?php /*if ($data['pstatus'] === 'PENDING') :*/ ?>
                <?php if ($data['pstatus'] != 'PENDING') : ?>
                    <div class="d-flex justify-content-end align-items-center mb-3">
                        <label class="form-label mr-3">Click here if payment received by participant...</label>
                        <a href="#" data-toggle="modal" data-target="#payverifiedModal" class="btn btn-success"><i class="fas fa-rupee-sign"></i> Payment Recieved?</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Payment Verification Modal-->
    <div class="modal fade" id="payverifiedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you really want to confirm this payment?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="password">Admin Password!</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div> -->
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="<?= base_url('admin/performer/confirm-payment/' . $data['id']); ?>"><i class="fas fa-rupee-sign"></i> Verified</a>
                </div>
            </div>
        </div>
    </div>

        <!-- Email Verification Modal-->
        <div class="modal fade" id="emailverifiedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Do you really want to confirm this email?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="password">Admin Password!</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                </div> -->
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('admin/performer/email-verification/' . $data['id']); ?>"><i class="fas fa-user-check"></i> Verify Email</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End of Main Content -->

<?= $this->endSection("main"); ?>
<script>
    $('#viewPerformer').on('click', function() {
        $.ajax({
            url: "http://localhost/ntoi/register",
            type: "POST",
            data: new FormData(document.getElementById("regForm")),
            cache: false,
            processData: false,
            contentType: false,
            success: (res) => {
                const response = JSON.parse(res);
                if (response.status == "SUCCESS") {
                    $("#regForm").trigger("reset");
                    $(".regSubmit").attr("disabled", false);

                    $("#successMsg").removeClass("d-none");
                    $("#successMsg").html(response.message);
                    setTimeout(function() {
                        $("#successMsg").hide();
                    }, 8000)
                } else {
                    // location.reload();
                    $("#regForm").trigger("reset");
                    $(".regSubmit").attr("disabled", false);

                    $("#errorMsg").removeClass("d-none");
                    $("#errorMsg").html(response.message);
                    setTimeout(function() {
                        $("#errorMsg").hide();
                    }, 8000)
                }
            },
            error: () => {
                $("#regForm").trigger("reset");
                $(".regSubmit").attr("disabled", false);

                $("#errorMsg").removeClass("d-none");
                $("#errorMsg").html("Sorry! Something went wrong.");
                setTimeout(function() {
                    $("#errorMsg").hide();
                }, 8000)
            },
        });
    });
</script>