<header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <div class="logo">
                        <a href="<?=site_url('dashboard')?>" class="logo">
                            <img src="<?=base_url('assets/img/logo/logo-dark.png')?>" alt="Logo" height="40" class="logo-small">
                            <img src="<?=base_url('assets/img/logo/logo-dark.png')?>" alt="Logo" height="40" class="logo-large">
                        </a>
                    </div>

                    <div class="menu-extras topbar-custom">
                        <ul class="list-inline float-right mb-0">
                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="<?=base_url('assets/dashboard/images/users/avatar-1.jpg')?>" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome, <?=ucfirst($this->session->userdata('username'));?></h5>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?=site_url('logout')?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                </div>
                            </li>
                            <li class="menu-item list-inline-item">
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                <a href="<?=site_url('dashboard')?>"><i class="mdi mdi-airplay"></i>Dashboard</a>
                            </li>
                            <?php if ($this->session->userdata('role') == 'peserta') { ?>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Pendaftaran</a>
                            </li>
                            <?php } else if ($this->session->userdata('role') == 'juri') { ?>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Peserta</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Penilaian</a>
                            </li>
                            <?php } else if ($this->session->userdata('role') == 'admin') { ?>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Juri</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Peserta</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Pendaftaran</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Penilaian</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>User</a>
                            </li>
                            <li class="has-submenu">
                                <a href="<?=site_url('#')?>"><i class="mdi mdi-airplay"></i>Kontak</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>