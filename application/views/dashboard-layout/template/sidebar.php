    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="<?=site_url('dashboard')?>">
                <img src="<?=base_url('assets/img/logo/logo-dark.png');?>" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Brieff Dashboard</span>
            </a>
        </div>

        <hr class="horizontal dark mt-0">

        <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item mb-2">
                    <a class="nav-link" href="<?=site_url('/')?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-home text-dark"></i>
                        </div>
                        <span class="nav-link-text ms-1">Halaman Utama</span>
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a class="nav-link <?php if($this->uri->segment(1) == "dashboard"){echo 'active';}?>" href="<?=site_url('dashboard')?>">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-gauge <?php if($this->uri->segment(1) != "dashboard"){echo 'text-dark';}?>"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <?php if ($this->session->userdata('role') == 'peserta') { ?>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "pendaftaran"){echo 'active';}?>" href="<?=site_url('pendaftaran')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-file-circle-plus <?php if($this->uri->segment(1) != "pendaftaran"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Pendaftaran</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "buku-panduan"){echo 'active';}?>" href="<?=site_url('buku-panduan')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-book <?php if($this->uri->segment(1) != "buku-panduan"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Buku Panduan</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "surat-penyataan"){echo 'active';}?>" href="<?=site_url('surat-penyataan')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-envelope-open-text <?php if($this->uri->segment(1) != "surat-penyataan"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Surat Pernyataan</span>
                        </a>
                    </li>

                <?php } else if ($this->session->userdata('role') == 'juri') { ?>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "peserta"){echo 'active';}?>" href="<?=site_url('peserta')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-user-group <?php if($this->uri->segment(1) != "peserta"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Rekap Peserta</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "penilaian"){echo 'active';}?>" href="<?=site_url('penilaian')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-file-circle-plus <?php if($this->uri->segment(1) != "penilaian"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Penilaian</span>
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "rekap-nilai"){echo 'active';}?>" href="<?=site_url('rekap-nilai')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-user-graduate <?php if($this->uri->segment(1) != "rekap-nilai"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Rekap Nilai</span>
                        </a>
                    </li>

                <?php } else if ($this->session->userdata('role') == 'kurator') { ?>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "pendaftaran"){echo 'active';}?>" href="<?=site_url('pendaftaran')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-file-circle-plus <?php if($this->uri->segment(1) != "pendaftaran"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Pendaftaran</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "peserta"){echo 'active';}?>" href="<?=site_url('peserta')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-user-group <?php if($this->uri->segment(1) != "peserta"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Rekap Peserta</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "penilaian"){echo 'active';}?>" href="<?=site_url('penilaian')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-file-circle-plus <?php if($this->uri->segment(1) != "penilaian"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Penilaian</span>
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "rekap-nilai"){echo 'active';}?>" href="<?=site_url('rekap-nilai')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-user-graduate <?php if($this->uri->segment(1) != "rekap-nilai"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Rekap Nilai</span>
                        </a>
                    </li>

                <?php } else if ($this->session->userdata('role') == 'admin') { ?>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "data-vote"){echo 'active';}?>" href="<?=site_url('data-vote')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-check-to-slot <?php if($this->uri->segment(1) != "data-vote"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Voting</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "juri"){echo 'active';}?>" href="<?=site_url('juri')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-user <?php if($this->uri->segment(1) != "juri"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Juri dan Kurator</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "peserta"){echo 'active';}?>" href="<?=site_url('peserta')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-user-group <?php if($this->uri->segment(1) != "peserta"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Rekap Peserta</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "pendaftaran"){echo 'active';}?>" href="<?=site_url('pendaftaran')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-file-circle-plus <?php if($this->uri->segment(1) != "pendaftaran"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Pendaftaran</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "penilaian"){echo 'active';}?>" href="<?=site_url('penilaian')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-star <?php if($this->uri->segment(1) != "penilaian"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Penilaian</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "rekap-nilai"){echo 'active';}?>" href="<?=site_url('rekap-nilai')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-user-graduate <?php if($this->uri->segment(1) != "rekap-nilai"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Rekap Nilai</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "user"){echo 'active';}?>" href="<?=site_url('user')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-users <?php if($this->uri->segment(1) != "user"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">User</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link <?php if($this->uri->segment(1) == "kontak"){echo 'active';}?>" href="<?=site_url('kontak')?>">
                            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="fa fa-envelope <?php if($this->uri->segment(1) != "kontak"){echo 'text-dark';}?>"></i>
                            </div>
                            <span class="nav-link-text ms-1">Kontak</span>
                        </a>
                    </li>
                <?php } ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('logout')?>" id="btn-logout">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-sign-out text-dark"></i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>