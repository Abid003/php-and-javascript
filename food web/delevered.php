<?php

include "db_connector.php";
session_start();
if(isset($_SESSION["username"])){
echo "hello " . $_SESSION["username"]."<br>";

$id = $_GET['idno'];

$query = mysqli_query($connect, "SELECT * FROM orders where id='$id' ");
$row = mysqli_fetch_array($query);
$email = $row['email'];
$items = $row['items'];
$time = $row['time'];
$mobile = $row['phone'];



$hsql = mysqli_query($connect, "INSERT INTO history (email, items, mobile, ordertime) values('$email','$items','$mobile','$time')");


if(!$hsql){
    die("connection failed: ".mysqli_connect_error());
}else{
    echo $email ."order delevered <br>";
    echo "details has been added to history";
    $query1 = mysqli_query($connect, " DELETE FROM orders where id='$id'");
    header('location:admin.php');
    exit();


}

}else{
    echo "login first";
}


?>
