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
                                        <a href="<?php echo base_url('alternative_accessibility') ?>">Aksesibilitas</a>
                                        <b>></b>
                                        <span>Buat Aksesibilitas</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('alternative_accessibility/store') ?>" enctype="multipart/form-data">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Aksesibilitas</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="alternative_accessibility">
                                                        <option value="Terdapat Akses Kendaraan Umum">Terdapat Akses Kendaraan Umum</option>
                                                        <option value="Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat">Terdapat Akses Kendaraan Umum Namun Tidak Setiap Saat</option>
                                                        <option value="Tidak Terdapat Akses Kendaraan Umum Namun Lalu Lintas Lancar">Tidak Terdapat Akses Kendaraan Umum Namun Lalu Lintas Lancar</option>
                                                        <option value="Tidak Terdapat Akses Kendaraan Umum Dan Lalu Lintas Tidak Lancar">Tidak Terdapat Akses Kendaraan Umum Dan Lalu Lintas Tidak Lancar</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status" required="">
                                                        <option value="">Pilih</option>
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Non Aktif</option>
                                                    </select>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                    <a href="<?php echo base_url('alternative_accessibility') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Batal</button></a>
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