<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengaduan extends CI_Model {

function pengaduanj()
    {
        $this->db->select('*');
        $this->db->FROM('masyarakat');
        $this->db->JOIN('pengaduan','pengaduan.id=masyarakat.id');
        return $this->db->get();
    }

function sub_pengaduan($data)
    {
        $this->db->insert('pengaduan',$data);
    }

}