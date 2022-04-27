<?php
    class PaymentProcess extends Controller{

        public function __construct()
        {
            $this->orderModel = $this->model('orderModel');
            $this->orderDetailModel = $this->model('orderDetailModel');
            $this->cartModel = $this->model('cartModel');
        }
        public function index()
        {
            $this->view('processOrder/orderIsConfirmed');
        } 

        public function confirmOrder($totalPrice){
            //check if user put values for card and address, if it did create order
            $clientEmail = $_SESSION['ClientEmail'];
            $data=[
                'OrderStatus'=> "Order created",
                'OrderTotalPrice' => $totalPrice,
                'ClientEmail'=> $clientEmail,
                'OrderDate' => date('Y-m-d H:i:s')
            ];
            $this->orderModel->createOrder($data);
            //make order details
            $orderDate = $this->orderModel->getOrderByDate(date('Y-m-d H:i:s'));
            $orderId = $orderDate->OrderId;
            $infoFromCart = $this->cartModel->displayCart($clientEmail);
            foreach($infoFromCart as $item){
                $data =[
                    'orderId'=> $orderId,
                    'UPC' => $infoFromCart->UPC,
                    'Quantity' => $infoFromCart->Quantity,
                    'unitPrice' => $infoFromCart->ProductPrice
                ];
                $this->orderDetailModel->createOrderDetail($data);
            }
            //clear cart
            $this->cartModel->removeFromCartByClient($clientEmail);
            $this->view('processOrder/orderIsConfirmed');
        }
    } 
?>