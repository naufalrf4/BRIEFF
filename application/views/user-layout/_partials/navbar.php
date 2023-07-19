    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <nav class="classy-navbar justify-content-between" id="conferNav">
                    <a class="nav-brand" href="<?=site_url('/')?>"><img src="<?=base_url('assets/img/logo/logo-brieff-2023.png')?>" alt="Logo" width="60px" height="60px"></a>

                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul id="nav">
                                <li <?php if($this->uri->segment(1) == ""){echo 'class="active"';}?>><a href="<?=site_url('/')?>">Beranda</a></li>
                                <li <?php if($this->uri->segment(1) == "timeline"){echo 'class="active"';}?>><a href="<?=site_url('timeline')?>">Timeline</a></li>
                                <li <?php if($this->uri->segment(1) == "roadmap"){echo 'class="active"';}?>><a href="<?=site_url('roadmap')?>">Roadmap</a></li>
                                <!-- <li <?php if($this->uri->segment(1) == "live-streaming"){echo 'class="active"';}?>><a href="<?=site_url('live-streaming')?>">Live</a></li>
                                <li <?php if($this->uri->segment(1) == "vote"){echo 'class="active"';}?>><a href="<?=site_url('vote')?>">Vote</a></li> -->
                                <li <?php if($this->uri->segment(1) == "panduan"){echo 'class="active"';}?>><a href="<?=site_url('panduan')?>">Panduan</a></li>
                                <li <?php if($this->uri->segment(1) == "tentang-kami"){echo 'class="active"';}?>><a href="<?=site_url('tentang-kami')?>">Tentang</a></li>
                                <li <?php if($this->uri->segment(1) == "kontak-kami"){echo 'class="active"';}?>><a href="<?=site_url('kontak-kami')?>">Kontak</a></li>
                            </ul>

                            <?php if ($this->session->userdata('role') != null && $this->session->userdata('role') != 'umum') { ?>
                            <a href="<?=site_url('dashboard')?>" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Dashboard</a>
                            <?php } else { ?>
                                <?php if ($this->session->userdata('role') != 'umum') { ?>
                                    <a href="<?=site_url('register')?>" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Daftar</i></a>
                                    <a href="<?=site_url('login')?>" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-2">Login</a>
                                <?php } else { ?>
                                    <a href="<?=site_url('logout')?>" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-2" id="btn-logout">Logout</a>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>