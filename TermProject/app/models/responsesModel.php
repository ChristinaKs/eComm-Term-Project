<?php

    class responsesModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getResponse($ResponseId){
            $this->db->query("SELECT * FROM responses WHERE ResponseId = :ResponseId");
            $this->db->bind(':ResponseId',$ResponseId);
            return $this->db->getSingle();
        }

        public function getResponses($ClientEmail){
            $this->db->query("SELECT * FROM responses WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);
            return $this->db->getSingle();
        }

        public function createResponse($data){
            $this->db->query("INSERT INTO responses (ResponseTitle, ResponseText, RequestId, ClientEmail) values (:ResponseTitle,
                        :ResponseText, :RequestId, :ClientEmail)");
            $this->db->bind(':ResponseTitle', $data['ResponseTitle']);
            $this->db->bind(':ResponseText', $data['ResponseText']);
            $this->db->bind(':RequestId', $data['RequestId']);
            $this->db->bind(':ClientEmail', $data['ClientEmail']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function deleteResponses($ClientEmail){
            $this->db->query("DELETE FROM responses WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function deleteResponse($ResponseId){
            $this->db->query("DELETE FROM responses WHERE ResponseId = :ResponseId");
            $this->db->bind(':ResponseId',$ResponseId);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>