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
                                        <a href="<?php echo base_url('alternative') ?>">Alternative</a> 
                                        <b>></b> 
                                        <span>Show Alternative</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Alternative Code</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="alternative_code" value="<?php echo $alternative->alternative_code ?>" placeholder="Enter alternative code" readonly="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Alternative Name</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="alternative_name" value="<?php echo $alternative->alternative_name ?>" placeholder="Enter alternative name" readonly="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Address</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" name="address" placeholder="Enter address" readonly=""><?php echo $alternative->address ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Latitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="latitude" value="<?php echo $alternative->latitude ?>" placeholder="Enter latitude" readonly="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Longitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="longitude" value="<?php echo $alternative->longitude ?>" placeholder="Enter longitude" readonly="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="email" value="<?php echo $alternative->email ?>" placeholder="Enter email" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Call Number</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="voice_number" value="<?php echo $alternative->voice_number ?>" placeholder="Enter longitude" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Description</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="5" name="description" placeholder="Enter description" readonly=""><?php echo $alternative->description ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Image</label>
                                                <div class="col-md-10">
                                                    <img height="150px" src="<?php echo base_url('uploads/alternative/'); echo $alternative->image ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status" disabled="">
                                                        <option value="<?php echo $alternative->status; ?>"><?php echo $alternative->status == 1 ? "Active" : "Inactive" ?></option>
                                                        <?php if ($alternative->status == 1) {?>
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
                                                    <a href="<?php echo base_url('alternative') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Back to List</button></a>
                                                </div>
                                            </div>

                                            
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