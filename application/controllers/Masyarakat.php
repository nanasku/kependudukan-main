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

    public function Ronda()
    {
        $data['title'] = 'Jadwal Ronda Rutin';
        $data['ronda'] = $this->M_ronda->get_jadwal_lengkap();
        $this->template->load('Layout_User', 'Masyarakat/Ronda', $data);
    }

    public function Berita(){
        $data['berita'] = $this->M_berita->Tampil_berita('berita')->result();
        $this->template->load('Layout_User','Masyarakat/Berita',$data);
    }

    // ==================== DETAIL BERITA ====================
    public function Detail_Berita($no_berita)
    {
        $data['berita'] = $this->M_berita->Edit_data_berita(['no_berita' => $no_berita], 'berita')->row();
        
        if (!$data['berita']) {
            show_404();
        }
        
        // Ambil berita lain sebagai rekomendasi (selain yang sedang dibuka)
        $this->db->where('no_berita !=', $no_berita);
        $this->db->order_by('no_berita', 'DESC');
        $this->db->limit(3);
        $data['berita_lain'] = $this->db->get('berita')->result();
        
        $this->template->load('Layout_User', 'Masyarakat/Detail_berita', $data);
    }

    public function Visimisi(){      
        $this->template->load('Layout_User','Masyarakat/Visi');
    }

    public function Event(){
        $data['event'] = $this->M_event->Tampil_Event('event')->result();
        $this->template->load('Layout_User','Masyarakat/Event',$data);
    }

    // ==================== DETAIL EVENT ====================
    public function Detail_Event($no_event)
    {
        $data['event'] = $this->M_event->Edit_data_event(['no_event' => $no_event], 'event')->row();
        
        if (!$data['event']) {
            show_404();
        }
        
        // Event lain sebagai rekomendasi
        $this->db->where('no_event !=', $no_event);
        $this->db->order_by('no_event', 'DESC');
        $this->db->limit(3);
        $data['event_lain'] = $this->db->get('event')->result();
        
        $this->template->load('Layout_User', 'Masyarakat/Detail_event', $data);
    }

}