<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_dokumen extends CI_Model{

    public function Tambah_dokumen($data){
        $this->db->insert('permohonan',$data);
    }

    public function Tampil_dokumen($table){
        $this->db->order_by('no_permohonan', 'DESC');
        return $this->db->get($table);
    }

    public function Hapus_data_dokumen($data, $table){
        $this->db->where($data);
        $this->db->delete($table);
    }

    public function Edit_data_dokumen($where, $table){
        return $this->db->get_where($table,$where);
        
    }

    public function Update_data_dokumen($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function Kades_upload_dokumen($data){
        $this->db->insert('dokumen',$data);
    }
    public function Masyarakat_unduh_dokumen($table){
        $this->db->order_by('id_dokumen', 'DESC');
        return $this->db->get($table);
    }


}