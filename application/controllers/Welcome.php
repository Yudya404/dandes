<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function index()
    {
        $this->load->view('welcome_message');
    }
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_laporan');
		$this->load->model('Model_dana');
		$this->load->model('Model_instansi');
		$this->load->library('excel');
    }

    public function halamanberanda()
    {
        $data['judul'] = 'Halaman Beranda';
		$data['laporan'] = $this->Model_dana->getalldanamasuk();
		$data['danakeluar'] = $this->Model_dana->getalldanakeluar();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('halaman_publik/beranda', $data);
        $this->load->view('template/footer');
    }
	
	public function halamantentangkami()
    {
        $data['judul'] = 'Halaman Tentang Kami';
		$data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('halaman_publik/tentangkami', $data);
        $this->load->view('template/footer');
    }
	public function halamanmanualaplikasi()
    {
        $data['judul'] = 'Halaman Manual Aplikasi';
		$data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('halaman_publik/manualaplikasi', $data);
        $this->load->view('template/footer');
    }
	
	public function halamankegiatanpkk()
    {
        $data['judul'] = 'Halaman Kegiatan PKK';
		$data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('halaman_publik/kegiatanpkk', $data);
        $this->load->view('template/footer');
    }
	
	public function halamankegiatanpengajian()
    {
        $data['judul'] = 'Halaman Kegiatan Pengajian';
		$data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('halaman_publik/kegiatanpengajian', $data);
        $this->load->view('template/footer');
    }
	public function halamankegiatanrapat()
    {
        $data['judul'] = 'Halaman Kegiatan Rapat Rutin';
		$data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('halaman_publik/kegiatanrapat', $data);
        $this->load->view('template/footer');
    }
	public function halamankegiatankarangtaruna()
    {
        $data['judul'] = 'Halaman Kegiatan Karang Taruna';
		$data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('halaman_publik/kegiatankarangtaruna', $data);
        $this->load->view('template/footer');
    }
}
