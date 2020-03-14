<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/auth_header');
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			$this->_login();
		}
		
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user_km', ['email' => $email])->row_array();
		
		// usernya ada
		if ($user) {
			// cek password
			if ($password == $user['password']) {
				$data = [
					'email' => $user['email'],
					'role_id' => $user['role_id']
				];
				$this->session->set_userdata($data);
				if ($user['role_id'] == 3) {
					redirect('humas');
				} else {
					redirect('siswa');
				}
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
                Password Salah</div>');
			    redirect('auth');
			}

		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
            Email tidak terdaftar!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
                Kamu Berhasil Keluar!</div>');
			    redirect('auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */