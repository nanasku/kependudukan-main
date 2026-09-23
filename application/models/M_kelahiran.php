<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_kelahiran extends CI_Model{

    public function Tambah_Kelahiran($data){
        $this->db->insert('kelahiran',$data);
    }

    public function Tampil_Kelahiran($table){
        $this->db->order_by('no_lahir', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_kelahiran($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_kelahiran($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_kelahiran($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}