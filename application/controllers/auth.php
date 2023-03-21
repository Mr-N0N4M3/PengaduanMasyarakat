<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {
	

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {

			//gagal validasi
			$data['title'] = 'Login';
			$this->load->view('auth/login', $data);
		} else {

			//lolos validasi
			$this->login();
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$masyarakat = $this->db->get_where('masyarakat', ['username' => $username])->row_array();

		//jika usernya ada
		if ($masyarakat) {

			//usernya ada
			if ($masyarakat) {
				//jika usernya aktif
				    //cek password
					if (password_verify($password, $masyarakat['password'])) {

						$data = [
							'username' => $masyarakat['username']
						];
						$this->session->set_userdata($data);
						redirect('Dashboard/index');

					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
						redirect('auth');
					}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"Username is not registered!</div>');
				redirect('auth');
			}
		}
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nik', 'Nik', 'required|trim');
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('no_telp', 'No_telp', 'required|trim');

		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont match !',
			'min_length' => 'password too short !',
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');



		if ($this->form_validation->run() == false) {

			$data['title'] = 'Register';
			$this->load->view('Auth/registrasi', $data);
		} else {

			$data = [
				'nik' => htmlspecialchars($this->input->post('nik', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
				'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
			];

			$this->db->insert('masyarakat', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Congratulation your account has been created !
		  	</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        log out</div>');
		redirect('Auth/login');
	}

	
}