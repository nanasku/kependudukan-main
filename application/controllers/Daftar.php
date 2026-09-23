<?php 

class Daftar extends CI_Controller{

// controller halaman utama
function __construct()
	{
        parent::__construct();
        $this->load->model('M_daftar');
  
    }


	public function index()
	{
		$this->load->view('Daftar');
	}

	public function Proses_Daftar(){
		$NIK = $this->input->post('NIK');//deklarasi
		$nama = $this->input->post('nama');//deklarasi
		$tempat_lahir = $this->input->post('tempat_lahir');//deklarasi		
		$tanggal_lahir = $this->input->post('tanggal_lahir');//deklarasi
		$gender = $this->input->post('gender');//deklarasi
		$agama = $this->input->post('agama');//deklarasi
		$pendidikan = $this->input->post('pendidikan');//deklarasi
		$pekerjaan = $this->input->post('pekerjaan');//deklarasi
		$status = $this->input->post('status');//deklarasi
		$nama_ayah = $this->input->post('nama_ayah');//deklarasi
		$nama_ibu = $this->input->post('nama_ibu');//deklarasi
		$kewarganegaraan = $this->input->post('kewarganegaraan');//deklarasi
		$golongan_darah = $this->input->post('golongan_darah');//deklarasi
		$no_tlp = $this->input->post('no_tlp');//deklarasi
		$rt = $this->input->post('rt');//deklarasi
		$rw = $this->input->post('rw');//deklarasi
		$dusun = $this->input->post('dusun');//deklarasi
		$password = $this->input->post('password');//deklarasi
		$level = $this->input->post('level');//deklarasi
		$status_akun = $this->input->post('status_akun');//deklarasi


		$data_insert = array(
			'NIK' => $NIK,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'gender' => $gender,
			'agama' => $agama,
			'pendidikan' => $pendidikan,
			'pekerjaan' => $pekerjaan,
			'status' => $status,
			'nama_ayah' => $nama_ayah,
			'nama_ibu' => $nama_ibu,
			'kewarganegaraan' => $kewarganegaraan,
			'golongan_darah' => $golongan_darah,
			'no_tlp' => $no_tlp,
			'rt' => $rt,
			'rw' => $rw,
			'dusun' => $dusun,
			'password' => $password,
			'level' => $level,
			'status_akun' => $status_akun
		);

		$this -> M_daftar->Daftar_Akun($data_insert);
		redirect('Masyarakat'.$NIK);


	}
}