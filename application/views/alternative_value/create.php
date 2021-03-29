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
                                        <form method="POST" action="<?php echo base_url('alternative_value/store') ?>" enctype="multipart/form-data">
                                            <h4>Nilai Alternatif</h4>
                                            <hr><br>
                                            <?php foreach ($criteria as $key => $value) { ?>
                                                <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label"><?php echo $value->criteria_description; ?></label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" name="criteria_criterion[]" required="">
                                                            <option value="">Pilih</option>
                                                            <?php
                                                            $criteria_id = $value->id;
                                                            $sql = "SELECT * FROM criterion_value WHERE criteria_id = $criteria_id";
                                                            $query = $this->db->query($sql);
                                                            ?>
                                                            <?php foreach ($query->result() as $row) { ?>
                                                                <option value="<?php echo $criteria_id;
                                                                                echo '&';
                                                                                echo $row->id; ?>"><?php echo $row->description;; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            <?php } ?><br><br>
                                            <h4>Dokumen Persyaratan</h4>
                                            <hr>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Dokumen Persyaratan</label>
                                                <div class="col-md-10">
                                                    <input type="file" name="requirement_document[]" class="form-control" multiple>
                                                    <label for="files"><i style="color: blue;">*notes: bisa berupa brosur, foto/dokumen</i></label>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Bukti Lokasi</label>
                                                <div class="col-md-10">
                                                    <input type="file" id="files" name="location_document[]" class="form-control" multiple>
                                                    <label for="files"><i style="color: blue;">*notes: foto bisa lebih dari satu</i></label>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Bukti Aksesibilitas</label>
                                                <div class="col-md-10">
                                                    <input type="file" id="files" name="accessibility_document[]" class="form-control" multiple>
                                                    <label for="files"><i style="color: blue;">*notes: foto bisa lebih dari satu</i></label>
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