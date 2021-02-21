            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <span class="logo-lg">
                                <a href="<?php  echo base_url('home') ?>"></u><p><h3 style="color: white; text-align: left; padding-top: 15px; font-family: Times New Roman">SPK System</h3></p></a>
                                <hr style="color: white">
                            </span>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

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
                                <a class="dropdown-item" href="<?php echo base_url('profile') ?>"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>                               
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

                            <li>
                                <a href="<?php echo base_url('home') ?>" class="waves-effect">
                                    <i class="bx bx-home"></i>
                                    <span key="t-home">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" key="t-apps">Transaction</li>

                            <li>
                                <a href="<?php echo base_url('alternative') ?>" class="waves-effect">
                                    <i class="bx bx-detail"></i>
                                    <span key="t-calendar">Alternative</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('ranking') ?>" class="waves-effect">
                                    <i class="bx bx-chat"></i>
                                    <span key="t-chat">Ranking List</span>
                                </a>
                            </li>

                            <li class="menu-title" key="t-apps">Setup Management</li>

                            <li>
                                <a href="<?php echo base_url('my-scale') ?>" class="waves-effect">
                                    <i class="bx bx-calendar"></i>
                                    <span key="t-calendar">My Scale</span>
                                </a>
                            </li>

                            <?php if ($this->session->userdata('role_id') == 0) { ?>
                                <li>
                                    <a href="<?php echo base_url('criteria') ?>" class="waves-effect">
                                        <i class="bx bx-file"></i>
                                        <span key="t-file-manager">Criteria</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('user') ?>" class="waves-effect">
                                        <i class="bx bxs-user-detail"></i>
                                        <span key="t-file-manager">User Account List</span>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->