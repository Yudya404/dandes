<?php

class Model_dana extends CI_Model
{
   public function getalldanamasuk()
   {
      $query = "SELECT tb_dana_masuk.*, tb_instansi.id_instansi,tb_instansi.nama_instansi 
				FROM tb_dana_masuk 
				JOIN tb_instansi ON tb_dana_masuk.id_instansi=tb_instansi.id_instansi";
      return $this->db->query($query)->result_array();
   }
   
   public function getTotalSaldo()
   {
      $query = $this->db->select_sum('jml_dana')->get('tb_dana_masuk');
      $result = $query->row();
      return $result->jml_dana;
   }
   
   public function insertdanamasuk($data, $table)
   {
      $this->db->insert($table, $data);
   }
   
   public function getdanamasukById($id_dana_masuk)
   {
      return $this->db->get_where('tb_dana_masuk', ['id_dana_masuk' => $id_dana_masuk])->row_array();
   }
   
   public function updatedanamasuk($data)
	{
   $id_dana_masuk = $data['id_dana_masuk'];
   $tgl_masuk = $this->input->post('tgl_masuk');
   $id_instansi = $this->input->post('id_instansi');
   $lokasi = $this->input->post('lokasi');
   $jml_dana = $this->input->post('jml_dana');

   $data = [
	  'id_dana_masuk' => $id_dana_masuk,
      'tgl_masuk' => $tgl_masuk,
      'lokasi' => $lokasi,
      'jml_dana' => $jml_dana,
      'id_instansi' => $id_instansi
   ];

   $this->db->update('tb_dana_masuk', $data, ['id_dana_masuk' => $this->input->post('id_dana_masuk')]);

   redirect('Dana_masuk/editdanamasuk'); // Ganti 'nama_controller' dan 'nama_method' dengan controller dan method yang sesuai
	}


	public function deletedanamasuk($id)
   {
      $this->db->delete('tb_dana_masuk', ['id_dana_masuk' => $id]);
   }

    public function getalldanakeluar()
   {
           
     $query = "SELECT tb_dana_keluar.* FROM tb_dana_keluar";
      return $this->db->query($query)->result_array();
   }

   public function insertdanakeluar($data, $table)
   {
      $this->db->insert($table, $data);
   }
   
   public function getdanakeluarbyid($id)
   {
    $query = $this->db->get_where('tb_dana_keluar', array('id_dana_keluar' => $id));
    return $query->row_array();
   }

   
   public function deletedanakeluar($id)
   {
      $this->db->delete('tb_dana_keluar', ['id_dana_keluar' => $id]);
   }

    public function getinstansiById($id_desa)
   {
      return $this->db->get_where('tb_instansi', ['id_instansi' => $id_instansi])->row_array();
   }

	public function updateinstansi()
   {
      $nama_instansi = $this->input->post('nama_instansi');

      $data = [
        'nama_instansi' => $nama_instansi
      ];

      $this->db->update('tb_instansi', $data, ['id_instansi' => $this->input->post('id_instansi')]);
   }


}

?>