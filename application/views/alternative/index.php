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
                                        Alternative
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('alternative/create') ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Create New</button></a><br><br>
                                        <?php if($this->session->flashdata('success')){ ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                        <?php } elseif ($this->session->flashdata('warning')){ ?>
                                            <div class="alert alert-warning" role="alert">
                                                <?php echo $this->session->flashdata('warning'); ?>
                                            </div>
                                        <?php } ?>
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $no = 0; foreach ($alternative as $key => $value) { $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><a href="alternative-values/<?php echo $value->id; ?>"><?php echo $value->alternative_code; ?></a></td>
                                                    <td><?php echo $value->alternative_name; ?></td>
                                                    <td><?php echo $value->address; ?></td>
                                                    <td>
                                                        <?php if ($value->status == 1) { ?>
                                                            <span class="badge badge-pill badge-soft-success font-size-11">Active</span>
                                                        <?php }elseif ($value->status == 0) { ?>
                                                            <span class="badge badge-pill badge-soft-danger font-size-11">Inactive</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url('alternative/show/'); echo $value->id; ?>"><i class="far fa-eye" style="margin: 2px"></i></a> 
                                                        <a href="<?php echo base_url('alternative/edit/'); echo $value->id; ?>"><i class="far fa-edit" style="margin: 2px"></i></a> 
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?php echo $value->id ?>"><i class="far fa-trash-alt" style="margin: 2px"></i></a>
                                                    </td>
                                                </tr>
                                                <!-- Static Backdrop Modal -->
                                                <div class="modal fade" id="staticBackdrop-<?php echo $value->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Delete Data</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure to delete this data?.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                                                <a href="<?php echo base_url('alternative/destroy/'); echo $value->id; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->