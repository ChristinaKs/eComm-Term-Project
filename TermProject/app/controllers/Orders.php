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
            $order = $this->orderModel->getOrderById($OrderId);
            if(!isset($_POST['OrderStatusCB'])){
               

                $data=[
                    'OrderStatus'=> "",
                    'OrderId' => $OrderId
                ];
                if($this->orderModel->updateOrderStatus($data)){
                    //echo 'Please wait we are upating the Order Status for you!';
                    //echo '<meta http-equiv="Refresh" content="0; url=/TermProject/Orders/getOrders">';
                    header('Location: /TermProject/Orders/getOrders');

                }    
            }
            else{
              
                $data=[

                    'OrderStatus'=> "Shipped",
                    'OrderId' => $OrderId
                ];
                if($this->orderModel->updateOrderStatus($data)){
                    //echo 'Please wait we are upating the Order Status for you!';
                   // echo '<meta http-equiv="Refresh" content="2; url=/TermProject/Orders/getOrders">';
                    header('Location: /TermProject/Orders/getOrders');

                }      
            }
        }
    }

?>