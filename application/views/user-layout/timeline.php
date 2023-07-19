<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>

    <section class="our-schedule-area section-padding-100-0">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4>Timeline Open Submission</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="schedule-tab">
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Juli</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Agustus</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">September</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <div class="single-schedule-info">
                                                    <h6>Pendaftaran Peserta</h6>
                                                </div>
                                            </div>
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-calendar"></i> 25 Juli 2023 - 22 Agustus 2023</p>
                                                <p><i class="zmdi zmdi-map"></i> Online</p>
                                            </div>
                                            <a href="<?=site_url('register')?>" class="btn confer-btn">Daftar <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <div class="single-schedule-info">
                                                    <h6>Pengumpulan Karya</h6>
                                                </div>
                                            </div>
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-calendar"></i> 25 Juli 2023 - 22 Agustus 2023</p>
                                                <p><i class="zmdi zmdi-map"></i> Online</p>
                                            </div>
                                            <a href="<?=site_url('register')?>" class="btn confer-btn">Daftar <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <div class="single-schedule-info">
                                                    <h6>Sortir Film oleh Panitia</h6>
                                                </div>
                                            </div>
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-calendar"></i> 1 Agustus 2023 - 25 Agustus 2023</p>
                                                <p><i class="zmdi zmdi-map"></i> Online</p>
                                            </div>
                                        </div>
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <div class="single-schedule-info">
                                                    <h6>Kurasi Film oleh Kurator</h6>
                                                </div>
                                            </div>
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-calendar"></i> 26 Agustus 2023 - 5 September 2023</p>
                                                <p><i class="zmdi zmdi-map"></i> Online</p>
                                            </div>
                                        </div>
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <div class="single-schedule-info">
                                                    <h6>Penilaian oleh Juri</h6>
                                                </div>
                                            </div>
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-calendar"></i> 6 September 2023 - 15 September 2023</p>
                                                <p><i class="zmdi zmdi-map"></i> Online</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="wednesday-tab">
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12"> 
                                        <div class="single-schedule-area d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <div class="single-schedule-info">
                                                    <h6>Pengumuman</h6>
                                                </div>
                                            </div>
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-calendar"></i> 24 September 2023</p>
                                                <p><i class="zmdi zmdi-map"></i> Gedung Sribaduga</p>
                                            </div>
                                            <a href="https://goo.gl/maps/n9LroGZtTASwVUmk8" class="btn confer-btn" target="_blank">Lihat Lokasi <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
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