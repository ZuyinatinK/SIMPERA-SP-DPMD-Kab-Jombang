<?php
class Kategori_model extends CI_Model
{
    public function getAllKategoriKendaraan(){
        
    return $this->db->get('tb_kategori_kendaraan')->result_array();
        
    }
    public function getAllKategoriElektronik(){
        
    return $this->db->get('tb_kategori_elektronik')->result_array();
        
    }
    public function getAllJenisBarang(){
        
    return $this->db->get('tb_jenisbarang')->result_array();
        
    }
    public function getAllKualitas(){
        
        return $this->db->get('kualitas')->result_array();
            
        }
}
?>