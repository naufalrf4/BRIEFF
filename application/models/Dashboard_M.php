<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_M extends CI_Model {

    public function rekapnilai()
    {
        $role_user = $this->session->userdata('role');
        if ($role_user == 'admin') {
            $this->db->select('penilaian.*, user.*, pendaftaran.*, penilaian.id as id_nilai');
            $this->db->from('penilaian');
            $this->db->join('user', 'user.id = penilaian.id_user');
            $this->db->join('pendaftaran', 'pendaftaran.id = penilaian.id_pendaftaran');
            $this->db->order_by('penilaian.id','DESC');
            $this->db->order_by('penilaian.created_at','DESC');
            $query = $this->db->get();
            return $query->result();
        } else {
            $this->db->select('penilaian.*, user.*, pendaftaran.*, penilaian.id as id_nilai');
            $this->db->from('penilaian');
            $this->db->join('user', 'user.id = penilaian.id_user');
            $this->db->join('pendaftaran', 'pendaftaran.id = penilaian.id_pendaftaran');
            $this->db->where('pendaftaran.status !=', '0', '2');
            $this->db->where('penilaian.id_user', $this->session->userdata('id'));
            $this->db->order_by('penilaian.created_at','DESC');
            $query = $this->db->get();
            return $query->result();
        }
    }

    public function detailPenilaian($id)
    {
        $this->db->select('penilaian.*, user.*, pendaftaran.*, penilaian.id as id_nilai, penilaian.created_at as tgl_nilai');
        $this->db->from('penilaian');
        $this->db->join('user', 'user.id = penilaian.id_user');
        $this->db->join('pendaftaran', 'pendaftaran.id = penilaian.id_pendaftaran');
        $result = $this->db->where('penilaian.id', $id)->get();
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    public function deleteDataNilai($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}