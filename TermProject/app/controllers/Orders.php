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

        public function updateOrderStatus($OrderId){
            $order = $this->orderModel->getOrder($OrderId);
            if(!isset($_POST['OrderStatusCB'])){
                $data=[
                    'OrderStatus'=> ""
                ];
            }
            else{
                $data=[
                    'OrderStatus'=> "Shipped"
                ];
                if($this->productsModel->updateProduct($data)){
                    echo 'Please wait we are upating the Order Status for you!';
                    echo '<meta http-equiv="Refresh" content="0.1; url=/TermProject/Orders/getOrders">';
                }      
            }
        }
    }

?>