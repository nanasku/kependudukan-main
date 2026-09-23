<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bendahara extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // Proteksi: hanya Bendahara yang boleh masuk
        if ($this->session->userdata('level') != 'Bendahara') {
            redirect('Login');
        }
        $this->load->model('M_keuangan');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Bendahara';
        $data['total_pendapatan'] = $this->M_keuangan->get_total('Pendapatan');
        $data['total_pengeluaran'] = $this->M_keuangan->get_total('Pengeluaran');
        $data['saldo'] = $data['total_pendapatan'] - $data['total_pengeluaran'];
        $data['transaksi_terbaru'] = $this->M_keuangan->get_transaksi_terbaru(10);

        $this->render('keuangan/V_keuangan_dashboard', $data);
    }

    // Render dengan layout khusus bendahara
    private function render($view, $data = [])
    {
        $data['contents'] = $this->load->view($view, $data, TRUE);
        $this->load->view('Layout_Bendahara', $data);
    }
}