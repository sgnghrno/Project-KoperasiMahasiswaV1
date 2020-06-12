<?php
class home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('koperasi_model');
    }

    public function index(){
        $data['user'] = $this->koperasi_model->getAll()->result();
        $this->template->views('crud/home_koperasi', $data);
    }

    public function tambah(){
        $data['grup'] = $this->koperasi_model->getGrup();
        $this->template->views('crud/tambah_anggota', $data);
    }

    public function input(){
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

        $this->koperasi_model->input_data($data, 't_anggota');
        redirect('home');
    }

    public function edit($id_anggota){
        $where = array('id_anggota' => $id_anggota);
        $data['user'] = $this->koperasi_model->edit_data($where,'t_anggota')->result();
        $data['grup'] = $this->koperasi_model->getGrup();
        $this->template->views('crud/edit_anggota', $data);
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