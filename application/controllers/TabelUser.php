<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelUser extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');

    }

    public function index()
    {
        $this->load->model('User_model');
        $data['user3'] = $this->User_model->getUserByID();
        $data['user2'] = $this->User_model->getUserByID2();
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        
        $this->load->view('user', $data);
    }
}