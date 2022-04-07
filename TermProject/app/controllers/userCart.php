<?php
class userCart extends Controller{
    public function __construct()
    {
        
    }

    public function index()
    {
        $this->view('Cart/userCart');
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
