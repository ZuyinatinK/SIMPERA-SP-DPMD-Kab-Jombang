<?php
class Elektronik_model extends CI_Model
{
    public function getAllElektronik(){
    return $this->db->get('tb_pengolah_data')->result_array();
    }
    
    public function getHistoryPengolahDataByID($id = null)
    {
        $this->db->from('tb_history_elektronik');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
        
    public function getAllHistory(){
    return $this->db->get('tb_history_elektronik')->result_array();
        
    }

    public function tambahDataElektronik(){
       
            $no_registrasi = $this->input->post('no_registrasi', true);
            $kode_barang = $this->input->post('kode_barang', true);
            $user = $this->input->post('user', true);
            $jenis_barang = $this->input->post('jenis_barang', true);
            $tgl_masuk = $this->input->post('tgl_masuk', true);
            $tgl_service = $this->input->post('tgl_service', true); 
            $keterangan = $this->input->post('keterangan', true);

            $data = [
                "no_registrasi" => $no_registrasi,
                "kode_barang" => $kode_barang,
                "jenis_barang" => $jenis_barang,
                "user" => $user,
                "tgl_masuk" =>$tgl_masuk,
                "tgl_service" =>$tgl_service,
                "keterangan" => $keterangan
            ];

            $this->db->insert('tb_pengolah_data', $data);  
           
        
    }
    
    public function editDataPengolahData($post){
       
        $params['no_registrasi'] = $post['no_registrasi'];
        $params['kode_barang'] = $post['kode_barang'];
        $params['tgl_service'] = $post['tgl_service'];
        $params['keterangan'] = $post['keterangan'];
        
        $this->db->where('id', $post['id']);
        $this->db->update('tb_pengolah_data', $params);    
    }
    
    public function getPengolahDataByID($id){
        $this->db->from('tb_pengolah_data');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function hapusDataElektronik($id){
        
        $this->db->where('id', $id);
        $this->db->delete('tb_pengolah_data');

    }
    
    
    public function tambahHistoryElektronik(){
       
        // $datetime = DateTime::createFromFormat('j F, Y', $this->input->post('date'));
        // return $datetime->format('Y-m-d');
        // echo $datetime;
        $data = [
                "id_elektronik" =>$this->input->post('id_elektronik', true),
                "service" =>$this->input->post('service', true), 
                "history"=>$this->input->post('date', true), 
            
            ];
            
            $this->db->insert('tb_history_elektronik', $data);  
           
        
    }
    public function getHistoryElektronikByID($id){
        return $this->db->get_where('tb_history_elektronik',['id'=> $id])->row_array();
    }

    public function hapusHistoryElektronik($id){
        
        $this->db->where('id', $id);
        $this->db->delete('tb_history_elektronik');

    }
    
    public function editHistoryPengolahData($post){
       
        $params['id_elektronik'] = $post['id_elektronik'];
        $params['service'] = $post['service'];
        $params['history'] = $post['history'];
        
        $this->db->where('id', $post['id']);
        $this->db->update('tb_history_elektronik', $params);    
    }
}