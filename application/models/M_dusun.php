<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_dusun extends CI_Model{

    public function Tampil_dusun($table){
        return $this->db->get($table);
    }
}