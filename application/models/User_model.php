<?php
class User_model extends CI_Model
{
    public function getUserByID(){
        $id = 1;
        return $this->db->get_where('user',['role_id'=> $id])->result_array();
    }
    public function getUserByID2(){
        $id = 0;
        return $this->db->get_where('user',['role_id'=> $id])->result_array();
    }
}