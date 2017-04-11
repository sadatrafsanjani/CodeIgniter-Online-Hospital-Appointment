<?php

class Administrator_Model extends CI_Model {
    
    public function admin_signin($admin_email,$admin_password){
        
        $password = hash("SHA256",$admin_password);
        $sql = "SELECT * FROM admins 
                WHERE 
                    admin_email='$admin_email'
                AND 
                    admin_password='$password'";
        
        $query = $this->db->query($sql);
        $result = $query->row();
        
        return $result;
    }
}

