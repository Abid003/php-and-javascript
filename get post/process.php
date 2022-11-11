<?php
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];

    echo $name."  ".$email."  ".$mobile."  ";

    if($name == ""){
        $nameError = "name field must be filled";
    }

    if(empty($email)){
        $emailError = "email field must be filled";
    }
?>