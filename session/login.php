<?php

    session_start();
    if($_POST['name'] =="abc" && $_POST['password'] == '1234')
    {
        $_SESSION['username'] = $_POST;
        echo "hellow ".$_SESSION['username']." ";
        echo "<a href= 'logout.php'>logout</a><br>";
    }
    else{
        die("password or user name incorrect");
    }
?>