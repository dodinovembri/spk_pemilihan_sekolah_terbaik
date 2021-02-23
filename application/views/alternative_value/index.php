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
                                        <a href="<?php echo base_url('criteria') ?>">Alternative</a> 
                                        <b>></b> 
                                        <span>Alternative Value</span></h6>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="<?php echo base_url('alternative_value/create') ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Create and Reset</button></a><br><br>
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
                                                <th>Alternative</th>
                                                <th>Criteria</th>
                                                <th>Criteria Value</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $no = 0; foreach ($alternative_value as $key => $value) { $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value->alternative_code; ?></td>
                                                    <td><?php echo $value->criteria_code; ?></td>
                                                    <td><?php echo $value->description; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('alternative_value/edit/'); echo $value->id; ?>"><i class="far fa-edit" style="margin: 2px"></i></a> 
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