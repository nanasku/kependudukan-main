<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('NIK')) {
            redirect('Login');
        }

        // PROTEKSI: Hanya Bendahara & Kades yang boleh akses controller ini
        $level = $this->session->userdata('level');
        if ($level != 'Bendahara' && $level != 'Kades') {
            $this->session->set_flashdata('error', 'Anda tidak memiliki akses ke menu Keuangan.');
            // Redirect ke halaman masing-masing
            if ($level == 'Perangkat') redirect('Perangkat');
            elseif ($level == 'Masyarakat') redirect('Masyarakat');
            else redirect('Login');
        }

        $this->load->model('M_keuangan');
        $this->load->library('session');
        $this->load->helper('url');
    }

    // ==================== HELPER: Render dengan Layout ====================
    private function render($view, $data = [])
    {
        $level = $this->session->userdata('level');

        if ($level == 'Bendahara') {
            $layout = 'Layout_Bendahara';
        } elseif ($level == 'Kades') {
            $layout = 'Layout_Kades';
        } else {
            $layout = 'Layout_User';
        }

        $data['contents'] = $this->load->view($view, $data, TRUE);
        $this->load->view($layout, $data);
    }

    // ==================== PROTEKSI KELOLA ====================
    // Hanya Bendahara yang boleh kelola (Kades read-only)
    private function cek_akses_kelola()
    {
        if ($this->session->userdata('level') != 'Bendahara') {
            $this->session->set_flashdata('error', 'Hanya Bendahara yang dapat mengelola keuangan.');
            redirect('Keuangan');
        }
    }

    // ==================== DASHBOARD ====================
    public function index()
    {
        $data['title'] = 'Data Keuangan RT';
        $data['total_pendapatan'] = $this->M_keuangan->get_total('Pendapatan');
        $data['total_pengeluaran'] = $this->M_keuangan->get_total('Pengeluaran');
        $data['saldo'] = $data['total_pendapatan'] - $data['total_pengeluaran'];
        $data['transaksi_terbaru'] = $this->M_keuangan->get_transaksi_terbaru(10);
        $this->render('keuangan/V_keuangan_dashboard', $data);
    }

    // ==================== KATEGORI ====================
    public function kategori()
    {
        $data['title'] = 'Kelola Kategori Keuangan';
        $data['kategori'] = $this->M_keuangan->get_all_kategori();
        $this->render('keuangan/V_kategori', $data);
    }

    public function simpan_kategori()
    {
        $this->cek_akses_kelola();
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori'),
            'jenis' => $this->input->post('jenis')
        ];
        $this->M_keuangan->insert_kategori($data);
        $this->session->set_flashdata('success', 'Kategori berhasil ditambahkan');
        redirect('Keuangan/kategori');
    }

    public function hapus_kategori($id)
    {
        $this->cek_akses_kelola();
        $this->M_keuangan->delete_kategori($id);
        $this->session->set_flashdata('success', 'Kategori berhasil dihapus');
        redirect('Keuangan/kategori');
    }

    // ==================== TRANSAKSI ====================
    public function transaksi($jenis = 'Pendapatan')
    {
        $data['title'] = 'Data ' . $jenis;
        $data['jenis'] = $jenis;
        $data['kategori'] = $this->M_keuangan->get_kategori_by_jenis($jenis);
        $data['transaksi'] = $this->M_keuangan->get_transaksi_by_jenis($jenis);
        $this->render('keuangan/V_transaksi', $data);
    }

    public function simpan_transaksi()
    {
        $this->cek_akses_kelola();
        $id_kategori = $this->input->post('id_kategori');
        $kategori = $this->M_keuangan->get_kategori_by_id($id_kategori);

        $data = [
            'id_kategori' => $id_kategori,
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
            'jumlah' => $this->input->post('jumlah'),
            'petugas' => $this->session->userdata('nama')
        ];
        $this->M_keuangan->insert_transaksi($data);
        $this->session->set_flashdata('success', 'Transaksi berhasil ditambahkan');
        redirect('Keuangan/transaksi/' . $kategori->jenis);
    }

    public function hapus_transaksi($id, $jenis)
    {
        $this->cek_akses_kelola();
        $this->M_keuangan->delete_transaksi($id);
        $this->session->set_flashdata('success', 'Transaksi berhasil dihapus');
        redirect('Keuangan/transaksi/' . $jenis);
    }

    // ==================== LAPORAN ====================
    public function laporan()
    {
        $bulan = $this->input->get('bulan') ?: date('m');
        $tahun = $this->input->get('tahun') ?: date('Y');

        $data['title'] = 'Laporan Keuangan';
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['laporan'] = $this->M_keuangan->get_laporan_bulanan($bulan, $tahun);
        $this->render('keuangan/V_laporan', $data);
    }
}