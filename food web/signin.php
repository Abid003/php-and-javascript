<?php

include "db_connector.php";

if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $statusEmail = $statusPass = 0;

        $emailQ =  "SELECT email FROM users where email = '$email' ";
        $passQ =  "SELECT password FROM users where email = '$email' ";

        $emailchk = mysqli_query($connect, $emailQ);
        $passchk = mysqli_query($connect, $passQ);

        $emailFetch = mysqli_fetch_array($emailchk);
        $passFetch = mysqli_fetch_array($passchk);
        if( $email == "admin@admin" &&  $pass == "admin1234"){
            session_start();
            $_SESSION['username'] = "admin";
            header("location:admin.php");
             exit();
        

        if (is_null($emailFetch)) {
                $statusEmail = 1;
        }else if ($passFetch['password'] != $pass) {
                $statusPass = 1;
                
        } 
       
        }
        else {
                session_start();
                echo "signed in";
                $findNameQuerry = "SELECT username FROM users where email = '$email'";
                
                $findNameSearch = mysqli_query($connect, $findNameQuerry);
                $findName =  mysqli_fetch_array($findNameSearch);
                $_SESSION['username'] = $findName['username'];
                $_SESSION['email'] = $email;
                header('location:home.php');
                 exit();
                
        }

        
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wow FOod</title>
    <link rel="stylesheet" href="style1.css">

</head>

<body>
    <div class="main">
        <!-- <div class="navbar">
            <div class="icon">


                <h2 class="logo">WowFOod </h2>


            </div>
            <div class="menu">
                <ul>
                    <li><a hraf="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="Search" name="Search" placeholder="Type to text">
                <a href="#">
                    <buttom class="btn">Search</buttom>
                </a>

            </div>
        </div> -->
        <!-- <div class="content"> -->
            <!-- <h1>WOwFOod is <br><span>the best online </span><br>& offline resturent </h1>
            <p class="par">our resturent is the best online food resturent<br> it is most usefull website</p>
            <button class="cn"><a href="#">JOIN US</a></button> -->
            <div class="form">
                <form action="" method="post">
                <h2>Login Here</h2><br><br>
                <input type="email" name="email" placeholder="Enter Email Here"><br><br>
                <input type="password" name="pass" placeholder="Enter Password Here"><br><br>
                <button type="submit" name="login">Login</button><br><br>
                <p>Not Registered? <a href="SignUp.php">Register</a></p>
            </form>

            </div>

        </div>
    </div>
</body>

</html>