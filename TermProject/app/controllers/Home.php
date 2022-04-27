<?php
class Home extends Controller
{
    public function __construct()
    {
        $this->productsModel = $this->model('productsModel');
        $this->cartModel = $this->model('cartModel');
    }

    public function index()
    {
        //displaying all products
        $products = $this->productsModel->getProducts();
            $data = [
                'product' => $products
            ];
        $this->view('Home/home', $data);
        
        // if(isset($_POST['random'])){
        //     $this->chooseRandomProduct();
        // }
        // if(isset($_POST['searchButton'])){
        //     $this->searchProduct();
        // }
    }

    public function RandomProduct(){
        //random product
    
            $numOfProduct = count($this->productsModel->getProducts());
            $randomProduct = rand(1,$numOfProduct);
            $productToSend = $this->productsModel->getProduct($randomProduct);
            
            $this->view('ClientSide/viewProduct',$productToSend);
        
    }
    public function searchProduct(){
            //search functionality
            if(!isset($_POST['searchBar'])){
                $products = $this->productsModel->getProducts();
                $data = [
                    'product' => $products
                ];
            $this->view('Home/home', $data);
            }else{
                $data=[
                    'Search' => trim($_POST['searchBar'])
                ];
                var_dump($data);
                $searchResult = $this->productsModel->searchProduct($data);
                $this->view('ClientSide/searchProducts',$searchResult);
            }
            

            
    }

    public function viewProduct($UPC){
        $product = $this->productsModel->getProduct($UPC);
        $this->view('ClientSide/viewProduct',$product);
    }

    public function AddCart($UPC){
        if(!isLoggedIn()){
            //can only start adding to cart when signed in
            header('Location: /TermProject/Login/');
        }else{
            $product = $this->productsModel->getProduct($UPC);
            $data=[
                'ClientEmail' => $_SESSION['ClientEmail'],
                'UPC' => $product->UPC,
                'ProductName' => $product->ProductName,
                'ProductPrice' => $product->ProductPrice,
                'Quantity' => 1,
                'picture' => $product->picture
            ];

            if($this->cartModel->addCart($data)){
                $cart = $this->cartModel->displayCart($_SESSION['ClientEmail']);
                $this->view('Cart/userCart',$cart);
            }
        }
        
    }

 
}
