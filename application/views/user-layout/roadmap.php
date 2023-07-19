<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>

    <section class="our-schedule-area section-padding-100">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4>Roadmap</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container-wrapper swiper-container-wrapper--timeline">
                        <ul class="swiper-pagination-custom">
                            <li class="swiper-pagination-switch first active"><span class="switch-title">Juli </span></li>
                            <li class="swiper-pagination-switch"><span class="switch-title">Agustus </span></li>
                            <li class="swiper-pagination-switch"><span class="switch-title">September </span></li>
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

<?php $this->load->view("user-layout/_partials/footer.php") ?>