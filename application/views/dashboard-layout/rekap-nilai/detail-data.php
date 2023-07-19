<div class="container-fluid py-4">
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-4 pb-4">
				<div class="row m-4 mx-2 mt-3 mb-3">
					<div class="col">
						<h5>Detail Nilai</h5>
					</div>
				</div>
				<div class="card-body">
					<?php foreach ($penilaian as $p) : ?>
						<div class="row">
							<div class="col-lg-12">
								<form>
									<div class="form-group">
										<label>Nama Penilai</label>
										<input type="text" class="form-control" value="<?= ucfirst($p['nama']) ?>" readonly>
									</div>

									<h5>Data Film</h5>
									<div class="form-group">
										<label>Nama Film</label>
										<input type="text" class="form-control" value="<?= ucfirst($p['nama_film']) ?>" readonly>
									</div>
									<div class="form-group">
										<label>Tim Produksi</label>
										<input type="text" class="form-control" value="<?= ucfirst($p['nama_komunitas']) ?>" readonly>
									</div>
									<div class="form-group">
										<label>Tema Film</label>
										<input type="text" class="form-control" value="<?= ucfirst($p['tema_film']) ?>" readonly>
									</div>

									<h5>Naskah</h5>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="teknik_penulisan">Teknik Penulisan <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="teknik_penulisan" class="form-control" value="<?= number_format($p['teknik_penulisan']) ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_teknik_penulisan">Deskripsi Teknik Penulisan</label>
											<textarea name="desk_teknik_penulisan" class="form-control" readonly><?=ucfirst($p['desk_teknik_penulisan']) ?></textarea>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="keutuhan_ide">Keutuhan Ide <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="keutuhan_ide" class="form-control" value="<?=$p['keutuhan_ide'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_keutuhan_ide">Deskripsi Keutuhan Ide</label>
											<textarea name="desk_keutuhan_ide" class="form-control" readonly><?=ucfirst($p['desk_keutuhan_ide']) ?></textarea>
										</div>
									</div>

									<h5>Akting</h5>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="mimik">Mimik (penghayatan pemain/pemeran) <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="mimik" class="form-control" value="<?=$p['mimik'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_mimik">Deskripsi Mimik</label>
											<textarea name="desk_mimik" class="form-control" readonly><?=ucfirst($p['desk_mimik']) ?></textarea>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="karakter">Karakter <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="karakter" class="form-control" value="<?=$p['karakter'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_karakter">Deskripsi Karakter</label>
											<textarea name="desk_karakter" class="form-control" readonly><?=$p['desk_karakter'] ?></textarea>
										</div>
									</div>

									<h5>Teknik Pengambilan Gambar</h5>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="angel">Angel (sudut kamera) <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="angel" class="form-control" value="<?=$p['angel'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_angel">Deskripsi Angel</label>
											<textarea name="desk_angel" class="form-control" readonly><?=ucfirst($p['desk_angel']) ?></textarea>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="style">Style (pencahayaan, ruang dan waktu) <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="style" class="form-control" value="<?=$p['style'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_style">Deskripsi Style</label>
											<textarea name="desk_style" class="form-control" readonly><?=ucfirst($p['desk_style']) ?></textarea>
										</div>
									</div>

									<h5>Penataan Artistik</h5>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="kualitas_gambar">Kualitas Gambar <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="kualitas_gambar" class="form-control" value="<?=$p['kualitas_gambar'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_kualitas_gambar">Deskripsi Kualitas Gambar</label>
											<textarea name="desk_kualitas_gambar" class="form-control" readonly><?=ucfirst($p['desk_kualitas_gambar']) ?></textarea>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="setting">Setting & Property <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="setting" class="form-control" value="<?=$p['setting'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_setting">Deskripsi Setting & Property</label>
											<textarea name="desk_setting" class="form-control" readonly><?=ucfirst($p['desk_setting']) ?></textarea>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="makeup">Make Up & Costume <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="makeup" class="form-control" value="<?=$p['makeup'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_makeup">Deskripsi Make Up & Costume</label>
											<textarea name="desk_makeup" class="form-control" readonly><?=ucfirst($p['desk_makeup']) ?></textarea>
										</div>
									</div>

									<h5>Teknik Editing</h5>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="style_editing">Style Editing <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="style_editing" class="form-control" value="<?=$p['style_editing'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_style_editing">Deskripsi Style Editing</label>
											<textarea name="desk_style_editing" class="form-control" readonly><?=ucfirst($p['desk_style_editing']) ?></textarea>
										</div>
									</div>

									<h5>Lainnya</h5>
									<div class="row mb-2">
										<div class="col-lg-6">
											<label for="penyutradaraan">Penyutradaraan <small class="text-danger">(Range nilai 10 - 100)</small></label>
											<input type="number" name="penyutradaraan" class="form-control" value="<?=$p['penyutradaraan'] ?>" readonly>
										</div>
										<div class="col-lg-6">
											<label for="desk_penyutradaraan">Deskripsi Penyutradaraan</label>
											<textarea name="desk_penyutradaraan" class="form-control" readonly><?=$p['desk_penyutradaraan'] ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="note">Note</label>
										<textarea name="note" class="form-control" readonly><?=ucfirst($p['note']) ?></textarea>
									</div>
									<div class="form-group">
										<label for="total_nilai">Total Nilai</label>
										<input type="number" name="total_nilai" class="form-control" value="<?=number_format($p['total_nilai'],2, '.', ''); ?>" readonly>
									</div>
									<div class="form-group">
										<label for="total_rerata">Nilai Rerata</label>
										<input type="number" name="total_rerata" class="form-control" value="<?=number_format($p['total_rerata'],2, '.', ''); ?>" readonly>
									</div>
								</form>
							</div>
							<div class="col-lg-12 mt-4">
								<button type="button" onclick="history.back(-1)" class="btn btn-outline-success btn-sm">
									<i class="fa fa-back"></i> Kembali
								</button>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
