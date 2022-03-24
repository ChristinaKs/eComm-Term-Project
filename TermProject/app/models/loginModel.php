<?php

    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getClient($ClientEmail){
            $this->db->query("SELECT * FROM clients WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);
            return $this->db->getSingle();
        }

        public function createClient($data){
            $this->db->query("INSERT INTO clients (ClientFirstName, ClientLastName, ClientShippingAddress, ClientEmail, ClientPassword) values (:ClientFirstName,
                        :ClientLastName, :ClientShippingAddress, :ClientEmail, :ClientPassword)");
            $this->db->bind(':ClientFirstName', $data['ClientFirstName']);
            $this->db->bind(':ClientLastName', $data['ClientLastName']);
            $this->db->bind(':ClientShippingAddress', $data['ClientShippingAddress']);
            $this->db->bind(':ClientPassword', $data['ClientPassword']);
            $this->db->bind(':ClientEmail', $data['ClientEmail']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>
