<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col">
                        <h5>Daftar Pesan</h5>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-bordered" id="datatable">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pengirim</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. HP</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Detail</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="mb-4">
                                <?php
                                $no = 1;
                                foreach ($contact as $ctc) : ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($ctc->nama) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($ctc->email) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= $ctc->no_hp ?></p>
                                        </td>
                                        <td class="text-center">
                                            <a href="<?php echo site_url('kontak/detail/').$ctc->id; ?>"><span class="btn-primary badge badge-sm">Lihat Detail</span></a>
                                        </td>
                                        <td class="text-center">
                                            <?php if($ctc->status == '0'){ ?>
                                            <form action="<?php echo site_url('kontak/baca-pesan/').$ctc->id; ?>" method="post">
                                                <input type="hidden" name="id" value="<?=$ctc->id?>">
                                                <button class="btn-warning badge badge-sm" id="baca-pesan">Belum Dibaca</button>
                                            </form>
                                            <?php } else { ?>
                                            <span class="btn-success badge badge-sm">Terbaca</span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo site_url('kontak/edit/').$ctc->id; ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>

                                            <a href="<?php echo site_url('kontak/delete/').$ctc->id; ?>" class="btn btn-sm btn-danger" id="btn-hapus"><i class="fas fa-trash"></i></a>
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
