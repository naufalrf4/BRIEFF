<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_M');
		$this->load->helper('download');

		if ($this->session->userdata('role') == NULL) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard';

		// Data Admin
		$data['peserta'] = $this->db->from("user")->where('role', 'peserta')->where('is_active', '1')->get()->num_rows();
		$data['rekap_nilai'] = $this->db->from("penilaian")->get()->num_rows();
		$data['pendaftar'] = $this->db->from("pendaftaran")->get()->num_rows();
		$data['pesan'] = $this->db->from("kontak")->where('status', '0')->get()->num_rows();

		$this->load->view('dashboard-layout/template/header', $data);
		$this->load->view('dashboard-layout/template/sidebar');
		$this->load->view('dashboard-layout/template/navbar');
		$this->load->view('dashboard-layout/dashboard', $data);
		$this->load->view('dashboard-layout/template/footer');
	}

	public function buku_panduan()
	{
		$data['title'] = 'Buku Panduan';

		$this->load->view('dashboard-layout/template/header', $data);
		$this->load->view('dashboard-layout/template/sidebar');
		$this->load->view('dashboard-layout/template/navbar');
		$this->load->view('dashboard-layout/buku-panduan');
		$this->load->view('dashboard-layout/template/footer');
	}

	public function download_buku_panduan()
	{
		force_download('assets/file/Buku-Panduan-Brieff-2022.pdf',NULL);
	} 

	public function rekap_nilai()
    {
        if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $data['title'] = 'Rekap Nilai';
            $data['rekapnilai'] = $this->Dashboard_M->rekapnilai();

            $this->load->view('dashboard-layout/template/header', $data);
            $this->load->view('dashboard-layout/template/sidebar');
            $this->load->view('dashboard-layout/template/navbar');
            $this->load->view('dashboard-layout/rekap-nilai/list-data', $data);
            $this->load->view('dashboard-layout/template/footer');
        }
    }

    public function detail_rekap_nilai($id)
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {

			$data['title'] = 'Detail Penilaian';

			$data['penilaian'] = $this->Dashboard_M->detailPenilaian($id);

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/rekap-nilai/detail-data', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}

    public function delete_rekap_nilai($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $where = array('id' => $id);
            $this->Dashboard_M->deleteDataNilai($where, 'penilaian');
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
                redirect('rekap-nilai');
            } else {
                $this->session->set_flashdata('success', 'Seluruh Data Berhasil Dihapus');
                redirect('rekap-nilai');
            }
        }
    }

    public function export_rekap_nilai()
    {
        if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'juri' && $this->session->userdata('role') != 'kurator') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $data['title'] = 'Export Rekap Nilai';
            $data['rekapnilai'] = $this->Dashboard_M->rekapnilai();

            $this->load->view('dashboard-layout/template/header', $data);
            $this->load->view('dashboard-layout/template/sidebar');
            $this->load->view('dashboard-layout/template/navbar');
            $this->load->view('dashboard-layout/rekap-nilai/export-data', $data);
            $this->load->view('dashboard-layout/template/footer');
        }
    }

    public function surat_pernyataan()
	{
		$data['title'] = 'Surat Pernyataan';

		$this->load->view('dashboard-layout/template/header', $data);
		$this->load->view('dashboard-layout/template/sidebar');
		$this->load->view('dashboard-layout/template/navbar');
		$this->load->view('dashboard-layout/surat-pernyataan');
		$this->load->view('dashboard-layout/template/footer');
	}

	public function download_hak_cipta_lagu()
	{
		force_download('assets/file/SURAT-PERNYATAAN-IZIN-PENGGUNAAN-HAK-CIPTA-LAGU.pdf',NULL);
	}

	public function download_orisinil_film()
	{
		force_download('assets/file/SURAT-PERNYATAAN-ORISINALITAS-FILM.pdf',NULL);
	} 
}
