<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h5 class="text-left">Edit Penilaian <br>
                            <p class="text-left text-sm text-danger">Catatan : Nilai menggunakan angka genap dan deskripsi wajib diisi.</p></h5>
                        <div class="text-right">
                            <button type="button" onclick="history.back(-1)" class="btn btn-outline-success btn-sm">
                                <i class="fa fa-back"></i> Kembali
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0 pb-2">
                    <form action="" method="post">
                        <input type="hidden" name="id_user" class="form-control" value="<?=$this->session->userdata('id')?>">
                        <input type="hidden" name="id_pendaftaran" class="form-control" value="<?= $pendaftaran['id'] ?>">
                        <input type="hidden" name="id_penilaian" class="form-control" value="<?= $penilaian['id'] ?>">
                        <div class="form-group">
                            <label>Nama Penilai</label>
                            <input type="text" class="form-control" placeholder="<?=ucfirst($this->session->userdata('nama'))?>" readonly>
                        </div>

                        <h5>Data Film</h5>
                        <div class="form-group">
                            <label>Nama Film</label>
                            <input type="text" class="form-control" placeholder="<?=ucfirst($pendaftaran['nama_film'])?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tim Produksi</label>
                            <input type="text" class="form-control" placeholder="<?=ucfirst($pendaftaran['nama_komunitas'])?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tema Film</label>
                            <input type="text" class="form-control" placeholder="<?=ucfirst($pendaftaran['tema_film'])?>" readonly>
                        </div>

                        <h5>Naskah</h5>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="teknik_penulisan">Teknik Penulisan <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="teknik_penulisan" class="form-control" value="<?=$penilaian['teknik_penulisan'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('teknik_penulisan')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_teknik_penulisan">Deskripsi Teknik Penulisan</label>
                                <textarea name="desk_teknik_penulisan" class="form-control"><?=ucfirst($penilaian['desk_teknik_penulisan']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_teknik_penulisan')?></small>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="keutuhan_ide">Keutuhan Ide <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="keutuhan_ide" class="form-control" value="<?=$penilaian['keutuhan_ide'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('keutuhan_ide')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_keutuhan_ide">Deskripsi Keutuhan Ide</label>
                                <textarea name="desk_keutuhan_ide" class="form-control"><?=ucfirst($penilaian['desk_keutuhan_ide']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_keutuhan_ide')?></small>
                            </div>
                        </div>

                        <h5>Akting</h5>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="mimik">Mimik (penghayatan pemain/pemeran) <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="mimik" class="form-control" value="<?=$penilaian['mimik'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('mimik')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_mimik">Deskripsi Mimik</label>
                                <textarea name="desk_mimik" class="form-control"><?=ucfirst($penilaian['desk_mimik']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_mimik')?></small>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="karakter">Karakter <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="karakter" class="form-control" value="<?=$penilaian['karakter'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('karakter')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_karakter">Deskripsi Karakter</label>
                                <textarea name="desk_karakter" class="form-control"><?=$penilaian['desk_karakter'] ?></textarea>
                                <small class="text-danger"><?=form_error('desk_karakter')?></small>
                            </div>
                        </div>

                        <h5>Teknik Pengambilan Gambar</h5>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="angel">Angel (sudut kamera) <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="angel" class="form-control" value="<?=$penilaian['angel'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('angel')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_angel">Deskripsi Angel</label>
                                <textarea name="desk_angel" class="form-control"><?=ucfirst($penilaian['desk_angel']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_angel')?></small>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="style">Style (pencahayaan, ruang dan waktu) <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="style" class="form-control" value="<?=$penilaian['style'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('style')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_style">Deskripsi Style</label>
                                <textarea name="desk_style" class="form-control"><?=ucfirst($penilaian['desk_style']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_style')?></small>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="kualitas_gambar">Kualitas Gambar <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="kualitas_gambar" class="form-control" value="<?=$penilaian['kualitas_gambar'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('kualitas_gambar')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_kualitas_gambar">Deskripsi Kualitas Gambar</label>
                                <textarea name="desk_kualitas_gambar" class="form-control" value="<?=$penilaian['desk_kualitas_gambar'] ?>"><?=ucfirst($penilaian['desk_kualitas_gambar']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_kualitas_gambar')?></small>
                            </div>
                        </div>

                        <h5>Penataan Artistik</h5>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="setting">Setting & Property <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="setting" class="form-control" value="<?=$penilaian['setting'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('setting')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_setting">Deskripsi Setting & Property</label>
                                <textarea name="desk_setting" class="form-control"><?=ucfirst($penilaian['desk_setting']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_setting')?></small>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="makeup">Make Up & Costume <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="makeup" class="form-control" value="<?=$penilaian['teknik_penulisan'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('makeup')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_makeup">Deskripsi Make Up & Costume</label>
                                <textarea name="desk_makeup" class="form-control"><?=ucfirst($penilaian['desk_makeup']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_makeup')?></small>
                            </div>
                        </div>

                        <h5>Teknik Editing</h5>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="style_editing">Style Editing <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="style_editing" class="form-control" value="<?=$penilaian['style_editing'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('style_editing')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_style_editing">Deskripsi Style Editing</label>
                                <textarea name="desk_style_editing" class="form-control"><?=ucfirst($penilaian['desk_style_editing']) ?></textarea>
                                <small class="text-danger"><?=form_error('desk_style_editing')?></small>
                            </div>
                        </div>

                        <h5>Lainnya</h5>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="penyutradaraan">Penyutradaraan <small class="text-danger">(Range nilai 10 - 100)</small></label>
                                <input type="number" name="penyutradaraan" class="form-control" value="<?=$penilaian['penyutradaraan'] ?>" min="10" max="100">
                                <small class="text-danger"><?=form_error('penyutradaraan')?></small>
                            </div>
                            <div class="col-lg-6">
                                <label for="desk_penyutradaraan">Deskripsi Penyutradaraan</label>
                                <textarea name="desk_penyutradaraan" class="form-control"><?=$penilaian['desk_penyutradaraan'] ?></textarea>
                                <small class="text-danger"><?=form_error('desk_penyutradaraan')?></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="note">Note</label>
                            <textarea name="note" class="form-control"><?=ucfirst($penilaian['note']) ?></textarea>
                            <small class="text-danger"><?=form_error('note')?></small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
