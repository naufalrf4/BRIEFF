<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->model('User_M');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('max_length', '{field} maksimal 10 karakter');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			if ($this->session->userdata('role') != null) {
				$this->session->set_flashdata('error', 'Anda telah login, silahkan logout terlebih dahulu!');
				echo "<script> history.go(-1); </script>";
			} else {
				$data['title'] = "Login";

				$this->load->view('auth/login', $data);
			}
		} else {
			$this->_login();
			$data = array(
				'email' => $this->input->post('email', TRUE),
				'password' => md5($this->input->post('password', TRUE))
			);
			$hasil = $this->User_M->cek_user($data);
			$query = $this->db->get_where('user', $data);
			if ($query->num_rows() > 0) {
				$sess = $query->row_array();
				$this->session->set_userdata($sess);
				$this->session->set_flashdata('success', 'Selamat datang kembali!');
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('error', 'Email atau password salah');
				redirect('login');
			}
		}
	}

	private function _login()
	{
		$email = $this->input->post('email', TRUE);
		$password = md5($this->input->post('password', TRUE));

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if ($user) {
			if ($user['is_active'] == 1) {
				if ($user['password'] == $password) {
					$this->session->set_userdata($user);
					if ($this->session->userdata('role') != 'umum') {
						$this->session->set_flashdata('success', 'Selamat datang!');
						redirect('dashboard');
					} else {
						$this->session->set_flashdata('success', 'Selamat datang!');
						redirect('/');
					}
				} else {
					$this->session->set_flashdata('error', 'Password yang Anda masukkan salah!');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('error', 'Email Anda belum teraktivasi!');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('error', 'Email yang Anda masukkan tidak terdaftar!');
			redirect('login');
		}
	}

	public function register()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[10]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('max_length', '{field} maksimal 10 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			if ($this->session->userdata('role') != null) {
				$this->session->set_flashdata('error', 'Anda telah login, silahkan logout terlebih dahulu!');
				echo "<script> history.go(-1); </script>";
			} else {
				$data['title'] = "Register";

				$this->load->view('auth/register', $data);
			}
		} else {
			$email = $this->input->post('email');
			$token = base64_encode(random_bytes(32));
			$user_token = [
				'email' => $email,
				'token' => $token,
				'created_at' => time(),
			];

			$this->db->insert('user_token', $user_token);

			$post = $this->input->post(null, TRUE);
			$this->User_M->add($post);

			$this->_sendEmail($token, 'verify');

			if ($this->db->affected_rows() > 0) {
				echo "<script> alert('Berhasil Register, Silahkan Login');";
				$this->session->set_flashdata('success', 'Berhasil register, silakan cek email Anda!');
				// $this->session->set_flashdata('success', 'Berhasil register, silakan login!');
				redirect('login');
			}
		}
	}

	private function _sendEmail($token, $type)
	{
		$config = [
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'contactbrieff23@gmail.com',
			'smtp_pass' => 'ngfjixdbubrdlhwi',
			'smtp_port' => 465,
			'mailtype' => 'html',
			'charset' => 'UTF-8',
			'newline' => "\r\n",
			'wordwrap' => TRUE
		];

		$this->load->library('email', $config);

		$this->email->from('contactbrieff23@gmail.com', 'BRIEFF 6.0');
		$this->email->to($this->input->post('email'));
		$this->email->set_mailtype('html');

		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'token' => $token,
			'title' => "Reset Password"
		);

		if ($type == 'verify') {
			$this->email->subject('Verifikasi Akun Anda');
			$this->email->message($this->load->view('auth/verif-email', $data, true));
		} else if ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message($this->load->view('auth/reset-pass-email', $data, true));
		}

		if ($this->email->send()) {
			return true;
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		if($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if(time() - $user_token['created_at'] < (60*60*24)) {
					$this->db->set('is_active', 1);
					$this->db->where('email', $email);
					$this->db->update('user');

					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('success', 'Email '.$email.' berhasil diaktivasi! Silakan login!');
					redirect('login');
				} else {
					$this->db->delete('user', ['email' => $email]);
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('error', 'Gagal aktivasi, token telah kedaluarsa!');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('error', 'Gagal aktivasi, token invalid!');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('error', 'Gagal aktivasi, email Anda tidak terdaftar!');
			redirect('login');
		}
	}

	public function verify_test()
	{
		$this->load->view('auth/verify-test');
	}

	public function forgot_test()
	{
		$data = array('title' => "Reset Password");
		$this->load->view('auth/forgot-pass', $data);
	}

	public function forgot_password()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			if ($this->session->userdata('role') != null) {
				$this->session->set_flashdata('error', 'Anda telah login, silahkan logout terlebih dahulu!');
				echo "<script> history.go(-1); </script>";
			} else {
				$data['title'] = "Lupa Password";

				$this->load->view('auth/forgot-password', $data);
			}
		} else {
			$email = $this->input->post('email');
			$user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();
			if ($user) {
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $email,
					'token' => $token,
					'created_at' => time(),
				];

				$this->db->insert('user_token', $user_token);
				$this->_sendEmail($token, 'forgot');

				$this->session->set_flashdata('success', 'Silakan cek email untuk mereset password Anda!');
				redirect('forgot-password');
			} else {
				$this->session->set_flashdata('error', 'Mohon maaf, email Anda tidak ditemukan atau belum teraktivasi!');
				redirect('forgot-password');
			}
		}
	}

	public function reset_password()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($user) {
			$user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

			if ($user_token) {
				if(time() - $user_token['created_at'] < (60*60*24)) {
					$this->session->set_userdata('reset_email', $email);
					$this->changePassword();

					$this->db->delete('user_token', ['email' => $email]);
				} else {
					$this->db->delete('user_token', ['email' => $email]);

					$this->session->set_flashdata('error', 'Gagal reset password, token telah kedaluarsa!');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('error', 'Gagal reset password, token invalid!');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('error', 'Mohon maaf, email Anda tidak ditemukan!');
			redirect('login');
		}
	}

	public function changePassword()
	{
		if (!$this->session->userdata('reset_email')) {
			redirect('login');
		} else if ($this->session->userdata('role') == NUll) {
			$this->form_validation->set_rules('password', 'Password Baru', 'required|min_length[5]|max_length[8]');
			$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));

			$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
			$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
			$this->form_validation->set_message('max_length', '{field} maksimal 8 karakter');

			$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');

			if ($this->form_validation->run() == FALSE) {
				$data['title'] = "Reset Password";
				$this->load->view('auth/reset-password', $data);
			} else {
				$password = md5($this->input->post('password'));
				$email = $this->session->userdata('reset_email');

				$this->db->set('password', $password);
				$this->db->where('email', $email);
				$this->db->update('user');

				$this->session->unset_userdata('reset_email');

				$this->session->set_flashdata('success', 'Berhasil reset password, silakan login!');
				redirect('login');
			}
		} else {
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		session_destroy();
		redirect('/');
	}
}
