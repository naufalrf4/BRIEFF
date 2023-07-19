<div class="container-fluid py-4">
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-4 pb-4">
				<div class="row m-4 mx-2 mt-3 mb-3">
					<div class="col-lg-12 d-flex justify-content-between">
						<h5 class="text-left">Ubah Data Pendaftaran</h5>

					</div>
				</div>
				<div class="card-body pt-0 pb-2">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="hidden" name="id" value="<?= $pendaftaran['id'] ?>">
							<input type="hidden" name="id_user" value="<?= $id ?>">
							<label for="nama_komunitas">Nama Komunitas</label>
							<input type="text" name="nama_komunitas" class="form-control" value="<?= $pendaftaran['nama_komunitas'] ?>">
							<small class="text-danger"><?= form_error('nama_komunitas') ?></small>
						</div>
						<div class="form-group">
							<label for="nama_institusi">Nama Institusi / Umum</label>
							<input type="text" name="nama_institusi" class="form-control" value="<?= $pendaftaran['nama_institusi'] ?>">
							<small class="text-danger"><?= form_error('nama_institusi') ?></small>
						</div>
						<div class="form-group">
							<label for="domisili_komunitas">Domisili Komunitas</label>
							<input type="text" name="domisili_komunitas" class="form-control" value="<?= $pendaftaran['domisili_komunitas'] ?>">
							<small class="text-danger"><?= form_error('domisili_komunitas') ?></small>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" value="<?= $pendaftaran['email'] ?>">
							<small class="text-danger"><?= form_error('email') ?></small>
						</div>
						<div class="form-group">
							<label for="instagram">Username Instagram <small class="text-danger">(Tanpa @)</small></label>
							<input type="text" name="instagram" class="form-control" value="<?= $pendaftaran['instagram'] ?>">
							<small class="text-danger"><?= form_error('instagram') ?></small>
						</div>
						<div class="form-group">
							<label for="no_hp">No. HP / WA <small class="text-danger">(Contoh : 62852****)</small></label>
							<input type="number" name="no_hp" class="form-control" value="<?= $pendaftaran['no_hp'] ?>">
							<small class="text-danger"><?= form_error('no_hp') ?></small>
						</div>
						<div class="form-group">
							<label for="nama_film">Judul Film</label>
							<input type="text" name="nama_film" class="form-control" value="<?= $pendaftaran['nama_film'] ?>">
							<small class="text-danger"><?= form_error('nama_film') ?></small>
						</div>
						<div class="form-group">
							<label for="tema_film">Tema Film</label>
							<input type="text" name="tema_film" class="form-control" value="<?= $pendaftaran['tema_film'] ?>">
							<small class="text-danger"><?= form_error('tema_film') ?></small>
						</div>
						<div class="form-group">
							<label for="tahun_produksi">Tahun Produksi</label>
							<input type="text" name="tahun_produksi" class="form-control" value="<?= $pendaftaran['tahun_produksi'] ?>">
							<small class="text-danger"><?= form_error('tahun_produksi') ?></small>
						</div>
						<div class="form-group">
							<label for="sutradara">Sutradara Film</label>
							<input type="text" name="sutradara" class="form-control" value="<?= $pendaftaran['sutradara'] ?>">
							<small class="text-danger"><?= form_error('sutradara') ?></small>
						</div>
						<div class="form-group">
							<label for="penulis_naskah">Penulis Naskah</label>
							<input type="text" name="penulis_naskah" class="form-control" value="<?= $pendaftaran['penulis_naskah'] ?>">
							<small class="text-danger"><?= form_error('penulis_naskah') ?></small>
						</div>
						<div class="form-group">
							<label for="editor_film">Editor Film</label>
							<input type="text" name="editor_film" class="form-control" value="<?= $pendaftaran['editor_film'] ?>">
							<small class="text-danger"><?= form_error('editor_film') ?></small>
						</div>
						<div class="form-group">
							<label for="link_trailer">Link Trailer <small class="text-danger">(Youtube)</small></label>
							<input type="text" name="link_trailer" class="form-control" value="<?= $pendaftaran['link_trailer'] ?>">
							<small class="text-danger"><?= form_error('link_trailer') ?></small>
						</div>
						<div class="form-group">
							<label for="link_film">Link Film <small class="text-danger">(Youtube)</small></label>
							<input type="text" name="link_film" class="form-control" value="<?= $pendaftaran['link_film'] ?>">
							<small class="text-danger"><?= form_error('link_film') ?></small>
						</div>
						<div class="form-group">
							<label for="link_gdrive">Link Folder Google Drive</label>
							<input type="text" name="link_gdrive" class="form-control" value="<?= $pendaftaran['link_gdrive'] ?>">
							<small class="text-danger"><?= form_error('link_gdrive') ?></small>
						</div>
						<h5>Upload File</h5>
						<p class="text-danger text-sm">Catatan nama file : nama komunitas-judul film-nama file</p>
						<div class="form-group">
							<label for="poster">Poster <small class="text-danger">(PNG/JPG)</small></label>
							<input type="file" name="poster" class="form-control">
							<input type="hidden" name="tmp_poster" value="<?= $pendaftaran['poster'] ?>">
							<small class="text-danger"><?= form_error('poster') ?></small>
						</div>
						<div class="form-group">
							<label for="sinopsis">File Sinopsis <small class="text-danger">(PDF)</small></label>
							<input type="file" name="sinopsis" class="form-control">
							<input type="hidden" name="tmp_sinopsis" value="<?= $pendaftaran['sinopsis'] ?>">
							<small class="text-danger"><?= form_error('sinopsis') ?></small>
						</div>
						<div class="form-group">
							<label for="naskah">File Naskah <small class="text-danger">(PDF)</small></label>
							<input type="file" name="naskah" class="form-control">
							<input type="hidden" name="tmp_naskah" value="<?= $pendaftaran['naskah'] ?>">
							<small class="text-danger"><?= form_error('naskah') ?></small>
						</div>
						<div class="form-group">
							<label for="biografi_sutradara">Biografi dan Filmografi Sutradara <small class="text-danger">(PDF)</small></label>
							<input type="file" name="biografi_sutradara" class="form-control">
							<input type="hidden" name="tmp_biografi_sutradara" value="<?= $pendaftaran['biografi_sutradara'] ?>">
							<small class="text-danger"><?= form_error('biografi_sutradara') ?></small>
						</div>
						<h5>Upload File Surat Pernyataan</h5>
						<p class="text-danger text-sm">Catatan : template file surat bisa Anda download di <a href="<?=site_url('surat-penyataan');?>">halaman ini</a></p>
						<div class="form-group">
							<label for="surat_orisinalitas">Surat Pernyataan Keorisinalitas <small class="text-danger">(PDF)</small></label>
							<input type="file" name="surat_orisinalitas" class="form-control">
							<input type="hidden" name="tmp_surat_orisinalitas" value="<?= $pendaftaran['surat_orisinalitas'] ?>">
							<small class="text-danger"><?= form_error('surat_orisinalitas') ?></small>
						</div>
						<div class="form-group">
							<label for="surat_izin">Surat Izin Penggunaan Lagu atau Surat Pernyataan Orisinalitas Penciptaan Musik <small class="text-danger">(PDF)</small></label>
							<input type="file" name="surat_izin" class="form-control">
							<input type="hidden" name="tmp_surat_izin" value="<?= $pendaftaran['surat_izin'] ?>">
							<small class="text-danger"><?= form_error('surat_izin') ?></small>
						</div>

						<div class="form-group">
							<a type="button" href="<?= base_url('pendaftaran') ?>" class="btn btn-outline-success btn-sm float-start">
								<i class="fa fa-back"></i> Kembali
							</a>
							<button class="btn btn-primary btn-sm float-end" type="submit">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div iv>
