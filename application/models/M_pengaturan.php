<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan extends CI_Model {

    // Ambil data desa (hanya 1 baris)
    public function get_desa()
    {
        return $this->db->limit(1)->get('pengaturan_desa')->row();
    }

    // Update data desa
    public function update_desa($data)
    {
        $desa = $this->get_desa();
        if ($desa) {
            $this->db->where('id', $desa->id);
            return $this->db->update('pengaturan_desa', $data);
        } else {
            return $this->db->insert('pengaturan_desa', $data);
        }
    }
}