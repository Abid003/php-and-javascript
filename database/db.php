<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($servername, $username, $password);

    if(!$connect){
        die("connection failed: ".mysqli_connect_error());
    }

    $sql = "CREATE DATABASE db2";

    if(mysqli_query($connect,$sql)){
        echo "database created sucsessfuly";
    }
    else{
        echo "Error creating database: ".mysqli_error($connect);
    }
    mysqli_close($connect);
?>