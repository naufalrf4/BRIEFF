<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h5 class="text-left">Ubah Data Pesan</h5>
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
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?=$data['email']?>">
                            <small class="text-danger"><?=form_error('email')?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="text" name="no_hp" class="form-control" value="<?=$data['no_hp']?>">
                            <small class="text-danger"><?=form_error('no_hp')?></small>
                        </div>
                        <div class="form-group">
                            <label for="pesan">Isi Pesan</label>
                            <textarea class="form-control" name="pesan"><?=$data['pesan']?></textarea>
                            <small class="text-danger"><?=form_error('pesan')?></small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
