<div class="container-fluid py-4">
    <div class="row">
        <?php if ($this->session->userdata("role") == "admin") { ?>
        <div class="col-lg-12">
            <div class="alert alert-danger text-white" role="alert">
              Data penilaian hanya boleh diisi oleh Kurator dan Juri. Untuk melihat data nilai silakan ke halaman <a href="<?=site_url('rekap-nilai')?>" class="text-white">Rekap Nilai</a>.
          </div>
        </div>
        <?php } else { ?>
        <div class="col-lg-12">
            <div class="alert alert-danger text-white" role="alert">
              Note : Untuk menghapus data penilaian silakan hubungi panitia <a href="http://wa.me/6281398347045?text=Halo,%20saya%20ingin%20menghapus%20data%20penilaian" class="text-white" target="_blank">0813-9834-7045 (Desy)</a></a>.
          </div>
        </div>
        <?php } ?>
        <div class="col-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col">
                        <h5>Data Penilaian</h5>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2 ">
                    <div class="table-responsive p-0">

                        <table class="table align-items-center mb-0" id="datatable">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Peserta</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Film</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Nilai</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nilai Rerata</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pendaftaran as $pndftr) : ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 ms-2 text-sm"><?= ucfirst($pndftr['nama']); ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($pndftr['nama_film']); ?></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <?php 
                                            $nilaifilm = $this->Juri_M->getNilaiFilm($pndftr['id']);
                                            $reratafilm = $this->Juri_M->getNilaiRata($pndftr['id']);

                                            if ($nilaifilm == "") {
                                            ?>
                                                <span class="badge badge-sm bg-gradient-danger">Belum dinilai</span>
                                            <?php } else { ?>
                                                <p class="text-xs font-weight-bold mb-0"><b><?=number_format($nilaifilm,2, '.', ''); ?></b></p>
                                            <?php } ?>
                                        </td>

                                        <?php
                                        $penilaian = $this->db->from("penilaian")->where('id_user', $this->session->userdata('id'))->where('id_pendaftaran', $pndftr['id'])->get()->num_rows();

                                        if ($penilaian == '0') {
                                        ?>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-danger">Belum dinilai</span>
                                            </td>
                                        <?php } else { ?>
                                            <td class="align-middle text-center">
                                                <p class="text-xs font-weight-bold mb-0"><b><?=number_format($reratafilm,2, '.', ''); ?></b></p>
                                            </td>
                                        <?php } ?>

                                        <td class="align-middle text-center text-sm">
                                            <a href="<?= base_url() ?>peserta/detail/<?=$pndftr['id'] ?>"><span class="badge badge-sm bg-warning">Detail Peserta</span></a>
                                        </td>

                                        <?php if ($this->session->userdata("role") != "admin") { ?>
                                        <?php if ($penilaian > 0) :  ?>
                                            <td class="align-middle text-center text-sm">
                                                <a href="<?= base_url() ?>penilaian/edit-nilai/<?= $pndftr['id'] ?>"><span class="badge badge-sm bg-success">Ubah Nilai</span></a>
                                            </td>
                                        <?php else : ?>
                                            <td class="align-middle text-center text-sm">
                                                <a href="<?= base_url() ?>penilaian/beri-nilai/<?= $pndftr['id'] ?>"><span class="badge badge-sm bg-primary">Beri Nilai</span></a>
                                            </td>
                                        <?php endif; ?>
                                        <?php } else { ?>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-danger">Tidak Tersedia</span>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>