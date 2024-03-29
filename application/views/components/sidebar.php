            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?php echo base_url('home') ?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url('assets/images/logo.svg') ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url('assets/images/logo-dark.png') ?>" alt="" height="17">
                                </span>
                            </a>

                            <a href="<?php echo base_url('home') ?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo base_url('assets/images/logo-light.svg') ?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url('assets/images/logo-light.png') ?>" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?php echo base_url('uploads/user/'); echo $this->session->userdata('image') ?>"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo $this->session->userdata('name') ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="<?php echo base_url('profile') ?>"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profil</span></a>                               
                                <a class="dropdown-item" href="<?php echo base_url('profile/change_password') ?>"><i class="bx bx-key font-size-16 align-middle me-1"></i> <span key="t-profile">Ubah Password</span></a>                               
                                <a class="dropdown-item text-danger" href="<?php echo base_url('logout') ?>"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <?php if ($this->session->userdata('role_id') == 0) { ?>
                                <li class="menu-title" key="t-apps">Menu</li>
                                <li>
                                    <a href="<?php echo base_url('home') ?>" class="waves-effect">
                                        <i class="bx bxs-dashboard"></i>
                                        <span key="t-home">Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-title" key="t-apps">Transaksi</li>
                                <li>
                                    <a href="<?php echo base_url('alternative') ?>" class="waves-effect">
                                        <i class="bx bx-detail"></i>
                                        <span key="t-calendar">Alternatif</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('ranking') ?>" class="waves-effect">
                                        <i class="bx bx-chat"></i>
                                        <span key="t-chat">List Ranking</span>
                                    </a>
                                </li>
                                <li class="menu-title" key="t-apps">Setup Management</li>
                                <li>
                                    <a href="<?php echo base_url('my_scale') ?>" class="waves-effect">
                                        <i class="bx bx-calendar"></i>
                                        <span key="t-calendar">Skala Kepentingan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('criteria') ?>" class="waves-effect">
                                        <i class="bx bx-file"></i>
                                        <span key="t-file-manager">Kriteria</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('user') ?>" class="waves-effect">
                                        <i class="bx bxs-user-detail"></i>
                                        <span key="t-file-manager">List Data User</span>
                                    </a>
                                </li>                                
                            <?php } ?>
                            <?php if ($this->session->userdata('role_id') == 1) { ?>
                                <li class="menu-title" key="t-apps">Menu</li>
                                <li>
                                    <a href="<?php echo base_url('home') ?>" class="waves-effect">
                                        <i class="bx bxs-dashboard"></i>
                                        <span key="t-home">Dashboard</span>
                                    </a>
                                </li>
                                <li class="menu-title" key="t-apps">Transaksi</li>
                                <li>
                                    <a href="<?php echo base_url('alternative') ?>" class="waves-effect">
                                        <i class="bx bx-detail"></i>
                                        <span key="t-calendar">Alternatif</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('ranking') ?>" class="waves-effect">
                                        <i class="bx bx-chat"></i>
                                        <span key="t-chat">List Ranking</span>
                                    </a>
                                </li>
                                <li class="menu-title" key="t-apps">Setup Management</li>
                                <li>
                                    <a href="<?php echo base_url('my_scale') ?>" class="waves-effect">
                                        <i class="bx bx-calendar"></i>
                                        <span key="t-calendar">Skala Kepentingan</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ($this->session->userdata('role_id') == 2) { ?>
                                <li class="menu-title" key="t-apps">Menu</li>
                                <li>
                                    <a href="<?php echo base_url('home') ?>" class="waves-effect">
                                        <i class="bx bxs-dashboard"></i>
                                        <span key="t-home">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('school') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Sekolah</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_facility') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Fasilitas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_extracurricular') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Ekstrakurikuler</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_location') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Lokasi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_accessibility') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Aksesibilitas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('school_alternative') ?>" class="waves-effect">
                                        <i class="bx bxs-school"></i>
                                        <span key="t-calendar">Alternatif</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_document/create') ?>" class="waves-effect">
                                        <i class="bx bxs-file-doc"></i>
                                        <span key="t-calendar">Data Dokumen</span>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if ($this->session->userdata('role_id') == 3) { ?>
                                <li class="menu-title" key="t-apps">Menu</li>
                                <li>
                                    <a href="<?php echo base_url('home') ?>" class="waves-effect">
                                        <i class="bx bxs-dashboard"></i>
                                        <span key="t-home">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('school') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Sekolah</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_facility') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Fasilitas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_extracurricular') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Ekstrakurikuler</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_location') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Lokasi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_accessibility') ?>" class="waves-effect">
                                        <i class="bx bxs-data"></i>
                                        <span key="t-calendar">Data Aksesibilitas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('school_alternative') ?>" class="waves-effect">
                                        <i class="bx bxs-school"></i>
                                        <span key="t-calendar">Alternatif</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('alternative_document/create') ?>" class="waves-effect">
                                        <i class="bx bxs-file-doc"></i>
                                        <span key="t-calendar">Data Dokumen</span>
                                    </a>
                                </li>                                
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->