<?php

    class Products extends Controller{
        public function __construct(){
            $this->productsModel = $this->model('productsModel');
            if(!isAdminLoggedIn()){
                header('Location: /TermProject/adminLogin');
            }
        }

        public function index(){
            $this->view('Products/index');
            if(isset($_POST['viewProduct'])){
                $this->view('Products/viewProduct');
            }
        }

        public function getUsers(){
            $products = $this->productsModel->getProducts();
            $data = [
                "products" => $products
            ];
            $this->view('Products/getProducts',$data);
        }

        public function createProduct(){
            if(!isset($_POST['add'])){
                $this->view('Products/createUsers');
            }
            else{
                $filename= $this->imageUpload();
                $data=[
                    'ProductName' => trim($_POST['ProductName']),
                    'ProductDescription' => trim($_POST['ProductDescription']),
                    'ProductPrice' => trim($_POST['ProductPrice']),
                    'ProductAmount' => trim($_POST['ProductAmount']),
                    'picture' => $filename
                ];
               
                if($this->productsModel->createProduct($data)){
                    echo 'Please wait we are creating the product for you!';
                    header('Location: /TermProject/Products/getProducts');
                }
            }
        }

        public function imageUpload(){
            //default value for the picture
            $filename=false;
            
            //save the file that gets sent as a picture
            $file = $_FILES['picture'];
            
            $acceptedTypes = ['image/jpeg'=>'jpg',
                'image/gif'=>'gif',
                'image/png'=>'png'];
            //validate the file
            
            if(empty($file['tmp_name']))
                return false;

            $fileData = getimagesize($file['tmp_name']);

            if($fileData!=false && 
                in_array($fileData['mime'],array_keys($acceptedTypes))){

                //save the file to its permanent location
                    
                $folder = dirname(APPROOT).'/public/img';
                $filename = uniqid() . '.' . $acceptedTypes[$fileData['mime']];
                move_uploaded_file($file['tmp_name'], "$folder/$filename");
            }
            return $filename;
        }

        public function details($UPC){
            $UPC = $this->productsModel->getProduct($UPC);
                $this->view('Products/details',$UPC);
        }

       
        public function update($UPC){
            $products = $this->productsModel->getProduct($UPC);
            if(!isset($_POST['update'])){
                $this->view('Products/updateProduct',$UPC);
            }
            else{
                $filename= $this->imageUpload();
                $data=[
                    'ProductName' => trim($_POST['ProductName']),
                    'ProductDescription' => trim($_POST['ProductDescription']),
                    'ProductPrice' => trim($_POST['ProductPrice']),
                    'ProductAmount' => trim($_POST['ProductAmount']),
                    'picture' => $filename,
                    'UPC' => $UPC
                ];
                if($this->productsModel->updateProduct($data)){
                    echo 'Please wait we are upating the user for you!';
                    echo '<meta http-equiv="Refresh" content="2; url=/TermProject/Products/getProducts">';
                }
                
            }
        }
    }

?>