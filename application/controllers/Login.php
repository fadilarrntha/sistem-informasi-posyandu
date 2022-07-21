<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// MULAI LOGIN
	public function index()
	{
		$data['title'] = 'Login | Posyandu Paleto Indah';
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$pw = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();

		$pass = $user['password'];

		if ($user) {
			if ($user['is_active'] == 1) {
				if (password_verify($pw, $pass)) {
					$data = [
						'id_users' => $user['id_users'],
						'username' => $user['username'],
						'level_id' => $user['level_id'],
						'is_active' => $user['is_active']
					];
					$this->session->set_userdata($data);
					if ($user['level_id'] == "Petugas") {
						date_default_timezone_set('Asia/Jakarta');
						$tanggal = date('y-m-d h:i:s');

						$data = array('user_id' => $user['id_users'], 'date_time' => $tanggal);
						$this->db->insert('login_attempts', $data);

						$this->session->set_flashdata('success', 'Selamat Datang, Petugas!');
						redirect('dashboard/petugas');
					} else {
						date_default_timezone_set('Asia/Jakarta');
						$tanggal = date('y-m-d h:i:s');

						$data = array('user_id' => $user['id_users'], 'date_time' => $tanggal);
						$this->db->insert('login_attempts', $data);

						$this->session->set_flashdata('success', 'Selamat Datang, Admin!');
						redirect('dashboard/admin');
					}
				} else {
					$this->session->set_flashdata('msg-info', 'Password yang anda masukkan salah');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('msg-info', 'Username belum aktif');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('msg-info', 'Username yang anda masukkan belum terdaftar');
			redirect('login');
		}
	}
	// SELESAI LOGIN

	// MULAI LOGOUT
	public function logout()
	{
		$this->session->set_flashdata('warning', 'Anda sudah keluar dari aplikasi');

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('name');
		//$this->session->unset_userdata('level_id');

		redirect('login');
	}
	// SELESAI LOGOUT
}
