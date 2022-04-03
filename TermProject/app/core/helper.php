<?php

    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['ClientEmail'])){
          return true;
        } else {
          return false;
        }
      }

?>