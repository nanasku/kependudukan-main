<?php 
defined('BASEPATH')OR exit('No direct script access allowed');

class M_rt extends CI_Model{

    public function Tampil_rt($table){
        return $this->db->get($table);
    }
}