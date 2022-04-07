<?php

    class cartModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function addCart($data){
            $this->db->query("INSERT INTO cart (ClientEmail, UPC, ProductName, ProductPrice, Quantity) values (:ClientEmail,
                        :UPC, :ProductName, :ProductPrice, :Quantity)");
            $this->db->bind(':ClientEmail', $data['ClientEmail']);
            $this->db->bind(':UPC', $data['UPC']);
            $this->db->bind(':ProductName', $data['ProductName']);
            $this->db->bind(':ProductPrice', $data['ProductPrice']);
            $this->db->bind(':Quantity', $data['Quantity']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function removeFromCart($data){
            $this->db->query("DELETE FROM cart WHERE UPC=:UPC AND WHERE clientEmail = :clientEmail");
            $this->db->bind(':UPC',$data['UPC']);
            $this->db->bind(':clientEmail',$data['clientEmail']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>