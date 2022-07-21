<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    // MULAI CRUD DATA PETUGAS
    public function getDataPetugas()
    {
        $query = "SELECT * From petugas";

        return $this->db->query($query)->result_array();
    }

    public function getDataUsers()
    {
        $query = "SELECT * From user";

        return $this->db->query($query)->result_array();
    }

    public function delDataPetugas($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('petugas');
    }

    public function updDataPetugas($id, $data)
    {
        $this->db->where('id_petugas', $id);
        $this->db->update('petugas', $data);
    }
    // SELESAI CRUD DATA PETUGAS
}
