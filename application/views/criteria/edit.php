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
                                        <a href="<?php echo base_url('criteria') ?>">Criteria</a> 
                                        <b>></b> 
                                        <span>Edit Criteria</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('criteria/update/'); echo $criteria->id; ?>">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Criteria Code</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="criteria_code" value="<?php echo $criteria->criteria_code ?>" placeholder="Enter code" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Criteria Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" name="criteria_description" ><?php echo $criteria->criteria_description; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Criteria Type</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="criteria_type" required="">
                                                        <option value="<?php echo $criteria->criteria_type; ?>"><?php echo $criteria->criteria_type == "benefit" ? "Benefit" : "Cost" ?></option>
                                                        <?php if ($criteria->criteria_type == "benefit") {?>
                                                            <option value="cost">Cost</option>
                                                        <?php }else{ ?>
                                                            <option value="benefit">Benefit</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status" required="">
                                                        <option value="<?php echo $criteria->status; ?>"><?php echo $criteria->status == 1 ? "Active" : "Inactive" ?></option>
                                                        <?php if ($criteria->status == 1) {?>
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
                                                    <a href="<?php echo base_url('criteria') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Cancel</button></a>
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