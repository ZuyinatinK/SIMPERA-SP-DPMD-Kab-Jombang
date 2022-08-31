<?php
class AC_model extends CI_Model
{
    public function getAllAC(){
        return $this->db->get('tb_ac')->result_array();    
    }

    public function getHistoryACByID($id = null)
    {
        $this->db->from('tb_history_ac');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function getAllHistory(){
        return $this->db->get('tb_history_ac')->result_array();
            
        }

    public function tambahDataAC(){
        // $config['upload_path']          = './assets_dash/images/profile/';
        // $config['allowed_types']        = 'gif|jpg|png';
        // $config['max_size']             = 10000;
        // $config['max_width']            = 10240;
        // $config['max_height']           = 10000;

        // $this->load->library('upload', $config);

        // if ( ! $this->upload->do_upload('userfile'))
        // {
        //         echo "gagal";
        // }
        // else
        // {
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

            $this->db->insert('tb_ac', $data);
    }
    public function getACByID($id){
        $this->db->from('tb_ac');
        if($id != null) {
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function hapusDataAC($id){
        
        $this->db->where('id', $id);
        $this->db->delete('tb_ac');

    }
    
    public function editDataAC($post){
       
        $params['no_registrasi'] = $post['no_registrasi'];
        $params['kode_barang'] = $post['kode_barang'];
        $params['tgl_service'] = $post['tgl_service'];
        $params['keterangan'] = $post['keterangan'];
        
        $this->db->where('id', $post['id']);
        $this->db->update('tb_ac', $params);    
    }
    
    public function tambahHistoryAC(){
       
        // $datetime = DateTime::createFromFormat('j F, Y', $this->input->post('date'));
        // return $datetime->format('Y-m-d');
        // echo $datetime;
        $data = [
                "id_ac" =>$this->input->post('id_ac', true),
                "service" =>$this->input->post('service', true),
                "history"=>$this->input->post('date', true), 
            
            ];
            
            $this->db->insert('tb_history_ac', $data);  
           
        
    }

    public function hapusHistoryAC($id){
        
        $this->db->where('id', $id);
        $this->db->delete('tb_history_ac');

    }
    
    public function editHistoryAC($post){
       
        $params['id_ac'] = $post['id_ac'];
        $params['service'] = $post['service'];
        $params['history'] = $post['history'];
        
        $this->db->where('id', $post['id']);
        $this->db->update('tb_history_ac', $params);    
    }
}