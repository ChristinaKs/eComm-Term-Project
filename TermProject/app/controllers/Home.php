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

        //search functionality
        if(isset($_POST['searchButton'])){
            $this->searchProduct();
        }else{
            $this->view('Home/home');
        }
        
    }

    public function searchProduct(){
            $data=[
                'Search' => trim($_POST['searchBar'])
            ];
            $searchResult = $this->productsModel->searchProduct($data);
            //var_dump($searchResult);
            $this->view('Products/searchProducts',$searchResult,$data);
    }
}
