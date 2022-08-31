<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
        }else {
            $this->_login();
        }
    }
    
    private function _login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['email'=> $email])->row_array();
        
        if ($user) {

            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 0) {
                        redirect('auth');
                    } else if ($user['role_id'] == 1){
                        redirect('dashboard/profil');
                    }else{
                        redirect('auth');
                    }
                    
                    redirect('dashboard/profil');
                } else {
                    $this->session->set_flashdata('message', 
                    '<div class="alert alert-danger" role="alert">Email Belum Mendapat Persetujuan!</div>');
                    redirect('auth');
                }

            } else {
                $this->session->set_flashdata('message', 
                '<div class="alert alert-danger" role="alert">Email Belum Mendapat Persetujuan!</div>');
                redirect('auth');
            }
            
        } else {
            # code...x
            $this->session->set_flashdata('message', 
            '<div class="alert alert-danger" role="alert">Email Tidak Terdaftar!</div>');
            redirect('auth');
        }
        
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'is_unique' => 'Email ini sudah mempunyai akun yang terdaftar!'
        ]);
        $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
            'maches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
        
        
        if($this->form_validation->run() == false){
            $data['title'] = 'Registrasi';
            $this->load->view('auth/registrasi', $data);
        }else{
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'foto' => 'profile.png',
                'password' => password_hash($this->input->post('password1'), 
                PASSWORD_DEFAULT),
                'role_id' => 0,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible alert-alt solid fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button><strong>Success!</strong> Akun Sudah Didaftarkan</div>');
            redirect('auth/registrasi');
        }

    }
    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible alert-alt solid fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button><strong>Success!</strong> Akun Sudah Didaftarkan</div>');
        redirect('auth');
    }

    public function detailUser($id){
        
        $this->load->model('User_model');
        $this->User_model->getUserByID($id);

    }
}