<?php

    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getClient($ClientEmail){
            $this->db->query("SELECT * FROM credentials WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);
            return $this->db->getSingle();
        }

        public function createClient($data){
            $this->db->query("INSERT INTO credentials (ClientEmail, pass_hash) values (:ClientEmail, :pass_hash)");
            $this->db->bind(':ClientEmail', $data['ClientEmail']);
            $this->db->bind(':pass_hash', $data['pass_hash']);


            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>