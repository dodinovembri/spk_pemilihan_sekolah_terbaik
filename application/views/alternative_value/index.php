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
                                        <a href="<?php echo base_url('alternative') ?>">Alternatif</a> 
                                        <b>></b> 
                                        <span>Nilai Alternatif</span></h6>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php if ($this->session->userdata('role_id') == 0) { ?>
                                            <a href="<?php echo base_url('alternative_value/create') ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Buat dan Set Ulang</button></a><br><br>
                                            <?php if($this->session->flashdata('success')){ ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php echo $this->session->flashdata('success'); ?>
                                                </div>
                                            <?php } elseif ($this->session->flashdata('warning')){ ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <?php echo $this->session->flashdata('warning'); ?>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Alternatif</th>
                                                <th>Kriteria</th>
                                                <th>Nilai Kriteria</th>
                                                <?php if ($this->session->userdata('role_id') == 0) { ?>
                                                    <th>Aksi</th>
                                                <?php } ?>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $no = 0; foreach ($alternative_value as $key => $value) { $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $value->alternative_code; ?></td>
                                                    <td><?php echo $value->criteria_code; ?></td>
                                                    <td><?php echo $value->description; ?></td>
                                                    <?php if ($this->session->userdata('role_id') == 0) { ?>
                                                        <td>
                                                            <a href="<?php echo base_url('alternative_value/edit/'); echo $value->id; ?>"><i class="far fa-edit" style="margin: 2px"></i></a> 
                                                        </td>
                                                    <?php } ?>
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