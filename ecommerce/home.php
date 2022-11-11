<?php

    session_start();

    if(isset($_SESSION['email'])){

        echo "hello ".$_SESSION['email'];
    }
    else{
        echo "go back and login first";
    }
   
?>