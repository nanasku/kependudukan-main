<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class M_login extends CI_Model{


    function cekuserdaftar($NIK)
    {
        $query = $this->db->query("SELECT * FROM penduduk WHERE NIK = '$NIK' ");
        if ($query->num_rows()==1)
        {
            return $query->result();
        }else{
            return false;
        }
    }

    function ceklogin($NIK,$password)
    {
        $query = $this->db->query("SELECT * FROM penduduk WHERE NIK = '$NIK' and password ='$password' ");
        if ($query->num_rows()==1)
        {
            return $query->result();
        }else{
            return false;
        }
    }

    


}