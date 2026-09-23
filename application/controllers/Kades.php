<?php 

class Kades extends CI_Controller{
	//********************************* ADMIN ****************************************** */
// controller halaman admin

    function __construct(){
    parent::__construct();
//session untuk membatasi akses ke controller
			
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
			$this->load->model('M_dokumen');
			$this->load->model('M_kritik');
			$this->load->library('session');

	if($this->session->userdata('level')!='Kades'){
		redirect('Login','refresh');
		}
}
    public function index()
	{
		$this->template->load('Layout_Kades','Kades/Dashboard');
	}

	public function Penduduk()
		{
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->template->load('Layout_Kades','Kades/Penduduk',$data);
		}

	public function Kelahiran()
		{
			$data['kelahiran'] = $this->M_kelahiran->Tampil_Kelahiran('kelahiran')->result();
			$this->template->load('Layout_Kades','Kades/Kelahiran',$data);
		}

	public function Kematian()
		{
			$data['kematian'] = $this->M_kematian->Tampil_kematian('kematian')->result();
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->template->load('Layout_Kades','Kades/Kematian',$data);
		}

	public function Kedatangan()
		{
			
			$data['kedatangan'] = $this->M_kedatangan->Tampil_kedatangan('kedatangan')->result();
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			
			$this->template->load('Layout_Kades','Kades/Kedatangan',$data);
		}

	public function Pindahan()
		{
			$data['pindahan'] = $this->M_pindahan->Tampil_pindahan('pindahan')->result();
			$this->template->load('Layout_Kades','Kades/Pindahan',$data);
		}

	public function Informasi_desa()
		{
			$data['berita'] = $this->M_berita->Tampil_berita('berita')->result();
			$this->template->load('Layout_Kades','Kades/Informasi_desa',$data);
		}

	public function Ronda()
		{
			$data['ronda'] = $this->M_ronda->Tampil_ronda('ronda')->result();
			$this->template->load('Layout_Kades','Kades/Ronda',$data);
		}

	public function Event()
		{
			$data['event'] = $this->M_event->Tampil_event('event')->result();
			$this->template->load('Layout_Kades','Kades/Event',$data);
		}

	public function Permohonan_Dokumen()
		{
			$data['permohonan'] = $this->M_dokumen->Tampil_dokumen('permohonan')->result();
			$this->template->load('Layout_Kades','Kades/Permohonan_Dokumen',$data);
		}

	public function Upload_Dokumen()
		{
			$data['permohonan'] = $this->M_dokumen->Tampil_dokumen('permohonan')->result();
			$this->template->load('Layout_Kades','Kades/Form_Upload_Dokumen',$data);
		}

	public function Proses_Upload_Dokumen()
	{
				$config['upload_path']          = './dokumenpermohonan/';
				$config['allowed_types']        = 'PDF|pdf|docx|doc|ppt';


				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('dokumen'))
				{
					echo "Maaf gagal Upload";
				}
				else
				{
						$dokumen = $this->upload->data();//deklarasi
						
						$id_dokumen = $this->input->post('id_dokumen');//deklarasi
						$nama_dokumen = $this->input->post('nama_dokumen');//deklarasi
						
						
						
						$data = array(
							'id_dokumen' => $id_dokumen,
							'nama_dokumen' => $nama_dokumen,
							'dokumen' => $dokumen['file_name']
						);

						$this->M_dokumen->Kades_upload_dokumen($data);
						redirect('Kades/Permohonan_Dokumen','refresh');
				
				}
	}
	
	public function Kritik()
		{
			$data['kritik'] = $this->M_kritik->Tampil_kritik('kritiksaran')->result();
			$this->template->load('Layout_Kades','Kades/Kritik',$data);
		}



	public function Cetak_Penduduk()
		{
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->load->view('Kades/Cetak_Penduduk',$data);
		}

	public function Cetak_Kelahiran()
		{
			$data['kelahiran'] = $this->M_kelahiran->Tampil_Kelahiran('kelahiran')->result();
			$this->load->view('Kades/Cetak_Kelahiran',$data);
		}

	public function Cetak_Laporan_Kematian()
		{
			$data['kematian'] = $this->M_kematian->Tampil_kematian('kematian')->result();
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			$this->load->view('Kades/Cetak_Laporan_Kematian',$data);
		}

	public function Cetak_Kedatangan()
		{
			
			$data['kedatangan'] = $this->M_kedatangan->Tampil_kedatangan('kedatangan')->result();
			$data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
			
			$this->load->view('Kades/Cetak_Kedatangan',$data);
		}

	public function Cetak_Pindahan()
		{
			$data['pindahan'] = $this->M_pindahan->Tampil_pindahan('pindahan')->result();
			$this->load->view('Kades/Cetak_Pindahan',$data);
		}


}