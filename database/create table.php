<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "db2";

    $connect = mysqli_connect($servername,$username,$password,$db);

    if(!$connect){
        die("connection failed: ".mysqli_connect_error());
    }

    $sql = "CREATE TABLE Student(name varchar(20),id int, semsister varchar(3), sec varchar(1)); ";

    if(mysqli_query($connect,$sql)){
        echo "database created sucsessfuly";
    }
    else{
        echo "Error creating database: ".mysqli_error($connect);
    }
    mysqli_close($connect);
?>