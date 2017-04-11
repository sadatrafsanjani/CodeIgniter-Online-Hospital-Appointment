<?php

class Ward_model extends CI_Model {
    
    public function facility(){
        
        $this->db->select('*');
        $this->db->from('wards');
        $this->db->where('status',1);
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
}

