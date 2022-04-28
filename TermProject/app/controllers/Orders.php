<?php

    class Orders extends Controller{
        public function __construct(){
            $this->orderModel = $this->model('orderModel');
            if(!isAdminLoggedIn()){
                header('Location: /TermProject/adminLogin');
            }
        }

        public function index(){
            $this->view('Orders/getOrders');
        }

        public function getOrders(){
            $orders = $this->orderModel->getOrders();
            $data = [
                "orders" => $orders
            ];
            $this->view('Orders/getOrders',$data);
        }

        // public function update($UPC){
        //     $product = $this->productsModel->getProduct($UPC);
        //     if(!isset($_POST['update'])){
        //         $this->view('Products/updateProduct',$product);
        //     }
        //     else{
        //         $filename= $this->imageUpload();
        //         $data=[
        //             'ProductName' => trim($_POST['ProductName']),
        //             'ProductDescription' => trim($_POST['ProductDescription']),
        //             'ProductPrice' => trim($_POST['ProductPrice']),
        //             'ProductAmount' => trim($_POST['ProductAmount']),
        //             'picture' => $filename,
        //             'UPC' => $UPC
        //         ];
        //         if($this->productsModel->updateProduct($data)){
        //             echo 'Please wait we are upating the Product for you!';
        //             echo '<meta http-equiv="Refresh" content="2; url=/TermProject/Products/getProducts">';
        //         }      
        //     }
        // }
    }

?>