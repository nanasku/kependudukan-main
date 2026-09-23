<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_kritik extends CI_Model{

    public function Tambah_kritik($data){
        $this->db->insert('kritiksaran',$data);
    }

    public function Tampil_kritik($table){
        $this->db->order_by('no_kritik', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_kritik($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_kritik($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_kritik($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}