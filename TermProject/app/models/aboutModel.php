<?php

    Class aboutModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function displayAbout(){
            $this->db->query("SELECT * FROM about");
            return $this->db->getResultSet();
        }
    }

?>