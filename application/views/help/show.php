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
                                        <a href="<?php echo base_url('help') ?>">Help</a>
                                        <b>></b>
                                        <span>Detail Help</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Kode Help</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="help_code" placeholder="Kode Help" value="<?php echo $help->help_code; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Judul</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="title" placeholder="Judul Help" value="<?php echo $help->title; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Deskripsi Kriteria</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" id="editor" rows="7" name="description" readonly><?php echo $help->description; ?></textarea>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <a href="<?php echo base_url('help') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Kembali ke List</button></a>
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