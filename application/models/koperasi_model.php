<?php
class koperasi_model extends CI_Model {
    function getAll(){
        $this->db->select('*');
        $this->db->from('t_anggota');
        $this->db->join('t_grup', 't_anggota.jabatan = t_grup.id_grup');
        $query = $this->db->get();
        return $query;
    }

    function getGrup(){
        $this->db->order_by('id_grup','ASC');
        return $this->db->from('t_grup')->get()->result();
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
    
    function login($user, $pass, $table){
        $this->db->select('*');
        $this->db->from('t_anggota');
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        $query = $this->db->get();
        return $query;
    }

}


?>