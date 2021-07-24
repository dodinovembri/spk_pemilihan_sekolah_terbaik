        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- this is used to load the sidebar templates -->
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
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <?php if ($this->session->userdata('role_id') == 3) { ?>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted fw-medium">Fasilitas</p>
                                                            <h6 class="mb-0"><a href="<?php echo base_url('alternative_facility') ?>">Details</a></h6>
                                                        </div>

                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="bx bxs-data font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted fw-medium">Ekstrakurikuler</p>
                                                            <h6 class="mb-0"><a href="<?php echo base_url('alternative_extracurricular') ?>">Details</a></h6>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bxs-data font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted fw-medium">Lokasi</p>
                                                            <h6 class="mb-0"><a href="<?php echo base_url('alternative_location') ?>">Details</a></h6>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bxs-data font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted fw-medium">Aksesibilitas</p>
                                                            <h6 class="mb-0"><a href="<?php echo base_url('alternative_accessibility') ?>">Details</a></h6>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bxs-data font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="card overflow-hidden">
                                        <div class="bg-primary bg-soft">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="text-primary p-3">
                                                        <h5 class="text-primary">Selamat Datang !</h5>
                                                        <p>SPK Pemilihan Sekolah Menengah Atas (SMA) Swasta Terbaik Di Kota Palembang</p>
                                                    </div>
                                                </div>
                                                <div class="col-5 align-self-end">
                                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <div class="avatar-md profile-user-wid mb-4">
                                                        <img src="<?php echo base_url('uploads/user/');
                                                                    echo $this->session->userdata('image') ?>" alt="" class="img-thumbnail rounded-circle">
                                                    </div>
                                                    <h5 class="font-size-15 text-truncate"><?php echo $this->session->userdata('name') ?></h5>
                                                    <p class="text-muted mb-0 text-truncate">
                                                        <?php if ($this->session->userdata('role_id') == 0) { ?>
                                                            <option value="0">Administrator</option>
                                                        <?php } elseif ($this->session->userdata('role_id') == 1) { ?>
                                                            <option value="1">User</option>
                                                        <?php } elseif ($this->session->userdata('role_id') == 2) { ?>
                                                            <option value="2">School</option>
                                                        <?php } ?>
                                                    </p>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-3">
                                                    <div class="pt-4">


                                                        <div class="mt-4">
                                                            <a href="<?php echo base_url('profile') ?>" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted fw-medium">Alternatif</p>
                                                            <h4 class="mb-0"><?php echo $alternative; ?></h4>
                                                        </div>

                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-copy-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="margin-top: -21px;">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted fw-medium">Kriteria</p>
                                                            <h4 class="mb-0"><?php echo $criteria; ?></h4>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-file font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($this->session->userdata('role_id') != 1) { ?>
                                            <div class="col-md-12" style="margin-top: -21px;">
                                                <div class="card mini-stats-wid">
                                                    <div class="card-body">
                                                        <div class="media">
                                                            <div class="media-body">
                                                                <p class="text-muted fw-medium">Users</p>
                                                                <h4 class="mb-0"><?php echo $user; ?></h4>
                                                            </div>

                                                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                                <span class="avatar-title rounded-circle bg-primary">
                                                                    <i class="bx bx-user font-size-24"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <?php if ($this->session->userdata('role_id') == 1) { ?>
                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div>
                                                <div class="row">
                                                    <div class="col-lg-10 col-sm-8">
                                                        <div class="p-4">
                                                            <h6 class="text-primary">Petunjuk Penggunaan Sistem Pendukung Keputusan Pemilihan SMA Swasta Terbaik Di Kota Palembang</h6>
                                                            <p>Penjelasan mengenai 4 navigasi sistem:</p>
                                                            <ul class="text-muted">
                                                                <li>Saat berhasil login, Anda akan masuk kedalam halaman "Dashboard".
                                                                    <br> Halaman ini akan menampilkan informasi berupa jumlah data alternatif dan kriteria yang ada pada sistem.
                                                                </li>
                                                                <li>
                                                                    Lalu pada halaman Alternatif, Anda dapat melihat daftar nama sekolah swasta di kota palembang berserta informasi sekolah dengan mengklik "Opsi lihat".
                                                                    <br> Anda juga dapat melihat informasi sekolah lainnya seperti brosur dan link website sekolah dengan mengklik tabel kode tiap alternatif sekolah. <br>Contoh SMA Patra Mandiri 1 dengan Kode = A60.
                                                                </li>
                                                                <li>
                                                                    Halaman List Ranking, merupakan halaman untuk melihat rekomendasi sekolah berdasarkan kriteria yang Anda inginkan.
                                                                </li>
                                                                <li>
                                                                    Halaman Skala Kepentingan merupakan halaman dimana Anda dapat memasukkan nilai bobot tiap kriteria yang Ansa inginkan
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-sm-4 align-self-center">
                                                        <div>
                                                            <img src="assets/images/crypto/features-img/img-1.png" alt="" class="img-fluid d-block">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 col-sm-8" style="margin-top:  -30px;">
                                                        <div class="p-4">
                                                            <p>Langkah - Langkah Perhitungan SPK :</p>
                                                            <ul class="text-muted">
                                                                <li> Masuk ke halaman "Skala Kepentingan" lalu klik tombol "Buat Baru" untuk dapat menginputkan nilai bobot tiap kriteria yang Anda inginkan.
                                                                </li>
                                                                <li>
                                                                    Setelah selesai menginputkan nilai bobot tiap kriteria maka sistem akan melakukan perbaikan bobot tiap kriterianya.
                                                                </li>
                                                                <li>
                                                                    Lalu masuk ke halaman "List Ranking" untuk melihat hasil perankingan.
                                                                    <br> Sebelumnya Anda harus mengklik tombol "Refresh Location" untuk mengetahui jarak alternatif sekolah ke rumah Anda. Setelah mengklik tombol tersebut, maka sistem akan melakukan perhitungan dan menampilkan hasil perankingan dari banyaknya alternatif.
                                                                    <br> Urutan pertama dalam perankingan merupakan rekomendasi SMA swasta terbaik berdasarkan bobot nilai tiap kriteria yang telah Anda inputkan.
                                                                    <br> Jika ingin mengulang pencarian sekolah, Anda dapat mengulangi langkah 1-3 dengan mengubah atau menghapus terlebih dahulu bobot nilai kriteria sebelumnya.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-sm-4 align-self-center">
                                                        <div>
                                                            <img src="assets/images/crypto/features-img/img-1.png" alt="" class="img-fluid d-block">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?php $this->load->view('components/footer'); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->