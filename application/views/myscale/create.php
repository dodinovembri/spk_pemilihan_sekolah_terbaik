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
                                        <a href="<?php echo base_url('my_scale') ?>">My Scale</a> 
                                        <b>></b> 
                                        <span>Create My Scale</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('my_scale/store') ?>">
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Criteria</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="criteria" required="">
                                                        <option value="">Select</option>
                                                        <?php foreach ($criteria as $key => $value) { ?>
                                                            <option value="<?php echo $value->id; ?>"><?php echo $value->criteria_code ." - ". $value->criteria_description; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Importance Scale</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="importance_scale" required="">
                                                        <option value="">Select</option>
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
                                                        <option value="">Select</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                    <a href="<?php echo base_url('my_scale') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
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