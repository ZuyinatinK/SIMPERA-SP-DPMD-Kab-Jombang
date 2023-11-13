<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelAC extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('AC_model');

    }

    public function index()
    {
        $this->load->model('AC_model');
        $data['tbac'] = $this->AC_model->getAllAC();
        $data['historyac'] = $this->AC_model->getAllHistory();
        $this->load->model('Kategori_model');
        $data['kualitas'] = $this->Kategori_model->getAllKualitas();
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $this->load->view('tabel_ac', $data);
    }
    
    public function tambah(){

        $this->form_validation->set_rules('no_registrasi','No Registrasi','required|trim');
        $this->form_validation->set_rules('kode_barang','Kode Barang','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('AC_model');
            $data['tbac'] = $this->AC_model->getAllAC();
            $data['historyac'] = $this->AC_model->getAllHistory();
            $this->load->model('Kategori_model');
            $data['kualitas'] = $this->Kategori_model->getAllKualitas();
            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
            $this->load->view('tabel_ac', $data);
            
        } else {
            
            $this->load->model('AC_model');
            $this->AC_model->tambahDataAC();
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelAC')."'</script>";	
        }
        
    }
    
    public function edit($id)
	{
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('no_registrasi','No Registrasi','required|trim');
        $this->form_validation->set_rules('kode_barang','Kode Barang','required|trim');

        if ($this->form_validation->run() == false) {
			$query = $this->AC_model->getACByID($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->load->view('tabel_ac_edit', $data);
			} else {
				echo "<script>alert('Data Tidak ditemukan')";
				echo "window.location='".site_url('tabelAC')."'</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->AC_model->editDataAC($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil diedit')</script>";
			}
				echo "<script>window.location='".site_url('tabelAC')."'</script>";	
		}	
	}
    
    public function hapus($id){
        
        $this->load->model('AC_model');
        $this->AC_model->hapusDataAC($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil dihapus')</script>";
			}
				echo "<script>window.location='".site_url('tabelAC')."'</script>";	
    }

    public function ubah($id){
        $data['ac'] = $this->AC_model->getACByID($id);
        $data = [
            "kode_barang" =>$this->input->post('kode_barang', true), 
            "jenis_barang"=> 1, 
            "kategori"=>$this->input->post('kategori', true), 
            "nama"=>$this->input->post('nama', true), 
            "foto"=>' profile.png', 
            "keterangan" => $this->input->post('keterangan', true),
            "kualitas"=>$this->input->post('kualitas', true), 
            "no_plat"=>$this->input->post('no_plat', true),
            "tgl_masuk"=>$this->input->post('date', true)
        ];
        $this->db->insert('tb_AC',$data);
    }

    public function tambahHistory(){
        $this->form_validation->set_rules('date','Tanggal','required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->model('AC_model');
            $data['tbac'] = $this->AC_model->getAllAC();
            $data['historyac'] = $this->AC_model->getAllHistory();
            $this->load->model('Kategori_model');
            $data['kualitas'] = $this->Kategori_model->getAllKualitas();
            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
            $this->load->view('tabel_ac', $data);
            
        } else {
            $this->load->model('AC_model');
            $this->AC_model->tambahHistoryAC();
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelAC')."'</script>";
        }
        
    }
    
    public function hapusHistory($id){
        $this->load->model('AC_model');
        $this->AC_model->hapusHistoryAC($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
			echo "<script>alert('Data berhasil dihapus')</script>";
		}
			echo "<script>window.location='".site_url('tabelAC')."'</script>";	
    }

    public function ubahHistory($id){
        $data['AC'] = $this->AC_model->getACByID($id);
        $data = [
            "kode_barang" =>$this->input->post('kode_barang', true), 
            "jenis_barang"=> 1, 
            "kategori"=>$this->input->post('kategori', true), 
            "nama"=>$this->input->post('nama', true), 
            "foto"=>' profile.png', 
            "keterangan" => $this->input->post('keterangan', true),
            "kualitas"=>$this->input->post('kualitas', true), 
            "no_plat"=>$this->input->post('no_plat', true),
            "tgl_masuk"=>$this->input->post('date', true)
        ];
        $this->db->insert('tb_ac',$data);
    }
    
    public function editHistory($id)
	{
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['kendaraan'] = $this->AC_model->getAllAC();
        $this->form_validation->set_rules('service','Service','required|trim');

        if ($this->form_validation->run() == false) {
			$query = $this->AC_model->getHistoryACByID($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->load->view('tabel_history_ac_edit', $data);
			} else {
				echo "<script>alert('Data Tidak ditemukan')";
				echo "window.location='".site_url('tabelAC')."'</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->AC_model->editHistoryAC($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil diedit')</script>";
			}
				echo "<script>window.location='".site_url('tabelAC')."'</script>";	
		}	
	}
    
}