<?php

    class Responses extends Controller{
        public function __construct(){
            $this->responsesModel = $this->model('responsesModel');
        }

        public function index(){
            $responses = $this->responsesModel->getResponses($_SESSION['ClientEmail']);
            $data = [
                "responses" => $responses
            ];
            $this->view('responses/viewResponses',$data);
        }

        public function getResponses(){
            $responses = $this->responsesModel->getResponses($_SESSION['ClientEmail']);
            $data = [
                "responses" => $responses
            ];
            $this->view('responses/viewResponses',$data);
        }

        public function addResponse($request){
            if(!isset($_POST['SendResponse'])){
                $this->view('Responses/sendResponse');
            }
            else{
                $data=[
                    'ResponseTitle' => trim($_POST['ResponseTitle']),
                    'ResponseText' => trim($_POST['ResponseText']),
                    'RequestId' => $request['RequestId'],
                    'ClientEmail' => $request['ClientEmail']
                ];

                if($this->model('responsesModel')->addResponse($data)){
                    //echo 'Please wait we are adding the Address in your Address list!';
                    header('Location: /TermProject/responses/viewresponses');
                }
            }
        }

        public function delete($ResponseId){
               if($this->model('responsesModel')->delete($ResponseId)){
                $data = [
                    "responses" => $this->model('responsesModel')->getResponses($_SESSION['ClientEmail'])
                ];
                $this->view('responses/viewResponses',$data);
               }
        }

        public function deleteClientresponses($ClientEmail){
            $this->model('responsesModel')->deleteResponses($ClientEmail);
        }
    }

?>