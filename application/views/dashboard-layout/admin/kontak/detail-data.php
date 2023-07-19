<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col">
                        <h5>Detail Pesan</h5>
                    </div>
                </div>
                <div class="card-body">
                    <?php foreach ($contact as $ctc) : ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table">
                                    <tr>
                                        <td class="fw-bold">Nama Pengirim</td>
                                        <td>: <?= ucfirst($ctc->nama) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Email</td>
                                        <td>: <?= ucfirst($ctc->email) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">No. HP</td>
                                        <td>: <?= $ctc->no_hp ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Isi Pesan : </td>
                                    </tr>
                                </table>
                                <p class="text-sm ps-2">
                                    <?=$ctc->pesan?>
                                </p>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <a href="mailto:<?=ucfirst($ctc->email);?>" class="btn btn-sm btn-primary">Balas Email</a>
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
