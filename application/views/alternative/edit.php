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
                                        <span>Edit Alternatif</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('alternative/update/'); echo $alternative->id ?>" enctype="multipart/form-data">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Kode Alternatif</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="alternative_code" value="<?php echo $alternative->alternative_code ?>" placeholder="Masukkan kode alternatif">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Nama Alternatif</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="alternative_name" value="<?php echo $alternative->alternative_name ?>" placeholder="Masukkan nama alternatif">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" name="address" placeholder="Masukkan alamat"><?php echo $alternative->address ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Latitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="latitude" value="<?php echo $alternative->latitude ?>" placeholder="Masukkan latitude">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Longitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="longitude" value="<?php echo $alternative->longitude ?>" placeholder="Masukkan longitude">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="email" value="<?php echo $alternative->email ?>" placeholder="Masukkan email">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">No Telepon</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="voice_number" value="<?php echo $alternative->voice_number ?>" placeholder="Masukkan no telepon">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Deskripsi</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" name="description" placeholder="Masukkan deskripsi"><?php echo $alternative->description ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Gambar</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" name="image" type="file" name="longitude">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status">
                                                        <option value="<?php echo $alternative->status; ?>">
                                                            <?php if ($alternative->status == 0) {
                                                                echo "Non Aktif";
                                                            }elseif ($alternative->status == 1) {
                                                                echo "Aktif/ Verified";
                                                            }elseif ($alternative->status == 2) {
                                                                echo "Belum Diverifikasi";
                                                            } ?>
                                                        </option>
                                                        <?php if ($alternative->status == 1) {?>
                                                            <option value="0">Non Aktif</option>
                                                            <option value="2">Belum Diverifikasi</option>
                                                        <?php }elseif ($alternative->status == 2){ ?>
                                                            <option value="1">Aktif/ Verified</option>
                                                            <option value="0">Non Aktif</option>
                                                        <?php }elseif ($alternative->status == 0) { ?>
                                                            <option value="1">Aktif/ Diverifikasi</option>
                                                            <option value="2">Belum Diverifikasi</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                    <a href="<?php echo base_url('alternative') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Batal</button></a>
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