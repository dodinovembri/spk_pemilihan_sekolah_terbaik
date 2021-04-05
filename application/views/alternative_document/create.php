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
                                        <a href="<?php if ($this->session->userdata('role_id') == 0) {
                                                        echo base_url('alternative');
                                                    } elseif ($this->session->userdata('role_id') == 2) {
                                                        echo base_url('school_alternative');
                                                    }  ?>">Alternatif</a>
                                        <b>></b>
                                        <span><a href="<?php echo base_url('alternative_values/');
                                                        echo $this->session->userdata('alternative_id'); ?>">Nilai Alternatif</a></span>
                                        <b>></b> Buat Nilai Alternatif
                                    </h6>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4>Dokumen Persyaratan</h4>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card border border-primary">
                                                    <div class="card-header bg-transparent border-primary">
                                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Dokumen Persyaratan</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-3 row">
                                                            <div class="col-md-10" style="margin-top: 10px">
                                                                <ul type="circle">
                                                                    <?php foreach ($requirement as $key => $value) { ?>
                                                                        <li style="display: inline-block;"><a href="<?php echo base_url('uploads/alternative/'); echo $value->image ?>" target="_link"><img height="150px" src="<?php echo base_url('uploads/alternative/');  echo $value->image ?>"></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <p><?php echo $alternative->requirement_document_description; ?></p>
                                                                    </li>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card border border-primary">
                                                    <div class="card-header bg-transparent border-primary">
                                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Dokumen Aksesibilitas</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-3 row">
                                                            <div class="col-md-10" style="margin-top: 10px">
                                                                <ul type="circle">
                                                                    <?php foreach ($accessibility as $key => $value_a) { ?>
                                                                        <li style="display: inline-block;"><a href="<?php echo base_url('uploads/alternative/'); echo $value_a->image ?>" target="_link"><img height="150px" src="<?php echo base_url('uploads/alternative/'); echo $value_a->image ?>"></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <p><?php echo $alternative->accessibility_document_description; ?></p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card border border-primary">
                                                    <div class="card-header bg-transparent border-primary">
                                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Dokumen Lokasi</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-3 row">
                                                            <div class="col-md-10" style="margin-top: 10px">
                                                                <ul type="circle">
                                                                    <?php foreach ($location as $key => $value_l) { ?>
                                                                        <li style="display: inline-block;"><a href="<?php echo base_url('uploads/alternative/'); echo $value_l->image ?>" target="_link"><img height="150px" src="<?php echo base_url('uploads/alternative/'); echo $value_l->image ?>"></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                                <ul>
                                                                    <li>
                                                                        <p><?php echo $alternative->location_document_description; ?></p>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card border border-primary">
                                                    <div class="card-header bg-transparent border-primary">
                                                        <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Link Website</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="mb-3 row">
                                                            <div class="col-md-10" style="margin-top: 10px">
                                                                <ul type="circle">
                                                                    <?php foreach ($website as $key => $value_link) { ?>
                                                                        <li><a href="<?php echo $value_link->url; ?>" target="_link"><?php echo $value_link->url; ?></a></li>
                                                                    <?php } ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <br>
                                        <form method="POST" action="<?php echo base_url('alternative_document/store') ?>" enctype="multipart/form-data">
                                            <h4>Ganti Dokumen Persyaratan</h4>
                                            <hr>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Dokumen Persyaratan</label>
                                                <div class="col-md-10">
                                                    <input type="file" name="requirement_document[]" class="form-control" multiple>
                                                    <label for="files"><i style="color: blue;">*notes: bisa berupa brosur, foto/dokumen</i></label>
                                                    <input type="text" name="requirement_document_description" class="form-control" placeholder="Keterangan Dokumen Persyaratan">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Bukti Aksesibilitas</label>
                                                <div class="col-md-10">
                                                    <input type="file" id="files" name="accessibility_document[]" class="form-control" multiple>
                                                    <label for="files"><i style="color: blue;">*notes: foto bisa lebih dari satu</i></label>
                                                    <input type="text" name="accessibility_document_description" class="form-control" placeholder="Keterangan Bukti Aksesibilitas">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Bukti Lokasi</label>
                                                <div class="col-md-10">
                                                    <input type="file" id="files" name="location_document[]" class="form-control" multiple>
                                                    <label for="files"><i style="color: blue;">*notes: foto bisa lebih dari satu</i></label>
                                                    <input type="text" name="location_document_description" class="form-control" placeholder="Keterangan Bukti Lokasi">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Link Webstite</label>
                                                <div class="col-md-10">
                                                    <input type="text" id="files" name="website_url" class="form-control" placeholder="example: https://www.google.com/; https://www.school.com/">
                                                    <label for="files"><i style="color: red;">*notes: pisahkan antar link dengan yg lain dengan titik koma</i></label>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                    <a href="<?php echo base_url('alternative_values/');
                                                                echo $this->session->userdata('alternative_id'); ?>">
                                                        <button type="button" class="btn btn-danger waves-effect waves-light">Batal</button></a>
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