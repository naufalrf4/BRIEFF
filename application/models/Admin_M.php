<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_M extends CI_Model {

    public function getDataJuri()
    {
        $this->db->order_by('user.created_at','DESC');
        $this->db->where('role !=', 'peserta');
        $this->db->where('role !=', 'admin');
        $query = $this->db->get('user');
        return $query;
    }

    public function addDataJuri($post)
    {
        $params['id'] = substr(md5(rand()),0,5);
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        $params['password'] = md5($post['password']);
        $params['role'] = $post['role'];
        $params['is_active'] = '1';

        $this->db->insert('user', $params);
    }

    public function updateDataJuri($post)
    {
        $params['nama'] = $post['nama'];

        if (!empty($post['role'])) {
            $params['role'] = $post['role'];
        }

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

    public function deleteDataJuri($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getDataUser()
    {
        $this->db->order_by('user.created_at','DESC');
        $query = $this->db->get('user');
        return $query;
    }

    public function addDataUser($post)
    {
        $params['id'] = substr(md5(rand()),0,5);
        $params['nama'] = $post['nama'];
        $params['username'] = $post['username'];
        $params['email'] = $post['email'];
        $params['password'] = md5($post['password']);
        $params['role'] = $post['role'];
        $params['is_active'] = 1;

        $this->db->insert('user', $params);
    }

    public function updateDataUser($post)
    {
        $params['nama'] = $post['nama'];

        if (!empty($post['role'])) {
            $params['role'] = $post['role'];
        }

        if ($post['is_active'] == 0) {
            $params['is_active'] = 0;
        } else if ($post['is_active'] == 1) {
            $params['is_active'] = 1;
        }

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

    public function deleteDataUser($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function getDataContact()
    {
        $this->db->order_by('kontak.created_at','DESC');
        $query = $this->db->get('kontak');
        return $query;
    }

    public function detailDataContact($id)
    {
        $result = $this->db->where('id', $id)->get('kontak');
        if($result->num_rows() > 0){
            return $result->result();
        } else{
            return false;
        }
    }

    public function deleteDataContact($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function updateDataContact($post)
    {
        $params['nama'] = $post['nama'];
        $params['email'] = $post['email'];
        $params['no_hp'] = $post['no_hp'];
        $params['pesan'] = $post['pesan'];

        $this->db->where('id', $post['id']);
        $this->db->update('kontak', $params);
    }

    public function bacaPesan($post)
    {
        $params['status'] = '1';

        $this->db->where('id', $post['id']);
        $this->db->update('kontak', $params);
    }
   
}