<?php


    $connect=mysqli_connect("localhost","root","","wowfood");

    if(!$connect){
        die("connection failed: ".mysqli_connect_error());
    }

?>