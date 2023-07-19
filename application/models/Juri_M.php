<?php

class Juri_M extends CI_Model
{
    public function getPendaftar()
    {
        $this->db->order_by('pendaftaran.tgl_upload','DESC');
        $this->db->where('status','1');
        return $this->db->get('pendaftaran')->result_array();
    }

    public function getPeserta()
    {
        $this->db->order_by('user.created_at','DESC');
        $this->db->where('role', 'peserta');
        return $this->db->get('user')->result_array();
    }

    public function getPenilaian()
    {
        $this->db->order_by('penilaian.created_at','DESC');
        return $this->db->get('penilaian')->result_array();
    }

    public function countPeserta()
    {
        $this->db->where('role', 'peserta');
        return $this->db->get('user')->num_rows();
    }


    public function getDataPendaftaran()
    {
        $role_user = $this->session->userdata('role');
        if ($role_user == 'juri') {
            $queryMenu = "SELECT pendaftaran.*, user.nama
            FROM user JOIN pendaftaran 
            ON user.id = pendaftaran.id_user
            WHERE pendaftaran.status = '3'
            ORDER BY pendaftaran.tgl_upload DESC ";
        } else {
            $queryMenu = "SELECT pendaftaran.*, user.nama
            FROM user JOIN pendaftaran 
            ON user.id = pendaftaran.id_user
            WHERE pendaftaran.status NOT IN ('0', '2')
            ORDER BY pendaftaran.tgl_upload DESC ";
        }

        return $this->db->query($queryMenu)->result_array();
    }


    public function tambahDataPenilaian($post)
    {
        // $data = [
        //     "id" => substr(md5(rand()),0,5),
        //     "id_user" => $this->session->userdata('id'),
        //     "id_pendaftaran" => $id,
        //     "teknik_penulisan" => $this->input->post('teknik_penulisan', true),
        //     "desk_teknik_penulisan" => $this->input->post('desk_teknik_penulisan', true),

        //     "mimik" => $this->input->post('mimik', true),
        //     "desk_mimik" => $this->input->post('desk_mimik', true),

        //     "karakter" => $this->input->post('karakter', true),
        //     "desk_karakter" => $this->input->post('desk_karakter', true),

        //     "angel" => $this->input->post('angel', true),
        //     "desk_angel" => $this->input->post('desk_angel', true),

        //     "style" => $this->input->post('style', true),
        //     "desk_style" => $this->input->post('desk_style', true),

        //     "kualitas_gambar" => $this->input->post('kualitas_gambar', true),
        //     "desk_kualitas_gambar" => $this->input->post('desk_kualitas_gambar', true),

        //     "setting" => $this->input->post('setting', true),
        //     "desk_setting" => $this->input->post('desk_setting', true),

        //     "makeup" => $this->input->post('makeup', true),
        //     "desk_makeup" => $this->input->post('desk_makeup', true),

        //     "style_editing" => $this->input->post('style_editing', true),
        //     "desk_style_editing" => $this->input->post('desk_style_editing', true),

        //     "penyutradaraan" => $this->input->post('penyutradaraan', true),
        //     "desk_penyutradaraan" => $this->input->post('desk_penyutradaraan', true),

        //     "note" => $this->input->post('note', true),
        // ];

        $params['id'] = substr(md5(rand()),0,5);
        $params['id_user'] = $this->session->userdata('id');
        $params['id_pendaftaran'] = $post['id_pendaftaran'];

        $params['teknik_penulisan'] = $post['teknik_penulisan'];
        $params['desk_teknik_penulisan'] = $post['desk_teknik_penulisan'];

        $params['keutuhan_ide'] = $post['keutuhan_ide'];
        $params['desk_keutuhan_ide'] = $post['desk_keutuhan_ide'];

        $t_n_naskah = $post['teknik_penulisan'] + $post['keutuhan_ide'];
        $b_n_naskah = $t_n_naskah / 2;
        $params['nilai_naskah'] = $b_n_naskah;

        $params['mimik'] = $post['mimik'];
        $params['desk_mimik'] = $post['desk_mimik'];

        $params['karakter'] = $post['karakter'];
        $params['desk_karakter'] = $post['desk_karakter'];

        $t_n_akting = $post['mimik'] + $post['karakter'];
        $b_n_akting = $t_n_akting / 2;
        $params['nilai_akting'] = $b_n_akting;

        $params['angel'] = $post['angel'];
        $params['desk_angel'] = $post['desk_angel'];

        $params['style'] = $post['style'];
        $params['desk_style'] = $post['desk_style'];

        $t_n_gambar = $post['angel'] + $post['style'];
        $b_n_gambar = $t_n_gambar / 2;
        $params['nilai_gambar'] = $b_n_gambar;

        $params['kualitas_gambar'] = $post['kualitas_gambar'];
        $params['desk_kualitas_gambar'] = $post['desk_kualitas_gambar'];

        $params['setting'] = $post['setting'];
        $params['desk_setting'] = $post['desk_setting'];

        $params['makeup'] = $post['makeup'];
        $params['desk_makeup'] = $post['desk_makeup'];

        $t_n_artistik = $post['kualitas_gambar'] + $post['setting'] + $post['makeup'];
        $b_n_artistik = $t_n_artistik / 3;
        $params['nilai_artistik'] = $b_n_artistik;

        $params['style_editing'] = $post['style_editing'];
        $params['desk_style_editing'] = $post['desk_style_editing'];

        $params['penyutradaraan'] = $post['penyutradaraan'];
        $params['desk_penyutradaraan'] = $post['desk_penyutradaraan'];

        if (!empty($post['note'])) {
            $params['note'] = $post['note'];
        }

        $total_n = $b_n_naskah + $b_n_akting + $b_n_gambar + $b_n_artistik + $post['style_editing'] + $post['penyutradaraan'];
        $params['total_nilai'] = $total_n;

        $total_r = $total_n / 6;
        $params['total_rerata'] = $total_r;

        $this->db->insert('penilaian', $params);
    }

