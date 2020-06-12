<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class login extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->load->model('koperasi_model');
     }

     public function index(){
         $this->load->view('crud/masuk');
     }

     public function cek_log(){
         $username = $this->input->post('txt_user');
         $password = $this->input->post('txt_pass');
         $cek = $this->koperasi_model->login($username, $password, 't_anggota')->result();
         if ($cek != FALSE) {
             foreach ($cek as $row ) {
                 $user = $row->username;
                 $grup = $row->jabatan;
             }
             $this->session->set_userdata('session_user', $user);
             $this->session->set_userdata('session_grup', $grup);
             redirect('beranda');
         }else {
             redirect('login');
         }
     }

     function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
 }

?>