<?php
class d_anggota extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('koperasi_model');
    }

    public function index(){
        $data['user'] = $this->koperasi_model->getAll()->result();
        $this->template->views('crud/d_anggota', $data);
    }

}
?>