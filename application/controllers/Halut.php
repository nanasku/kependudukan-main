<?php 

class Halut extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		$this->load->model('M_kelahiran');
		$this->load->model('M_kematian');
		$this->load->model('M_penduduk');
		$this->load->model('M_kedatangan');
		$this->load->model('M_pindahan');
		$this->load->model('M_berita');
		$this->load->model('M_event');
		$this->load->library('session');
	}

// controller halaman utama
    public function index()
	{
		$data['berita'] = $this->M_berita->Tampil_berita('berita')->result();
		$data['event'] = $this->M_event->Tampil_event('event')->result();
		$this->load->view('Halut',$data);
	}
}