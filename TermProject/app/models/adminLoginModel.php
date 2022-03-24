<?php

    class adminLoginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        //Done
        public function getAdmin($AdminEmail){
            $this->db->query("SELECT * FROM admin WHERE AdminEmail = :AdminEmail");
            $this->db->bind(':AdminEmail',$AdminEmail);
            return $this->db->getSingle();
        }
    }
?>
