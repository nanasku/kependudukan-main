<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_berita extends CI_Model{

    public function Tambah_berita($data){
        $this->db->insert('berita',$data);
    }

    public function Tampil_berita($table){
        $this->db->order_by('no_berita', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_berita($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_berita($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_berita($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }


}