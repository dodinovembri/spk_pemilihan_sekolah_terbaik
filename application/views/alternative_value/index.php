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
                                        <span>Nilai Alternatif</span>
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
                                        <?php if ($this->session->userdata('role_id') == 0 || $this->session->userdata('role_id') == 2) { ?>
                                            <a href="<?php echo base_url('alternative_value/create') ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Buat dan Set Ulang</button></a><br><br>
                                            <?php if ($this->session->flashdata('success')) { ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php echo $this->session->flashdata('success'); ?>
                                                </div>
                                            <?php } elseif ($this->session->flashdata('warning')) { ?>
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
                                                    <?php if ($this->session->userdata('role_id') == 0 || $this->session->userdata('role_id') == 2) { ?>
                                                        <th>Aksi</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 0;
                                                foreach ($alternative_value as $key => $value) {
                                                    $no++; ?>
                                                    <tr>
                                                        <td><?php echo $no; ?></td>
                                                        <td><?php echo $value->alternative_code; ?></td>
                                                        <td><?php echo $value->criteria_code; ?></td>
                                                        <td><?php echo $value->description; ?></td>
                                                        <?php if ($this->session->userdata('role_id') == 0 || $this->session->userdata('role_id') == 2) { ?>
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
                        <?php if (count($requirement) > 0) { ?>
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
                                                            <li style="display: inline-block;"><a href="<?php echo base_url('uploads/alternative/'); echo $value->image ?>" target="_link"><img height="150px" src="<?php echo base_url('uploads/alternative/'); echo $value->image ?>"></a></li>
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
                        <?php } ?>
                        <?php if (count($accessibility) > 0) { ?>
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
                        <?php } ?>
                        <?php if (count($location) > 0) { ?>
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
                        <?php } ?>
                        <?php if (count($website) > 0) { ?>
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
                            </div>
                        <?php } ?>
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->