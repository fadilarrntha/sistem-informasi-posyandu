<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    // MULAI KONTEN CARD
    public function dataIbu()
    {
        $res = $this->db->count_all_results('ibu');
        return $res;
    }

    public function dataAnak()
    {
        $res = $this->db->count_all_results('anak');
        return $res;
    }

    public function dataImunisasi()
    {
        $res = $this->db->count_all_results('imunisasi');
        return $res;
    }

    public function dataPenimbangan()
    {
        $res = $this->db->count_all_results('penimbangan');
        return $res;
    }

    public function dataBidan()
    {
        $res = $this->db->count_all_results('bidan');
        return $res;
    }
}
