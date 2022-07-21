<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Dashboard_model');
    }

    // MULAI MENAMPILKAN DASHBOARD PETUGAS
    public function petugas()
    {
        $data['title'] = 'Dashboard | Posyandu Paleto Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $users = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);
        $a = $this->Dashboard_model->dataIbu();
        $b = $this->Dashboard_model->dataAnak();
        $c = $this->Dashboard_model->dataImunisasi();

        $id = $users['id_users'];
        $d = $this->Dashboard_model->dataPenimbangan($id);

        $data['count_ibu'] = $a;
        $data['count_anak'] = $b;
        $data['count_imunisasi'] = $c;
        $data['count_penimbangan'] = $d;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard/petugas', $data);
        $this->load->view('templates/footer');
    }
    // SELESAI MENAMPILKAN DASHBOARD PETUGAS

    // MULAI MENAMPILKAN DASHBOARD BIDAN
    public function admin()
    {
        $data['title'] = 'Dashboard | Posyandu Paleto Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $users = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // print_r($data);

        $a = $this->Dashboard_model->dataIbu();
        $b = $this->Dashboard_model->dataAnak();
        $c = $this->Dashboard_model->dataImunisasi();

        $id = $users['id_users'];
        $d = $this->Dashboard_model->dataPenimbangan($id);

        $data['count_ibu'] = $a;
        $data['count_anak'] = $b;
        $data['count_imunisasi'] = $c;
        $data['count_penimbangan'] = $d;


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar-admin');
        $this->load->view('templates/topbar-admin', $data);
        $this->load->view('dashboard/admin', $data);
        $this->load->view('templates/footer');
    }
    // SELESAI MENAMPILKAN DASHBOARD BIDAN
}
