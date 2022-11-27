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
                <h1 class="h3 mb-0 text-gray-800">View All Performers</h1>
                <a href="<?= base_url('/export-excel'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Performers</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= (isset($total) || $total != '') ? $total : '-'; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Male (Counts)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= (isset($male) || $male != '') ? $male : '-'; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-male fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Female (Counts)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= (isset($female) || $female != '') ? $female : '-'; ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-female fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

                <!-- Pending Requests Card Example -->
                <!-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pending Requests</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>

            <!-- Content Row -->

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Performers List</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="table-primary">
                                <tr>
                                    <th>Sr.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile 1</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>EStatus</th>
                                    <!--<th>PStatus</th>-->
                                    <th style="width: 65px;">Action</th>
                                </tr>
                            </thead>
                            <!-- <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </tfoot> -->
                            <tbody>
                                <?php $sno = 1; ?>
                                <?php foreach ($data as $value) : ?>
                                    <tr>
                                        <td><?= $sno++; ?></td>
                                        <td><?= $value['name']; ?></td>
                                        <td><?= $value['email']; ?></td>
                                        <td><?= $value['mobile_no']; ?></td>
                                        <td><?= $value['state']; ?></td>
                                        <td><?= $value['city']; ?></td>
                                        <td><?= ($value['status'] === 'PENDING') ?
                                                '<span class="badge bg-warning text-dark"><i class="fas fa-exclamation-circle"></i> PENDING</span>' :
                                                '<span class="badge bg-success text-white"><i class="fas fa-user-check"></i> VERIFIED</span>'; ?></td>
                                        <!--<td><?/*= ($value['pstatus'] === 'PENDING') ?
                                                '<span class="badge bg-warning text-dark"><i class="fas fa-exclamation-circle"></i> PENDING</span>' :
                                                '<span class="badge bg-success text-white"><i class="fas fa-thumbs-up"></i> VERIFIED</span>';*/ ?></td>-->
                                        <td>
                                            <div class="row d-flex justify-content-center">
                                                <a href="<?= base_url().'/admin/performer/'.$value['id'].''; ?>" class="btn btn-primary btn-circle btn-sm ml-1 mr-1">
                                                    <i class="fas fa-eye"></i></a>
                                                <!-- <a href="#" class="btn btn-success btn-circle btn-sm mr-1">
                                                    <i class="fas fa-rupee-sign"></i></a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm mr-1">
                                                    <i class="fas fa-at"></i></a> -->
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
        <!-- View Performer Details -->
        <div class="modal fade" id="viewPerformerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Performer Details</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <!-- <a class="btn btn-primary" href="login.html">Logout</a> -->
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection("main"); ?>
<script>
    $('#viewPerformer').on('click',function(){
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
                    setTimeout(function(){
                        $("#successMsg").hide();
                    },8000)                
                } else {
                    // location.reload();
                    $("#regForm").trigger("reset");
                    $(".regSubmit").attr("disabled", false);
                    
                    $("#errorMsg").removeClass("d-none");
                    $("#errorMsg").html(response.message);
                    setTimeout(function(){
                        $("#errorMsg").hide();
                    },8000)
                }
            },
            error: () => {
                $("#regForm").trigger("reset");
                $(".regSubmit").attr("disabled", false);
                
                $("#errorMsg").removeClass("d-none");
                $("#errorMsg").html("Sorry! Something went wrong.");
                setTimeout(function(){
                    $("#errorMsg").hide();
                },8000)
            },
        });
    });
</script>