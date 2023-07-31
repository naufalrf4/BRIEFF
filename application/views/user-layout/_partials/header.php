<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?> - BRIEFF 6.0</title>
    <meta name="description" content="BRIEFF (Bogor Independent Film Festival 6.0) merupakan program kerja yang diselenggarakan oleh komunitas Agrimovie Sekolah Vokasi IPB University pada tahun 2023."/>
    <meta name="author" content="BRIEFF"/>
    <meta name="keywords" content="BRIEFF, Brieff, Brieff 6, BRIEFF 6, Agrimovie, Film Festival, Bogor Independent Film Festival, Sekolah Vokasi IPB, SV IPB, Bogor, Kota Bogor">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="<?=base_url('assets/img/logo/logo-round.png')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/main-white.css')?>">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/dashboard/css/sweetalert2.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/dashboard/plugins/select2/select2.min.css')?>">
    <style>
        iframe {
            border-radius: 20px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div id="flash" data-flash="<?=$this->session->flashdata('success')?>"></div>
    <div id="flash-error" data-flash="<?=$this->session->flashdata('error')?>"></div>