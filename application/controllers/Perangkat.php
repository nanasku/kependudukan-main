<?php 

class Perangkat extends CI_Controller{
	//********************************* ADMIN ****************************************** */

// controller halaman admin

	function __construct(){
	parent::__construct();

	$this->load->model('M_kelahiran');
	$this->load->model('M_kematian');
	$this->load->model('M_penduduk');
	$this->load->model('M_kedatangan');
	$this->load->model('M_pindahan');
	$this->load->model('M_berita');
	$this->load->model('M_rt');
	$this->load->model('M_rw');
	$this->load->model('M_dusun');
	$this->load->model('M_ronda');
	$this->load->model('M_event');
	$this->load->library('session');

//session untuk membatasi akses ke controller
	if($this->session->userdata('level')!='Perangkat'){
		redirect('Login','refresh');
		}
	}

	public function index()
		{
			$this->template->load('Layout_Admin','admin/Dashboard');
		}








		// ##############################  FUNGSI FUNGSI BAGIAN HALAMAN ADMIN PENDUDUK  ##################################
	public function Penduduk()
		{
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->template->load('Layout_Admin','admin/Penduduk',$data);
		}

		public function Proses_Tambah_Penduduk(){
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
	
			$this -> M_penduduk->Tambah_penduduk($data_insert);
			redirect('Perangkat/Penduduk');
	
	
		}


		public function Getid_penduduk($NIK)   //untuk proses edit yang mengambil data id
		{		
			$where = array('NIK' => $NIK);
			$data['penduduk'] = $this->M_penduduk->Edit_data_penduduk($where,'penduduk')->result();
			
			$this->template->load('Layout_Admin','admin/Form_edit_penduduk',$data);
			//$this->load->view('admin/Form_edit_penduduk',$data);
		}

