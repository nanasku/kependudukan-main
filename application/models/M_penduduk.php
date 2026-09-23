<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_penduduk extends CI_Model{

    public function Tambah_penduduk($data){
        $this->db->insert('penduduk',$data);
    }

    public function Tampil_penduduk($table){
        $this->db->order_by('NIK', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_penduduk($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_penduduk($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_penduduk($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}