<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>
    
    <section class="auth-area section-padding-100-0">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Punya Pertanyaan?</p> 
                        <h4>Kontak Kami</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Alamat :</p>
                            <h6><a href="https://goo.gl/maps/kDHv4ZvhnLTFMkLV8" style= "color: #111343;"> Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kec. Bogor Tengah, Kota Bogor, Jawa Barat 16128</a></h6>
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
                                    <div id="success_fail_info"></div>
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