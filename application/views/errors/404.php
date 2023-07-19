<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>

    <section class="about-us-countdown-area section-padding-100-0">
        <div class="container mt-5">
            <div class="row align-items-center text-center">
                <div class="col-12 col-md-12">
                    <div class="about-content-text mb-80">
                        <div class="about-thumb mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <img src="<?=base_url('assets/img/page_not_found.svg')?>" alt="Logo" height="50%" width="50%">
                        </div>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">404 · Page not found</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Halaman yang Anda cari tidak dapat ditemukan atau telah dihapus</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php $this->load->view("user-layout/_partials/footer.php") ?>