<?php

    class Addresses extends Controller{
        public function __construct(){
            $this->addressesModel = $this->model('addressesModel');
        }

        public function index(){
            $addresses = $this->addressesModel->getAddresses($_SESSION['ClientEmail']);
            $data = [
                "addresses" => $addresses
            ];
            $this->view('Addresses/viewAddresses',$data);
        }

        public function getAddresses(){
            $addresses = $this->addressesModel->getAddresses($_SESSION['ClientEmail']);
            $data = [
                "addresses" => $addresses
            ];
            $this->view('Addresses/viewAddresses',$data);
        }

        public function addAddress(){
            if(!isset($_POST['add'])){
                $this->view('Addresses/addAddress');
            }
            else{
                $data=[
                    'Address' => trim($_POST['Address']),
                    'ClientEmail' => $_SESSION['ClientEmail']
                ];

                if($this->model('addressesModel')->addAddress($data)){
                    echo 'Please wait we are adding the Address in your Address list!';
                    header('Location: /TermProject/Addresses/viewAddresses');
                }
            }
        }

        public function delete($AddressId){
               if($this->model('addressesModel')->delete($AddressId)){
                $data = [
                    "addresses" => $this->model('addressesModel')->getAddresses($_SESSION['ClientEmail'])
                ];
                $this->view('Addresses/viewAddresses',$data);
               }
        }

        public function deleteClientAddresses($ClientEmail){
            $this->model('addressesModel')->deleteClientAddresses($ClientEmail);
        }
    }

?>