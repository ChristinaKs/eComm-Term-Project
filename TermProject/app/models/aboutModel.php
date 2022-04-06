<?php

    Class aboutModel{
        public function displayAbout(){
            $this->db->query("SELECT * FROM about");
            return $this->db->getResultSet();
        }
    }

?>