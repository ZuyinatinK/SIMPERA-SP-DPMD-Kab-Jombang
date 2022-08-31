<?php 
    class M_asset extends CI_Model
    {
        public function get_data_alarm_pengolah_data()
        {
            $this->db->from('view_alarm_pengolah_data');
            $query = $this->db->get();
            return $query;

        }

        public function get_data_alarm_ac()
        {
            $this->db->from('view_alarm_ac');
            $query = $this->db->get();
            return $query;

        }


        public function get_data_alarm_kendaraan()
        {
            $this->db->from('view_alarm_kendaraan');
            $query = $this->db->get();
            return $query;

        }
    }
    
?>