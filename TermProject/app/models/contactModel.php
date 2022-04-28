<?php

    Class contactModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function displayContact(){
            $this->db->query("SELECT * FROM contact");
            return $this->db->getResultSet();
        }

        public function updateContact($data){
            $this->db->query("UPDATE contact SET Instagram=:Instagram, Twitter=:Twitter, Facebook=:Facebook WHERE contactID=:contactID");
            $this->db->bind(':Instagram', $data['Instagram']);
            $this->db->bind(':Twitter', $data['Twitter']);
            $this->db->bind(':Facebook', $data['Facebook']);
            $this->db->bind(':contactID', '1');
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>