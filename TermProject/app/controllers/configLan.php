<?php

    class admini18nModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function changeLanguage() {
            if(!isset($_SESSION['lang'])){
                $_SESSION['lang'] = "en"
            }else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
                if ($_GET['lang'] == "en")
                    $_SESSION['lang'] = "en";
                else
                    $_SESSION['lang'] = "fr";
            }
            require_once "languages" . $_SESSION['lang'] . ".php"; 
        }
    }
?>