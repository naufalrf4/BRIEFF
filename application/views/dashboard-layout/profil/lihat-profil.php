<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="card-body pb-2">
                    <div class="col-lg-12">
                        <div class="col-lg-12 text-center">
                            <img src="<?= base_url('assets/dashboard/images/user.png'); ?>" class="img-fluid" width="30%" height="30%">
                        </div>
                        <div class="col-lg-12">
                            <h5 class="text-left">Profil</h5>
                            <table width="100%">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>: <?=ucfirst($data['nama'])?></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>: <?=ucfirst($data['username'])?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: <?=ucfirst($data['email'])?></td>
                                </tr>
                                <tr>
                                    <td>Peran</td>
                                    <td>: <?=ucfirst($data['role'])?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-12 mt-2">
                            <a href="<?=site_url('profil/edit')?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-edit fa-sm"></i> Edit Profil</a>
                            <a href="<?=site_url('profil/delete')?>" class="btn btn-danger btn-sm mt-3" id="delete-acc"><i class="fas fa-trash fa-sm"></i> Hapus Akun</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
