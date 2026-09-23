<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_desa')) {
    function get_desa()
    {
        $CI =& get_instance();
        $CI->load->model('M_pengaturan');
        return $CI->M_pengaturan->get_desa();
    }
}