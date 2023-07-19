<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KontakController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role') == NULL) {
			redirect('login');
		} else if ($this->session->userdata('role') != 'admin') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		}
	}

	public function index()
	{
		$data['title'] = 'Kontak Pesan';
		$data['contact'] = $this->Admin_M->getDataContact()->result();

		$this->load->view('dashboard-layout/template/header', $data);
		$this->load->view('dashboard-layout/template/sidebar');
		$this->load->view('dashboard-layout/template/navbar');
		$this->load->view('dashboard-layout/admin/kontak/list-data', $data);
		$this->load->view('dashboard-layout/template/footer');		
	}

	public function detailPesan($id)
	{
		$data['title'] = 'Kontak Pesan';
		$data['contact'] = $this->Admin_M->detailDataContact($id);

		$this->load->view('dashboard-layout/template/header', $data);
		$this->load->view('dashboard-layout/template/sidebar');
		$this->load->view('dashboard-layout/template/navbar');
		$this->load->view('dashboard-layout/admin/kontak/detail-data', $data);
		$this->load->view('dashboard-layout/template/footer');
	}

	public function deletePesan($id)
	{
		$where = array('id' => $id);
		$this->Admin_M->deleteDataContact($where, 'kontak');
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
			redirect('kontak');
		} else {
			$this->session->set_flashdata('success', 'Seluruh Data Berhasil Dihapus');
			redirect('kontak');
		}
	}

	public function editPesan($id)
	{
		if ($this->input->post('id')) {
			$id = $this->input->post('id');
		}
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('no_hp', 'No HP', 'required');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Ubah Data Pesan";
			$data['data'] = $this->db->get_where('kontak', ['id' => $id])->row_array();
			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/admin/kontak/update-data', $data);
			$this->load->view('dashboard-layout/template/footer');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Admin_M->updateDataContact($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diedit');
				redirect('kontak');
			} else {
				$this->session->set_flashdata('success', 'Tidak ada perubahan');
				redirect('kontak');
			}
		}
	}

	public function bacaPesan($id)
	{
		
		$id = $this->input->post('id');
		$post = $this->input->post(null, TRUE);
		$this->Admin_M->bacaPesan($post);

		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Pesan Telah Terbaca');
			redirect('kontak');
		} else {
			$this->session->set_flashdata('error', 'Gagal Membaca Pesan');
			redirect('kontak');
			// var_dump($post);
		}
	}

}
