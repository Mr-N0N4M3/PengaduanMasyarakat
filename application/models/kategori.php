<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori extends CI_Model
{


    // Model Admin Kategori
    function getKategori()
    {
        return $this->db->get('kategori')->result_array();
    }

    function insertKategori($data)
    {
        $this->db->insert('kategori', $data);
    }


    function deleteKategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }

    // Model Admin SubKategori

    function getSubKategori()
    {
        return $this->db->get('sub_kategori')->result_array();
    }

    function insertSubKategori($data)
    {
        $this->db->insert('sub_kategori', $data);
    }

    public function sub_kategori()
   {
      $this->db->select("*");
      $this->db->from('sub_kategori');
      $this->db->join('kategori', 'kategori.id=sub_kategori.id_kategori');
      return $this->db->get();
   }

    function hapusSubKategori($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('sub_kategori');
    }


    function getPetugas()
    {
        return $this->db->get('petugas')->result_array();
    }

    function insertPetugas($tambahPetugas)
    {
        $this->db->insert('petugas', $tambahPetugas);
    }

    function getMasyarakat()
    {
        return $this->db->get('masyarakat')->result_array();
    }
    public function pengaduan()
    {
        $this->db->select('*');
        $this->db->FROM('pengaduan');
        $this->db->JOIN('masyarakat','pengaduan.nik=masyarakat.nik');
        return $this->db->get();
    }
    public function kategori()
    {
        $this->db->select('*');
        $this->db->FROM('sub_kategori');
        $this->db->JOIN('kategori','kategori.id=sub_kategori.id');
        return $this->db->get();
    }
}
