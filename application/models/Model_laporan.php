<?php

class Model_laporan extends CI_Model
{
   public function getalllaporan()
	{
		$query = "SELECT tb_dana_masuk.*, tb_instansi.id_instansi, tb_instansi.nama_instansi 
				  FROM tb_dana_masuk 
				  JOIN tb_instansi ON tb_dana_masuk.id_instansi = tb_instansi.id_instansi";
		
		return $this->db->query($query)->result_array();
	}

   public function getlaporanbyid($id)
   {
       $query = "SELECT * from tb_dana_keluar";
	   return $this->db->query($query)->result_array();
   }


}

?>