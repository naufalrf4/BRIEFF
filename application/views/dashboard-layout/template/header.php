<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/logo-round.png') ?>">
  <title><?= $title ?> - BRIEFF 6.0</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="<?= base_url('assets/dashboard-new/css/nucleo-icons.css'); ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/dashboard-new/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="<?= base_url('assets/dashboard-new/css/nucleo-svg.css'); ?>" rel="stylesheet" />
  <link id="pagestyle" href="<?= base_url('assets/dashboard-new/css/soft-ui-dashboard.css?v=1.0.3'); ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?=base_url('assets/dashboard/css/sweetalert2.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/dashboard/plugins/datatables/dataTables.bootstrap4.min.css')?>">
  <link href="<?=base_url('assets/dashboard/plugins/datatables/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?=base_url('assets/dashboard/plugins/select2/select2.min.css')?>">
  <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script> 
  <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

  <style>
    iframe {
      border-radius: 20px;
      margin: auto;
    }
  </style>
</head>
<body class="g-sidenav-show  bg-gray-100">
    <div id="flash" data-flash="<?=$this->session->flashdata('success')?>"></div>
    <div id="flash-error" data-flash="<?=$this->session->flashdata('error')?>"></div>