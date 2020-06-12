<?php
class saldo_model extends CI_Model {
    function getAll(){
        $this->db->select('t_tabungan.id_tabungan, t_tabungan.id_anggota, t_tabungan.setoran, t_tabungan.penarikan, t_tabungan.saldo, sum(t_tabungan.penarikan) as jumlah_penarikan, sum(t_tabungan.setoran) as jumlah_setoran, SUM(t_tabungan.setoran - t_tabungan.penarikan + t_tabungan.saldo) AS subsaldo, t_anggota.id_anggota, t_anggota.nama, t_anggota.username, t_anggota.prodi, t_anggota.jurusan, t_anggota.jenis_kelamin, t_anggota.alamat, t_anggota.jabatan, t_anggota.telepon');
        $this->db->from('t_anggota');
        $this->db->join('t_tabungan', 't_tabungan.id_anggota = t_anggota.id_anggota');
        $this->db->group_by('t_anggota.nama','DESC');
        $query = $this->db->get();
        return $query;
    }

    function saldo(){
        $this->db->select('t_tabungan.id_tabungan, t_tabungan.id_anggota, t_tabungan.setoran, t_tabungan.penarikan, t_tabungan.saldo, sum(t_tabungan.penarikan) as jumlah_penarikan, sum(t_tabungan.setoran) as jumlah_setoran, t_anggota.id_anggota, t_anggota.nama, t_anggota.username, t_anggota.prodi, t_anggota.jurusan, t_anggota.jenis_kelamin, t_anggota.alamat, t_anggota.telepon');
        $this->db->from('t_anggota');
        $this->db->join('t_tabungan', 't_tabungan.id_anggota = t_anggota.id_anggota');
        $this->db->group_by('t_anggota.nama','DESC');
        $query = $this->db->get();
        return $query;
    }

    function data_uang(){
        $this->db->select('*');
        $this->db->from('t_tabungan');
        $this->db->join('t_anggota', 't_anggota.id_anggota = t_tabungan.id_anggota');
        $this->db->order_by('t_tabungan.id_tabungan','DESC');
        $query = $this->db->get();
        return $query;
    }

    function getGrup(){
        $this->db->order_by('id_anggota','ASC');
        return $this->db->from('t_anggota')->get()->result();
    }

    function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table){
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

}