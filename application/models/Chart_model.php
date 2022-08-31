<?php
class Chart_model extends CI_Model
{
   
    public function getJumlahKendaraan(){
        return $this->db->get('tb_kendaraan')->num_rows();
            
    }
    public function getJumlahRoda2(){
        return $this->db->get('tb_kendaraan')->num_rows();
    
    }

    public function getJumlahRoda4(){
        return $this->db->get('tb_kendaraan')->num_rows();
            
    }
    public function getKualitasRoda2(){
        return $this->db->get('tb_kendaraan')->num_rows();
            
    }
    public function getKualitasRoda4(){
        return $this->db->get('tb_kendaraan')->num_rows();
            
    }
    
    //ELEKTRONIK
    public function getJumlahElektronik(){
        return $this->db->get('tb_pengolah_data')->num_rows();
        
    }
    public function getJumlahPC(){
        return $this->db->get('tb_kendaraan')->num_rows();
        
    }
    public function getJumlahLaptop(){
        return $this->db->get('tb_kendaraan')->num_rows();
        
    }
    public function getJumlahPrinter(){
        return $this->db->get('tb_kendaraan')->num_rows();
        
    }
    public function getKualitasPC(){
        return $this->db->get('tb_kendaraan')->num_rows();
            
    }
    public function getKualitasLaptop(){
        return $this->db->get('tb_kendaraan')->num_rows();
        
    }
    public function getKualitasPrinter(){
        return $this->db->get('tb_kendaraan')->num_rows();
        
    }
    
    //AC
    public function getJumlahAC(){
        return $this->db->get('tb_ac')->num_rows();
            
    }
    
    public function getKualitasAC(){
        return $this->db->get('tb_ac')->num_rows();
            
    }
}