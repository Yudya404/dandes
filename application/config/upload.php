<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['upload_path'] = './uploads/'; // Lokasi folder penyimpanan file gambar
$config['allowed_types'] = 'gif|jpg|jpeg|png'; // Jenis file yang diizinkan
$config['max_size'] = 2048; // Ukuran maksimum file (dalam kilobita)
$config['encrypt_name'] = TRUE; // Mengenkripsi nama file yang diupload

?>