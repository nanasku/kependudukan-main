<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_pindahan extends CI_Model{

    public function Tambah_pindahan($data){
        $this->db->insert('pindahan',$data);
    }

    public function Tampil_pindahan($table){
        $this->db->order_by('no_kepergian', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_pindahan($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_pindahan($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_pindahan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}