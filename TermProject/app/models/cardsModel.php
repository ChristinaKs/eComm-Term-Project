<?php

    class cardsModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getCards($ClientEmail){
            $this->db->query("SELECT * FROM cards WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);
            return $this->db->getSingle();
        }

        public function addCard($data){
            $this->db->query("INSERT INTO cards (CardNumber, CardName, ClientEmail) values (:CardNumber, 
                    :CardName, :ClientEmail)");
            $this->db->bind(':CardNumber', $data['CardNumber']);
            $this->db->bind(':CardName', $data['CardName']);
            $this->db->bind(':ClientEmail', $data['ClientEmail']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function delete($CardId){
            $this->db->query("DELETE FROM cards WHERE CardId = :CardId");
            $this->db->bind('CardId',$CardId);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>