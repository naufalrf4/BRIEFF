<?php
    require 'assets\fusioncharts\integrations\php\samples\includes\fusioncharts.php';
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col">
                        <h5>Grafik Voting</h5>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <?php 
                    $votes = $this->db->query('SELECT *, COUNT(voting.id) AS jml_vote FROM voting JOIN user ON user.id=voting.id_user GROUP BY(voting.nama_film)')->result_array();

                    if ($votes) {
                        $arrData = array(
                            "chart" => array(
                                "caption" => "Rata-Rata Vote Berdasarkan Nama Film",
                                "showValues" => "0",
                                "theme" => "fusion"
                            )
                        );

                        $arrData["data"] = array();

                        foreach($votes as $votes) {
                            array_push($arrData["data"], array(
                                "label" => $votes['nama_film'],
                                "value" => $votes['jml_vote']
                            )
                        );
                        }

                        $jsonEncodedData = json_encode($arrData);

                        $columnChart = new FusionCharts("column2D", "myFirstChart" , 700, 400, "chart-1", "json", $jsonEncodedData);

                        $columnChart->render();
                    }
                    ?>
                    <div class="table-responsive p-0">
                        <div class="col-lg-8 offset-lg-2">
                            <div id="chart-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4 pb-4">
                <div class="row m-4 mx-2 mt-3 mb-3">
                    <div class="col">
                        <h5>Data Voting</h5>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2 ">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0" id="datatable-buttons">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pemilih</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Film</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Vote</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($voting as $vote) : ?>
                                    <tr>
                                        <td><?=$no++;?></td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 ms-2 text-sm"><?= ucfirst($vote->nama); ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0"><?= ucfirst($vote->nama_film); ?></p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-xs text-xs font-weight-bold"><?= date('D, d-m-Y', strtotime($vote->created_at)) ?></span>
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