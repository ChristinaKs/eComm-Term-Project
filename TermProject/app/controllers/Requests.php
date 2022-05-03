<?php

    class Requests extends Controller{
        public function __construct(){
            $this->requestsModel = $this->model('requestsModel');
        }

        public function index(){
            $requests = $this->requestsModel->getRequests($_SESSION['ClientEmail']);
            $data = [
                "requests" => $requests
            ];
            $this->view('requests/viewRequests',$data);
        }

        public function getRequests(){
            $requests = $this->requestsModel->getRequests();
            $data = [
                "requests" => $requests
            ];
            $this->view('requests/viewRequests',$data);
        }

        public function addRequest(){
            if(!isset($_POST['SendMsg'])){
                $this->view('Requests/sendRequest');
            }
            else{
                $data=[
                    'RequestTitle' => trim($_POST['RequestTitle']),
                    'RequestText' => trim($_POST['RequestText']),
                    'ClientEmail' => $_SESSION['ClientEmail']
                ];

                if($this->requestsModel->createRequest($data)){
                    $this->view('Contact/contact');
                }
            }
        }

        public function delete($RequestId){
               if($this->model('requestsModel')->delete($RequestId)){
                $data = [
                    "requests" => $this->model('requestsModel')->getRequests($_SESSION['ClientEmail'])
                ];
                $this->view('requests/viewRequests',$data);
               }
        }

        public function deleteClientRequests($ClientEmail){
            $this->model('requestsModel')->deleteRequests($ClientEmail);
        }
    }

?>