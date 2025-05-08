<?php

class auth extends CI_Controller
{
   public function index()
   {
       if (!$this->session->userdata('username')) {
         
         $data = [
            'title' => 'Login'
         ];
         $this->load->view('login_template/header', $data);
         $this->load->view('user/login');
         $this->load->view('login_template/footer');
      }else{
         redirect('Home');
      }
   }

   public function login()
   {
      $username = $this->input->post('username');
      $password = $this->input->post('password');

      $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
      
       if ($user) {
         if ($user['password'] == $password) {
            $data = [
               'id_user' => $user['id_user'],
               'username' => $user['username'],
               'nama_lengkap' => $user['nama_lengkap'],
               'password' => $user['password'],
               'level' => $user['level']
            ];
            $this->session->set_userdata($data);
            redirect('Home');
         } else {
            redirect('auth');
         }
      } else {
         redirect('auth');
      }      
   }
   
   public function register()
{
    if ($this->input->server('REQUEST_METHOD') === 'POST') {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');

        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $level = $this->input->post('level');

            $data = [
                'username' => $username,
                'password' => $password,
                'nama_lengkap' => $nama_lengkap,
                'level' => $level
            ];

            $this->db->insert('tb_user', $data);
			
			 if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback(); // Rollback transaksi jika terjadi kesalahan
                $error = $this->db->error();
                echo 'Gagal menyimpan data ke database. Pesan kesalahan: ' . $error['message'];
                exit;
            } else {
                $this->db->trans_commit(); // Commit transaksi jika berhasil
            }

            redirect('auth/login');
        }
    }

    // Jika tidak ada data yang dikirimkan melalui form atau validasi gagal,
    // tampilkan halaman registrasi
    $data = [
        'title' => 'Registrasi'
    ];
    $this->load->view('login_template/header', $data);
    $this->load->view('user/register');
    $this->load->view('login_template/footer');
}


   public function logout()
   {
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('password');

      redirect('auth');
   }
}
