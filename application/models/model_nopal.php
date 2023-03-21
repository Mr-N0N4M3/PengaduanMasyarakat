<?php
class model_nopal extends CI_Model
{
    function simpan_register($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_user_data($username)
    {
        $this->db->select('*');
        $this->db->from('masyarakat');
        $this->db->where('username', $username);
        return $this->db->get();
    }
    public function get_admin_data($username)
    {
        $this->db->select('*');
        $this->db->from('petugas');
        $this->db->where('username', $username);
        return $this->db->get();
    }
    public function get_user_login($username)
    {
        $this->db->select('*');
        $this->db->from('masyarakat');
        $this->db->where('username', $username);
        return $this->db->get();
    }
}