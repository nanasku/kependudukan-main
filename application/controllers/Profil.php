<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        // Wajib login
        if (!$this->session->userdata('NIK')) {
            redirect('Login');
        }
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->database();
    }

    // ==================== RENDER DENGAN LAYOUT ====================
    private function render($view, $data = [])
    {
        $level = $this->session->userdata('level');

        if ($level == 'Perangkat') {
            $layout = 'Layout_Admin';
        } elseif ($level == 'Kades') {
            $layout = 'Layout_Kades';
        } elseif ($level == 'Bendahara') {
            $layout = 'Layout_Bendahara';
        } else {
            $layout = 'Layout_User';
        }

        $data['contents'] = $this->load->view($view, $data, TRUE);
        $this->load->view($layout, $data);
    }

    // ==================== FORM UPDATE PASSWORD ====================
    public function update_password()
    {
        $data['title'] = 'Update Password';
        $this->render('profil/V_update_password', $data);
    }

    // ==================== PROSES SIMPAN PASSWORD BARU ====================
    public function simpan_password()
    {
        $NIK             = $this->session->userdata('NIK');
        $password_lama   = $this->input->post('password_lama');
        $password_baru   = $this->input->post('password_baru');
        $konfirmasi      = $this->input->post('konfirmasi');

        // 1. Cek user di database
        $user = $this->db->where('NIK', $NIK)->get('penduduk')->row();

        if (!$user) {
            $this->session->set_flashdata('error', 'User tidak ditemukan.');
            redirect('Profil/update_password');
        }

        // 2. Cek password lama
        //    PENTING: Sesuaikan dengan cara Anda menyimpan password!
        //    - Jika plain text:  if ($user->password != $password_lama)
        //    - Jika md5:         if ($user->password != md5($password_lama))
        //    - Jika password_hash (bcrypt): gunakan password_verify()
        if ($user->password != $password_lama) {
            $this->session->set_flashdata('error', 'Password lama salah.');
            redirect('Profil/update_password');
        }

        // 3. Cek konfirmasi password baru
        if ($password_baru != $konfirmasi) {
            $this->session->set_flashdata('error', 'Konfirmasi password tidak cocok.');
            redirect('Profil/update_password');
        }

        // 4. Cek panjang minimal
        if (strlen($password_baru) < 3) {
            $this->session->set_flashdata('error', 'Password minimal 3 karakter.');
            redirect('Profil/update_password');
        }

        // 5. Update password
        //    Ganti baris ini sesuai metode hashing Anda:
        //    - Plain text: $this->db->update('penduduk', ['password' => $password_baru]);
        //    - MD5:        $this->db->update('penduduk', ['password' => md5($password_baru)]);
        //    - Bcrypt:     $this->db->update('penduduk', ['password' => password_hash($password_baru, PASSWORD_DEFAULT)]);
        $this->db->where('NIK', $NIK);
        $this->db->update('penduduk', ['password' => $password_baru]);

        $this->session->set_flashdata('success', 'Password berhasil diperbarui.');
        redirect('Profil/update_password');
    }
}