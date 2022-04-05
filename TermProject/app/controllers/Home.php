<?php
class Home extends Controller
{
    public function __construct()
    {
        $this->productsModel = $this->model('productsModel');
    }

    public function index()
    {
        //displaying all products
        $products = $this->productsModel->getProducts();
            $data = [
                'product' => $products
            ];
        $this->view('Home/home', $data);
        
        if(isset($_POST['random'])){
            $this->chooseRandomProduct();
        }
        if(isset($_POST['searchButton'])){
            $this->searchProduct();
        }
    }

    public function chooseRandomProduct(){
        //random product
        if(!isset($_POST['random'])){
            $this->view('Home/home');
        }else{
            $numOfProduct = count($this->productsModel->getProducts());
            $randomProduct = rand(1,$numOfProduct);
            $productToSend = $this->productsModel->getProduct($randomProduct);
            $this->view('Products/viewProduct',$productToSend);
        } 
    }
    public function searchProduct(){
            //search functionality
            if(!isset($_POST['searchButton'])){
                $this->view('Home/home');
            }else{
                $data=[
                    'Search' => trim($_POST['searchBar'])
                ];
                $searchResult = $this->productsModel->searchProduct($data);
                //var_dump($searchResult);
                $this->view('Products/searchProducts',$searchResult,$data);
            }

            
    }
}
