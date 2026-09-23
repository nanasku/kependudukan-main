<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // Hanya Kades & Perangkat yang boleh kelola pengaturan
        $level = $this->session->userdata('level');
        if ($level != 'Kades' && $level != 'Perangkat') {
            redirect('Login');
        }
        $this->load->model('M_pengaturan');
        $this->load->library('session');
        $this->load->helper('url');
    }

    // ==================== RENDER DENGAN LAYOUT ====================
    private function render($view, $data = [])
    {
        $level = $this->session->userdata('level');

        if ($level == 'Perangkat') {
            $layout = 'Layout_Admin';
        } elseif ($level == 'Kades') {
            $layout = 'Layout_Kades';
        } else {
            $layout = 'Layout_User';
        }

        $data['contents'] = $this->load->view($view, $data, TRUE);
        $this->load->view($layout, $data);
    }

    // ==================== DATA DESA ====================
    public function data_desa()
    {
        $data['title'] = 'Pengaturan Data Desa';
        $data['desa'] = $this->M_pengaturan->get_desa();
        $this->render('pengaturan/V_data_desa', $data);
    }

    public function simpan_data_desa()
    {
        $data = [
            'nama_desa' => $this->input->post('nama_desa'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten' => $this->input->post('kabupaten'),
            'provinsi'  => $this->input->post('provinsi'),
            'kode_pos'  => $this->input->post('kode_pos'),
        ];

        // Upload logo jika ada
        if (!empty($_FILES['logo']['name'])) {
            $config['upload_path']   = './assets/img/brand/';
            $config['allowed_types'] = 'png|jpg|jpeg|gif|svg';
            $config['max_size']      = 2048;
            $config['file_name']     = 'logo_desa_' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $upload_data = $this->upload->data();
                $data['logo'] = $upload_data['file_name'];
            }
        }

        $this->M_pengaturan->update_desa($data);
        $this->session->set_flashdata('success', 'Data desa berhasil diperbarui');
        redirect('Pengaturan/data_desa');
    }
}