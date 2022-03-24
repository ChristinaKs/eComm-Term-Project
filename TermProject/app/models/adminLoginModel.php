<?php

    class adminLoginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        //TODO
        public function getUser($username){
            $this->db->query("SELECT * FROM credentials WHERE username = :username");
            $this->db->bind(':username',$username);
            return $this->db->getSingle();
        }
    }
?>