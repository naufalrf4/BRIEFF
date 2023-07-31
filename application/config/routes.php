<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'LandingController';
$route['404_override'] = 'NotFoundController';
$route['translate_uri_dashes'] = FALSE;

// Landing Route
$route['beranda'] = 'LandingController/index';
$route['timeline'] = 'LandingController/timeline';
$route['roadmap'] = 'LandingController/roadmap';
$route['tentang-kami'] = 'LandingController/tentang_kami';
$route['kontak-kami'] = 'LandingController/kontak_kami';
$route['kirim-pesan'] = 'LandingController/kirimpesan';
$route['panduan'] = 'LandingController/panduan';
$route['panduan/download'] = 'LandingController/download_panduan';
// $route['vote'] = 'LandingController/vote';
// $route['live-streaming'] = 'LandingController/live';

// Auth Route
$route['login'] = 'AuthController/login';
$route['register'] = 'AuthController/register';
$route['logout'] = 'AuthController/logout';
// Auth Verify Route
$route['auth/verify'] = 'AuthController/verify';
$route['auth/verify/test'] = 'AuthController/verify_test';
// Auth Forgot Pass Route
$route['forgot-password'] = 'AuthController/forgot_password';
$route['auth/reset-password'] = 'AuthController/reset_password';
$route['auth/change-password'] = 'AuthController/changePassword';
$route['auth/forgot/test'] = 'AuthController/forgot_test';

// Admin Route
$route['dashboard'] = 'DashboardController/index';
$route['buku-panduan'] = 'DashboardController/buku_panduan';
$route['buku-panduan/download'] = 'DashboardController/download_buku_panduan'; 
$route['surat-penyataan'] = 'DashboardController/surat_pernyataan';
$route['surat-penyataan/download/pernyataan-hak-cipta-lagu'] = 'DashboardController/download_hak_cipta_lagu';
$route['surat-penyataan/download/pernyataan-orisinalitas-film'] = 'DashboardController/download_orisinil_film'; 

// Juri Route
$route['juri'] = 'AdminController/getJuri';
$route['juri/add'] = 'AdminController/addJuri';
$route['juri/delete/(:any)'] = 'AdminController/deleteJuri/$1';
$route['juri/edit/(:any)'] = 'AdminController/editJuri/$1';

// Peserta Route
$route['peserta'] = 'JuriController/peserta';
$route['peserta/detail/(:any)'] = 'JuriController/detail_peserta/$1'; 

// Penilaian Route
// $route['penilaian'] = 'JuriController/penilaian';
// $route['penilaian/beri-nilai/(:any)'] = 'JuriController/input/$1';
// $route['penilaian/edit-nilai/(:any)'] = 'JuriController/edit/$1';

// User Route
$route['user'] = 'AdminController/getUser';
$route['user/add'] = 'AdminController/addUser';
$route['user/delete/(:any)'] = 'AdminController/deleteUser/$1';
$route['user/edit/(:any)'] = 'AdminController/editUser/$1';

// Kontak Route
$route['kontak'] = 'KontakController/index';
$route['kontak/detail/(:any)'] = 'KontakController/detailPesan/$1';
$route['kontak/edit/(:any)'] = 'KontakController/editPesan/$1';
$route['kontak/delete/(:any)'] = 'KontakController/deletePesan/$1';
$route['kontak/baca-pesan/(:any)'] = 'KontakController/bacaPesan/$1';

// Rekap Nilai Route
// $route['rekap-nilai'] = 'DashboardController/rekap_nilai';
// $route['rekap-nilai/delete/(:any)'] = 'DashboardController/delete_rekap_nilai/$1';
// $route['rekap-nilai/detail/(:any)'] = 'DashboardController/detail_rekap_nilai/$1';
// $route['rekap-nilai/export'] = 'DashboardController/export_rekap_nilai';

// Profil Route
$route['profil'] = 'ProfilControlller/index';
$route['profil/edit'] = 'ProfilControlller/updateProfil';
$route['profil/delete'] = 'ProfilControlller/hapusProfil';

// Pendaftaran Route
$route['pendaftaran'] = 'PendaftaranController/pendaftaran';
$route['pendaftaran/add'] = 'PendaftaranController/add';
$route['pendaftaran/detail/(:any)'] = 'PendaftaranController/detail/$1';
$route['pendaftaran/edit/(:any)'] = 'PendaftaranController/edit/$1';
$route['pendaftaran/delete/(:any)'] = 'PendaftaranController/delete/$1';
$route['pendaftaran/download/(:any)'] = 'PendaftaranController/download_file/$1';
$route['pendaftaran/terima/(:any)'] = 'PendaftaranController/terimaPendaftaran/$1';
$route['pendaftaran/tolak/(:any)'] = 'PendaftaranController/tolakPendaftaran/$1';
$route['pendaftaran/lanjut-juri/(:any)'] = 'PendaftaranController/lanjutJuri/$1';
$route['pendaftaran/batal-juri/(:any)'] = 'PendaftaranController/batalJuri/$1';
$route['pendaftaran/hasil-seleksi'] = 'PendaftaranController/hasil_seleksi';

// Voting Route
// $route['data-vote'] = 'VotingController/data_vote';
// $route['vote/participation'] = 'VotingController/voting';
