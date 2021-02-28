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
                                        <a href="<?php echo base_url('user') ?>">User</a> 
                                        <b>></b> 
                                        <span>Edit User</span></h6>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo base_url('user/update/'); echo $user->id; ?>">
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Nama</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="name" placeholder="Masukkan nama" value="<?php echo $user->name; ?>" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="email" name="email" value="<?php echo $user->email; ?>" placeholder="Masukkan email" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Password</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="password" name="password" placeholder="Masukkan password" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="example-search-input" class="col-md-2 col-form-label">Password Confirm</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="password" name="password_confirm" placeholder="Masukkan password konfirmasi" required="">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Role</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="role" required="">
                                                        <option value="<?php echo $user->role_id; ?>"><?php echo $user->role_id == 0 ? "Administrator" : "User" ?></option>
                                                        <?php if ($user->role_id == 0) {?>
                                                            <option value="1">User</option>
                                                        <?php }else{ ?>
                                                            <option value="0">Administrator</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Status</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="status" required="">
                                                        <option value="<?php echo $user->status; ?>"><?php echo $user->status == 1 ? "Aktif" : "Non Aktif" ?></option>
                                                        <?php if ($user->status == 1) {?>
                                                            <option value="0">Non Aktif</option>
                                                        <?php }else{ ?>
                                                            <option value="1">Aktif</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div><br><br>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                                    <a href="<?php echo base_url('user') ?>"><button type="button" class="btn btn-danger waves-effect waves-light">Batal</button></a>
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