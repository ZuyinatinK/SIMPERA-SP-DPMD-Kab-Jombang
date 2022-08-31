<?php
class Kendaraan_model extends CI_Model
{
    public function getAllKendaraan(){
        return $this->db->get('tb_kendaraan')->result_array();
        
    }
    public function getAllHistory(){
        return $this->db->get('tb_history_kendaraan')->result_array();
            
    }
    public function getJumlahKendaraan(){
        return $this->db->get('tb_kendaraan')->num_rows();
            
    }
    public function getAllService(){
        return $this->db->get('tb_service_kendaraan')->result_array();
            
    }

    public function tambahDataKendaraan(){
       
            $data = [
                "no_registrasi" =>$this->input->post('no_registrasi', true), 
                "kode_barang" =>$this->input->post('kode_barang', true),
                "no_polisi"=>$this->input->post('no_polisi', true),
                "user"=>$this->input->post('user', true), 
                "jenis_kendaraan" =>$this->input->post('jenis_kendaraan', true),
                "tgl_masuk" =>$this->input->post('tgl_masuk', true),
                "tgl_service" =>$this->input->post('tgl_service', true), 
                "keterangan" => $this->input->post('keterangan', true)
            ];

            $this->db->insert('tb_kendaraan', $data);  
    }

    public function editDataKendaraan($post){
       
        $params['no_registrasi'] = $post['no_registrasi'];
        $params['kode_barang'] = $post['kode_barang'];
        $params['tgl_service'] = $post['tgl_service'];
        $params['keterangan'] = $post['keterangan'];
        
        $this->db->where('id', $post['id']);
        $this->db->update('tb_kendaraan', $params);    
    }
    
    public function editHistoryKendaraan($post){
       
        $params['id_kendaraan'] = $post['id_kendaraan'];
        $params['id_service'] = $post['id_service'];
        $params['history'] = $post['history'];
        
        $this->db->where('id', $post['id']);
        $this->db->update('tb_history_kendaraan', $params);    
    }

    public function getKendaraanByID($id = null)
    {
        $this->db->from('tb_kendaraan');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function getHistoryKendaraanByID($id = null)
    {
        $this->db->from('tb_history_kendaraan');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function hapusDataKendaraan($id){
        
        $this->db->where('id', $id);
        $this->db->delete('tb_kendaraan');

    }
    public function tambahHistoryKendaraan(){
       
        // $datetime = DateTime::createFromFormat('j F, Y', $this->input->post('date'));
        // return $datetime->format('Y-m-d');
        // echo $datetime;
        $data = [
                "id_kendaraan" =>$this->input->post('id_kendaraan', true), 
                "id_service"=>$this->input->post('id_service', true), 
                "history"=>$this->input->post('date', true), 
            
            ];
            
            $this->db->insert('tb_history_kendaraan', $data);  
            // echo $this->input->post('date', true);
            // redirect('tabelKendaraan');
           
        
    }

    public function hapusHistoryKendaraan($id){
        
        $this->db->where('id', $id);
        $this->db->delete('tb_history_kendaraan');

    }
}