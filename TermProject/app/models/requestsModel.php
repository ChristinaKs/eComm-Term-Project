<?php

    class requestsModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getRequest($RequestId){
            $this->db->query("SELECT * FROM requests WHERE RequestId = :RequestId");
            $this->db->bind(':RequestId',$RequestId);
            return $this->db->getSingle();
        }

        public function getRequests(){
            $this->db->query("SELECT * FROM requests");
            return $this->db->getResultSet();
        }

        public function createRequest($data){
            $this->db->query("INSERT INTO requests (RequestTitle, RequestText, ClientEmail) values (:RequestTitle,
                        :RequestText, :ClientEmail)");
            $this->db->bind(':RequestTitle', $data['RequestTitle']);
            $this->db->bind(':RequestText', $data['RequestText']);
            $this->db->bind(':ClientEmail', $data['ClientEmail']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function deleteRequests($ClientEmail){
            $this->db->query("DELETE FROM requests WHERE ClientEmail = :ClientEmail");
            $this->db->bind(':ClientEmail',$ClientEmail);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function deleteRequest($RequestId){
            $this->db->query("DELETE FROM requests WHERE RequestId = :RequestId");
            $this->db->bind(':RequestId',$RequestId);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>