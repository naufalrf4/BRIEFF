<div class="container-fluid py-4">
    <div class="row">
        <?php
        $tgl_daftar = "2023-07-11";
        $tgl_skrg = date("Y-m-d");

        if($tgl_daftar >= $tgl_skrg) {
        ?>
        <div class="col-lg-12">
            <div class="alert alert-danger text-white" role="alert">
                Mohon maaf, pendaftaran film dimulai pada tanggal 25 Juli 2023.
            </div>
        </div>
        <?php
        }
        $verif = $this->db->from("pendaftaran")->where('id_user', $this->session->userdata('id'))->get()->num_rows();

        if($verif >= '2') {
        ?>
        <div class="col-lg-12">
            <div class="alert alert-danger text-white" role="alert">
                Anda telah sampai dibatas maksimal pendaftaran! (2 submission)
            </div>
        </div>
        <?php } ?>
        <div class="col-lg-12 d-flex justify-content-between">
            <h5 class="text-left">Pendaftaran Film</h5>
            <?php
                        if ($tgl_daftar >= $tgl_skrg) {
                        } else {
                            if($verif < '2') {
                        ?>
            <?php if($this->session->userdata('role') != "kurator") { ?>
            <div class="text-right">
                <a href="<?= site_url('pendaftaran/add') ?>" class="btn btn-primary btn-sm mt-3"><i
                        class="fas fa-plus fa-sm"></i> Daftar</a>
            </div>
            <?php } ?>
            <?php } } ?>

            <?php if($this->session->userdata('role') == "admin") { ?>
            <div class="text-right">
                <a href="<?= site_url('pendaftaran/hasil-seleksi') ?>" class="btn btn-primary btn-sm mt-3">Hasil Seleksi</a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center mb-0" id="datatable">
                <thead class="text-center">
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                            Pendaftar</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Nama Komunitas</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Judul Film</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Status</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Detail</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                            Aksi</th>
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

                        <td class="align-middle text-center">
                            <?php if ($this->session->userdata('role') == 'admin') { ?>
                            <?php if($p['status'] == '0') { ?>
                            <form action="<?php echo site_url('pendaftaran/terima/').$p['id']; ?>" method="post">
                                <input type="hidden" name="id" value="<?=$p['id']?>">
                                <button class="btn btn-sm btn-success" id="terima-pendaftaran">Terima</button>
                            </form>
                            <form action="<?php echo site_url('pendaftaran/tolak/').$p['id']; ?>" method="post">
                                <input type="hidden" name="id" value="<?=$p['id']?>">
                                <button class="btn btn-sm btn-danger" id="tolak-pendaftaran">Tolak</button>
                            </form>
                            <?php } else { ?>
                            <?php if($p['status'] == '1') { ?>
                            <p><span class="btn-success btn-sm badge-sm">Pendaftaran Diterima</span></p>
                            <form action="<?php echo site_url('pendaftaran/tolak/').$p['id']; ?>" method="post">
                                <input type="hidden" name="id" value="<?=$p['id']?>">
                                <button class="btn btn-sm btn-danger" id="tolak-pendaftaran">Batalkan
                                    Terima</button>
                            </form>
                            <?php } else if($p['status'] == '2') { ?>
                            <p><span class="btn-danger btn-sm badge-sm">Pendaftaran Ditolak</span></p>
                            <form action="<?php echo site_url('pendaftaran/terima/').$p['id']; ?>" method="post">
                                <input type="hidden" name="id" value="<?=$p['id']?>">
                                <button class="btn btn-sm btn-success" id="terima-pendaftaran">Batalkan
                                    Tolak</button>
                            </form>
                            <?php } else if($p['status'] == '3') { ?>
                            <span class="badge bg-success badge-sm">Penilaian Juri</span>
                            <?php } ?>
                            <?php } ?>
                            <?php } else if ($this->session->userdata('role') == 'kurator') { ?>
                            <?php if($p['status'] == '1') { ?>
                            <form action="<?php echo site_url('pendaftaran/lanjut-juri/').$p['id']; ?>" method="post">
                                <input type="hidden" name="id" value="<?=$p['id']?>">
                                <button class="btn btn-sm btn-success" id="terima-pendaftaran">Lanjut ke
                                    Juri</button>
                            </form>
                            <?php } else if($p['status'] == '2') { ?>
                            <span class="badge bg-danger badge-sm">Pendaftaran Ditolak</span>
                            <?php } else if($p['status'] == '0') { ?>
                            <span class="badge bg-warning badge-sm">Pendaftaran Sedang di Seleksi</span>
                            <?php } else if($p['status'] == '3') { ?>
                            <form action="<?php echo site_url('pendaftaran/batal-juri/').$p['id']; ?>" method="post">
                                <input type="hidden" name="id" value="<?=$p['id']?>">
                                <button class="btn btn-sm btn-danger" id="tolak-pendaftaran">Batalkan Lanjut
                                    ke Juri</button>
                            </form>
                            <?php } ?>
                            <?php } else { ?>
                            <?php if($p['status'] == '1') { ?>
                            <span class="badge bg-success badge-sm">Penilaian Kurator</span>
                            <?php } else if($p['status'] == '2') { ?>
                            <span class="badge bg-danger badge-sm">Pendaftaran Ditolak, <br> Silakan hubungi
                                panitia.</span>
                            <?php } else if($p['status'] == '0') { ?>
                            <span class="badge bg-warning badge-sm">Pendaftaran Sedang Diseleksi</span>
                            <?php } else if($p['status'] == '3') { ?>
                            <span class="badge bg-primary badge-sm">Penilaian Juri</span>
                            <?php } ?>
                            <?php } ?>
                        </td>

                        <td class="align-middle text-center text-sm">
                            <a href="<?= base_url('pendaftaran/detail/') . $p['id']; ?>"
                                class="btn btn-sm btn-primary">Detail</a>
                        </td>

                        <td class="align-middle text-center text-sm">
                            <?php if ($this->session->userdata('role') == 'admin') { ?>
                            <a href="<?= base_url('pendaftaran/edit/') . $p['id']; ?>" class="btn btn-sm btn-success"><i
                                    class="fas fa-edit"></i></a>

                            <a href="<?= base_url('pendaftaran/delete/') . $p['id']; ?>" class="btn btn-sm btn-danger"
                                id="btn-hapus"><i class="fas fa-trash"></i></a>
                            <?php } else if ($this->session->userdata('role') == 'kurator') { ?>
                            <span class="badge bg-danger badge-sm">Tidak ada aksi</span>
                            <?php } else { ?>
                            <?php if($p['status'] == '1') { ?>
                            <span class="badge bg-danger badge-sm">Tidak ada aksi</span>
                            <?php } else if($p['status'] == '2') { ?>
                            <span class="badge bg-danger badge-sm">Tidak ada aksi</span>
                            <?php } else if($p['status'] == '3') { ?>
                            <span class="badge bg-danger badge-sm">Tidak ada aksi</span>
                            <?php } else if($p['status'] == '0') { ?>
                            <a href="<?= base_url('pendaftaran/edit/') . $p['id']; ?>" class="btn btn-sm btn-success"><i
                                    class="fas fa-edit"></i></a>
                            <?php } ?>
                            <?php } ?>
                        </td>

                    </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php if ($this->session->userdata('role') == 'admin') { ?>
<div class="card mb-4 pb-4">
    <div class="row m-4 mx-2 mt-3">
        <div class="col-lg-12">
            <h5 class="text-left">Hasil Pendaftaran</h5>
        </div>
    </div>
    <div class="card-body">
        <div class="col-lg-12">
            <?php
                            $seleksi = $this->db->from("pendaftaran")->where('status', '0')->get()->num_rows();
                            $diterima = $this->db->from("pendaftaran")->where('status', '1')->get()->num_rows();
                            $ditolak = $this->db->from("pendaftaran")->where('status', '2')->get()->num_rows();
                            $semua = $this->db->from("pendaftaran")->get()->num_rows();
                            $juri = $this->db->from("pendaftaran")->where('status', '3')->get()->num_rows();
                        ?>
            <p>
                Berikut adalah rincian dari pendaftaran yang terdapat di dalam sistem :
            <ul>
                <li>Menunggu seleksi : <?=number_format($seleksi)?></li>
                <li>Pendaftaran diterima <b>(seleksi kurator)</b> : <?=number_format($diterima)?></li>
                <li>Pendaftaran diterima <b>(seleksi juri)</b> : <?=number_format($juri)?></li>
                <li>Pendaftaran ditolak : <?=number_format($ditolak)?></li>
                <li><b>Total pendaftaran : <?=number_format($semua)?></b></li>
            </ul>
            </p>
        </div>
    </div>
</div>
<?php } ?>
</div>
</div>