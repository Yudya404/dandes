<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {
	
	public function index()
    {
        $data['judul'] = 'Cetak PDF';
        $data['laporan'] = $this->Model_laporan->getalllaporan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('laporan/lap_danadesa', $data);
        $this->load->view('templates/footer'); 
    }

    public function cetak_pdf() {
        $this->load->library('pdf');

        // Buat objek Pdf
        $pdf = new Pdf();

        // Set dokumen informasi dasar
        $pdf->SetCreator('Nama Anda');
        $pdf->SetAuthor('Nama Anda');
        $pdf->SetTitle('Judul Dokumen PDF');
        $pdf->SetSubject('Subjek Dokumen PDF');

        // Tambahkan halaman
        $pdf->AddPage();

        // Tampilkan tabel
        $pdf->SetFont('helvetica', 'B', 14);
        $pdf->Cell(40, 10, 'Tanggal Masuk', 1);
        $pdf->Cell(40, 10, 'Pemasukan Dari', 1);
        $pdf->Cell(30, 10, 'Saldo Awal', 1);
        $pdf->Cell(40, 10, 'Keperluan', 1);
        $pdf->Cell(40, 10, 'Tanggal Keluar', 1);
        $pdf->Cell(30, 10, 'Jumlah Biaya', 1);
        $pdf->Cell(30, 10, 'Sisa Saldo', 1);
        $pdf->Ln();

        // Ambil data dari database
        // Misalnya, menggunakan model atau PDO untuk mengambil data

        foreach ($laporan as $dat) {
            $pdf->SetFont('helvetica', '', 12);
            $pdf->Cell(40, 10, $dat['tgl_masuk'], 1);
            $pdf->Cell(40, 10, $dat['nama_instansi'], 1);
            $pdf->Cell(30, 10, $dat['saldo_awal'], 1);
            $pdf->Cell(40, 10, $dat['kebutuhan'], 1);
            $pdf->Cell(40, 10, $dat['tgl_keluar'], 1);
            $pdf->Cell(30, 10, $dat['jml_biaya'], 1);
            $pdf->Cell(30, 10, $dat['sisa_saldo'], 1);
            $pdf->Ln();
        }

        // Simpan file PDF
        $pdf->Output('file.pdf', 'I');
    }

}
