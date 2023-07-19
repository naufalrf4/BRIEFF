<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingController extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('User_M');
		$this->load->helper('download');
	}

	public function index()
	{
		$data['title'] = "Beranda";

		$this->load->view('user-layout/landing', $data);
	}

	public function timeline()
	{
		$data['title'] = "Timeline";

		$this->load->view('user-layout/timeline', $data);
	}

	public function roadmap()
	{
		$data['title'] = "Roadmap";

		$this->load->view('user-layout/roadmap', $data);
	}

	public function tentang_kami()
	{
		$data['title'] = "Tentang Kami";

		$this->load->view('user-layout/tentang-kami', $data);
	}

	public function kontak_kami()
	{
		$data['title'] = "Kontak Kami";

		$this->load->view('user-layout/kontak-kami', $data);
	}

	public function kirimpesan()
    {
    	$id = substr(md5(rand()),0,5);
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $pesan = $this->input->post('pesan');

        $data = array(
        	'id' => $id,
            'nama'      => $nama,
            'email'     => $email,
            'no_hp'  	=> $no_hp,
            'pesan'  	=> $pesan,
        );
 
        $this->User_M->kirimpesan($data, 'kontak');
        if ($this->db->affected_rows() > 0) {
        	$this->session->set_flashdata('success', 'Pesan Anda berhasil dikirim');
        	echo "<script> history.go(-1); </script>";
        } else {
        	$this->session->set_flashdata('success', 'Gagal untuk mengirim pesan, mohon coba lagi.');
        	echo "<script> history.go(-1); </script>";
        }
    }

    public function panduan()
	{
		$data['title'] = "Panduan";

		$this->load->view('user-layout/panduan', $data);
	}

	public function download_panduan()
	{
		force_download('assets/file/Buku-Panduan-Brieff-2022.pdf',NULL);
	}

	public function vote()
	{
		$data['title'] = "Voting";

		$this->load->view('user-layout/vote', $data);
	}

	public function live()
	{
		$data['title'] = "Live Streaming";

		$this->load->view('user-layout/live-streaming', $data);
	}

}
