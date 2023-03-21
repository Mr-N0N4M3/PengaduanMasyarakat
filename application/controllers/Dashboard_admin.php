<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller 
{

    public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('pengaduan');
	}

    public function index()
    {
        $this->load->view('templates/admin_header' );
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('Dashboard/dashboard_admin');
        $this->load->view('templates/admin_footer');
    }

    public function kategori()
    {
        $data['title'] = 'Admin Kategori';
        $data['user'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['pengaduan'] = $this->db->get('pengaduan')->result_array();
		$data['kategori']=$this->db->get('kategori')->result_array();
        $data['sub_kategori']=$this->db->get('sub_kategori')->result_array();

		$this->load->model('pengaduan');
		$data['pengaduan'] = $this->kategori->pengaduan()->result_array();
		$this->load->model('kategori');

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('DaAdmin/kategori', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    public function tambah_kategori()
    {
        $kategori = $this->input->post('kategori');
        $data = array(
            'kategori' => $kategori,
        );
        $this->db->insert('kategori', $data);
        redirect('DaAdmin/kategori');
    }

    // editkategori
    public function editkategori($id)
    {
		$data['user'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();

        $kategori = $this->input->post('kategori');

        $update = array(
            'kategori' => $kategori,
        );

        $this->db->where('id', $id);
        $this->db->update('kategori', $update);

        redirect('Dashboard_admin/kategori');
    }

    public function hapusKategori($id)
    {
        $this->load->model('kategori');
        $this->kategori->hapusKategori($id);
        redirect('DaAdmin/kategori');
    }

    public function tambah_subkategori()
    {
        $this->load->model('kategori');

        $kategori = $this->input->post('kategori');
        $sub_kategori = $this->input->post('sub_kategori');

        $data = array(
            'id_kategori' => $kategori,
            'sub_kategori' => $sub_kategori,
        );

        $this->kategori->Joinsubkategori();
        $this->kategori->insertSubKategori($data);
        redirect('DaAdmin/subkategori');
    }

    public function delete_kategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
        redirect('DaAdmin/kategori');
    }

    public function delete_subkategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
        redirect('DaAdmin/kategori');
    }

    public function edit_kategori($edit_id)
    {
        $edit_id = $this->input->post('edit_id');
        $edit_kategori = $this->input->post('edit_kategori');

        $update =array(
            'kategori' => $edit_kategori,
        );
        $this->db->where('id', $edit_id);
        $this->db->update('kategori', $update);
        redirect('DaAdmin/kategori');
    }

    public function edit_subkategori($edit_id)
    {
        $edit_id = $this->input->post('edit_id');
        $edit_subkategori = $this->input->post('edit_sub_kategori');

        $update =array(
            'sub_kategori' => $edit_sub_kategori,
        );
        $this->db->where('id', $edit_id);
        $this->db->update('sub_kategori', $update);
        redirect('DaAdmin/kategori');
    }

    //Admin Petugas

    public function admin_petugas()
    {
        $data['title'] = 'Admin Petugas';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['sidebar'] = $this->db->get('masyarakat')->result_array();
        $data['petugas'] = $this->db->get('petugas')->result_array();
 
        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('DaAdmin/petugas',$data);
        $this->load->view('templates/admin_footer',$data);
    }

    public function add_admin_petugas()
    {
        $data = [
            'id_petugas' => htmlspecialchars($this->input->post('id_petugas', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'level' => htmlspecialchars($this->input->post('level', true)),
            'telp' => htmlspecialchars($this->input->post('telp', true)),
            'password' => password_hash(
                $this->input->post('password1'),
                PASSWORD_DEFAULT
            ),
            'is_active' => 1,
            'level' => 3,
        ];
        $this->db->insert('petugas', $data);
        redirect('dashboard_admin/admin_petugas');
    }

    public function delete_petugas()
    {
        $this->db->where('id_petugas', $id_petugas);
        $this->db->delete('petugas');
        redirect('dashboard_admin/admin_petugas');
    }

    //Admin Masyarakat
    public function admin_masyarakat()
    {
        $data['title'] = 'Admin Masyarakat';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['masyarakat']=$this->db->get('masyarakat')->result_array();


        $this->load->view('templates/admin_header',$data);
        $this->load->view('templates/admin_topbar',$data);
        $this->load->view('templates/admin_sidebar',$data);
        $this->load->view('DaAdmin/masyarakat',$data);
        $this->load->view('templates/admin_footer',$data);
    }
    
    public function pengaduan()
    {
        $data['title'] = 'Pengaduan';
        $data['user'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
        $data['sidebar'] = $this->db->get('masyarakat')->result_array();
        $data['petugas'] = $this->db->get('petugas')->result_array();
        // $data['pengaduan'] = $this->db->get('pengaduan')->result_array();
        $data['pengaduan'] = $this->pengaduan->pengaduanj()->result_array();
 
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_topbar');
        $this->load->view('templates/admin_sidebar');
        $this->load->view('DaAdmin/pengaduan',$data);
        $this->load->view('templates/admin_footer');
    }
}