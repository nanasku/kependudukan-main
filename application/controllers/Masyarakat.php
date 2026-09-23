<?php 

class Masyarakat extends CI_Controller{
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
        $this->load->model('M_dokumen');
        $this->load->model('M_ronda');
        $this->load->model('M_kritik');
        $this->load->library('session');

        //session untuk membatasi akses ke controller
        if($this->session->userdata('level')!='Masyarakat'){
            redirect('Login','refresh');
            }
    }


    public function index()
	{
        $data['berita'] = $this->M_berita->Tampil_berita('berita')->result();
		$data['event'] = $this->M_event->Tampil_event('event')->result();
		$this->template->load('Layout_User','Masyarakat/Dashboard',$data);
	}

    public function Dokumen()
    {
        $this->template->load('Layout_User','Masyarakat/Dokumen');
    }

    public function Permohonan_Dokumen()
	{
        $data['penduduk'] = $this->M_penduduk->Tampil_penduduk('penduduk')->result();
		$this->template->load('Layout_User','Masyarakat/Form_permohonan_dokumen',$data);
	}

    public function Proses_Tambah_Permohonan()
    {
            $no_permohonan = $this->input->post('no_permohonan');//deklarasi
			$NIK = $this->input->post('NIK');//deklarasi			
			$jenis_dokumen = $this->input->post('jenis_dokumen');//deklarasi
			$fungsi = $this->input->post('fungsi');//deklarasi
            $tanggal_dokumen = $this->input->post('tanggal_dokumen');
			

			$data_insert = array(
				'no_permohonan' => $no_permohonan,
				'NIK' => $NIK,
				'jenis_dokumen' => $jenis_dokumen,
				'fungsi' => $fungsi,
                'tanggal_dokumen' => $tanggal_dokumen
			);

			$this->M_dokumen->Tambah_dokumen($data_insert);
			redirect('Masyarakat/Aksi_Tambah_Permohonan');
    }

    public function Aksi_Tambah_Permohonan(){
        $this->template->load('Layout_User','Masyarakat/Aksi_tambah');
    }

    public function Unduh_Dokumen()
	{
		$data['dokumen'] = $this->M_dokumen->Masyarakat_unduh_dokumen('dokumen')->result();
		$this->template->load('Layout_User','Masyarakat/Masyarakat_unduh_dokumen',$data);
	}

    public function Masyarakat_Proses_Unduh_Dokumen($dokumen){
        force_download('dokumenpermohonan/'.$dokumen,NULL);
    }

    public function Kritik()
    {
        $data['kritik'] = $this->M_kritik->Tampil_kritik('kritiksaran')->result();
        $this->template->load('Layout_User','Masyarakat/Kritik',$data);
    }

    public function Proses_Tambah_Kritik()
    {
        $no_kritik = $this->input->post('no_kritik');//deklarasi
        $NIK = $this->input->post('NIK');//deklarasi			
        $isi_kritik = $this->input->post('isi_kritik');//deklarasi
       

        $data_insert = array(
            'no_kritik' => $no_kritik,
            'NIK' => $NIK,
            'isi_kritik' => $isi_kritik,

        );

        $this->M_kritik->Tambah_kritik($data_insert);
        redirect('Masyarakat/Aksi_Tambah_Kritik');
    }

    public function Aksi_Tambah_Kritik(){
        $this->template->load('Layout_User','Masyarakat/Aksi_kritik');
    }



    public function Ronda(){
        $data['ronda'] = $this->M_ronda->Tampil_ronda('ronda')->result();
        $this->template->load('Layout_User','Masyarakat/Ronda',$data);
    }

    public function Berita(){
        $data['berita'] = $this->M_berita->Tampil_berita('berita')->result();
        $this->template->load('Layout_User','Masyarakat/Berita',$data);
    }

    public function Visimisi(){      
        $this->template->load('Layout_User','Masyarakat/Visi');
    }

    public function Event(){
        $data['event'] = $this->M_event->Tampil_Event('event')->result();
        $this->template->load('Layout_User','Masyarakat/Event',$data);
    }



}