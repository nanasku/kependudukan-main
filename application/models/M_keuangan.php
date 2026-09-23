<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keuangan extends CI_Model {

    // ============ KATEGORI ============
    public function get_all_kategori()
    {
        return $this->db->order_by('jenis', 'ASC')->get('keuangan_kategori')->result();
    }

    public function get_kategori_by_jenis($jenis)
    {
        return $this->db->where('jenis', $jenis)->get('keuangan_kategori')->result();
    }

    public function get_kategori_by_id($id)
    {
        return $this->db->where('id_kategori', $id)->get('keuangan_kategori')->row();
    }

    public function insert_kategori($data)
    {
        return $this->db->insert('keuangan_kategori', $data);
    }

    public function delete_kategori($id)
    {
        return $this->db->where('id_kategori', $id)->delete('keuangan_kategori');
    }

    // ============ TRANSAKSI ============
    public function insert_transaksi($data)
    {
        return $this->db->insert('keuangan_transaksi', $data);
    }

    public function delete_transaksi($id)
    {
        return $this->db->where('id_transaksi', $id)->delete('keuangan_transaksi');
    }

    public function get_transaksi_by_jenis($jenis)
    {
        $this->db->select('kt.*, kk.nama_kategori, kk.jenis');
        $this->db->from('keuangan_transaksi kt');
        $this->db->join('keuangan_kategori kk', 'kt.id_kategori = kk.id_kategori');
        $this->db->where('kk.jenis', $jenis);
        $this->db->order_by('kt.tanggal', 'DESC');
        return $this->db->get()->result();
    }

    public function get_transaksi_terbaru($limit = 10)
    {
        $this->db->select('kt.*, kk.nama_kategori, kk.jenis');
        $this->db->from('keuangan_transaksi kt');
        $this->db->join('keuangan_kategori kk', 'kt.id_kategori = kk.id_kategori');
        $this->db->order_by('kt.tanggal', 'DESC');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }

    public function get_total($jenis)
    {
        $this->db->select_sum('kt.jumlah');
        $this->db->from('keuangan_transaksi kt');
        $this->db->join('keuangan_kategori kk', 'kt.id_kategori = kk.id_kategori');
        $this->db->where('kk.jenis', $jenis);
        $result = $this->db->get()->row();
        return $result->jumlah ?: 0;
    }

    public function get_laporan_bulanan($bulan, $tahun)
    {
        $this->db->select('kt.*, kk.nama_kategori, kk.jenis');
        $this->db->from('keuangan_transaksi kt');
        $this->db->join('keuangan_kategori kk', 'kt.id_kategori = kk.id_kategori');
        $this->db->where('MONTH(kt.tanggal)', $bulan);
        $this->db->where('YEAR(kt.tanggal)', $tahun);
        $this->db->order_by('kt.tanggal', 'ASC');
        return $this->db->get()->result();
    }
}