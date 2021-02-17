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
                                    <h4 class="mb-sm-0 font-size-18">User</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">User</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $no = 0; foreach ($user as $key => $value) { $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value->name; ?></td>
                                                    <td><?php echo $value->email; ?></td>
                                                    <td>
                                                        <?php if ($value->role_id == 0) { ?>
                                                            <span class="badge badge-pill badge-soft-success font-size-11">Administrator</span>
                                                        <?php }elseif ($value->role_id == 1) { ?>
                                                            <span class="badge badge-pill badge-soft-danger font-size-11">User</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($value->status == 1) { ?>
                                                            <span class="badge badge-pill badge-soft-success font-size-11">Active</span>
                                                        <?php }elseif ($value->status == 0) { ?>
                                                            <span class="badge badge-pill badge-soft-danger font-size-11">Inactive</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a href=""><i class="far fa-edit" style="margin: 2px"></i></a> 
                                                        <a href=""><i class="far fa-trash-alt" style="margin: 2px"></i></a>
                                                    </td>
                                                </tr>
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