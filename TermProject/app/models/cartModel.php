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

        public function getQuantity($item_id){
            $this->db->query("SELECT Quantity FROM cart WHERE item_id = :item_id");
            $this->db->bind(':item_id',$item_id);
            return $this->db->getSingle();
        }
        public function removeFromCart($data){
            $this->db->query("DELETE FROM cart WHERE item_id=:item_id");
            $this->db->bind(':item_id',$data['item_id']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function displayCart($clientEmail){
            $this->db->query("SELECT * FROM cart WHERE clientEmail = :clientEmail");
            $this->db->bind(':clientEmail',$clientEmail);
            return $this->db->getResultSet();
        }

        public function updateQuantity($data){
            $this->db->query("UPDATE cart SET Quantity=:Quantity WHERE item_id=:item_id");
            $this->db->bind(':Quantity', $data['Quantity']);
            $this->db->bind(':item_id',$data['item_id']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>