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
            $clientEmail = $_SESSION['ClientEmail'];
            $date = date('Y-m-d H:i:s');
            $data=[
                'OrderStatus'=> "Order created",
                'OrderTotalPrice' => $totalPrice,
                'ClientEmail'=> $clientEmail,
                'OrderDate' => $date
            ];
            $this->orderModel->createOrder($data);
            //make order details
            $orderDate = $this->orderModel->getOrderByDate($date);
            $orderId = $orderDate->OrderId;
            $infoFromCart = $this->cartModel->displayCart($clientEmail);
            foreach($infoFromCart as $item){
                $data =[
                    'orderId'=> $orderId,
                    'UPC' => $item->UPC,
                    'Quantity' => $item->Quantity,
                    'unitPrice' => $item->ProductPrice
                ];
                $this->orderDetailModel->createOrderDetail($data);
            }
            //clear cart
            $this->cartModel->removeFromCartByClient($clientEmail);
            $this->view('processOrder/orderIsConfirmed');
        }
    } 
?>