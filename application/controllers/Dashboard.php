<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        
    }
    
    public function index()
    {
        $this->load->model('Chart_model');
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['jmlhkendaraan'] = $this->Chart_model->getJumlahKendaraan();
        $data['jmlhelektronik'] = $this->Chart_model->getJumlahElektronik();
        $data['jmlhac'] = $this->Chart_model->getJumlahAC();
        $this->load->view('dashboard' , $data);
    }

    public function profil()
    {
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->view('profil', $data);
    }
}