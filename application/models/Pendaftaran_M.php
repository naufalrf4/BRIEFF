<?php


class Pendaftaran_M extends CI_Model
{
	public function getPendaftaran($user_id, $role_user)
	{
		if ($role_user == 'admin' || $role_user == 'kurator') {
			$queryMenu = "SELECT pendaftaran.*, user.nama
                        FROM user JOIN pendaftaran 
                        ON user.id = pendaftaran.id_user";
		} else {
			$queryMenu = "SELECT pendaftaran.*, user.nama
                        FROM user JOIN pendaftaran 
                        ON user.id = pendaftaran.id_user WHERE user.id = '$user_id'";
		}

		return $this->db->query($queryMenu)->result_array();
	}

	public function detailPendaftaran($id)
	{
		$result = $this->db->where('id', $id)->get('pendaftaran');
		if ($result->num_rows() > 0) {
			return $result->result_array();
		} else {
			return false;
		}
	}

	public function addPendaftaran($data)
	{
		$this->db->insert('pendaftaran', $data);
	}

	public function editPendaftaran($where, $data)
	{

		// $params = [
		//     'email' => $post['email'],
		//     'no_hp' => $post['no_hp'],
		//     'instagram' => $post['instagram'],
		//     'nama_komunitas' => $post['nama_komunitas'],
		//     'nama_institusi' => $post['nama_institusi'],
		//     'domisili_komunitas' => $post['domisili_komunitas'],
		//     'nama_film' => $post['nama_film'],
		//     'tema_film' => $post['tema_film'],
		//     'tahun_produksi' => $post['tahun_produksi'],

		//     'sutradara' => $post['sutradara'],
		//     'penulis_naskah' => $post['penulis_naskah'],
		//     'editor_film' => $post['editor_film'],

		//     'link_trailer' => $post['link_trailer'],
		//     'link_film' => $post['link_film'],
		//     'link_gdrive' => $post['link_gdrive'],
		// ];

		$this->db->where('id', $where);
		$this->db->update('pendaftaran', $data);
	}

	public function deletePendaftaran($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function terimaPendaftaran($post)
    {
        $params['status'] = '1';

        $this->db->where('id', $post['id']);
        $this->db->update('pendaftaran', $params);
    }

    public function tolakPendaftaran($post)
    {
        $params['status'] = '2';

        $this->db->where('id', $post['id']);
        $this->db->update('pendaftaran', $params);
    }

    public function lanjutJuri($post)
    {
        $params['status'] = '3';

        $this->db->where('id', $post['id']);
        $this->db->update('pendaftaran', $params);
    }

    public function batalJuri($post)
    {
        $params['status'] = '1';

        $this->db->where('id', $post['id']);
        $this->db->update('pendaftaran', $params);
    }

    public function getPendaftaranSeleksi($user_id, $role_user)
	{
		$queryMenu = "SELECT pendaftaran.*, user.nama
		FROM user JOIN pendaftaran 
		ON user.id = pendaftaran.id_user
		WHERE pendaftaran.status='3'";

		return $this->db->query($queryMenu)->result_array();
	}
}

/* End of file Pendaftaran_M.php */
