<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VotingController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Voting_M');
		if ($this->session->userdata('role') == NULL) {
			redirect('login');
		}
	}

	public function data_vote()
	{
		if ($this->session->userdata('role') != 'admin') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Data Voting';
			$data['voting'] = $this->Voting_M->getDataVoting();

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/voting/list-data', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}

	public function voting()
    {
        if ($this->session->userdata('role') == NULL) {
            $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu!');
            echo "<script> history.go(-1); </script>";
        } else {
            $id_user = $this->session->userdata('id');
			$nama_film = $this->input->post('nama_film');
			$post = $this->input->post(null, TRUE);
			$this->Voting_M->voting($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Voting Berhasil');
				echo "<script> history.go(-1); </script>";
			} else {
				$this->session->set_flashdata('error', 'Voting Gagal');
				echo "<script> history.go(-1); </script>";
			}
        }
    }	
}
