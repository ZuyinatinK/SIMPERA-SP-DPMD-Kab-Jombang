<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TabelPengolahData extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->library('form_validation');
        $this->load->model('Elektronik_model');

    }

    public function index()
    {
        $this->load->model('Elektronik_model');
        $data['elektronik'] = $this->Elektronik_model->getAllElektronik();
        $data['history'] = $this->Elektronik_model->getAllHistory();
        $this->load->model('Kategori_model');
        $data['kategori_elektronik'] = $this->Kategori_model->getAllKategoriElektronik();
        $data['jenis_barang'] = $this->Kategori_model->getAllJenisBarang();
        $data['kualitas'] = $this->Kategori_model->getAllKualitas();
        $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $this->load->view('tabel_pengolahdata', $data);
    }
    public function tambah(){

       $this->form_validation->set_rules('no_registrasi','No Registrasi','required|trim');
        $this->form_validation->set_rules('kode_barang','Kode Barang','required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->model('Elektronik_model');
            $data['elektronik'] = $this->Elektronik_model->getAllElektronik();
            $data['history'] = $this->Elektronik_model->getAllHistory();
            $this->load->model('Kategori_model');
            $data['kategori_elektronik'] = $this->Kategori_model->getAllKategoriElektronik();
            $data['jenis_barang'] = $this->Kategori_model->getAllJenisBarang();
            $data['kualitas'] = $this->Kategori_model->getAllKualitas();
            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
            $this->load->view('tabel_pengolahdata', $data);
            
        } else {
            $this->load->model('Elektronik_model');
            $this->Elektronik_model->tambahDataElektronik();
           if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelPengolahData')."'</script>";
                  
        }
        
    }
    
    public function edit($id)
	{
	    $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('no_registrasi','No Registrasi','required|trim');
        $this->form_validation->set_rules('kode_barang','Kode Barang','required|trim');

        if ($this->form_validation->run() == false) {
			$query = $this->Elektronik_model->getPengolahDataByID($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->load->view('tabel_pengolahdata_edit', $data);
			} else {
				echo "<script>alert('Data Tidak ditemukan')";
				echo "window.location='".site_url('tabelPengolahData')."'</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Elektronik_model->editDataPengolahData($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil diedit')</script>";
			}
				echo "<script>window.location='".site_url('tabelPengolahData')."'</script>";	
		}	
	}
	
	public function editHistory($id)
	{
	    $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
	    //$data['kendaraan'] = $this->AC_model->getAllAC();
        $this->form_validation->set_rules('service','Service','required|trim');

        if ($this->form_validation->run() == false) {
			$query = $this->Elektronik_model->getHistoryPengolahDataByID($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->load->view('tabel_history_pengolahdata_edit', $data);
			} else {
				echo "<script>alert('Data Tidak ditemukan')";
				echo "window.location='".site_url('tabelPengolahData')."'</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Elektronik_model->editHistoryPengolahData($post);
			if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil diedit')</script>";
			}
				echo "<script>window.location='".site_url('tabelPengolahData')."'</script>";	
		}	
	}
    
    public function hapus($id){
        
        $this->load->model('Elektronik_model');
        $this->Elektronik_model->hapusDataElektronik($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil dihapus')</script>";
			}
				echo "<script>window.location='".site_url('tabelPengolahData')."'</script>";

    }
    public function ubah($id){
        $data['Elektronik'] = $this->Elektronik_model->getElektronikByID($id);
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
        $this->db->insert('tb_Elektronik',$data);
    }
    
    public function tambahHistory(){
        // $datetime = DateTime::createFromFormat('j F, Y', $this->input->post('date', true));
        // return $datetime->format('Y-F-j');
        // echo $datetime;
        $this->form_validation->set_rules('date','Tanggal','required|trim');
        
        if ($this->form_validation->run() == false) {

            $this->load->model('Elektronik_model');
            $data['elektronik'] = $this->Elektronik_model->getAllElektronik();
            $data['history'] = $this->Elektronik_model->getAllHistory();
            $this->load->model('Kategori_model');
            $data['kategori_elektronik'] = $this->Kategori_model->getAllKategoriElektronik();
            $data['jenis_barang'] = $this->Kategori_model->getAllJenisBarang();
            $data['kualitas'] = $this->Kategori_model->getAllKualitas();
            $data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
            $this->load->view('tabel_pengolahdata', $data);
            
        } else {
            $this->load->model('Elektronik_model');
            $this->Elektronik_model->tambahHistoryElektronik();
            if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil ditambah')</script>";
			}
				echo "<script>window.location='".site_url('tabelPengolahData')."'</script>";
                  
        }
        
    }
    
    public function hapusHistory($id){
        
        $this->load->model('Elektronik_model');
        $this->Elektronik_model->hapusHistoryElektronik($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        if($this->db->affected_rows() > 0){
				echo "<script>alert('Data berhasil dihapus')</script>";
			}
				echo "<script>window.location='".site_url('tabelPengolahData')."'</script>";

    }
    public function ubahHistory($id){
        $data['Elektronik'] = $this->Elektronik_model->getElektronikByID($id);
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
        $this->db->insert('tb_pengolah_data',$data);
    }
    
}