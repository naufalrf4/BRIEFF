<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>

    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container mt-5">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4>Buku Panduan</h4>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 text-center mb-80">
                    <iframe src="<?=base_url('assets/file/Buku-Panduan-Brieff-2022.pdf')?>" width="100%" height="500"></iframe>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="about-content-text mb-80">
                        <p class="wow fadeInUp" data-wow-delay="300ms">Jika tidak dapat menampilkan preview, klik <a href="<?=site_url('panduan/download')?>" class="text-primary">di sini</a> untuk mengunduh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php $this->load->view("user-layout/_partials/footer.php") ?>