<?php
    session_start();
   if(isset($_SESSION['username'])){
    include "cartFunc.php";
    cartFunction();
   }else{
    header('location:no.php');
    exit();
   }
   

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<div class="box">
                <span class="discount"></span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <img src="images/product-3.png" alt="">
                <h3>chicken khichori</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price"> 90tk<span> 95k </span> </div>
                <form action="" method="post">
                <div class="quantity">
                    <span>quantity : </span>
                    <input type="number" min="1" max="1000" value="1">
                    <span> /plate </span>
                    <input style="display:none;" type="text" name="itemName" value="khichori chincken meal"/>
                <input style="display:none;" type="text" name="price" value="90"/>
                <input type="number" required name="mobile" placeholder="enter mobile">
                <input type="submit" name="submit" value="oreder">
                </form>
                </div>
                <a href="cart3.php" class="btn" onclick="addToCart()">order</a>
            </div> 
</body>
</html>