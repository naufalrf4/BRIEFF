<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_M extends CI_Model {

    public function updateProfil($post)
    {
        $params['nama'] = $post['nama'];

        if (!empty($post['email'])) {
            $params['email'] = $post['email'];
        }
        if (!empty($post['username'])) {
            $params['username'] = $post['username'];
        }
        if (!empty($post['password'])) {
            $params['password'] = md5($post['password']);
        }

        $this->db->where('id', $post['id']);
        $this->db->update('user', $params);
    }

    public function hapusProfil($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

}