		public function Edit_penduduk() //untuk proses edit pas mengubah (mengupdate) datanya yang di ambill dari Getid_kelahiran
		{
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
	
	
			$data = array(
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
	

				$where = array(
					'NIK' => $NIK
				);

				$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
													Data Berhasil Diedit</div>');
				$this->M_penduduk->Update_data_penduduk($where,$data,'penduduk');
				redirect('Perangkat/Penduduk','refresh');
		
		}

	


		// ##############################  FUNGSI FUNGSI BAGIAN HALAMAN ADMIN KELAHIRAN  ##################################
	public function Kelahiran()
		{
			$data['kelahiran'] = $this->M_kelahiran->Tampil_Kelahiran('kelahiran')->result();
			$this->template->load('Layout_Admin','admin/Kelahiran',$data);
		}

		
	public function Proses_Tambah_Kelahiran()   //untuk proses tambah kelahiran
		{
			$no_lahir = $this->input->post('no_lahir');//deklarasi
			$nama_bayi = $this->input->post('nama_bayi');//deklarasi
			$tempat_lahir = $this->input->post('tempat_lahir');//deklarasi
			$tanggal_lahir = $this->input->post('tanggal_lahir');//deklarasi
			$gender = $this->input->post('gender');//deklarasi
			$nama_ayah = $this->input->post('nama_ayah');//deklarasi
			$nama_ibu = $this->input->post('nama_ibu');//deklarasi
			$alamat = $this->input->post('alamat');//deklarasi

			$data_insert = array(
				'no_lahir' => $no_lahir,
				'nama_bayi' => $nama_bayi,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'gender' => $gender,
				'nama_ayah' => $nama_ayah,
				'nama_ibu' => $nama_ibu,
				'alamat' => $alamat
			);

			$this->M_kelahiran->Tambah_Kelahiran($data_insert);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">
													Data Berhasil Ditambah</div>');
			
			redirect('Perangkat/Kelahiran');
		}

	public function Getid_kelahiran($no_lahir)   //untuk proses edit yang mengambil data id
		{		
			$where = array('no_lahir' => $no_lahir);
			$data['kelahiran'] = $this->M_kelahiran->Edit_data_kelahiran($where,'kelahiran')->result();
			
			$this->template->load('Layout_Admin','admin/Form_edit_kelahiran',$data);
		}

	public function Edit() //untuk proses edit pas mengubah (mengupdate) datanya yang di ambill dari Getid_kelahiran
		{
			$no_lahir = $this->input->post('no_lahir');//deklarasi
			$nama_bayi = $this->input->post('nama_bayi');//deklarasi
			$tempat_lahir = $this->input->post('tempat_lahir');//deklarasi
			$tanggal_lahir = $this->input->post('tanggal_lahir');//deklarasi
			$gender = $this->input->post('gender');//deklarasi
			$nama_ayah = $this->input->post('nama_ayah');//deklarasi
			$nama_ibu = $this->input->post('nama_ibu');//deklarasi
			$alamat = $this->input->post('alamat');//deklarasi

			$data = array(
				'no_lahir' => $no_lahir,
				'nama_bayi' => $nama_bayi,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'gender' => $gender,
				'nama_ayah' => $nama_ayah,
				'nama_ibu' => $nama_ibu,
				'alamat' => $alamat
			);

				$where = array(
					'no_lahir' => $no_lahir
				);

				$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
													Data  Berhasil Diedit</div>');
				$this->M_kelahiran->Update_data_kelahiran($where,$data,'kelahiran');
				redirect('Perangkat/Kelahiran','refresh');
		
		}

	public function Hapus_kelahiran($no_lahir)   //untuk proses hapus yang mengambil data id
		{
			$data = array('no_lahir' => $no_lahir);
			$this->M_kelahiran->Hapus_data_kelahiran($data, 'kelahiran');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
													Data Kategori Berhasil Dihapus</div>');

			redirect('Perangkat/Kelahiran','refresh');
		}













		// ##############################  FUNGSI FUNGSI BAGIAN HALAMAN ADMIN KEMATIAN  ##################################
	public function Kematian()
		{
			$data['kematian'] = $this->M_kematian->Tampil_kematian('kematian')->result();
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->template->load('Layout_Admin','admin/Kematian',$data);
		}


	public function Proses_Tambah_Data_Kematian()   //untuk proses tambah kelahiran
		{
			$no_kematian = $this->input->post('no_kematian');//deklarasi
			$NIK = $this->input->post('NIK');//deklarasi
			$tempat_meninggal = $this->input->post('tempat_meninggal');//deklarasi
			$tanggal_meninggal = $this->input->post('tanggal_meninggal');//deklarasi
			$usia = $this->input->post('usia');//deklarasi
			$sebab = $this->input->post('sebab');//deklarasi
			$makam = $this->input->post('makam');//deklarasi

			$data_insert = array(
				'no_kematian' => $no_kematian,
				'NIK' => $NIK,
				'tempat_meninggal' => $tempat_meninggal,
				'tanggal_meninggal' => $tanggal_meninggal,
				'usia' => $usia,
				'sebab' => $sebab,
				'makam' => $makam,
			);

			$this->M_kematian->Tambah_kematian($data_insert);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">
													Data Berhasil Ditambah</div>');
		
			redirect('Perangkat/Kematian');
		}

	
	public function Getid_kematian($no_kematian)   //untuk proses edit yang mengambil data id
		{	$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$data['kematian'] = $this->M_kematian->Tampil_kematian('kematian')->result();

			$where = array('no_kematian' => $no_kematian);
			$data['kematian'] = $this->M_kematian->Edit_data_kematian($where,'kematian')->result();
			
			$this->template->load('Layout_Admin','admin/Form_edit_data_kematian',$data);
		}

	public function Edit_Data_Kematian() //untuk proses edit pas mengubah (mengupdate) datanya yang di ambill dari Getid_kematian
		{
			$no_kematian = $this->input->post('no_kematian');//deklarasi
			$NIK = $this->input->post('NIK');//deklarasi
			$tempat_meninggal = $this->input->post('tempat_meninggal');//deklarasi
			$tanggal_meninggal = $this->input->post('tanggal_meninggal');//deklarasi
			$usia = $this->input->post('usia');//deklarasi
			$sebab = $this->input->post('sebab');//deklarasi
			$makam = $this->input->post('makam');//deklarasi
			

			$datas = array(
				'no_kematian' => $no_kematian,
				'NIK' => $NIK,
				'tempat_meninggal' => $tempat_meninggal,
				'tanggal_meninggal' => $tanggal_meninggal,
				'usia' => $usia,
				'sebab' => $sebab,
				'makam' => $makam
				);

				$where = array(
					'no_kematian' => $no_kematian
				);

				$this->M_kematian->Update_data_kematian($where,$datas,'kematian');
				$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
													Data Berhasil Diedit</div>');
				redirect('Perangkat/Kematian','refresh');
		
		}

	public function Hapus_kematian($no_kematian)   //untuk proses hapus yang mengambil data id
		{
			$data = array('no_kematian' => $no_kematian);
			$this->M_kematian->Hapus_data_kematian($data, 'kematian');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
										Data  Berhasil Dihapus</div>');

			redirect('Perangkat/Kematian','refresh');
		}







													// FUNGSI FUNGSI BAGIAN HALAMAN ADMIN KEDATANGAN
			public function Kedatangan()
				{
					
					$data['kedatangan'] = $this->M_kedatangan->Tampil_kedatangan('kedatangan')->result();
					$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
					
					$this->template->load('Layout_Admin','admin/Kedatangan',$data);
				}

			public function Proses_Tambah_Kedatangan()   //untuk proses tambah kelahiran
				{
					$no_datang = $this->input->post('no_datang');//deklarasi
					$NIK = $this->input->post('NIK');//deklarasi
					$tgl_datang = $this->input->post('tgl_datang');//deklarasi
					$alamat_asal = $this->input->post('alamat_asal');//deklarasi
					$alamat_tujuan = $this->input->post('alamat_tujuan');//deklarasi

					$data_insert = array(
						'no_datang' => $no_datang,
						'NIK' => $NIK,
						'tgl_datang' => $tgl_datang,
						'alamat_asal' => $alamat_asal,
						'alamat_tujuan' => $alamat_tujuan
					);

					$this->M_kedatangan->Tambah_kedatangan($data_insert);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success">
													Data Kategori Berhasil Ditambah</div>');
					redirect('Perangkat/Kedatangan','refresh');
				}

			public function Getid_kedatangan($no_datang)   //untuk proses edit yang mengambil data id
				{	
					$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
					$data['kedatangan'] = $this->M_kedatangan->Tampil_kedatangan('kedatangan')->result();

					$where = array('no_datang' => $no_datang);
					$data['kedatangan'] = $this->M_kedatangan->Edit_data_kedatangan($where,'kedatangan')->result();
					
					$this->template->load('Layout_Admin','admin/Form_edit_kedatangan',$data);
				}

			public function Edit_Data_kedatangan() //untuk proses edit pas mengubah (mengupdate) datanya yang di ambill dari Getid_kedatangan
				{
					$no_datang = $this->input->post('no_datang');//deklarasi
					$NIK = $this->input->post('NIK');//deklarasi
					$tgl_datang = $this->input->post('tgl_datang');//deklarasi
					$alamat_asal = $this->input->post('alamat_asal');//deklarasi
					$alamat_tujuan = $this->input->post('alamat_tujuan');//deklarasi
					$sebab = $this->input->post('sebab');//deklarasi
					$makam = $this->input->post('makam');//deklarasi
					

					$datas = array(
						'no_datang' => $no_datang,
						'NIK' => $NIK,
						'tgl_datang' => $tgl_datang,
						'alamat_asal' => $alamat_asal,
						'alamat_tujuan' => $alamat_tujuan
						);

						$where = array(
							'no_datang' => $no_datang
						);

						$this->M_kedatangan->Update_data_kedatangan($where,$datas,'kedatangan');
						$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
													Data Berhasil Diedit</div>');
						redirect('Perangkat/Kedatangan','refresh');
				
				}

			public function Hapus_kedatangan($no_datang)   //untuk proses hapus yang mengambil data id
				{
					$data = array('no_datang' => $no_datang);
					$this->M_kedatangan->Hapus_data_kedatangan($data, 'kedatangan');
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
												Data  Berhasil Dihapus</div>');

					redirect('Perangkat/Kedatangan','refresh');
				}





											// FUNGSI FUNGSI BAGIAN HALAMAN ADMIN PINDAHAN
	public function Pindahan()
		{
			$data['pindahan'] = $this->M_pindahan->Tampil_pindahan('pindahan')->result();
			$this->template->load('Layout_Admin','admin/Pindahan',$data);
		}

		public function Proses_Tambah_Pindahan()   //untuk proses tambah kelahiran
		{
			$no_kepergian = $this->input->post('no_kepergian');//deklarasi
			$NIK = $this->input->post('NIK');//deklarasi			
			$tgl_kepergian = $this->input->post('tgl_kepergian');//deklarasi
			$alamat_asal = $this->input->post('alamat_asal');//deklarasi
			$alamat_tujuan = $this->input->post('alamat_tujuan');//deklarasi
			

			$data_insert = array(
				'no_kepergian' => $no_kepergian,
				'NIK' => $NIK,
				'tgl_kepergian' => $tgl_kepergian,
				'alamat_asal' => $alamat_asal,
				'alamat_tujuan' => $alamat_tujuan
			);

			$this->M_pindahan->Tambah_pindahan($data_insert);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">
													Data Kategori Berhasil Ditambah</div>');
			redirect('Perangkat/Pindahan','refresh');
		}

	
	public function Getid_pindahan($no_kepergian)   //untuk proses edit yang mengambil data id
		{	$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$data['pindahan'] = $this->M_pindahan->Tampil_pindahan('pindahan')->result();

			$where = array('no_kepergian' => $no_kepergian);
			$data['pindahan'] = $this->M_pindahan->Edit_data_pindahan($where,'pindahan')->result();
			
			$this->template->load('Layout_Admin','admin/Form_edit_pindahan',$data);
		}

	public function Edit_Data_pindahan() //untuk proses edit pas mengubah (mengupdate) datanya yang di ambill dari Getid_kematian
		{
			$no_kepergian = $this->input->post('no_kepergian');//deklarasi
			$NIK = $this->input->post('NIK');//deklarasi			
			$tgl_kepergian = $this->input->post('tgl_kepergian');//deklarasi
			$alamat_asal = $this->input->post('alamat_asal');//deklarasi
			$alamat_tujuan = $this->input->post('alamat_tujuan');//deklarasi
			

			$data_insert = array(
				'no_kepergian' => $no_kepergian,
				'NIK' => $NIK,
				'tgl_kepergian' => $tgl_kepergian,
				'alamat_asal' => $alamat_asal,
				'alamat_tujuan' => $alamat_tujuan
			);

				$where = array(
					'no_kepergian' => $no_kepergian
				);

				$this->M_pindahan->Update_data_pindahan($where,$data_insert,'pindahan');
				$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
													Data Berhasil Diedit</div>');
				redirect('Perangkat/Pindahan','refresh');
		
		}

	public function Hapus_pindahan($no_kepergian)   //untuk proses hapus yang mengambil data id
		{
			$data = array('no_kepergian' => $no_kepergian);
			$this->M_pindahan->Hapus_data_pindahan($data, 'pindahan');
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
										Data  Berhasil Dihapus</div>');

			redirect('Perangkat/Pindahan','refresh');
		}









											// FUNGSI FUNGSI BAGIAN HALAMAN ADMIN INFORMASI DESA
	public function Informasi_desa()
		{
			$data['berita'] = $this->M_berita->Tampil_berita('berita')->result();
			$this->template->load('Layout_Admin','admin/Informasi_desa',$data);
		}

	public function Proses_Tambah_Berita()   //untuk proses tambah kelahiran
		{
			$config['upload_path']          = './gambarberita/';
			$config['allowed_types']        = 'gif|jpg|png|PNG';
			$config['max_size']             = 10000;
			$config['max_width']            = 10000;
			$config['max_height']           = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar'))
			{
				echo "Gek Raiso di UPLOAD NDESSS !!!!";
			}
			else
			{
					$gambar = $this->upload->data();//deklarasi
					
					$no_berita = $this->input->post('no_berita');//deklarasi
					$judul_berita = $this->input->post('judul_berita');//deklarasi			
					$headnews = $this->input->post('headnews');//deklarasi
					$isi_berita = $this->input->post('isi_berita');//deklarasi
					$tanggal_kirim = $this->input->post('tanggal_kirim');//deklarasi
					$pengirim = $this->input->post('pengirim');//deklarasi


					
					$data_insert = array(
						'no_berita' => $no_berita,
						'judul_berita' => $judul_berita,
						'headnews' => $headnews,
						'isi_berita' => $isi_berita,
						'tanggal_kirim' => $tanggal_kirim,
						'pengirim' => $pengirim,
						'gambar' => $gambar['file_name']
					);

					$this->M_berita->Tambah_berita($data_insert);
					$this->session->set_flashdata('pesan', '<div class="alert alert-success">
													Data Kategori Berhasil Ditambah</div>');
					redirect('Perangkat/Informasi_desa','refresh');
			
			}

		}


		public function Getid_berita($no_berita)   //untuk proses edit yang mengambil data id
			{
				$data['berita'] = $this->M_berita->Tampil_berita('berita')->result();

				$where = array('no_berita' => $no_berita);
				$data['berita'] = $this->M_berita->Edit_data_berita($where,'berita')->result();
				
				$this->template->load('Layout_Admin','admin/Form_edit_berita',$data);
			}
		
		public function Edit_Data_Berita() //untuk proses edit pas mengubah (mengupdate) datanya yang di ambill dari Getid_kematian
			{
				
				$config['upload_path']          = './gambarberita/';
				$config['allowed_types']        = 'gif|jpg|png|PNG';
				$config['max_size']             = 10000;
				$config['max_width']            = 10000;
				$config['max_height']           = 10000;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar'))
				{
					echo "Gek Raiso di UPPDATE NDESSS !!!!";
				}
				else
				{
						$gambar = $this->upload->data();//deklarasi
						
						$no_berita = $this->input->post('no_berita');//deklarasi
						$judul_berita = $this->input->post('judul_berita');//deklarasi			
						$headnews = $this->input->post('headnews');//deklarasi
						$isi_berita = $this->input->post('isi_berita');//deklarasi
						$tanggal_kirim = $this->input->post('tanggal_kirim');//deklarasi
						$pengirim = $this->input->post('pengirim');//deklarasi


						
						$data_insert = array(
							'no_berita' => $no_berita,
							'judul_berita' => $judul_berita,
							'headnews' => $headnews,
							'isi_berita' => $isi_berita,
							'tanggal_kirim' => $tanggal_kirim,
							'pengirim' => $pengirim,
							'gambar' => $gambar['file_name']
						);
				

				$where = array(
					'no_berita' => $no_berita);
				
						$this->M_berita->Update_data_berita($where,$data_insert,'berita');
						$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
													Data Berhasil Diedit</div>');
						redirect('Perangkat/Informasi_desa','refresh');
				
				}

			}

	public function Hapus_berita($no_berita)   //untuk proses hapus yang mengambil data id
			{
				$data = array('no_berita' => $no_berita);
				$this->M_berita->Hapus_data_berita($data, 'berita');
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
											Data  Berhasil Dihapus</div>');

				redirect('Perangkat/Informasi_desa','refresh');
			}


								// FUNGSI FUNGSI BAGIAN HALAMAN ADMIN JADWAL RONDA
	public function Ronda()
			{
				$data['ronda'] = $this->M_ronda->Tampil_ronda('ronda')->result();
				$this->template->load('Layout_Admin','admin/Ronda',$data);
			}
	public function Proses_Tambah_Ronda()
			{
				$config['upload_path']          = './gambarronda/';
				$config['allowed_types']        = 'gif|jpg|png|PNG';
				$config['max_size']             = 10000;
				$config['max_width']            = 10000;
				$config['max_height']           = 10000;
	
				$this->load->library('upload', $config);
	
				if ( ! $this->upload->do_upload('gambar'))
				{
					echo "Gek Raiso di UPLOAD NDESSS !!!!";
				}
				else
				{
						$gambar = $this->upload->data();//deklarasi
						
						$id_ronda = $this->input->post('id_ronda');//deklarasi

	
						
						$data_insert = array(
							'id_ronda' => $id_ronda,
							'gambar' => $gambar['file_name']
						);
	
						$this->M_ronda->Tambah_ronda($data_insert);
						$this->session->set_flashdata('pesan', '<div class="alert alert-success">
													Data Kategori Berhasil Ditambah</div>');
						redirect('Perangkat/Ronda','refresh');
				
				}
	
			}

	public function Hapus_ronda($id_ronda)   //untuk proses hapus yang mengambil data id
			{ 
				$data = array('id_ronda' => $id_ronda);
				$this->M_ronda->Hapus_data_ronda($data, 'ronda');
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
											Data  Berhasil Dihapus</div>');

				redirect('Perangkat/Ronda','refresh');
			}



									// FUNGSI FUNGSI BAGIAN HALAMAN ADMIN EVENT DESA
	
	public function Event()
			{
				$data['event'] = $this->M_event->Tampil_event('event')->result();
				$this->template->load('Layout_Admin','admin/Event',$data);
			}

	public function Proses_Tambah_Event()
			{
				$config['upload_path']          = './gambarevent/';
				$config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
				$config['max_size']             = 10000;
				$config['max_width']            = 10000;
				$config['max_height']           = 10000;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar'))
				{
					echo "maaf gagal upload !!!!";
				}
				else
				{
						$gambar = $this->upload->data();//deklarasi
						
						$no_event = $this->input->post('no_event');//deklarasi
						$judul_event = $this->input->post('judul_event');//deklarasi
						$isi_event = $this->input->post('isi_event');//deklarasi
						
						
						$data_insert = array(
							'no_event' => $no_event,
							'judul_event' => $judul_event,
							'isi_event' => $isi_event,
							'gambar' => $gambar['file_name']
						);

						$this->M_event->Tambah_event($data_insert);
						$this->session->set_flashdata('pesan', '<div class="alert alert-success">
													Data Kategori Berhasil Ditambah</div>');
						redirect('Perangkat/Event','refresh');
				
				}
			}


	public function Getid_event($no_event)   //untuk proses edit yang mengambil data id
			{
				$data['event'] = $this->M_event->Tampil_event('event')->result();

				$where = array('no_event' => $no_event);
				$data['event'] = $this->M_event->Edit_data_event($where,'event')->result();
				
				$this->template->load('Layout_Admin','admin/Form_edit_event',$data);
			}
		
	public function Edit_Data_Event() //untuk proses edit pas mengubah (mengupdate) datanya yang di ambill dari Getid_kematian
			{
				
				$config['upload_path']          = './gambarevent/';
				$config['allowed_types']        = 'gif|jpg|png|PNG|jpeg';
				$config['max_size']             = 10000;
				$config['max_width']            = 10000;
				$config['max_height']           = 10000;

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar'))
				{
					echo "Gek Raiso di UPPDATE NDESSS !!!!";
				}
				else
				{
						$gambar = $this->upload->data();//deklarasi
						
						$no_event = $this->input->post('no_event');//deklarasi
						$judul_event = $this->input->post('judul_event');//deklarasi			
						$isi_event = $this->input->post('isi_event');//deklarasi
						
						$data = array(
							'no_event' => $no_event,
							'judul_event' => $judul_event,
							'isi_event' => $isi_event,
							'gambar' => $gambar['file_name']
						);
				

				$where = array(
					'no_event' => $no_event);
				
						$this->M_event->Update_data_event($where,$data,'event');
						$this->session->set_flashdata('pesan', '<div class="alert alert-warning">
													Data Berhasil Diedit</div>');
						redirect('Perangkat/Event','refresh');
				
				}

			}

	public function Hapus_event($no_event)   //untuk proses hapus yang mengambil data id
			{
				$data = array('no_event' => $no_event);
				$this->M_event->Hapus_data_event($data, 'event');
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">
											Data  Berhasil Dihapus</div>');

				redirect('Perangkat/Event','refresh');
			}
















// &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&     BAGIAN FORM    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
	
	
	public function Form_tambah_penduduk()
	{
		$data['dusun'] = $this->M_dusun->Tampil_dusun('dusun')->result();
		$data['rw'] = $this->M_rw->Tampil_rw('rw')->result();
		$data['rt'] = $this->M_rt->Tampil_rt('rt')->result();
		$this->template->load('Layout_Admin','admin/Form_tambah_penduduk',$data);
	}

	public function Form_tambah_kelahiran()
		{
			$this->template->load('Layout_Admin','admin/Form_tambah_kelahiran');
		}

	public function Form_tambah_kematian()
		{
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->template->load('Layout_Admin','admin/Form_tambah_kematian',$data);
		}

	public function Form_tambah_kedatangan()
		{
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->template->load('Layout_Admin','admin/Form_tambah_kedatangan',$data);
		}

	public function Form_tambah_pindahan()
		{
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->template->load('Layout_Admin','admin/Form_tambah_pindahan',$data);
		}

	public function Form_tambah_berita_desa()
		{
			$this->template->load('Layout_Admin','admin/Form_tambah_Informasi_desa');
		}

	public function Form_tambah_ronda()
		{
			
			$data['ronda'] = $this->M_ronda->Tampil_ronda('ronda')->result();
			$this->template->load('Layout_Admin','admin/Form_tambah_ronda',$data);
		}

	public function Form_tambah_event()
		{
			
			$data['event'] = $this->M_event->Tampil_event('event')->result();
			$this->template->load('Layout_Admin','admin/Form_tambah_event',$data);
		}



}