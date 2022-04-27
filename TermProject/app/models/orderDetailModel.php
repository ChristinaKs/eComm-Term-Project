<?php

    Class orderDetailModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getOrderDetails(){
            $this->db->query("SELECT * FROM order_detail");
            return $this->db->getResultSet();
        }

        public function getOrderDetailByItemId($OrderDetailId){
            $this->db->query("SELECT * FROM order_detail WHERE order_item_id = :order_item_id");
            $this->db->bind(':order_item_id',$OrderDetailId);
            return $this->db->getSingle();
        }
        public function getOrdersByOrderId($orderId){
            $this->db->query("SELECT * FROM order_detail WHERE orderId = :orderId");
            $this->db->bind(':orderId',$orderId);
            return $this->db->getResultSet();
        }
        public function createOrderDetail($data){
            $this->db->query("INSERT INTO order_detail (orderId,UPC,Quantity,unitPrice) values (:orderId,:UPC,:Quantity,:unitPrice)");
            $this->db->bind(':orderId', $data['orderId']);
            $this->db->bind(':UPC',$data['UPC']);
            $this->db->bind(':Quantity',$data['Quantity']);
            $this->db->bind(':unitPrice',$data['unitPrice']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function delete($data){
            $this->db->query("DELETE FROM order_detail WHERE order_item_id=:order_item_id");
            $this->db->bind(':order_item_id',$data['order_item_id']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>