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
                                        <span><a href="<?php echo base_url('alternative_values/'); echo $this->session->userdata('alternative_id'); ?>">Nilai Alternatif</a></span>
                                        <b>></b> Edit Nilai Alternatif</h6>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('alternative_value/update/'); echo $alternative_value->id; ?>">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Alternatif</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="value" value="<?php echo $alternative_value->alternative_code ?>" placeholder="Masukkan nilai alternatif" readonly="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Kriteria</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="value" value="<?php echo $alternative_value->criteria_code ?>" placeholder="Masukkan nilai kriteria" readonly="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Nilai</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="criterion_value_id" required="">
                                                    <?php foreach ($criterion_value as $key => $value) { ?>
                                                        <option value="<?php echo $value->id ?>"><?php echo $value->description; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                    <a href="<?php echo base_url('alternative_value/'); echo $this->session->userdata('criteria_id'); ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Batal</button></a>
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