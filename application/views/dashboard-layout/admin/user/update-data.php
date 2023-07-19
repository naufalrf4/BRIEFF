<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h5 class="text-left">Ubah Data Juri</h5>
                        <div class="text-right">
                            <button type="button" onclick="history.back(-1)" class="btn btn-outline-success btn-sm">
                                <i class="fa fa-back"></i> Kembali
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-2">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?=$data['id']?>">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?=$data['nama']?>">
                            <small class="text-danger"><?=form_error('nama')?></small>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" value="<?=set_value('username')?>" placeholder="<?=$data['username']?>">
                            <small class="text-danger"><?=form_error('username')?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?=set_value('email')?>" placeholder="<?=$data['email']?>">
                            <small class="text-danger"><?=form_error('email')?></small>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label><br>
                            <select name="role" class="form-control select2">
                                <option value="">-- Pilih Role --</option>
                                <option value="admin">Admin</option>
                                <option value="kurator">Kurator</option>
                                <option value="juri">Juri</option>
                                <option value="peserta">Peserta</option>
                            </select>
                            <small class="text-danger"><?=form_error('role')?></small>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label><br>
                            <select name="is_active" class="form-control select2">
                                <option value="<?=$data['is_active']?>">-- Tidak Ada Perubahan --</option>
                                <option value="0">Tidak Aktif</option>
                                <option value="1">Aktif</option>
                            </select>
                            <small class="text-danger"><?=form_error('is_active')?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                            <small class="text-danger"><?=form_error('password')?></small>
                        </div>
                        <div class="form-group">
                            <label for="passconf">Konfirmasi Password</label>
                            <input type="password" name="passconf" class="form-control">
                            <small class="text-danger"><?=form_error('passconf')?></small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
