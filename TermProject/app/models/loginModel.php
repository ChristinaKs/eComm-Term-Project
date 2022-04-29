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

        public function getClients(){
            $this->db->query("SELECT * FROM clients");
            return $this->db->getResultSet();
        }

        public function createClient($data){
            $this->db->query("INSERT INTO clients (ClientFirstName, ClientLastName, ClientEmail, ClientPassword) values (:ClientFirstName,
                        :ClientLastName, :ClientEmail, :ClientPassword); INSERT INTO addresses (Address, Client) VALUES (:Address, :ClientEmail); INSERT INTO (CardNumber, 
                        CardName, ClientEmail) VALUES (:ClientCardNumber, :ClientCardName, :ClientEmail)");
            $this->db->bind(':ClientFirstName', $data['ClientFirstName']);
            $this->db->bind(':ClientLastName', $data['ClientLastName']);
            $this->db->bind(':Address', $data['ClientShippingAddress']);
            $this->db->bind(':ClientPassword', $data['ClientPassword']);
            $this->db->bind(':ClientEmail', $data['ClientEmail']);
            $this->db->bind(':ClientCardNumber', $data['ClientCardNumber']);
            $this->db->bind(':ClientCardName', $data['ClientCardName']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>
