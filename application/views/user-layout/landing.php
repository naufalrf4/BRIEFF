<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>

    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url(<?=base_url('assets/')?>img/banner/banner-utama.png);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Bogor Independent <br>Film Festival</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">Auditorium Perpustakaan dan Galeri Kota Bogor</h6>
                            </div>
                            <div class="text-right">
                                <a href="https://www.loket.com/o/brieff" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms"> Beli Tiket <i class="zmdi zmdi-long-arrow-right"></i></a>
                            <!--<?=site_url('live-streaming')?>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="icon-scroll" id="scrollDown"></div>
    </section>

    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="<?=base_url('assets/img/logo/logo-brieff-2023.png')?>" alt="Logo" height="60%" width="60%">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">Tentang Brieff 6.0</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">BRIEFF 6.0</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">BRIEFF (Bogor Independent Film Festival 5.0) merupakan program kerja yang diselenggarakan oleh komunitas Agrimovie Sekolah Vokasi IPB University pada tahun 2022.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">JUDUL ACARA</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">ARUNIKA</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Festival film kali ini mengusung tema "Developmet and Change Towards New Media", dengan judul acara yaitu "Incipience".</p>
                        <a href="<?=site_url('tentang-kami')?>" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Selengkapnya <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="<?=base_url('assets/img/logo/logo-arunika.png')?>" alt="Logo" height="60%" width="60%">
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>ACARA INTI TELAH DIMULAI</p>
                        <h4>LIVE STREAMING BRIEFF 5.0</h4>
                        <a href="<?=site_url('live-streaming')?>" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Lihat Live Streaming <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(<?=base_url('assets/')?>img/banner/banner-guest-star.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Akan Dimeriahkan Oleh</p>
                        <h4>Guest Star Brieff 6.0</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 offset-lg-2">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <div class="speaker-single-thumb">
                            <img src="<?=base_url('assets/')?>img/guest-star/gs-cowo.png" alt="">
                        </div>
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                        <div class="speaker-info">
                            <h5>COMING SOON</h5>
                             <p>Musik</p> 
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <div class="speaker-single-thumb">
                            <img src="<?=base_url('assets/')?>img/guest-star/gs-cowo.png" alt="">
                        </div>
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                        <div class="speaker-info">
                            <h5>COMING SOON</h5>
                             <p>Musik</p> 
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 offset-lg-2">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <div class="speaker-single-thumb">
                            <img src="<?=base_url('assets/')?>img/guest-star/gs-cewe.png" alt="">
                        </div>
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                        <div class="speaker-info">
                            <h5>COMING SOON</h5>
                             <p>Pembicara</p> 
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <div class="speaker-single-thumb">
                            <img src="<?=base_url('assets/')?>img/guest-star/gs-cewe.png" alt="">
                        </div>
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                        <div class="speaker-info">
                            <h5>COMING SOON</h5>
                             <p>Pembicara</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-schedule-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Jadwal Acara</p>
                        <h4>Roadmap</h4>
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container-wrapper swiper-container-wrapper--timeline">
                        <ul class="swiper-pagination-custom">
                            <li class="swiper-pagination-switch first active"><span class="switch-title">Jul</span></li>
                            <li class="swiper-pagination-switch"><span class="switch-title">August </span></li>
                            <li class="swiper-pagination-switch"><span class="switch-title">Sept</span></li>
                        </ul>
                        <div class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal"></div>
                        <div class="swiper swiper-container swiper-container--timeline">
                            <div class="swiper-wrapper" style="height: 100% !important;">
                                <div class="swiper-slide">
                                    <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp col-lg-12" data-wow-delay="300ms">
                                        <div class="single-schedule-tumb-info align-items-center">
                                            <div class="single-schedule-info">
                                                <h6>Open Submission Film</h6>
                                                <p>Oleh : <span>BRIEFF 6.0</span></p>
                                            </div>
                                        </div>
                                        <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-calendar"></i> 25 Juli 2023</p>
                                            <p><i class="zmdi zmdi-map"></i> Online</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp col-lg-12" data-wow-delay="300ms">
                                        <div class="single-schedule-tumb-info align-items-center">
                                            <div class="single-schedule-info">
                                                <h6>Close Submission Film</h6>
                                                <p>Oleh : <span>BRIEFF 6.0</span></p>
                                            </div>
                                        </div>
                                        <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-calendar"></i> 22 Agustus 2023</p>
                                            <p><i class="zmdi zmdi-map"></i> Online</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp col-lg-12" data-wow-delay="300ms">
                                        <div class="single-schedule-tumb-info align-items-center">
                                            <div class="single-schedule-info">
                                                <h6>Day 1 (Diskusi Komunitas) </h6>
                                                <p>Oleh : <span>Brieff 6.0</span></p>
                                            </div>
                                        </div>
                                        <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-calendar"></i> 22 September 2023</p>
                                            <p><i class="zmdi zmdi-time"></i> 07.30-Selesai</p>
                                            <p><i class="zmdi zmdi-map"></i> Auditorium Perpustakaan dan Galeri Kota Bogor</p>
                                        </div>
                                        <a href="" class="btn confer-btn">Lihat Lokasi <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    <!--<?=site_url('register')?>-->
                                    </div>
                                    <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp col-lg-12" data-wow-delay="300ms">
                                        <div class="single-schedule-tumb-info align-items-center">
                                            <div class="single-schedule-info">
                                                <h6>Day 2 (Sharing and Screening) </h6>
                                                <p>Oleh : <span>Brieff 6.0</span></p>
                                            </div>
                                        </div>
                                        <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-calendar"></i> 23 September 2023</p>
                                            <p><i class="zmdi zmdi-time"></i> 07.30-Selesai</p>
                                            <p><i class="zmdi zmdi-map"></i> Auditorium Perpustakaan dan Galeri Kota Bogor</p>
                                        </div>
                                        <a href="" class="btn confer-btn">Lihat Lokasi <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    </div>
                                    <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp col-lg-12" data-wow-delay="300ms">
                                        <div class="single-schedule-tumb-info align-items-center">
                                            <div class="single-schedule-info">
                                                <h6>Day 3 (Closing dan Awarding Film) </h6>
                                                <p>Oleh : <span>Brieff 6.0</span></p>
                                            </div>
                                        </div>
                                        <div class="schedule-time-place">
                                            <p><i class="zmdi zmdi-calendar"></i> 24 September 2023</p>
                                            <p><i class="zmdi zmdi-time"></i> 07.30-Selesai</p>
                                            <p><i class="zmdi zmdi-map"></i> Gedung Sribaduga</p>
                                        </div>
                                        <a href="" class="btn confer-btn">Lihat Lokasi <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-ticket-pricing-table-area bg-img bg-gradient-overlay section-padding-100-0 jarallax" style="background-image: url(<?=base_url('assets/')?>img/banner/banner-tiket.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Jumpa Offline</p>
                        <h4>Pembelian Tiket</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 offset-lg-4 offset-md-3">
                    <div class="single-ticket-pricing-table active text-center mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <h6 class="ticket-plan">Pilihan Tiket</h6>
                        <div class="ticket-icon">
                            <img src="<?=base_url('assets/')?>img/core-img/p2.png" alt="">
                        </div>
                        <h2 class="ticket-price"><!-- <span>Rp</span>- --></h2>
                        <a href="https://www.loket.com/o/brieff" target="_blank" class="btn confer-btn w-100">Lihat Tiket <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Partners &amp; Sponsors</p>
                        <h4>OFFICIAL SPONSOR</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="about-thumb mb-80 wow fadeInUp text-center" data-wow-delay="300ms">
                        <img src="<?=base_url('assets/img/sponsor.png')?>" alt="Logo" height="100%" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact-our-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Punya Pertanyaan?</p>
                        <h4>Hubungi Kami</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Alamat :</p>
                            <h6>Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kec. Bogor Tengah, Kota Bogor, Jawa Barat 16128</h6>
                        </div>
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Telepon :</p>
                            <h6><a href="http://wa.me/6282113946787?text=Halo,%20dengan%20brieff%20disini" target="_blank">0821-1394-6787 (Sultan)</a></h6>
                        </div>
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email :</p>
                            <h6><a href="mailto:Grofixbrieff@gmail.com" target="_blank">Grofixbrieff@gmail.com</a></h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="<?=site_url('kirim-pesan')?>" method="post" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="nama" id="nama" placeholder="Nama Lengkap *" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="number" class="form-control mb-30" name="no_hp" id="no_hp" placeholder="Nomor Handphone *" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail *" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="pesan" class="form-control mb-30" id="pesan" cols="30" rows="6" placeholder="Pesan Anda *" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn">Kirim Pesan <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $this->load->view("user-layout/_partials/footer.php") ?>