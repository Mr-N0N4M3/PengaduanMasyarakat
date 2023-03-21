<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    //masyarakat

    public function index()
    {
        $this->load->model('model_nopal');
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['sidebar'] = $this->db->get('masyarakat')->result_array();
        $data['pengaduan'] = $this->db->get('pengaduan')->result_array();;

        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('templates/auth_footer');
        $this->load->view('Dashboard/masyarakat_dashboard', $data);
    }
    
    public function masyarakat_pengaduan()
    {
        $data['masyarakat'] = $this->db->get_where('masyarakat', ['username' => $this->session->userdata('username')])->row_array();
        $data['sidebar'] = $this->db->get('masyarakat')->result_array();
        $data['pengaduan'] = $this->db->get('pengaduan')->result_array();

        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('Dashboard/masyarakat_pengaduan', $data);
        $this->load->view('templates/auth_footer');
    }

    public function dashboard()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('Dashboard/masyarakat_pengaduan', $data);
        $this->load->view('templates/auth_footer');
    }

    function buat_pengaduan()
    {
        $tgl_pengaduan = $this->input->post('tgl_pengaduan');
        $isi_laporan = $this->input->post('isi_laporan');
        $foto = $this->input->post('foto');

        $config['upload_path']          =  './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        
        $this->upload->initialize($config);

        $this->upload->do_upload('foto');
        $upload_foto = $this->upload->data('file_name');

        $data = array(
            'tgl_pengaduan' =>  $tgl_pengaduan,
            'isi_laporan' =>  $isi_laporan,
            'foto' =>  $upload_foto,
            

        );
        $this->db->insert('pengaduan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Data anda berhasil di simpan </div>');
        redirect('dashboard/masyarakat_pengaduan');
    }

    public function tambah_pengaduan()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_topbar');
        $this->load->view('templates/auth_sidebar');
        $this->load->view('Dashboard/tambah_pengaduan');
        $this->load->view('templates/auth_footer');
    }

    public function get_sub_kategori($id_kategori)
	{

		$subkategori = $this->db->get_where('subkategori', ['id_kategori' => $id_kategori])->result();
		$data = "<option value=''>Pilih salah satu</option>";
		foreach ($subkategori as $value) {
			$data .= "<option value='" . $value->id . "'>" . $value->subkategori . "</option>";
		}
		echo $data;
	}


}