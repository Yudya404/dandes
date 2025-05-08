<?php

class Dana_masuk extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dana');
        $this->load->model('Model_instansi');
    }

    public function index()
    {
        $data['judul'] = 'Dana Masuk';
        $data['danamasuk'] = $this->Model_dana->getalldanamasuk();
        $data['instansi'] = $this->Model_instansi->getallinstansi();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dana/dana_masuk', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahdanamasuk()
	{
    $tgl_masuk = $this->input->post('tgl_masuk');
    $id_instansi = $this->input->post('id_instansi');
    $jml_dana = $this->input->post('jml_dana');
    $lokasi = $this->input->post('lokasi');

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

    // Mengambil total saldo dari pemasukan sebelumnya
    $total_saldo_sebelumnya = $this->Model_dana->getTotalSaldo();

    // Menggunakan total saldo sebagai saldo awal
    $saldo_awal = 0;

    // Perhitungan jml_dana + saldo_awal
    $sisa_saldo = $jml_dana + $saldo_awal;

    $data = [
        'id_instansi' => $id_instansi,
        'tgl_masuk' => $tgl_masuk,
        'jml_dana' => $jml_dana,
        'saldo_awal' => $saldo_awal,
        'sisa_saldo' => $sisa_saldo,
        'lokasi' => $lokasi,
        'status' => 'realisasi'
    ];

    $this->Model_dana->insertdanamasuk($data, 'tb_dana_masuk');
    redirect('Dana_masuk');
	}
	
	public function editdanamasuk($id_dana_masuk)
	{
	   $data['judul'] = 'Edit';
	   $data['editdanamasuk'] = $this->Model_dana->getdanamasukById($id_dana_masuk);
	   $data['instansi'] = $this->Model_instansi->getallinstansi();
	   $this->form_validation->set_rules('id_dana_masuk', 'id_dana_masuk', 'required');
	   $this->form_validation->set_rules('tgl_masuk', 'tgl_masuk', 'required');
	   $this->form_validation->set_rules('id_instansi', 'id_instansi', 'required');
	   $this->form_validation->set_rules('lokasi', 'lokasi', 'required');
	   $this->form_validation->set_rules('jml_dana', 'jml_dana', 'required');

	   if ($this->form_validation->run() == false) {
		  $this->load->view('templates/header', $data);
		  $this->load->view('templates/sidebar', $data);
		  $this->load->view('dana/edit_dana_masuk', $data);
		  $this->load->view('templates/footer'); 
	   } else {
		  $data_update = array(
			 'id_dana_masuk' => $this->input->post('id_dana_masuk'),
			 'tgl_masuk' => $this->input->post('tgl_masuk'),
			 'id_instansi' => $this->input->post('id_instansi'),
			 'lokasi' => $this->input->post('lokasi'),
			 'jml_dana' => $this->input->post('jml_dana')
		  );

		  $this->Model_dana->updatedanamasuk($data_update);
		  redirect('Dana_masuk');
	   }
	}
	
    public function hapusdanamasuk($id)
    {
       $this->Model_dana->deletedanamasuk($id);
       redirect('Dana_masuk');
    }

}

?>