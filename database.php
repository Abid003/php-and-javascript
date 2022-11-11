<?php 

    $serverName = "localhost";
    $userName = "root";
    $pasword ="";
    $dbName = "";

    $conn = mysqli_connect($serverName,$userName,$pasword,$dbName);

    if($conn){
        echo "success";
    }
    else{
        die("connection failed".mysqli_connect_error());
    }

?>