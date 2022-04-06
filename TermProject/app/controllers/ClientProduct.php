<?php 
    class ClientProduct extends Controller{
        public function __construct(){
            $this->productsModel = $this->model('productsModel');
        }

        public function index(){
            //$this->view('Products/index');
            if(isset($_POST['viewProduct'])){
                $this->view('Products/viewProduct');
            }
        }
    }
?>