<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // MULAI CRUD DATA IBU
    public function getDataUser(){
        $query = "SELECT user.*, petugas.nama_petugas
                    From user JOIN petugas
                    ON user.petugas_id = petugas.id_petugas
                    ";
        // $query = "SELECT * From user";
        
        return $this->db->query($query)->result_array();
    }

    public function delDataUser($id){
        $this->db->where('id_users', $id);
        $this->db->delete('user');
    }

    public function updDataUser($id, $data){
        $this->db->where('id_users', $id);
        $this->db->update('user', $data);
    }
    // SELESAI CRUD DATA IBU
}
