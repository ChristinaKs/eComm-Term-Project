<?php

    class Cards extends Controller{
        public function __construct(){
            $this->cardsModel = $this->model('cardsModel');
        }

        public function index(){
            $cards = $this->cardsModel->getCards($_SESSION['ClientEmail']);
            $data = [
                "cards" => $cards
            ];
            $this->view('Cards/viewCards',$data);
        }

        public function getCards(){
            $cards = $this->cardsModel->getCards($_SESSION['ClientEmail']);
            $data = [
                "cards" => $cards
            ];
            $this->view('Cards/viewCards',$data);
        }

        public function addCard(){
            if(!isset($_POST['add'])){
                $this->view('Cards/addCard');
            }
            else{
                $data=[
                    'CardNumber' => trim($_POST['CardNumber']),
                    'CardName' => trim($_POST['CardName']),
                    'ClientEmail' => $_SESSION['ClientEmail']
                ];

                if($this->model('cardsModel')->addCard($data)){
                    echo 'Please wait we are adding the card in your card list!';
                    header('Location: /TermProject/Cards/viewCards');
                }
            }
        }

        public function delete($CardId){
               if($this->model('cardsModel')->delete($CardId)){
                $data = [
                    "cards" => $this->model('cardsModel')->getCards()
                ];
                $this->view('Cards/viewCards',$data);
               }
        }
    }

?>