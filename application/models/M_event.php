<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_event extends CI_Model{

    public function Tambah_event($data){
        $this->db->insert('event',$data);
    }

    public function Tampil_event($table){
        $this->db->order_by('no_event', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_event($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_event($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_event($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}