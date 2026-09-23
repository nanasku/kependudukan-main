<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_kematian extends CI_Model{

    public function Tambah_kematian($data){
        $this->db->insert('kematian',$data);
    }

    public function Tampil_kematian($table){
        $this->db->order_by('no_kematian', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_kematian($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_kematian($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_kematian($where,$datas,$table){
        $this->db->where($where);
        $this->db->update($table,$datas);
    }
}