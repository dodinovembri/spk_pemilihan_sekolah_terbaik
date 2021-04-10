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
                                        <a href="<?php echo base_url('home') ?>">Home</a>
                                        <b>></b>
                                        <span>Ekstrakurikuler</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php if ($this->session->userdata('role_id') != 3) { ?>
                                            <a href="<?php echo base_url('alternative_extracurricular/create') ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Buat Baru</button></a><br><br>
                                        <?php } ?>
                                        <?php if ($this->session->flashdata('success')) { ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                        <?php } elseif ($this->session->flashdata('warning')) { ?>
                                            <div class="alert alert-warning" role="alert">
                                                <?php echo $this->session->flashdata('warning'); ?>
                                            </div>
                                        <?php } ?>
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Ekstrakurikuler</th>
                                                    <th>Status</th>
                                                    <?php if ($this->session->userdata('role_id') != 3) { ?>
                                                        <th>Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <?php $no = 0;
                                                foreach ($alternative_extracurricular as $key => $value) {
                                                    $no++; ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $value->extracurricular; ?></td>
                                                        <td>
                                                            <?php if ($value->status == 1) { ?>
                                                                <span class="badge badge-pill badge-soft-success font-size-11">Active</span>
                                                            <?php } elseif ($value->status == 0) { ?>
                                                                <span class="badge badge-pill badge-soft-danger font-size-11">Inactive</span>
                                                            <?php } ?>
                                                        </td>
                                                        <?php if ($this->session->userdata('role_id') != 3) { ?>
                                                            <td>
                                                                <a href="<?php echo base_url('alternative_extracurricular/edit/');
                                                                            echo $value->id; ?>"><i class="far fa-edit" style="margin: 2px"></i></a>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?php echo $value->id ?>"><i class="far fa-trash-alt" style="margin: 2px"></i></a>
                                                            </td>
                                                        <?php } ?>
                                                    </tr>
                                                    <!-- Static Backdrop Modal -->
                                                    <div class="modal fade" id="staticBackdrop-<?php echo $value->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Anda yakin ingin menghapus data ini?.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                                    <a href="<?php echo base_url('alternative_extracurricular/destroy/');
                                                                                echo $value->id; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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