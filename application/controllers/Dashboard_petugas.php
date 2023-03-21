<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_petugas extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('kategori');
	}

	public function index()
	{
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/petugas_header', $data);
        $this->load->view('templates/petugas_topbar', $data);
        $this->load->view('templates/petugas_sidebar', $data);
        $this->load->view('Petugas/dashboard_petugas', $data);
        $this->load->view('templates/petugas_footer', $data);
	}

    public function masdat_petugas()
    {
        $data['title'] = 'masdat Petugas';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['sidebar'] = $this->db->get('masyarakat')->result_array();
        $data['petugas'] = $this->db->get('petugas')->result_array();

        $this->load->view('templates/petugas_header',$data);
        $this->load->view('templates/petugas_topbar',$data);
        $this->load->view('templates/petugas_sidebar',$data);
        $this->load->view('petugas/masdat_petugas',$data);
        $this->load->view('templates/petugas_footer',$data);
    }

    public function petugas_masyarakat()
    {
        $data['title'] = 'Petugas Masyarakat';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['masyarakat']=$this->db->get('masyarakat')->result_array();


        $this->load->view('templates/petugas_header',$data);
        $this->load->view('templates/petugas_topbar',$data);
        $this->load->view('templates/petugas_sidebar',$data);
        $this->load->view('Petugas/petugas_masyarakat',$data);
        $this->load->view('templates/petugas_footer',$data);
    }

    public function petugas_kategori()
    {
        $data['title'] = 'petugas Kategori';
        $data['user'] = $this->db->get('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['kategori']=$this->db->get('kategori')->result_array();
		$this->load->model('kategori');
		$data['sub_kategori'] = $this->db->get('sub_kategori')->result_array();
		$this->load->model('kategori');

        $this->load->view('templates/petugas_header');
        $this->load->view('templates/petugas_topbar');
        $this->load->view('templates/petugas_sidebar');
        $this->load->view('Petugas/kategori_petugas',$data);
        $this->load->view('templates/petugas_footer');
    }
}
