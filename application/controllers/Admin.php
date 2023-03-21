<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{


	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Admin';
			$this->load->view('templates/admin_header', $data);
			$this->load->view('Auth/login_admin');
			$this->load->view('templates/admin_footer');
		} else {
			// validasinya success
			$this->login_admin();
		}
	}

	public function login_admin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('petugas', ['username' => $username])->row_array();

		// var_dump($user);
		// jika usernya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'level' => $user['level']
					];

					// kondisi
					$this->session->set_userdata($data);
					if ($user['level'] == 1) {
						redirect('Admin'); //admin
					} else if ($user['level'] == 2) {
						redirect('Petugas'); //Petugas
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong password! </div>');
					redirect('dashboard_admin/index');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> This Username has not been activeted </div>');
				redirect('Admin');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Username is not register </div>');
			redirect('Admin');
		}
	}

	public function registrasi_admin()
	{
	    $this->form_validation->set_rules('nama', 'nama', 'required|trim|is_unique[petugas.username]', [
	        'is_unique' => 'This username has already registered!'
	    ]);
	    $this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('telp', 'telp', 'required|trim');
	    $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
	        'matches' => 'password dont match',
	        'min_length' => 'password too short'
	    ]);
	    $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]',);

	    if ($this->form_validation->run() == false) {
	        $data['title'] = 'Registration';
	        $this->load->view('templates/admin_header', $data);
	        $this->load->view('Auth/registrasi_admin');
	        $this->load->view('templates/admin_footer');
	    } else {
	        $data = [
	            'nama' => htmlspecialchars($this->input->post('nama', true)),
	            'username' => htmlspecialchars($this->input->post('username', true)),
	            'telp' => htmlspecialchars($this->input->post('telp', true)),
	            'password' => password_hash(
	                $this->input->post('password1'),
	                PASSWORD_DEFAULT
	            ),
	            'is_active' => 1,
	            'level' => 1,
	        ];

	        $this->db->insert('petugas', $data);
	        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	       Congratulation! your account has been created. Please Login</div>');
	        redirect('Auth/login_admin');
	    }
	}

	public function admin_logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');

		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">log out</div>');
		redirect('Auth');
	}

	public function laporan_pdf()
    {
        $data['masyarakat'] = $this->model_nopal->masyarakat();
		$data['petugas'] = $this->pengaduan->tampilpetugas();
        $pengaduan = $this->pengaduan->joinpengaduandata2()->result_array();

        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            ),
            'pengaduan' => $pengaduan
        );
    
        $this->load->library('pdf');
        $data['title'] = 'Laporan Pengaduan';
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "pengaduan-masyarakat.pdf";
        $this->pdf->load_view('Dashboard/laporan_pdf', $data);
    
    
    }

	// Petugas

	public function petugas_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login Petugas';
			$this->load->view('templates/petugas_header', $data);
			$this->load->view('Auth/petugas_login');
			$this->load->view('templates/petugas_footer');
		} else {
			// validasinya success
			$this->petugas_login();
		}
	}

	public function petugas_registrasi()
	{
	    $this->form_validation->set_rules('nama', 'nama', 'required|trim|is_unique[petugas.username]', [
	        'is_unique' => 'This username has already registered!'
	    ]);
	    $this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('telp', 'telp', 'required|trim');
	    $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
	        'matches' => 'password dont match',
	        'min_length' => 'password too short'
	    ]);
	    $this->form_validation->set_rules('password2', 'password', 'required|trim|matches[password1]',);

	    if ($this->form_validation->run() == false) {
	        $data['title'] = 'Registrasi';
	        $this->load->view('templates/petugas_header', $data);
	        $this->load->view('Auth/petugas_registrasi');
	        $this->load->view('templates/petugas_footer');
	    } else {
	        $data = [
	            'nama' => htmlspecialchars($this->input->post('nama', true)),
	            'username' => htmlspecialchars($this->input->post('username', true)),
	            'telp' => htmlspecialchars($this->input->post('telp', true)),
	            'password' => password_hash(
	                $this->input->post('password1'),
	                PASSWORD_DEFAULT
	            ),
	            'is_active' => 2,
	            'level' => 2,
	        ];

	        $this->db->insert('petugas', $data);
	        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
	       Congratulation! your account has been created. Please Login</div>');
	        redirect('Auth/petugas_login');
	    }
	}


	
}

