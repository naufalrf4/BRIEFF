<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role') == NULL) {
            redirect('login');
        }
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

    public function getJuri()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $data['title'] = 'Data Juri dan Kurator';
            $data['MJuri'] = $this->Admin_M->getDataJuri()->result();

            $this->load->view('dashboard-layout/template/header', $data);
            $this->load->view('dashboard-layout/template/sidebar');
            $this->load->view('dashboard-layout/template/navbar');
            $this->load->view('dashboard-layout/admin/master-juri/list-data', $data);
            $this->load->view('dashboard-layout/template/footer');
        }
    }

    public function addJuri()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');
            $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));
            $this->form_validation->set_rules('role', 'Role', 'required');

            $this->form_validation->set_message('required', '%s masih kosong, harap diisi');
            $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
            $this->form_validation->set_message('max_length', '{field} maksimal 8 karakter');
            $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silakan ganti');

            $this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Tambah Data Juri dan Kurator";
                $this->load->view('dashboard-layout/template/header', $data);
                $this->load->view('dashboard-layout/template/sidebar');
                $this->load->view('dashboard-layout/template/navbar');
                $this->load->view('dashboard-layout/admin/master-juri/add-data');
                $this->load->view('dashboard-layout/template/footer');
            } else {
                $post = $this->input->post(null, TRUE);
                $this->Admin_M->addDataJuri($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
                    redirect('juri');
                } else {
                    $this->session->set_flashdata('success', 'Data Gagal Ditambahkan');
                    redirect('juri');
                }
            }
        }
    }

    public function editJuri($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            
            if ($this->input->post('email')) {
                $this->form_validation->set_rules('email', 'Email', 'required|callback_email_user_check');
            }

            if ($this->input->post('username')) {
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
            }

            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');
                $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));
            }

            if ($this->input->post('passconf')) {
                $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));
            }

            if ($this->input->post('role')) {
                $this->form_validation->set_rules('role', 'Role', 'required');
            }

            $this->form_validation->set_message('required', '%s masih kosong, harap diisi');
            $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
            $this->form_validation->set_message('max_length', '{field} maksimal 8 karakter');
            $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silakan ganti');

            $this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Ubah Data Juri dan Kurator";
                $data['data'] = $this->db->get_where('user', ['id' => $id])->row_array();
                $this->load->view('dashboard-layout/template/header', $data);
                $this->load->view('dashboard-layout/template/sidebar');
                $this->load->view('dashboard-layout/template/navbar');
                $this->load->view('dashboard-layout/admin/master-juri/update-data', $data);
                $this->load->view('dashboard-layout/template/footer');
            } else {
                $post = $this->input->post(null, TRUE);
                $this->Admin_M->updateDataJuri($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Diedit');
                    redirect('juri');
                } else {
                    $this->session->set_flashdata('success', 'Tidak ada perubahan');
                    redirect('juri');
                }
            }
        }
    }

    public function deleteJuri($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $where = array('id' => $id);
            $this->Admin_M->deleteDataJuri($where, 'user');
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
                redirect('juri');
            } else {
                $this->session->set_flashdata('success', 'Seluruh Data Berhasil Dihapus');
                redirect('juri');
            }
        }
    }

    public function getUser()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $data['title'] = 'Data User';
            $data['MUser'] = $this->Admin_M->getDataUser()->result();

            $this->load->view('dashboard-layout/template/header', $data);
            $this->load->view('dashboard-layout/template/sidebar');
            $this->load->view('dashboard-layout/template/navbar');
            $this->load->view('dashboard-layout/admin/user/list-data', $data);
            $this->load->view('dashboard-layout/template/footer');
        }
    }

    public function addUser()
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');
            $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));
            $this->form_validation->set_rules('role', 'Role', 'required');

            $this->form_validation->set_message('required', '%s masih kosong, harap diisi');
            $this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
            $this->form_validation->set_message('max_length', '{field} maksimal 8 karakter');
            $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silakan ganti');

            $this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

            if ($this->form_validation->run() == FALSE) {
                $data['title'] = "Tambah Data User";
                $this->load->view('dashboard-layout/template/header', $data);
                $this->load->view('dashboard-layout/template/sidebar');
                $this->load->view('dashboard-layout/template/navbar');
                $this->load->view('dashboard-layout/admin/user/add-data');
                $this->load->view('dashboard-layout/template/footer');
            } else {
                $post = $this->input->post(null, TRUE);
                $this->Admin_M->addDataUser($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
                    redirect('user');
                } else {
                    $this->session->set_flashdata('success', 'Data Gagal Ditambahkan');
                    redirect('user');
                }
            }
        }
    }

    public function editUser($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'required');

            if ($this->input->post('role')) {
                $this->form_validation->set_rules('role', 'Role', 'required');
            }

            if ($this->input->post('is_active')) {
                $this->form_validation->set_rules('is_active', 'Status', 'required');
            }
            
            if ($this->input->post('email')) {
                $this->form_validation->set_rules('email', 'Email', 'required|callback_email_user_check');
            }

            if ($this->input->post('username')) {
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
            }

            if ($this->input->post('password')) {
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[8]');
                $this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));
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
                $data['title'] = "Ubah Data User";
                $data['data'] = $this->db->get_where('user', ['id' => $id])->row_array();
                $this->load->view('dashboard-layout/template/header', $data);
                $this->load->view('dashboard-layout/template/sidebar');
                $this->load->view('dashboard-layout/template/navbar');
                $this->load->view('dashboard-layout/admin/user/update-data', $data);
                $this->load->view('dashboard-layout/template/footer');
            } else {
                $post = $this->input->post(null, TRUE);
                $this->Admin_M->updateDataUser($post);
                // var_dump($post);

                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data Berhasil Diedit');
                    redirect('user');
                } else {
                    $this->session->set_flashdata('success', 'Tidak ada perubahan');
                    redirect('user');
                }
            }
        }
    }

    public function deleteUser($id)
    {
        if ($this->session->userdata('role') != 'admin') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki hak akses!');
            echo "<script> history.go(-1); </script>";
        } else {
            $where = array('id' => $id);
            $this->Admin_M->deleteDataUser($where, 'user');
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
                redirect('user');
            } else {
                $this->session->set_flashdata('success', 'Seluruh Data Berhasil Dihapus');
                redirect('user');
            }
        }
    }
    
}