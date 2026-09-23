<?php
class Login extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('Login');
    }




    public function Proses_Login()
    {
        $NIK = $this->input->post('NIK');//deklarasi

        $password = $this->input->post('password');//deklarasi

        $cekuserdaftar = $this->M_login->cekuserdaftar($NIK);//menyocokkan data yang berasal dari form login ke Model (databes)

        //kondisi kondisi jika hendak melakukan login
        if($cekuserdaftar){
            $ceklogin = $this->M_login->ceklogin($NIK,$password);//variabel untuk menyocokkan data NIK dan Password dari form login

            if ($ceklogin){ 

                foreach ($ceklogin as $row)
                

                if($row->status_akun == "AKTIF"){
                    $this->session->set_userdata('NIK', $row->NIK);
                    $this->session->set_userdata('nama', $row->nama);
                    $this->session->set_userdata('level', $row->level);


                        if($this->session->userdata('level')=="Perangkat"){//prosess session terisi
                            redirect ('Perangkat');
                        }
                        elseif($this->session->userdata('level')=="Masyarakat"){
                            redirect ('Masyarakat');
                        }
                        elseif($this->session->userdata('level')=="Kades"){
                            redirect ('Kades');
                        }
                        elseif($this->session->userdata('level')=="Bendahara"){  // <-- TAMBAHKAN INI
                            redirect ('Bendahara');
                        }                    
                        else{
                            echo"<script>alert('Maaf anda tidak memiliki hak akses.');</script>";
                            redirect ('Login','refresh');
                        }

                    }else{
                        echo"<script>alert('Maaf akun anda belum aktif.');</script>";
                        redirect('Login','refresh');
                    }
                
            }else{
                    echo"<script>alert('Maaf NIK atau Password salah.');</script>";
                    redirect('Login','refresh');
                }
        }else{
            echo"<script>alert('Maaf NIK belum terdaftar.');</script>";
            redirect('Login','refresh');
        }
    }


    //function logout
    public function Logout()
    {
        $this->session->sess_destroy();//untuk menghapus isi session
        redirect('Login','refresh');
    }
}