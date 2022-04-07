<?php
class userCart extends Controller{
    public function __construct()
    {
        $this->cartModel = $this->model('cartModel');
    }

    public function index()
    {
        $this->view('Cart/userCart');
    }

    public function displayCart(){
        if(!isLoggedIn()){
            header('Location: /TermProject/Login/');
        }else{
            $clientEmail = $_SESSION['ClientEmail'];
            $this->cartModel->displayCart($clientEmail);
            $this->view('Cart/userCart');
        }
        
    }

    public function removeItem($UPC){
        $data=[
            'UPC'=> $UPC
        ];

        if($this->cartModel->removeFromCart($data)){
            echo 'Please wait we are upating the user for you!';
            echo '<meta http-equiv="Refresh" content="2; url=/TermProject/userCart">';
        }
    }
}
    

?>
