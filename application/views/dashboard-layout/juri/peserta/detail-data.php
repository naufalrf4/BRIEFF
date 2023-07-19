<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="col-lg-12">
                        <h6>Tayangan Trailer</h6>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?= $this->Juri_M->getUrl($pendaftaran['link_trailer']); ?>" title="YouTube Video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="col-lg-12">
                        <h6>Tayangan Film</h6>
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/<?= $this->Juri_M->getUrl($pendaftaran['link_film']); ?>" title="YouTube Video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Detail Film</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nama Peserta :</strong> &nbsp; <?= $pendaftaran['nama'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Nama Komunitas :</strong> &nbsp; <?= $pendaftaran['nama_komunitas'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Nama Institusi/Umum :</strong> &nbsp; <?= $pendaftaran['nama_institusi'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Domisili Komunitas :</strong> &nbsp; <?= $pendaftaran['domisili_komunitas'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Judul Film :</strong> &nbsp; <?= $pendaftaran['nama_film'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Tema Film :</strong> &nbsp; <?= $pendaftaran['tema_film'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Tahun Produksi :</strong> &nbsp; <?= $pendaftaran['tahun_produksi'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Sutradara Film :</strong> &nbsp; <?= $pendaftaran['sutradara'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Penulis Naskah :</strong> &nbsp; <?= $pendaftaran['penulis_naskah'] ?></li>
                        <li class="list-group-item border-0 ps-0 mt-1 text-sm"><strong class="text-dark">Editor Film :</strong> &nbsp; <?= $pendaftaran['editor_film'] ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">File Pendukung Film</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0  text-sm">
                            <strong class="text-dark">Poster :</strong> &nbsp; <br> 
                            <img src="<?=base_url('uploads/'.$pendaftaran['poster'])?>" alt="Poster" class="img-fluid mt-2">
                        </li>
                        <li class="list-group-item border-0 ps-0  text-sm">
                            <strong class="text-dark">Sinopsis :</strong> &nbsp;
                            <a href="<?= base_url('pendaftaran/download/') . $pendaftaran['sinopsis']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </li>
                        <li class="list-group-item border-0 ps-0  text-sm">
                            <strong class="text-dark">Naskah :</strong> &nbsp;
                            <a href="<?= base_url('pendaftaran/download/') . $pendaftaran['naskah']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </li>
                        <li class="list-group-item border-0 ps-0  text-sm">
                            <strong class="text-dark">Biografi dan Filmografi Sutradara :</strong> &nbsp;
                            <a href="<?= base_url('pendaftaran/download/') . $pendaftaran['biografi_sutradara']; ?>" class="btn btn-outline-primary btn-sm" target="blank">
                                <i class="fa fa-download"></i> Download
                            </a>
                        </li>
                        <li class="list-group-item border-0 ps-0 pb-0 pe-0">
                            <button type="button" class="btn btn-primary btn-sm float-end" onclick="history.back(-1)">Kembali</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>