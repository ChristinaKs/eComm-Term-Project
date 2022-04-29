<?php

    class cardsModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getCards($ClientEmail){
            $this->db->query("SELECT * FROM cards WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);
            return $this->db->getResultSet();
        }

        public function addCard($data){
            $this->db->query("INSERT INTO cards (CardNumber, CardName, ClientEmail) values (:ClientCardNumber, 
                    :ClientCardName, :ClientEmail)");
            $this->db->bind(':ClientCardNumber', $data['ClientCardNumber']);
            $this->db->bind(':ClientCardName', $data['ClientCardName']);
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

        public function deleteClientCards($ClientEmail){
            $this->db->query("DELETE FROM cards WHERE ClientEmail = :ClientEmail");
            $this->db->bind('ClientEmail',$ClientEmail);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>