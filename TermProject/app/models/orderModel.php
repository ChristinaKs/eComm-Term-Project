<?php

    Class orderModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getOrders(){
            $this->db->query("SELECT * FROM orders");
            return $this->db->getResultSet();
        }

        public function getOrderById($OrderId){
            $this->db->query("SELECT * FROM orders WHERE OrderId = :OrderId");
            $this->db->bind(':OrderId',$OrderId);
            return $this->db->getSingle();
        }
        
        public function getOrderByClientEmail($clientEmail){

        }
        public function createOrder($data){
            $this->db->query("INSERT INTO orders (OrderId, OrderStatus, UPC, OrderTotalPrice, ClientEmail, OrderDate) values (:OrderId, :OrderStatus, :UPC, :OrderTotalPrice, :ClientEmail, :OrderDate)");
            $this->db->bind(':OrderId', $data['OrderId']); 
            $this->db->bind(':OrderStatus', $data['OrderStatus']);
            $this->db->bind(':UPC', $data['UPC']);
            $this->db->bind(':OrderTotalPrice',$data['OrderTotalPrice']);
            $this->db->bind(':ClientEmail',$data['ClientEmail']);
            $this->db->bind(':OrderDate',$data['OrderDate']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateProduct($data){
            $this->db->query("UPDATE orders SET OrderStatus=:OrderStatus WHERE OrderId=:OrderId");
            $this->db->bind(':OrderStatus', $data['OrderStatus']);
            $this->db->bind(':OrderId', $data['OrderId']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM orders WHERE OrderId=:OrderId");
            $this->db->bind('OrderId',$data['OrderId']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>