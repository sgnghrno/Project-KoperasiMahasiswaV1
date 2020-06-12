<?php
class saldo extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('saldo_model');
    }

    public function index(){
        $data['user'] = $this->saldo_model->getAll()->result();
        $this->template->views('crud/home_saldo', $data);
    }

    public function tambah(){
        $data['grup'] = $this->saldo_model->getGrup();
        $this->template->views('crud/tambah_saldo', $data);
    }

    public function input(){
        $id_anggota = $this->input->post('id_anggota');
        $setoran = $this->input->post('setoran');
        // $penarikan = $this->input->post('jumlah_setoran' - 'jumlah_penarikan' + 'setoran');

        $data = array(
            'id_anggota' => $id_anggota,
            'setoran' => $setoran
            // 'saldo' => $saldo
        );

        $this->saldo_model->input_data($data, 't_tabungan');
        redirect('saldo');
    }

    public function penarikan(){
        $data['grup'] = $this->saldo_model->getGrup();
        $this->template->views('crud/tarik_saldo', $data);
    }

    public function tarik(){
        $id_anggota = $this->input->post('id_anggota');
        $penarikan = $this->input->post('penarikan');

        $data = array(
            'id_anggota' => $id_anggota,
            'penarikan' => $penarikan
        );

        $this->saldo_model->input_data($data, 't_tabungan');
        redirect('saldo');
    }



    public function edit($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $data['user'] = $this->koperasi_model->edit_data($where,'t_anggota')->result();
        $data['grup'] = $this->koperasi_model->getGrup();
        $this->template->views('crud/edit_anggota', $data);
    }

    public function detail($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $data['user'] = $this->saldo_model->edit_data($where,'t_anggota')->result();
        $data['saldo'] = $this->saldo_model->edit_data($where,'t_tabungan')->result();
        $this->template->views('crud/detail_anggota', $data);
    }

    public function update(){
        $id_anggota = $this->input->post('id_anggota');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $telepon = $this->input->post('telepon');
        $jabatan = $this->input->post('jabatan');
        $prodi = $this->input->post('prodi');
        $jurusan = $this->input->post('jurusan');
        $angkatan = $this->input->post('angkatan');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'jenis_kelamin' => $jenis_kelamin,
            'telepon' => $telepon,
            'jabatan' => $jabatan,
            'prodi' => $prodi,
            'jurusan' => $jurusan,
            'angkatan' => $angkatan,
            'alamat' => $alamat
        );

        $where = array(
            'id_anggota' => $id_anggota
        );

        $this->koperasi_model->update_data($where, $data, 't_anggota');
        redirect('home');
    }

    public function hapus($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $this->koperasi_model->hapus_data($where, 't_anggota');
        redirect('home');
    }

}
?>