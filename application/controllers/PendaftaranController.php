<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PendaftaranController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper(array('url', 'download'));
		if ($this->session->userdata('role') == NULL) {
			redirect('login');
		}
	}

	public function pendaftaran()
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'peserta' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Pendaftaran Film';

			$user_id = $this->session->userdata('id');
			$role_user = $this->session->userdata('role');
			$data['pendaftaran'] = $this->Pendaftaran_M->getPendaftaran($user_id, $role_user);

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/admin/pendaftaran/list-data', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}

	public function detail($id)
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'peserta' && $this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {

			$data['title'] = 'Detail Pendaftaran';

			$data['pendaftaran'] = $this->Pendaftaran_M->detailPendaftaran($id);

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/admin/pendaftaran/detail', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}

	public function set_upload_options($newName)
	{
		$config = [
			'upload_path' 	=> './uploads/',
			'allowed_types' => 'pdf|jpg|png|jpeg|docx',
			'max_size'      => 1024*10,
			'file_name'		=> $newName,
			'overwrite'     => FALSE,
		];

		return $config;
	}

	public function add()
	{
		$verif = $this->db->from("pendaftaran")->where('id_user', $this->session->userdata('id'))->get()->num_rows();
		$tgl_tutup = "2022-09-24";
        $tgl_skrg = date("Y-m-d");

		if($verif < '2') {
			if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'peserta') {
				$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
				echo "<script> history.go(-1); </script>";
			} else {
			    if($tgl_tutup != $tgl_skrg) {
    				$id = $this->session->userdata('id');
    				$data['id'] = $id;
    
    				$this->form_validation->set_rules('email', 'Email', 'required|trim');
    				$this->form_validation->set_rules('no_hp', 'No. HP', 'required|trim');
    
    				$this->form_validation->set_rules('instagram', 'Instagram', 'required|trim');
    				$this->form_validation->set_rules('nama_komunitas', 'Nama Komunitas', 'required|trim');
    				$this->form_validation->set_rules('nama_institusi', 'Nama Institusi', 'required|trim'); 
    
    				$this->form_validation->set_rules('domisili_komunitas', 'Domisili Komunitas', 'required|trim');
    				$this->form_validation->set_rules('nama_film', 'Judul Film', 'required|trim');
    				$this->form_validation->set_rules('tema_film', 'Tema Film', 'required|trim');
    
    				$this->form_validation->set_rules('tahun_produksi', 'Tahun Produksi', 'required|trim');
    				$this->form_validation->set_rules('sutradara', 'Sutradara Film', 'required|trim');
    				$this->form_validation->set_rules('penulis_naskah', 'Penulis Naskah', 'required|trim');
    				$this->form_validation->set_rules('editor_film', 'Editor Film', 'required|trim');
    
    				$this->form_validation->set_rules('link_trailer', 'Link Trailer', 'required|trim');
    				$this->form_validation->set_rules('link_film', 'Link Film', 'required|trim');
    				$this->form_validation->set_rules('link_gdrive', 'Link Folder Google Drive', 'required|trim');
    
    				if (empty($_FILES['userfile']['name'])) {
    					$this->form_validation->set_rules('userfile', 'Upload File', 'required');
    				}
    
    				// $this->form_validation->set_message('form_validation_valid_email', '%s tidak valid, harap masukkan email dengan benar');
    				$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
    
    				$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');
    
    				if ($this->form_validation->run() == FALSE) {
    					$data['title'] = "Tambah Data Pendaftaran Film";
    					$this->load->view('dashboard-layout/template/header', $data);
    					$this->load->view('dashboard-layout/template/sidebar');
    					$this->load->view('dashboard-layout/template/navbar');
    					$this->load->view('dashboard-layout/admin/pendaftaran/add-data');
    					$this->load->view('dashboard-layout/template/footer');
    				} else {
    					$dataInfo = [];
    					$files = $_FILES;
    					$filesCount = count($_FILES['userfile']['name']);
    					for ($i = 0; $i < $filesCount; $i++) {
    						if ($files['userfile']['name'][$i] != '') {
    							$_FILES['userfile']['name'] = $files['userfile']['name'][$i];
    							$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
    							$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
    							$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
    							$_FILES['userfile']['size'] = $files['userfile']['size'][$i];
    
    						// Rename
    							$oldName = explode('.', $_FILES['userfile']['name']);
    							$newName =  str_replace(' ', '-', $oldName[0]) . "_" . $id . '.' . $oldName[1];
    
    							$this->upload->initialize($this->set_upload_options($newName));
    							$this->upload->do_upload('userfile');
    
    							$dataInfo[] = $this->upload->data();
    						}
    					}
    
    					$data = array(
    						'id' => substr(md5(rand()),0,5),
    						'id_user' => $id,
    						'email' => $this->input->post('email'),
    						'no_hp' => $this->input->post('no_hp'),
    						'instagram' => $this->input->post('instagram'),
    						'nama_komunitas' => $this->input->post('nama_komunitas'),
    						'nama_institusi' => $this->input->post('nama_institusi'),
    						'domisili_komunitas' => $this->input->post('domisili_komunitas'),
    						'nama_film' => $this->input->post('nama_film'),
    						'tema_film' => $this->input->post('tema_film'),
    						'tahun_produksi' => $this->input->post('tahun_produksi'),
    
    						'sutradara' => $this->input->post('sutradara'),
    						'penulis_naskah' => $this->input->post('penulis_naskah'),
    						'editor_film' => $this->input->post('editor_film'),
    
    						'link_trailer' => $this->input->post('link_trailer'),
    						'link_film' => $this->input->post('link_film'),
    						'link_gdrive' => $this->input->post('link_gdrive'),
    
    						'poster' => $dataInfo[0]['file_name'],
    						'sinopsis' => $dataInfo[1]['file_name'],
    						'naskah' => $dataInfo[2]['file_name'],
    						'biografi_sutradara' => $dataInfo[3]['file_name'],
    						'surat_orisinalitas' => $dataInfo[4]['file_name'],
    						'surat_izin' => $dataInfo[5]['file_name'],
    					);
    
    					$this->Pendaftaran_M->addPendaftaran($data);
    
    					if ($this->db->affected_rows() > 0) {
    						$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
    						redirect('pendaftaran');
    					} else {
    						$this->session->set_flashdata('success', 'Data Gagal Ditambahkan');
    						redirect('pendaftaran');
    					}
    				}
			    } else {
			        $this->session->set_flashdata('error', 'Mohon maaf, pendaftaran telah ditutup!');
			        echo "<script> history.go(-1); </script>";
			    }
			}
		} else {
			$this->session->set_flashdata('error', 'Anda telah sampai dibatas maksimal pendaftaran!');
			echo "<script> history.go(-1); </script>";
		}
	}


	public function edit($id)
	{
		$user_id = $this->session->userdata('id');
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'peserta') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {

			if ($this->input->post('id')) {
				$id = $this->input->post('id');
			}

			if ($this->input->post('email')) {
				$this->form_validation->set_rules('email', 'Email', 'required|trim');
			}

			if ($this->input->post('no_hp')) {
				$this->form_validation->set_rules('no_hp', 'No. HP', 'required|trim');
			}

			if ($this->input->post('instagram')) {
				$this->form_validation->set_rules('instagram', 'Instagram', 'required|trim');
			}

			if ($this->input->post('nama_komunitas')) {
				$this->form_validation->set_rules('nama_komunitas', 'Nama Komunitas', 'required|trim');
			}

			if ($this->input->post('nama_institusi')) {
				$this->form_validation->set_rules('nama_institusi', 'Nama Institusi', 'required|trim');
			}

			if ($this->input->post('domisili_komunitas')) {
				$this->form_validation->set_rules('domisili_komunitas', 'Domisili Komunitas', 'required|trim');
			}

			if ($this->input->post('nama_film')) {
				$this->form_validation->set_rules('nama_film', 'Nama Film', 'required');
			}

			if ($this->input->post('tema_film')) {
				$this->form_validation->set_rules('tema_film', 'Tema Film', 'required|trim');
			}

			if ($this->input->post('tahun_produksi')) {
				$this->form_validation->set_rules('tahun_produksi', 'Tahun Produksi', 'required|trim');
			}

			if ($this->input->post('sutradara')) {
				$this->form_validation->set_rules('sutradara', 'Sutradara Film', 'required|trim');
			}

			if ($this->input->post('penulis_naskah')) {
				$this->form_validation->set_rules('penulis_naskah', 'Penulis Naskah', 'required|trim');
			}

			if ($this->input->post('editor_film')) {
				$this->form_validation->set_rules('editor_film', 'Editor Film', 'required|trim');
			}

			if ($this->input->post('link_trailer')) {
				$this->form_validation->set_rules('link_trailer', 'Link Trailer', 'required|trim');
			}

			if ($this->input->post('link_film')) {
				$this->form_validation->set_rules('link_film', 'Link Film', 'required|trim');
			}

			if ($this->input->post('link_gdrive')) {
				$this->form_validation->set_rules('link_gdrive', 'Link Folder Google Drive', 'required|trim');
			}

			if ($this->input->post('tema_film')) {
				$this->form_validation->set_rules('tema_film', 'Tema Film', 'required|trim');
			}

			$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
			$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

			if ($this->form_validation->run() == FALSE) {
				$data['title'] = 'Ubah Data Pendaftaran';
				$data['pendaftaran'] = $this->db->get_where('pendaftaran', ['id' => $id])->row_array();

				$id = $this->session->userdata('id');
				$data['id'] = $id;

				$this->load->view('dashboard-layout/template/header', $data);
				$this->load->view('dashboard-layout/template/sidebar', $data);
				$this->load->view('dashboard-layout/template/navbar', $data);
				$this->load->view('dashboard-layout/admin/pendaftaran/edit', $data);
				$this->load->view('dashboard-layout/template/footer');
			} else {
				$poster = $_FILES['poster']['name'] == "" ? "" : explode('.', $_FILES['poster']['name']);
				$poster = $poster == '' ? $this->input->post('tmp_poster') : str_replace(' ', '-', $poster[0]) . "_" . $user_id . '.' . $poster[1];
				$sinopsis = $_FILES['sinopsis']['name'] == "" ? "" : explode('.', $_FILES['sinopsis']['name']);
				$sinopsis = $sinopsis == '' ? $this->input->post('tmp_sinopsis') : str_replace(' ', '-', $sinopsis[0]) . "_" . $user_id . '.' . $sinopsis[1];
				$naskah = $_FILES['naskah']['name'] == "" ? "" : explode('.', $_FILES['naskah']['name']);
				$naskah = $naskah == '' ? $this->input->post('tmp_naskah') : str_replace(' ', '-', $naskah[0]) . "_" . $user_id . '.' . $naskah[1];
				$biografi_sutradara = $_FILES['biografi_sutradara']['name'] == "" ? "" : explode('.', $_FILES['biografi_sutradara']['name']);
				$biografi_sutradara = $biografi_sutradara == '' ? $this->input->post('tmp_biografi_sutradara') : str_replace(' ', '-', $biografi_sutradara[0]) . "_" . $user_id . '.' . $biografi_sutradara[1];
				$surat_orisinalitas = $_FILES['surat_orisinalitas']['name'] == "" ? "" : explode('.', $_FILES['surat_orisinalitas']['name']);
				$surat_orisinalitas = $surat_orisinalitas == '' ? $this->input->post('tmp_surat_orisinalitas') : str_replace(' ', '-', $surat_orisinalitas[0]) . "_" . $user_id . '.' . $surat_orisinalitas[1];
				$surat_izin = $_FILES['surat_izin']['name'] == "" ? "" : explode('.', $_FILES['surat_izin']['name']);
				$surat_izin = $surat_izin == '' ? $this->input->post('tmp_surat_izin') : str_replace(' ', '-', $surat_izin[0]) . "_" . $user_id . '.' . $surat_izin[1];

				foreach ($_FILES as $key => $value) {
					$oldName = explode('.', $_FILES[$key]['name']);
					if (!empty($value['tmp_name'])) {
						$newName =  str_replace(' ', '-', $oldName[0]) . "_" . $user_id . '.' . $oldName[1];

						$this->upload->initialize($this->set_upload_options($newName));
						// $this->upload->do_upload($key);

						if (!$this->upload->do_upload($key)) {
							echo $this->upload->display_errors();
							die();
						} else {
							$this->upload->data($key);
							if ($key == 'poster') {
								if ($this->input->post('tmp_poster') != "") {
									unlink(FCPATH . 'uploads/' . $this->input->post('tmp_poster'));
								}
							}
							if ($key == 'sinopsis') {
								if ($this->input->post('tmp_sinopsis') != "") {
									unlink(FCPATH . 'uploads/' . $this->input->post('tmp_sinopsis'));
								}
							}
							if ($key == 'naskah') {
								if ($this->input->post('tmp_naskah') != "") {
									unlink(FCPATH . 'uploads/' . $this->input->post('tmp_naskah'));
								}
							}
							if ($key == 'biografi_sutradara') {
								if ($this->input->post('tmp_biografi_sutradara') != "") {
									unlink(FCPATH . 'uploads/' . $this->input->post('tmp_biografi_sutradara'));
								}
							}
							if ($key == 'surat_orisinalitas') {
								if ($this->input->post('tmp_surat_orisinalitas') != "") {
									unlink(FCPATH . 'uploads/' . $this->input->post('tmp_surat_orisinalitas'));
								}
							}
							if ($key == 'surat_izin') {
								if ($this->input->post('tmp_surat_izin') != "") {
									unlink(FCPATH . 'uploads/' . $this->input->post('tmp_surat_izin'));
								}
							}
						}
					}
				}

				$data = [
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('no_hp'),
					'instagram' => $this->input->post('instagram'),
					'nama_komunitas' => $this->input->post('nama_komunitas'),
					'nama_institusi' => $this->input->post('nama_institusi'),
					'domisili_komunitas' => $this->input->post('domisili_komunitas'),
					'nama_film' => $this->input->post('nama_film'),
					'tema_film' => $this->input->post('tema_film'),
					'tahun_produksi' => $this->input->post('tahun_produksi'),

					'sutradara' => $this->input->post('sutradara'),
					'penulis_naskah' => $this->input->post('penulis_naskah'),
					'editor_film' => $this->input->post('editor_film'),

					'link_trailer' => $this->input->post('link_trailer'),
					'link_film' => $this->input->post('link_film'),
					'link_gdrive' => $this->input->post('link_gdrive'),

					'poster' => $poster,
					'sinopsis' => $sinopsis,
					'naskah' => $naskah,
					'biografi_sutradara' => $biografi_sutradara,
					'surat_orisinalitas' => $surat_orisinalitas,
					'surat_izin' => $surat_izin,
				];

				$where = $this->input->post('id');
				$this->Pendaftaran_M->editPendaftaran($where, $data);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Berhasil Diubah');
					redirect('pendaftaran');
				} else {
					$this->session->set_flashdata('success', 'Tidak ada perubahan');
					redirect('pendaftaran');
				}
			}
		}
	}

	public function delete($id)
	{
		if ($this->session->userdata('role') != 'admin' && $this->session->userdata('role') != 'peserta') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$where = array('id' => $id);
			$getdata = $this->db->select('poster, sinopsis, naskah, biografi_sutradara, surat_orisinalitas, surat_izin')->get_where('pendaftaran', ['id' => $id])->result_array();

			foreach ($getdata as $gd) {
				if ($gd['poster'] != NULL || $gd['poster'] != '') {
					unlink(FCPATH . 'uploads/' . $gd['poster']);
				}
				if ($gd['sinopsis'] != NULL || $gd['sinopsis'] != '') {
					unlink(FCPATH . 'uploads/' . $gd['sinopsis']);
				}
				if ($gd['naskah'] != NULL || $gd['naskah'] != '') {
					unlink(FCPATH . 'uploads/' . $gd['naskah']);
				}
				if ($gd['biografi_sutradara'] != NULL || $gd['biografi_sutradara'] != '') {
					unlink(FCPATH . 'uploads/' . $gd['biografi_sutradara']);
				}
				if ($gd['surat_orisinalitas'] != NULL || $gd['surat_orisinalitas'] != '') {
					unlink(FCPATH . 'uploads/' . $gd['surat_orisinalitas']);
				}
				if ($gd['surat_izin'] != NULL || $gd['surat_izin'] != '') {
					unlink(FCPATH . 'uploads/' . $gd['surat_izin']);
				}
			}
			$this->Pendaftaran_M->deletePendaftaran($where, 'pendaftaran');
			$this->db->delete('penilaian', ['id_pendaftaran' => $id]);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
				redirect('pendaftaran');
			} else {
				$this->session->set_flashdata('success', 'Seluruh Data Berhasil Dihapus');
				redirect('pendaftaran');
			}
		}
	}

	public function download_file($file_name)
	{
		force_download(FCPATH . 'uploads/' . $file_name, NULL);
	}

	public function terimaPendaftaran($id)
	{
		if ($this->session->userdata('role') != 'admin') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$id = $this->input->post('id');
			$post = $this->input->post(null, TRUE);
			$this->Pendaftaran_M->terimaPendaftaran($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Pendaftaran Diterima');
				redirect('pendaftaran');
			} else {
				$this->session->set_flashdata('error', 'Gagal Menerima Pendaftaran');
				redirect('pendaftaran');
			}
		}
	}

	public function tolakPendaftaran($id)
	{
		if ($this->session->userdata('role') != 'admin') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$id = $this->input->post('id');
			$post = $this->input->post(null, TRUE);
			$this->Pendaftaran_M->tolakPendaftaran($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Pendaftaran Ditolak');
				redirect('pendaftaran');
			} else {
				$this->session->set_flashdata('error', 'Gagal Menolak Pendaftaran');
				redirect('pendaftaran');
			}
		}
	}

	public function lanjutJuri($id)
	{
		if ($this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$id = $this->input->post('id');
			$post = $this->input->post(null, TRUE);
			$this->Pendaftaran_M->lanjutJuri($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Pendaftaran Dilanjutkan ke Juri');
				redirect('pendaftaran');
			} else {
				$this->session->set_flashdata('error', 'Gagal Meneruskan ke Juri');
				redirect('pendaftaran');
			}
		}
	}

	public function batalJuri($id)
	{
		if ($this->session->userdata('role') != 'kurator') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$id = $this->input->post('id');
			$post = $this->input->post(null, TRUE);
			$this->Pendaftaran_M->batalJuri($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Pendaftaran Dibatalkan ke Juri');
				redirect('pendaftaran');
			} else {
				$this->session->set_flashdata('error', 'Gagal Membatalkan ke Juri');
				redirect('pendaftaran');
			}
		}
	}

	public function hasil_seleksi()
	{
		if ($this->session->userdata('role') != 'admin') {
			$this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
			echo "<script> history.go(-1); </script>";
		} else {
			$data['title'] = 'Hasil Seleksi';

			$user_id = $this->session->userdata('id');
			$role_user = $this->session->userdata('role');
			$data['pendaftaran'] = $this->Pendaftaran_M->getPendaftaranSeleksi($user_id, $role_user);

			$this->load->view('dashboard-layout/template/header', $data);
			$this->load->view('dashboard-layout/template/sidebar');
			$this->load->view('dashboard-layout/template/navbar');
			$this->load->view('dashboard-layout/admin/pendaftaran/seleksi', $data);
			$this->load->view('dashboard-layout/template/footer');
		}
	}
}
