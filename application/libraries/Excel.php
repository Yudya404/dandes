<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->database();
    }

    public function exportDataToExcel($data, $filename)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header
        $sheet->setCellValue('A1', 'TGL Masuk');
        $sheet->setCellValue('B1', 'Pemasukan Dari');
        $sheet->setCellValue('C1', 'Saldo Awal');
        $sheet->setCellValue('D1', 'Keperluan');
        $sheet->setCellValue('E1', 'TGL Keluar');
        $sheet->setCellValue('F1', 'Jumlah Biaya');
        $sheet->setCellValue('G1', 'Sisa Saldo');

        // Data
        $row = 2;
        foreach ($data as $d) {
            $sheet->setCellValue('A' . $row, $d['tgl_masuk']);
            $sheet->setCellValue('B' . $row, $d['nama_instansi']);
            $sheet->setCellValue('C' . $row, $d['saldo_awal']);
            $sheet->setCellValue('D' . $row, $d['kebutuhan']);
            $sheet->setCellValue('E' . $row, $d['tgl_keluar']);
            $sheet->setCellValue('F' . $row, $d['jml_biaya']);
            $sheet->setCellValue('G' . $row, $d['sisa_saldo']);
            $row++;
        }

        // Set header
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        // Save file
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}
