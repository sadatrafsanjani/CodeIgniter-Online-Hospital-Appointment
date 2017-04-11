<?php

class Doctor_model extends CI_Model {
    
    public function physician(){
        
        $this->db->select('*');
        $this->db->from('doctors');
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function doctor_info($ward_id){
        
        $this->db->select('*');
        $this->db->from('doctors');
        $this->db->where('ward_id',$ward_id);
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function doctor_signin($doctor_email,$doctor_password){
        
        $doctor_password = hash("SHA256",$doctor_password);
        $sql = "SELECT * FROM doctors 
                WHERE 
                    doctor_email='$doctor_email'
                AND 
                    doctor_password='$doctor_password'";
        
        $query = $this->db->query($sql);
        $result = $query->row();
        
        return $result;
    }
}

