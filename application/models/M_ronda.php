<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ronda extends CI_Model {

    // ==================== JADWAL ====================
    public function get_all_jadwal()
    {
        return $this->db->order_by('FIELD(hari, "Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu")')
                        ->get('ronda_jadwal')->result();
    }

    public function get_jadwal_by_id($id)
    {
        return $this->db->where('id_jadwal', $id)->get('ronda_jadwal')->row();
    }

    public function get_jadwal_by_hari($hari)
    {
        return $this->db->where('hari', $hari)->get('ronda_jadwal')->row();
    }

    public function insert_jadwal($data)
    {
        return $this->db->insert('ronda_jadwal', $data);
    }

    public function delete_jadwal($id)
    {
        return $this->db->where('id_jadwal', $id)->delete('ronda_jadwal');
    }

    // ==================== ANGGOTA ====================
    public function get_anggota_by_jadwal($id_jadwal)
    {
        return $this->db->where('id_jadwal', $id_jadwal)
                        ->order_by('nama_warga', 'ASC')
                        ->get('ronda_anggota')->result();
    }

    // Dengan join ke penduduk (untuk no_tlp)
    public function get_anggota_by_jadwal_lengkap($id_jadwal)
    {
        $this->db->select('ra.*, p.no_tlp, p.rt, p.rw, p.dusun');
        $this->db->from('ronda_anggota ra');
        $this->db->join('penduduk p', 'ra.NIK = p.NIK', 'left');
        $this->db->where('ra.id_jadwal', $id_jadwal);
        $this->db->order_by('ra.nama_warga', 'ASC');
        return $this->db->get()->result();
    }

    public function insert_anggota($data)
    {
        return $this->db->insert('ronda_anggota', $data);
    }

    public function delete_anggota($id_anggota)
    {
        return $this->db->where('id_anggota', $id_anggota)->delete('ronda_anggota');
    }

    // ==================== GABUNGAN ====================
    public function get_jadwal_lengkap()
    {
        $jadwal = $this->get_all_jadwal();
        foreach ($jadwal as $j) {
            $j->anggota = $this->get_anggota_by_jadwal_lengkap($j->id_jadwal);
        }
        return $jadwal;
    }
}