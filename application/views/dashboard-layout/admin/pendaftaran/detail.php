<div class="container-fluid py-4">
	<div class="row">
		<div class="col-lg-12">
			<div class="card mb-4 pb-4">
				<div class="row m-4 mx-2 mt-3 mb-3">
					<div class="col">
						<h5>Detail Pendaftaran</h5>
					</div>
				</div>
				<div class="card-body">
					<?php foreach ($pendaftaran as $p) : ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">
									<table class="table">
										<?php if ($this->session->userdata('role') == 'peserta') { ?>
										<tr>
											<td>Status Pendaftaran</td>
											<td>: 
												<?php if($p['status'] == '1') { ?>
                                                    <span class="badge bg-success">Pendaftaran Diterima</span>
                                                <?php } else if($p['status'] == '2') { ?>
                                                    <span class="badge bg-danger">Pendaftaran Ditolak, <br> Silakan hubungi panitia.</span>
                                                <?php } else if($p['status'] == '0') { ?>
                                                    <span class="badge bg-warning">Pendaftaran Sedang Diseleksi</span>
                                                <?php } ?>
											</td>
										</tr>
										<?php } ?>
										<tr>
											<td class="fw-bold">Nama Komunitas</td>
											<td>: <?= ucfirst($p['nama_komunitas']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Nama Institusi / Umum</td>
											<td>: <?= ucfirst($p['nama_institusi']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Domisili Komunitas</td>
											<td>: <?= ucfirst($p['domisili_komunitas']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Email</td>
											<td>: <a href="mailto:<?=$p['email']?>" target="_blank"><?= ucfirst($p['email']) ?></a></td>
										</tr>
										<tr>
											<td class="fw-bold">Akun Instagram</td>
											<td>: <a href="https://www.instagram.com/<?=$p['instagram']?>" target="_blank"><?= ucfirst($p['instagram']) ?></a></td>
										</tr>
										<tr>
											<td class="fw-bold">No. HP / WA</td>
											<td>: <a href="http://wa.me/<?=$p['no_hp'] ?>" target="_blank"><?=$p['no_hp'] ?></a></td>
										</tr>
										<tr>
											<td class="fw-bold">Judul Film</td>
											<td>: <?= ucfirst($p['nama_film']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Tema Film</td>
											<td>: <?= ucfirst($p['tema_film']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Tahun Produksi</td>
											<td>: <?= ucfirst($p['tahun_produksi']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Sutradara Film</td>
											<td>: <?= ucfirst($p['sutradara']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Penulis Naskah</td>
											<td>: <?= ucfirst($p['penulis_naskah']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Editor Film</td>
											<td>: <?= ucfirst($p['editor_film']) ?></td>
										</tr>
										<tr>
											<td class="fw-bold">Link Trailer</td>
											<td>: <a href="<?=$p['link_trailer']?>" target="_blank"><?= ucfirst($p['link_trailer']) ?></a></td>
										</tr>
										<tr>
											<td class="fw-bold">Link Film</td>
											<td>: <a href="<?=$p['link_film']?>" target="_blank"><?= ucfirst($p['link_film']) ?></a></td>
										</tr>
										<tr>
											<td class="fw-bold">Link Folder Google Drive</td>
											<td>: <a href="<?=$p['link_gdrive']?>" target="_blank"><?= ucfirst($p['link_gdrive']) ?></a></td>
										</tr>
										<tr>
											<td class="fw-bold">Poster</td>
											<td>:
												<a href="<?= base_url('pendaftaran/download/') . $p['poster']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
													<i class="fa fa-download"></i> Download
												</a>
											</td>
										</tr>
										<tr>
											<td class="fw-bold">Sinopsis</td>
											<td>:
												<a href="<?= base_url('pendaftaran/download/') . $p['sinopsis']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
													<i class="fa fa-download"></i> Download
												</a>
											</td>
										</tr>
										<tr>
											<td class="fw-bold">Naskah</td>
											<td>:
												<a href="<?= base_url('pendaftaran/download/') . $p['naskah']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
													<i class="fa fa-download"></i> Download
												</a>
											</td>
										</tr>
										<tr>
											<td class="fw-bold">Biografi dan Filmografi Sutradara</td>
											<td>:
												<a href="<?= base_url('pendaftaran/download/') . $p['biografi_sutradara']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
													<i class="fa fa-download"></i> Download
												</a>
											</td>
										</tr>
										<tr>
											<td class="fw-bold">Surat Pernyataan Keorisinalitas</td>
											<td>:
												<a href="<?= base_url('pendaftaran/download/') . $p['surat_orisinalitas']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
													<i class="fa fa-download"></i> Download
												</a>
											</td>
										</tr>
										<tr>
											<td class="fw-bold">Surat Izin Penggunaan Lagu atau <br> Surat Pernyataan Orisinalitas Penciptaan Musik</td>
											<td>:
												<a href="<?= base_url('pendaftaran/download/') . $p['surat_izin']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
													<i class="fa fa-download"></i> Download
												</a>
											</td>
										</tr>
									</table>
								</div>
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
