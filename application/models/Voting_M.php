<?php

class Voting_M extends CI_Model
{
	public function getDataVoting()
	{
		$this->db->select('voting.*, user.*');
		$this->db->from('voting');
		$this->db->join('user', 'user.id = voting.id_user');
		$this->db->order_by('voting.created_at','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function voting($post)
    {
        $params['id_user'] = $this->session->userdata('id');
        $params['nama_film'] = $post['nama_film'];

        $this->db->insert('voting', $params);
    }
}
