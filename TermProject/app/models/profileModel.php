<?php

    class profileModel{
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

        public function updateClient($data){
            $this->db->query("UPDATE clients SET ClientFirstName=:clientFirstName, ClientLastName=:clientLastName, ClientShippingAddress=:clientShippingAddress WHERE ClientEmail=:clientEmail");
            $this->db->bind(':clientFirstName', $data['first_name']);
            $this->db->bind(':clientLastName', $data['last_name']);
            $this->db->bind(':clientShippingAddress', $data['address']);
            $this->db->bind(':clientEmail', $data['email']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updatePassword($data){
            $this->db->query("UPDATE clients SET ClientPassword=:ClientPassword WHERE ClientEmail=:ClientEmail");
            $this->db->bind(':ClientPassword', $data['client_password']);
            $this->db->bind(':ClientEmail', $data['ClientEmail']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function delete($ClientEmail){
            $this->db->query("DELETE FROM clients WHERE ClientEmail = :ClientEmail");
            $this->db->bind('ClientEmail',$ClientEmail);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>