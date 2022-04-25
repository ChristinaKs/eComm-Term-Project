<?php

    class addressesModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getAddresses($ClientEmail){
            $this->db->query("SELECT * FROM addresses WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);
            return $this->db->getResultSet();
        }

        public function addAddress($data){
            $this->db->query("INSERT INTO addresses (Address, ClientEmail) values (:Addresses, :ClientEmail)");
            $this->db->bind(':Addresses', $data['Address']);
            $this->db->bind(':ClientEmail', $data['ClientEmail']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function delete($AddressId){
            $this->db->query("DELETE FROM addresses WHERE AddressId = :AddressId");
            $this->db->bind('AddressId',$AddressId);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>