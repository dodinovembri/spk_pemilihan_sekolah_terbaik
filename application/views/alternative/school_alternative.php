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
                                        Alternatif
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php if ($this->session->userdata('role_id') == 0) { ?>
                                            <a href="<?php echo base_url('alternative/create') ?>"><button type="button" class="btn btn-primary waves-effect waves-light">Buat Baru</button></a><br><br>
                                            <?php if($this->session->flashdata('success')){ ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php echo $this->session->flashdata('success'); ?>
                                                    <?php $this->session->unset_userdata('success'); ?>
                                                </div>
                                            <?php } elseif ($this->session->flashdata('warning')){ ?>
                                                <div class="alert alert-warning" role="alert">
                                                    <?php echo $this->session->flashdata('warning'); ?>
                                                    <?php $this->session->unset_userdata('warning'); ?>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Status</th>
                                                <th>Aksi</th>   
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                            <?php $no = 0; foreach ($alternative as $key => $value) { $no++; ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><a href="alternative_values/<?php echo $value->id; ?>"><?php echo $value->alternative_code; ?></a></td>
                                                    <td><?php echo $value->alternative_name; ?></td>
                                                    <td>
                                                        <?php if ($value->status == 1) { ?>
                                                            <span class="badge badge-pill badge-soft-success font-size-11">Aktif</span>
                                                        <?php }elseif ($value->status == 0) { ?>
                                                            <span class="badge badge-pill badge-soft-danger font-size-11">Non Aktif</span>
                                                        <?php }elseif ($value->status == 2){ ?>
                                                            <span class="badge badge-pill badge-soft-warning font-size-11">Belum Diverifikasi</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo base_url('alternative/show/'); echo $value->id; ?>"><i class="far fa-eye" style="margin: 2px"></i></a> 
                                                    <?php if ($this->session->userdata('role_id') == 0) { ?>
                                                        <a href="<?php echo base_url('alternative/edit/'); echo $value->id; ?>"><i class="far fa-edit" style="margin: 2px"></i></a> 
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?php echo $value->id ?>"><i class="far fa-trash-alt" style="margin: 2px"></i></a>
                                                    <?php } ?>
                                                    </td>
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
                                                                <a href="<?php echo base_url('alternative/destroy/'); echo $value->id; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
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