<?php
if (isset($_SESSION['username'])) {
    if($_SESSION['username']!= "admin"){
        header("location:chat.php");
    }else{
        header("location:userlist.php");
    }
}else{
    header("location:login.php");
}

     
 
?>