<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h5 class="text-left">Rekap Nilai</h5>
                        <div class="text-right">
                            <a href="<?=site_url('rekap-nilai/export')?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-print fa-sm"></i> Export Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-bordered" id="datatable">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Penilai</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Film</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Nilai</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Rerata</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Catatan</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Penilaian</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Detail</th>
                                    <?php if ($this->session->userdata('role') == 'admin') { ?>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody class="mb-4">
                                <?php 
                                $no = 1;
                                foreach ($rekapnilai as $data) : ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($data->nama) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($data->nama_film) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 text-center"><?=number_format($data->total_nilai,2, '.', ''); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0 text-center"><?=number_format($data->total_rerata,2, '.', ''); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst(character_limiter($data->note,50)) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= date('D, d-m-Y', strtotime($data->created_at)) ?></p>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('rekap-nilai/detail/').$data->id_nilai; ?>"><span class="btn-primary badge badge-sm">Lihat Detail</span></a>
                                        </td>
                                        <?php if ($this->session->userdata('role') == 'admin') { ?>
                                        <td class="align-middle text-center text-sm">
                                            <a href="<?php echo site_url('rekap-nilai/delete/').$data->id_nilai; ?>" class="btn btn-sm btn-danger" id="btn-hapus"><i class="fas fa-trash"></i></a>
                                        </td>
                                        <?php } ?>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
