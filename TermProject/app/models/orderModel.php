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
            $this->db->bind(':OrderId', $OrderId);
            return $this->db->getSingle();
        }

        public function getOrderByDate($date){
            $this->db->query("SELECT * FROM orders WHERE OrderDate = :OrderDate");
            $this->db->bind(':OrderDate',$date);
            return $this->db->getSingle();
        }
        
        public function getOrdersByClientEmail($clientEmail){
            $this->db->query("SELECT * FROM orders WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$clientEmail);
            return $this->db->getResultSet();
        }

        public function createOrder($data){
            $this->db->query("INSERT INTO orders (OrderStatus,OrderTotalPrice, ClientEmail, OrderDate) values (:OrderId, :OrderStatus, :UPC, :OrderTotalPrice, :ClientEmail, :OrderDate)");
            $this->db->bind(':OrderStatus', $data['OrderStatus']);
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

        public function updateOrderStatus($data){
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