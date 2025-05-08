<?php

class Laporan extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_laporan');
		$this->load->model('Model_dana');
		$this->load->model('Model_instansi');
		$this->load->library('excel');
    }

    public function index()
    {
        $data['judul'] = 'Laporan';
        $data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lap_danadesa', $data);
        $this->load->view('templates/footer'); 
    }

    public function detaildana($id)
    {
        $data['judul'] = 'detail dana keluar';
        $data['laporan'] = $this->Model_laporan->getlaporanbyid($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/detaillap', $data);
        $this->load->view('templates/footer'); 
    }

	 public function pekerjaan()
    {
        $data['judul'] = 'lpj';
        $data['lpj'] = $this->Model_laporan->lpj();
        $data['desa'] = $this->Model_desa->getalldesa();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lpj', $data);
        $this->load->view('templates/footer'); 
    } 

     public function tambahlpj()
    {
       $id_desa = $this->input->post('id_desa');
       $file = $_FILES['file']['name'];

       if ($file) {
             $config['allowed_types'] = 'jpg|jpeg|png|JPEG|pdf|PDF';
             $config['upload_path'] = './uploads/';
             $config['remove_spaces'] = FALSE;

             $this->load->library('upload', $config);

             if ($this->upload->do_upload('file')) {
             } else {
                echo $this->upload->display_errors();
             }
        }
       
       $data = [
             'id_desa' => $id_desa,
             'file_lpj' => $file
           ];

      $this->Model_laporan->insertlpj($data, 'tb_lpj');

      $this->db->set('status', 'selesai');
	  $this->db->where('id_desa', $id_desa);
	  $this->db->update('tb_dana_masuk');

       redirect('Laporan/pekerjaan');
    }
	
	public function cetak_pdf()
	{
    $this->load->library('pdf');

    // Buat objek Pdf
    $pdf = new Pdf();

    // Set dokumen informasi dasar
    $pdf->SetCreator('PoweredBy');
    $pdf->SetAuthor('WBS.COM');
    $pdf->SetTitle('Laporan Dana RT');
    $pdf->SetSubject('Subjek Dokumen PDF');

    // Tambahkan halaman
    $pdf->AddPage();

    // Tampilkan judul
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'Laporan Bulanan', 0, 1, 'C');
    $pdf->Ln(10);

    // Tampilkan nama dan tanggal sesuai sistem
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 10, 'Laporan Pemasukan & Pengeluaran', 0, 0, 'L');
	$pdf->Cell(0, 10, 'Tanggal: ' . date('d F Y'), 0, 0, 'R');
    
	
	// Tampilkan nama dan tanggal sesuai sistem
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Ln(10);

    // Tampilkan tabel
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->Cell(25, 10, 'TGL Masuk', 1);
    $pdf->Cell(30, 10, 'Pemasukan Dari', 1);
    $pdf->Cell(25, 10, 'Saldo Awal', 1);
    $pdf->Cell(40, 10, 'Keperluan', 1);
    $pdf->Cell(25, 10, 'TGL Keluar', 1);
    $pdf->Cell(30, 10, 'Jumlah Biaya', 1);
    $pdf->Cell(20, 10, 'Sisa Saldo', 1);
    $pdf->Ln();

    // Ambil data dari database
    $laporan = $this->Model_laporan->getalllaporan();

    foreach ($laporan as $dat) {
        $pdf->SetFont('helvetica', '', 8);
        $pdf->Cell(25, 10, $dat['tgl_masuk'], 1);
        $pdf->Cell(30, 10, $dat['nama_instansi'], 1);
        $pdf->Cell(25, 10, $dat['saldo_awal'], 1);
        $pdf->Cell(40, 10, $dat['kebutuhan'], 1);
        $pdf->Cell(25, 10, $dat['tgl_keluar'], 1);
        $pdf->Cell(30, 10, $dat['jml_biaya'], 1);
        $pdf->Cell(20, 10, $dat['sisa_saldo'], 1);
        $pdf->Ln();
    }
	
	// Tampilkan tanda tangan 1 (sebelah kiri)
	$pdf->Ln();
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 10, 'Mengetahui', 0, 0, 'L');

    // Tampilkan tanda tangan 2 (sebelah kanan)
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 10, 'Pembuat Laporan', 0, 0, 'R');
	
	// Tampilkan tanda tangan 1 (sebelah kiri)
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Ln();
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 10, 'Yudya H S, S.Kom,. M.MT', 0, 0, 'L');

    // Tampilkan tanda tangan 2 (sebelah kanan)
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 10, 'Yoga D F, S.Kom', 0, 0, 'R');

    // Tampilkan footer
    $pdf->SetFont('helvetica', 'I', 8);
    $pdf->SetY(-1);
    $pdf->Cell(0, 10, 'PoweredBy WBS.COM', 0, 0, 'C');

    // Simpan file PDF
    $pdf->Output('Laporan_Bulanan.pdf', 'I');
	}
	
	public function exportToExcel()
    {
        // Ambil data dari database
        $data = $this->Model_laporan->getalllaporan();

        // Nama file Excel
        $filename = 'Laporan_Bulanan';

        // Export data ke Excel
        $this->excel->exportDataToExcel($data, $filename);
    }
}

?>