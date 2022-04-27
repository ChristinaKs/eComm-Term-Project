<?php
class userCart extends Controller{
    public function __construct()
    {
        $this->cartModel = $this->model('cartModel');
        $this->cardModel = $this->model('cardsModel');
        $this->addressModel = $this->model('addressesModel');
    }

    public function index()
    {
        
    }

    public function displayCart(){
        if(!isLoggedIn()){
            header('Location: /TermProject/Login/');
        }else{
            $clientEmail = $_SESSION['ClientEmail'];
            $cart = $this->cartModel->displayCart($clientEmail);
            $this->view('Cart/userCart',$cart);
        }
        
    }

    public function removeItem($itemID){
        $data=[
            'item_id'=> $itemID
        ];

        if($this->cartModel->removeFromCart($data)){
            echo 'We are deleting the item for you!';
            echo '<meta http-equiv="Refresh" content="1; url=/TermProject/userCart/displayCart">';
        }
    }
    public function addQuantity($item_id){
        $quantity = $this->cartModel->getQuantity($item_id);
        $temp= $quantity->Quantity;
        $quantityVal = intval( $temp );
        $data=[
            'Quantity'=> ++$quantityVal,
            'item_id'=> $item_id
        ];
        if($this->cartModel->updateQuantity($data)){
            echo '<meta http-equiv="Refresh" content="1; url=/TermProject/userCart/displayCart">';
        }
    }
    public function decreaseQuantity($item_id){
        $quantity = $this->cartModel->getQuantity($item_id);
        $temp= $quantity->Quantity;
        $quantityVal = intval($temp);
        $data=[
            'Quantity'=> --$quantityVal,
            'item_id'=> $item_id
        ];
        if($this->cartModel->updateQuantity($data)){
            echo '<meta http-equiv="Refresh" content="1; url=/TermProject/userCart/displayCart">';
        }
    }

    public function confirmOrder(){
        $clientEmail = $_SESSION['ClientEmail'];
        $cart = $this->cartModel->displayCart($clientEmail);
        //get card
        $card = $this->cardModel->getCards($clientEmail);
        //get address
        $address = $this->addressModel->getAddresses($clientEmail);
        //pass it onto the view
        $this->view('processOrder/confirmOrder',$cart,$card,$address);
    }
}
    

?>