    public function getNilaiRata($id_pendaftaran)
    {
        $id_juri = $this->session->userdata('id');
        $penilaian = $this->Juri_M->getPenilaian();

        foreach ($penilaian as $pnl) {
            if ($id_juri == $pnl['id_user'] && $id_pendaftaran == $pnl['id_pendaftaran']) {
                $rata = $pnl['total_rerata'];
                return $rata;
            }
        }
    }

    public function getNilaiFilm($id_pendaftaran)
    {
        $id_juri = $this->session->userdata('id');
        $penilaian = $this->Juri_M->getPenilaian();

        foreach ($penilaian as $pnl) {
            if ($id_juri == $pnl['id_user'] && $id_pendaftaran == $pnl['id_pendaftaran']) {
                $nilai = $pnl['total_nilai'];
                return $nilai;
            }
        }
    }

    public function ubahDataPenilaian($post)
    {
        // $data = [
        //     "id_user" => $this->input->post('id_user', true),
        //     "id_pendaftaran" => $this->input->post('id_pendaftaran', true),
        //     "nilai_film" => $this->input->post('nilai1', true)
        // ];

        $params['id_user'] = $this->session->userdata('id');
        $params['id_pendaftaran'] = $post['id_pendaftaran'];

        $params['teknik_penulisan'] = $post['teknik_penulisan'];
        $params['desk_teknik_penulisan'] = $post['desk_teknik_penulisan'];

        $params['keutuhan_ide'] = $post['keutuhan_ide'];
        $params['desk_keutuhan_ide'] = $post['desk_keutuhan_ide'];

        $t_n_naskah = $post['teknik_penulisan'] + $post['keutuhan_ide'];
        $b_n_naskah = $t_n_naskah / 2;
        $params['nilai_naskah'] = $b_n_naskah;

        $params['mimik'] = $post['mimik'];
        $params['desk_mimik'] = $post['desk_mimik'];

        $params['karakter'] = $post['karakter'];
        $params['desk_karakter'] = $post['desk_karakter'];

        $t_n_akting = $post['mimik'] + $post['karakter'];
        $b_n_akting = $t_n_akting / 2;
        $params['nilai_akting'] = $b_n_akting;

        $params['angel'] = $post['angel'];
        $params['desk_angel'] = $post['desk_angel'];

        $params['style'] = $post['style'];
        $params['desk_style'] = $post['desk_style'];

        $t_n_gambar = $post['angel'] + $post['style'];
        $b_n_gambar = $t_n_gambar / 2;
        $params['nilai_gambar'] = $b_n_gambar;

        $params['kualitas_gambar'] = $post['kualitas_gambar'];
        $params['desk_kualitas_gambar'] = $post['desk_kualitas_gambar'];

        $params['setting'] = $post['setting'];
        $params['desk_setting'] = $post['desk_setting'];

        $params['makeup'] = $post['makeup'];
        $params['desk_makeup'] = $post['desk_makeup'];

        $t_n_artistik = $post['kualitas_gambar'] + $post['setting'] + $post['makeup'];
        $b_n_artistik = $t_n_artistik / 3;
        $params['nilai_artistik'] = $b_n_artistik;

        $params['style_editing'] = $post['style_editing'];
        $params['desk_style_editing'] = $post['desk_style_editing'];

        $params['penyutradaraan'] = $post['penyutradaraan'];
        $params['desk_penyutradaraan'] = $post['desk_penyutradaraan'];

        if (!empty($post['note'])) {
            $params['note'] = $post['note'];
        }

        $total_n = $b_n_naskah + $b_n_akting + $b_n_gambar + $b_n_artistik + $post['style_editing'] + $post['penyutradaraan'];
        $params['total_nilai'] = $total_n;

        $total_r = $total_n / 6;
        $params['total_rerata'] = $total_r;

        $this->db->where('id', $post['id_penilaian']);
        $this->db->update('penilaian', $params);
    }

    function getUrl($url)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';

        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }

        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = $matches[count($matches) - 1];
        }
        return $youtube_id;
    }
}
