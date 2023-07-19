<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfilControlller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profil_M');

		if ($this->session->userdata('role') == NULL) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Profil';
		$data['data'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();

		$this->load->view('dashboard-layout/template/header', $data);
		$this->load->view('dashboard-layout/template/sidebar');
		$this->load->view('dashboard-layout/template/navbar');
		$this->load->view('dashboard-layout/profil/lihat-profil', $data);
		$this->load->view('dashboard-layout/template/footer');
	}

	function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND id != '$post[id]' ");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silakan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	function email_user_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE email = '$post[email]' AND id != '$post[id]' ");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('email_user_check', '{field} ini sudah dipakai, silakan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function updateProfil()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->input->post('email')) {
			$this->form_validation->set_rules('email', 'Email', 'required|callback_email_user_check');
		}

		if ($this->input->post('username')) {
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
		}

		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');
		}

		if ($this->input->post('passconf')) {
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));
		}

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('max_length', '{field} maksimal 8 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silakan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Update Profil";
			$data['data'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/profil/update-profil', $data);
			$this->load->view('dashboard-layout/template/footer');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Profil_M->updateProfil($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diedit');
				redirect('profil');
			} else {
				$this->session->set_flashdata('success', 'Tidak ada perubahan');
				redirect('profil');
			}
		}
	}

	public function hapusProfil()
	{
		$where = array('id' => $this->session->userdata('id'));
		$this->Profil_M->hapusProfil($where, 'user');
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Akun Anda Berhasil Dihapus, Terima Kasih!');
			session_destroy();
			redirect('');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Akun Anda');
			redirect('profil');
		}
	}
}
