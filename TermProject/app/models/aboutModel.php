<?php

    Class aboutModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function displayAbout(){
            $this->db->query("SELECT * FROM about");
            return $this->db->getResultSet();
        }

        public function updateAbout($data){
            $this->db->query("UPDATE about SET firstparagraph=:firstparagraph, secondparagraph=:secondparagraph, thirdparagraph=:thirdparagraph, WHERE firstparagraph=:firstparagraph");
            $this->db->bind(':firstparagraph', $data['firstparagraph']);
            $this->db->bind(':secondparagraph', $data['secondparagraph']);
            $this->db->bind(':thirdparagraph', $data['thirdparagraph']);
            $this->db->bind('firstparagraph',$data['firstparagraph']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>