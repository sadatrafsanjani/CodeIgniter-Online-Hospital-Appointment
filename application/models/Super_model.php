<?php

class Super_Model extends CI_Model {
    
    public function ward_info($ward_id){
        
        $this->db->select('*');
        $this->db->from('wards');
        $this->db->where('ward_id',$ward_id);
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function save_doctor_info($data){
        
        $this->db->insert('doctors',$data);
    }
    
    
    public function doctor_delete_info($doctor_id){
        
        $this->db->where('doctor_id',$doctor_id);
        $this->db->delete('doctors');
    }
    
    public function save_ward_info($data){
        
        $this->db->insert('wards',$data);
    }
    
    public function ward_delete_info($ward_id){
        
        $this->db->where('ward_id',$ward_id);
        $this->db->delete('wards');
    }
    
    public function patient_info(){
        
        $this->db->select('*');
        $this->db->from('patients');
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function patient_delete_info($patient_id){
        
        $this->db->where('patient_id',$patient_id);
        $this->db->delete('patients');
    }
}

