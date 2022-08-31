<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_asset');
		$this->load->model('Chart_model');
	}

	public function index()
	{
		$this->load->model('Chart_model');
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
        $data['jmlhkendaraan'] = $this->Chart_model->getJumlahKendaraan();
        $data['jmlhelektronik'] = $this->Chart_model->getJumlahElektronik();
        $data['jmlhac'] = $this->Chart_model->getJumlahAC();
		$data['row'] = $this->m_asset->get_data_alarm_pengolah_data();
		$data['row2'] = $this->m_asset->get_data_alarm_ac();
		$data['row3'] = $this->m_asset->get_data_alarm_kendaraan();
		$this->load->view('home.php', $data);
	}
}