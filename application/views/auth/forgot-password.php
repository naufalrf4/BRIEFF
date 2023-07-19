<?php $this->load->view("user-layout/_partials/header.php") ?>
    <?php $this->load->view("user-layout/_partials/navbar.php") ?>
    <section class="auth-area section-padding-100-0">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <h4>Lupa Password</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 offset-sm-3">
                    <div class="auth_from_area clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="auth_form">
                            <form action="" method="post" id="main_auth_form">
                                <div class="auth_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <div class="form-group mb-30">
                                                <input type="email" class="form-control" name="email"  placeholder="E-mail Anda" value="<?=set_value('email') ?>">
                                                <small class="text-danger"><?=form_error('email')?></small>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center copywrite-text">
                                            <button type="submit" class="btn confer-btn">Lupa Password</button>
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