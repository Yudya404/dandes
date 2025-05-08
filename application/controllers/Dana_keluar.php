<?php

class Dana_keluar extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dana');;
    }

    public function index()
    {
        $data['judul'] = 'Dana Keluar';
        $data['danakeluar'] = $this->Model_dana->getalldanakeluar();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dana/dana_keluar', $data);
        $this->load->view('templates/footer'); 
    }

   public function tambahdanakeluar()
	{
    $tgl_keluar = $this->input->post('tgl_keluar');
    $kebutuhan = $this->input->post('kebutuhan');
    $jml_biaya = $this->input->post('jml_biaya');
    $base64Gambar = $_FILES["file"]["tmp_name"];

    $Path = "uploads/";
    $ImagePath = $Path . $tgl_keluar . "_" . $kebutuhan;
    move_uploaded_file($base64Gambar, $ImagePath);
	

    // Mengambil total saldo dari pemasukan sebelumnya
    $total_saldo_sebelumnya = $this->Model_dana->getTotalSaldo();

    // Menggunakan total saldo sebagai saldo awal
    $saldo_awal = 0;

    // Perhitungan jml_dana + saldo_awal
    $total_pengeluaran = $jml_biaya + $saldo_awal;

    $data = [
        'kebutuhan' => $kebutuhan,
        'jml_biaya' => $jml_biaya,
		'total_pengeluaran' => $total_pengeluaran,
        'tgl_keluar' => $tgl_keluar,
        'bukti' => base_url() . $ImagePath,
    ];

    $this->Model_dana->insertdanakeluar($data, 'tb_dana_keluar');
    redirect('Dana_keluar');
	}


    public function hapusdanakeluar($id)
    {
       $this->Model_dana->deletedanakeluar($id);
       redirect('Dana_keluar');
    }
	
	public function download($id)
{
    $data = $this->Model_dana->getdanakeluarbyid($id);

    // Mendapatkan path file dari database
    $file_path = $data['bukti'];

    // Mengambil nama file dari path
    $file_name = basename($file_path);

    // Mengatur header untuk memulai unduhan
    header("Content-Disposition: attachment; filename=" . $file_name);
    header("Content-Type: application/octet-stream");
    header("Content-Length: " . filesize($file_path));

    // Membaca dan menampilkan isi file
    readfile($file_path);
}


}

?>