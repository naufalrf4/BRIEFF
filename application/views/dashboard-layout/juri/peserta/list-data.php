<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col">
                        <h5>Daftar Peserta</h5>
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
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Daftar</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="mb-4">
                                <?php
                                $no = 1;
                                foreach ($pendaftaran as $pndftr) : ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 ms-2 text-sm"><?= ucfirst($pndftr['nama']) ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($pndftr['nama_film']) ?></p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-xs text-xs font-weight-bold"><?= date('D, d-m-Y', strtotime($pndftr['tgl_upload'])) ?></span>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <a href="<?= base_url() ?>peserta/detail/<?= $pndftr['id'] ?>"><span class="badge badge-sm bg-primary">Lihat Detail</span></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>