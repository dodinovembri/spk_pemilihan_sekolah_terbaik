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
                                        <span>Detail Sekolah</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php if ($this->session->flashdata('success')) { ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </div>
                                        <?php } elseif ($this->session->flashdata('warning')) { ?>
                                            <div class="alert alert-warning" role="alert">
                                                <?php echo $this->session->flashdata('warning'); ?>
                                            </div>
                                        <?php } ?>
                                        <form method="POST" action="<?php echo base_url('school/update/');
                                                                    echo $school->id ?>" enctype="multipart/form-data">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10" style="margin-top: 10px">
                                                    <?php if ($school->status == 1) { ?>
                                                        <span class="badge badge-pill badge-soft-success font-size-11">Aktif/ Verified</span>
                                                    <?php } elseif ($school->status == 2) { ?>
                                                        <span class="badge badge-pill badge-soft-warning font-size-11">Un Verified</span>
                                                    <?php } elseif ($school->status == 0) { ?>
                                                        <span class="badge badge-pill badge-soft-danger font-size-11">Non Aktif</span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Kode Sekolah</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="school_code" value="<?php echo $school->alternative_code ?>" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Nama Sekolah</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="school_name" value="<?php echo $school->alternative_name ?>" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Alamat</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="3" name="address" required=""><?php echo $school->address ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Latitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="latitude" value="<?php echo $school->latitude ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Longitude</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="longitude" value="<?php echo $school->longitude ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="email" value="<?php echo $school->email ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">No Telepon</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="voice_number" value="<?php echo $school->voice_number ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Deskripsi</label>
                                                <div class="col-md-10">
                                                    <textarea class="form-control" rows="5" name="description"><?php echo $school->description ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-email-input" class="col-md-2 col-form-label">Gambar</label>
                                                <div class="col-md-10">
                                                    <img height="150px" src="<?php echo base_url('uploads/alternative/');
                                                                                echo $school->image ?>">
                                                    <?php if ($this->session->userdata('role_id') != 3) { ?> 
                                                        <input type="file" name="image">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Akreditasi</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="accreditation" value="<?php echo $school->accreditation ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Lama Berdiri (tahun)</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="age" value="<?php echo $school->age ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Biaya SPP</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="spp_cost" value="<?php echo $school->spp_cost ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Biaya Masuk</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="entry_fee" value="<?php echo $school->entry_fee ?>">
                                                </div>
                                            </div>                                            
                                            <br><br>
                                            <?php if ($this->session->userdata('role_id') != 3) { ?>                                            
                                                <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label"></label>
                                                    <div class="col-md-10">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                                    </div>
                                                </div>
                                            <?php } ?>
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