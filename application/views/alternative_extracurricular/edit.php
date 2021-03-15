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
                                        <a href="<?php echo base_url('alternative_extracurricular') ?>">Ekstrakurikuler</a>
                                        <b>></b>
                                        <span>Edit Ekstrakurikuler</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('alternative_extracurricular/update/');
                                                                    echo $alternative_extracurricular->id ?>" enctype="multipart/form-data">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Ekstrakurikuler</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="alternative_extracurricular" value="<?php echo $alternative_extracurricular->extracurricular ?>" placeholder="Masukkan ekstrakurikuler" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status" required="">
                                                        <option value="<?php echo $alternative_extracurricular->status; ?>"><?php echo $alternative_extracurricular->status == 1 ? "Aktif" : "Non Aktif" ?></option>
                                                        <?php if ($alternative_extracurricular->status == 1) { ?>
                                                            <option value="0">Non Aktif</option>
                                                        <?php } else { ?>
                                                            <option value="1">Aktif</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                    <a href="<?php echo base_url('alternative_extracurricular') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Batal</button></a>
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