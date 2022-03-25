<?php

    Class productsModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getProducts(){
            $this->db->query("SELECT * FROM products");
            return $this->db->getResultSet();
        }

        public function getProduct($UPC){
            $this->db->query("SELECT * FROM products WHERE UPC = :UPC");
            $this->db->bind(':UPC',$UPC);
            return $this->db->getSingle();
        }

        public function createProduct($data){
            $this->db->query("INSERT INTO products (ProductName, ProductDescription, ProductPrice, ProductAmount, ProductPicture) values (:ProductName, :ProductDescription, :ProductPrice, :ProductAmount, :ProductPicture)");
            $this->db->bind(':ProductName', $data['ProductName']);
            $this->db->bind(':ProductDescription', $data['ProductDescription']);
            $this->db->bind(':ProductPrice', $data['ProductPrice']);
            $this->db->bind(':ProductAmount',$data['ProductAmount']);
            $this->db->bind(':ProductPicture',$data['ProductPicture']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateProduct($data){
            $this->db->query("UPDATE products SET ProductName=:ProductName, ProductDescription=:ProductDescription, ProductPrice=:ProductPrice, ProductAmount=:ProductAmount, ProductPicture=:ProductPicture WHERE UPC=:UPC");
            $this->db->bind(':ProductName', $data['ProductName']);
            $this->db->bind(':ProductDescription', $data['ProductDescription']);
            $this->db->bind(':ProductPrice', $data['ProductPrice']);
            $this->db->bind(':ProductAmount', $data['ProductAmount']);
            $this->db->bind(':ProductPicture',$data['ProductPicture']);
            $this->db->bind('UPC',$data['UPC']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }


    }

?>