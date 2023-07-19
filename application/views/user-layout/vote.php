<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>

    <section class="our-sponsor-client-area section-padding-100">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4>Voting</h4>
                    </div>
                    <div class="col-lg-6 offset-lg-3">
                    <?php
                        $data = $this->db->from("voting")->where('id_user', $this->session->userdata('id'))->get()->num_rows();

                        if ($data == '0') {
                    ?>
                    <form method="post" action="<?=site_url('vote/participation')?>" class="wow fadeInUp mx-3" data-wow-delay="300ms">
                        <div class="d-flex justify-content-between">
                            <select class="form-control" name="nama_film" required>
                                <option value="">-- Pilih Film Terbaik --</option>
                                <option value="Orderan Janda">Orderan Janda</option>
                                <option value="DANA KALIAN">DANA KALIAN</option>
                                <option value="Kasih Ibu Malam Itu">Kasih Ibu Malam Itu</option>
                                <option value="Lalu">Lalu</option>
                                <option value="Waiting For Your Phone Call">Waiting For Your Phone Call</option>
                                <option value="Di Sela Garis Yang Tak Tertulis">Di Sela Garis Yang Tak Tertulis</option>
                                <option value="Maybe Someday Another Day But Not Today">Maybe Someday Another Day But Not Today</option>
                                <option value="FUSION">FUSION</option>
                                <option value="Jenglotman dan Keinginan Mertua Jahanam">Jenglotman dan Keinginan Mertua Jahanam</option>
                                <option value="Mengubur Jejak (Faded Steps)">Mengubur Jejak (Faded Steps)</option>
                            </select>
                            <?php if ($this->session->userdata('role') == NULL) { ?>
                                <a href="#" class="btn confer-btn mx-3" id="gagal">Vote</a>
                            <?php } else { ?>
                                <button type="submit" class="btn confer-btn mx-3">Vote</button>
                            <?php } ?>
                        </div>
                    </form>
                    <?php } else { ?>
                        <h5 class="text-secondary text-center wow fadeInUp" data-wow-delay="350ms">Mohon maaf, Anda telah melakukan voting</h5>
                    <?php } ?>
                    </div>
                    <!-- <h5 class="text-secondary text-center wow fadeInUp" data-wow-delay="350ms">Mohon maaf, voting telah ditutup</h5> -->
                </div>
            </div>

            <div class="col-12 mt-5">
                <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                    <h5>Poster Film Terbaik</h5>
                </div>
                <div class="our-sponsor-area d-flex flex-wrap">
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/orderan-janda.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/DSGYTT.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/KIMI.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/lalu.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/WFYPC.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/DSGYTT.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/MSADBNT.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/fusion.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/JKMJ.jpg')?>" width="100%" height="100%"></a>
                    </div>
                    <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" style="cursor: default;"><img src="<?=base_url('assets/img/vote/faded-steps.jpg')?>" width="100%" height="100%"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php $this->load->view("user-layout/_partials/footer.php") ?>