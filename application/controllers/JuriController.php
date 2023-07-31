<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JuriController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role') == NULL) {
			redirect('login');
		}
	}

	public function index()
	{
		redirect('dashboard');
	}

	public function peserta()
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Peserta';

			$data['pendaftar'] = $this->Juri_M->getPendaftar();
			$data['peserta'] = $this->Juri_M->getPeserta();
			$data['jumlahPeserta'] = $this->Juri_M->countPeserta();
			$data['pendaftaran'] = $this->Juri_M->getDataPendaftaran();

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/juri/peserta/list-data', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}

	public function detail_peserta($id)
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Detail Peserta';
			$data['pendaftaran'] = $this->Juri_M->getDataPendaftaran();

			foreach ($data['pendaftaran'] as $pndftr) {
				if ($pndftr['id'] == $id) {
					$data['pendaftaran'] = $pndftr;
					break;
				}
			}

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/juri/peserta/detail-data', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}

	public function penilaian()
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Penilaian';
			$nama = $this->session->userdata('nama');
			$id = $this->session->userdata('id');
			$data['nama'] = $nama;
			$data['id'] = $id;

			$data['pendaftaran'] = $this->Juri_M->getDataPendaftaran();
			$data['penilaian'] = $this->Juri_M->getPenilaian();

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar', $data);
			$this->load->view('dashboard-layout/template/navbar', $data);
			$this->load->view('dashboard-layout/juri/penilaian/list-data', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}

	public function input($id)
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Beri Penilaian';
			$nama = $this->session->userdata('nama');
			$data['nama'] = $nama;
			$id_juri = $this->session->userdata('id');
			$data['id_juri'] = $id_juri;

			$data['pendaftaran'] = $this->Juri_M->getDataPendaftaran();

			foreach ($data['pendaftaran'] as $pndftr) {
				if ($pndftr['id'] == $id) {
					$data['pendaftaran'] = $pndftr;
					break;
				}
			}

			$id_pendaftar = $data['pendaftaran']['id'];

			$this->form_validation->set_rules('teknik_penulisan', 'Teknik Penulisan', 'required');
			$this->form_validation->set_rules('desk_teknik_penulisan', 'Deskripsi Teknik Penulisan', 'required');
			$this->form_validation->set_rules('keutuhan_ide', 'Keutuhan Ide', 'required');
			$this->form_validation->set_rules('desk_keutuhan_ide', 'Deskripsi Keutuhan Ide', 'required');
			$this->form_validation->set_rules('mimik', 'Mimik', 'required');
			$this->form_validation->set_rules('desk_mimik', 'Deskripsi Mimik', 'required');
			$this->form_validation->set_rules('karakter', 'Karakter', 'required');
			$this->form_validation->set_rules('desk_karakter', 'Deskripsi Karakter', 'required');
			$this->form_validation->set_rules('angel', 'Angel', 'required');
			$this->form_validation->set_rules('desk_angel', 'Deskripsi Angel', 'required');
			$this->form_validation->set_rules('style', 'Style', 'required');
			$this->form_validation->set_rules('desk_style', 'Deskripsi Style', 'required');
			$this->form_validation->set_rules('kualitas_gambar', 'Kualitas Gambar', 'required');
			$this->form_validation->set_rules('desk_kualitas_gambar', 'Deskripsi Kualitas Gambar', 'required');
			$this->form_validation->set_rules('setting', 'Setting', 'required');
			$this->form_validation->set_rules('desk_setting', 'Deskripsi Setting', 'required');
			$this->form_validation->set_rules('makeup', 'Make Up', 'required');
			$this->form_validation->set_rules('desk_makeup', 'Deskripsi Make Up', 'required');
			$this->form_validation->set_rules('style_editing', 'Style Editing', 'required');
			$this->form_validation->set_rules('desk_style_editing', 'Deskripsi Style Editing', 'required');
			$this->form_validation->set_rules('penyutradaraan', 'Penyutradaraan', 'required');
			$this->form_validation->set_rules('desk_penyutradaraan', 'Deskripsi Penyutradaraan', 'required');

			if ($this->input->post('note')) {
				$this->form_validation->set_rules('note', 'Note', '');
			}

			$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

			$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard-layout/template/header', $data);
				$this->load->view('dashboard-layout/template/sidebar');
				$this->load->view('dashboard-layout/template/navbar');
				$this->load->view('dashboard-layout/juri/penilaian/beri-nilai', $data);
				$this->load->view('dashboard-layout/template/footer');
			} else {
				$this->Juri_M->tambahDataPenilaian($id_pendaftar);
				$post = $this->input->post(null, TRUE);
				$this->Juri_M->tambahDataPenilaian($post);

				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
					redirect('penilaian');
				} else {
					$this->session->set_flashdata('success', 'Data Gagal Ditambahkan');
					redirect('penilaian');
				}
			}
		}
	}

	public function edit($id)
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Edit Penilaian';
			$nama = $this->session->userdata('nama');
			$data['nama'] = $nama;
			$id_juri = $this->session->userdata('id');
			$data['id_juri'] = $id_juri;

			$data['pendaftaran'] = $this->Juri_M->getDataPendaftaran();
			$data['penilaian'] = $this->Juri_M->getPenilaian();

			foreach ($data['pendaftaran'] as $pndftr) {
				if ($pndftr['id'] == $id) {
					$data['pendaftaran'] = $pndftr;
					break;
				}
			}

			foreach ($data['penilaian'] as $pnl) {
				if ($pnl['id_user'] == $data['id_juri'] && $data['pendaftaran']['id'] == $pnl['id_pendaftaran']) {
					$data['penilaian'] = $pnl;
					break;
				}
			}

			$this->form_validation->set_rules('teknik_penulisan', 'Teknik Penulisan', 'required');
			$this->form_validation->set_rules('desk_teknik_penulisan', 'Deskripsi Teknik Penulisan', 'required');
			$this->form_validation->set_rules('keutuhan_ide', 'Keutuhan Ide', 'required');
			$this->form_validation->set_rules('desk_keutuhan_ide', 'Deskripsi Keutuhan Ide', 'required');
			$this->form_validation->set_rules('mimik', 'Mimik', 'required');
			$this->form_validation->set_rules('desk_mimik', 'Deskripsi Mimik', 'required');
			$this->form_validation->set_rules('karakter', 'Karakter', 'required');
			$this->form_validation->set_rules('desk_karakter', 'Deskripsi Karakter', 'required');
			$this->form_validation->set_rules('angel', 'Angel', 'required');
			$this->form_validation->set_rules('desk_angel', 'Deskripsi Angel', 'required');
			$this->form_validation->set_rules('style', 'Style', 'required');
			$this->form_validation->set_rules('desk_style', 'Deskripsi Style', 'required');
			$this->form_validation->set_rules('kualitas_gambar', 'Kualitas Gambar', 'required');
			$this->form_validation->set_rules('desk_kualitas_gambar', 'Deskripsi Kualitas Gambar', 'required');
			$this->form_validation->set_rules('setting', 'Setting', 'required');
			$this->form_validation->set_rules('desk_setting', 'Deskripsi Setting', 'required');
			$this->form_validation->set_rules('makeup', 'Make Up', 'required');
			$this->form_validation->set_rules('desk_makeup', 'Deskripsi Make Up', 'required');
			$this->form_validation->set_rules('style_editing', 'Style Editing', 'required');
			$this->form_validation->set_rules('desk_style_editing', 'Deskripsi Style Editing', 'required');
			$this->form_validation->set_rules('penyutradaraan', 'Penyutradaraan', 'required');
			$this->form_validation->set_rules('desk_penyutradaraan', 'Deskripsi Penyutradaraan', 'required');

			if ($this->input->post('note')) {
				$this->form_validation->set_rules('note', 'Note', '');
			}

			$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

            $this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('dashboard-layout/template/header', $data);
				$this->load->view('dashboard-layout/template/sidebar', $data);
				$this->load->view('dashboard-layout/template/navbar', $data);
				$this->load->view('dashboard-layout/juri/penilaian/edit-nilai', $data);
				$this->load->view('dashboard-layout/template/footer');
			} else {
				$post = $this->input->post(null, TRUE);
				$this->Juri_M->ubahDataPenilaian($post);
				
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Diedit');
					redirect('penilaian');
				} else {
					$this->session->set_flashdata('success', 'Tidak ada perubahan');
					redirect('penilaian');
				}
			}
		}
	}
}
