        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php $this->load->view('components/sidebar'); ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h6 class="mb-sm-0">
                                        <a href="<?php echo base_url('my-scale') ?>">My Scale</a> 
                                        <b>></b> 
                                        <span>Edit My Scale</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('my-scale/update/'); echo $scale->id; ?>">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Criteria</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="criteria_code" value="<?php echo $scale->criteria_code ." - ". $scale->criteria_description; ?>" placeholder="Enter code" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Importance Scale</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="importance_scale" required="">
                                                        <option value="<?php echo $scale->importance_scale; ?>">
                                                            <?php if ($scale->importance_scale == 1) {
                                                                echo "Sangat Tidak Penting";
                                                            }elseif ($scale->importance_scale == 2) {
                                                                echo "Tidak Penting";
                                                            }elseif ($scale->importance_scale == 3) {
                                                                echo "Cukup Penting";
                                                            }elseif ($scale->importance_scale == 4) {
                                                                echo "Penting";
                                                            }elseif ($scale->importance_scale == 5) {
                                                                echo "Sangat Penting";
                                                            } ?>                                                            
                                                        </option>
                                                        <option value="5">Sangat Penting</option>
                                                        <option value="4">Penting</option>
                                                        <option value="3">Cukup Penting</option>
                                                        <option value="2">Tidak Penting</option>
                                                        <option value="1">Sangat Tidak Penting</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status" required="">
                                                        <option value="<?php echo $scale->status; ?>"><?php echo $scale->status == 1 ? "Active" : "Inactive" ?></option>
                                                        <?php if ($scale->status == 1) {?>
                                                            <option value="0">Inactive</option>
                                                        <?php }else{ ?>
                                                            <option value="1">Active</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                    <a href="<?php echo base_url('my-scale') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
                                                </div>
                                            </div>

                                            
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->