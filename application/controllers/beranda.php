<?php
class beranda extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('saldo_model');
    }

    public function index(){
        $data['user'] = $this->saldo_model->getAll()->result();
        $this->template->views('crud/home', $data);
    }

}
?>