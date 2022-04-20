<?php
class userCart extends Controller{
    public function __construct()
    {
        $this->cartModel = $this->model('cartModel');
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

    public function changeQuantity($item_id){
        $data=[
            //'Quantity'=> /*get value from view*/
            'item_id'=> $item_id
        ];

        $this->cartModel->updateQuantity($data);
    }
}
    

?>
