<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "database1";

    $con = mysqli_connect($servername,$username,$password,$database);

    if(!$con){
        die("connection not established: ".mysqli_connect_error());
    }

?>