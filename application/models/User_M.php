<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_M extends CI_Model {

	public function cek_user($data) {
		$query = $this->db->get_where('user', $data);
		return $query;
	}

	public function get($id = null)
	{
		$this->db->from('user');
		if ($id != null) {
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['id'] = substr(md5(rand()),0,5);
		$params['nama'] = $post['nama'];
		$params['username'] = $post['username'];
		$params['email'] = $post['email'];
		$params['password'] = md5($post['password']);
		$params['role'] = 'umum';
		$params['is_active'] = 1;

		$this->db->insert('user', $params);
	}

	public function del($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
	}

	public function edit($post)
	{
		$params['nama'] = $post['nama'];
		$params['username'] = $post['username'];
		$params['email'] = $post['email'];
		if (!empty($post['password'])) {
			$params['password'] = md5($post['password']);
		}
		$params['role'] = $post['role'];

		$this->db->where('id', $post['id']);
		$this->db->update('user', $params);
	}

	public function kirimpesan($data, $table)
    {
        $this->db->insert('kontak', $data);
    }
}