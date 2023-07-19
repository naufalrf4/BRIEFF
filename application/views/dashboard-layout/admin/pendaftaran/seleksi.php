<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h5 class="text-left">Hasil Seleksi</h5>
                        <div class="text-right">
                            <a href="<?= site_url('pendaftaran') ?>" class="btn btn-primary btn-sm mt-3">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="datatable-buttons">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pendaftar</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Komunitas</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Film</th>
                                </tr>
                            </thead>
                            <tbody class="mb-4">
                                <?php
                                $no = 1;
                                foreach ($pendaftaran as $p) : ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center ">
                                                    <h6 class="mb-0 ms-2 text-sm "><?= $p['nama']; ?></h6>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $p['nama_komunitas']; ?></span>
                                        </td>

                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold"><?= $p['nama_film']; ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>