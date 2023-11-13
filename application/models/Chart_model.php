<?php
class Chart_model extends CI_Model
{
    //KENDARAAN
    public function getJumlahKendaraan(){
        return $this->db->get('tb_kendaraan')->num_rows();
    }
    
    //ELEKTRONIK
    public function getJumlahElektronik(){
        return $this->db->get('tb_pengolah_data')->num_rows();
    }

    //AC
    public function getJumlahAC(){
        return $this->db->get('tb_ac')->num_rows();
    }
}