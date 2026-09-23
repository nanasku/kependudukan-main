<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_rw extends CI_Model{

    public function Tampil_rw($table){
        return $this->db->get($table);
    }
}