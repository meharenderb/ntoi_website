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
                <h1 class="h3 mb-0 text-gray-800">Add User</h1>
            </div>
        </div>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Add user for admin portal</h6>
                <a href="<?= base_url('admin/all-users'); ?>" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('pay_verified')) : ?>
                    <div id="hideAlert" class="col-md-8 alert alert-success"><i class="fas fa-check-circle"></i> <?= session()->getFlashdata('pay_verified') ?></div>
                <?php endif; ?>
                <?php if (session()->getFlashdata('pay_already')) : ?>
                    <div id="hideAlert" class="col-md-4 alert alert-primary"><i class="fas fa-check-circle"></i> <?= session()->getFlashdata('pay_already') ?></div>
                <?php endif; ?>
                <?= form_open('admin/add-user'); ?>
                <div class="row">
                    <!-- <div class="col-md-4 mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?= set_value('username'); ?>">
                        <span class="text-danger"><?//= display_error($validation, "username"); ?></span>
                    </div> -->
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= set_value('email'); ?>">
                        <span class="text-danger"><?= display_error($validation, "email"); ?></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" id="" class="form-control form-select" value="<?= set_value('category'); ?>">
                            <option value="">User Category</option>
                            <option value="OWNER">Owner</option>
                            <option value="MANAGER">Manager</option>
                        </select>
                        <span class="text-danger"><?= display_error($validation, "category"); ?></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" id="" class="form-control form-select" value="<?= set_value('status'); ?>">
                            <option value="">Choose status</option>
                            <option value="ACTIVE">Active</option>
                            <option value="INACTIVE">InActive</option>
                        </select>
                        <span class="text-danger"><?= display_error($validation, "status"); ?></span>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-md-4 mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass">
                        <span class="text-danger"><?//= display_error($validation, "pass"); ?></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpass">
                        <span class="text-danger"><?//= display_error($validation, "cpass"); ?></span>
                    </div> -->
                    
                </div>
                <button class="btn btn-success" name="add" type="submit"><i class="fas fa-user-circle"></i> Add User</button>
                <?= form_close(); ?>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

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