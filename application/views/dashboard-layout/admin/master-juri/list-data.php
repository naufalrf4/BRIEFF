<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col-lg-12 d-flex justify-content-between">
                        <h5 class="text-left">Daftar Juri dan Kurator</h5>
                        <div class="text-right">
                            <a href="<?=site_url('juri/add')?>" class="btn btn-primary btn-sm mt-3"><i class="fas fa-plus fa-sm"></i> Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table table-bordered" id="datatable">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="mb-4">
                                <?php 
                                $no = 1;
                                foreach ($MJuri as $juri) : ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($juri->nama) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($juri->username) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($juri->email) ?></p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($juri->role) ?></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a href="<?php echo site_url('juri/edit/').$juri->id; ?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>

                                            <a href="<?php echo site_url('juri/delete/').$juri->id; ?>" class="btn btn-sm btn-danger" id="btn-hapus"><i class="fas fa-trash"></i></a>
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
