<?php

include "db_connector.php";

if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $statusEmail = $statusPass = 0;

        $emailQ =  "SELECT email FROM registration where email = '$email' ";
        $passQ =  "SELECT pass FROM registration where email = '$email' ";

        $emailchk = mysqli_query($connect, $emailQ);
        $passchk = mysqli_query($connect, $passQ);

        $emailFetch = mysqli_fetch_array($emailchk);
        $passFetch = mysqli_fetch_array($passchk);
        

        if (is_null($emailFetch)) {
                $statusEmail = 1;
        }else if ($passFetch['pass'] != $pass) {
                $statusPass = 1;
        } else {
                session_start();
                $findNameQuerry = "SELECT name FROM registration where email = '$email'";
                $findNameSearch = mysqli_query($connect, $findNameQuerry);
                $findName =  mysqli_fetch_array($findNameSearch);
                $_SESSION['username'] = $findName['name'];
                header('Location: home.php');
                 exit();
                
        }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>

        <style>
                * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                }

                .body {
                        width: 100%;
                        height: 100vh;
                        background-image: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url(gradient.png);
                        background-size: cover;
                        background-position: center;
                        position: relative;
                }

                .head h1 {
                        color: white;
                        float: left;
                }

                .id {
                        display: inline;
                        float: right;
                }

                .login {
                        position: absolute;
                        background-color: white;
                        opacity: 90%;
                        height: 600px;
                        width: 500px;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);

                        border-radius: 10px;
                        overflow: auto;

                }

                .field {
                        width: 250px;
                        text-align: left;
                        margin: 10px auto;
                        color: blueviolet;
                        font-weight: bold;
                }

                .field input {
                        display: block;
                        border-radius: 10px;
                        padding-left: 5px;
                        width: 250px;
                        height: 30px;
                        border: 2px solid blueviolet;
                        margin: 0 auto;
                        color: blueviolet;
                }

                #submit {
                        height: 30px;
                        width: 100px;
                        background: blueviolet;
                        border-radius: 10px;
                        box-shadow: none;
                        color: white;
                        font-weight: bolder;
                        text-transform: lowercase;
                        margin-top: 10px;
                        display: block;
                        margin: 0 auto;
                }

                .account {
                        text-align: center;
                }

                h1 {
                        text-align: center;
                        color: blueviolet;
                        padding: 20px;
                }

                p {
                        color: blueviolet;
                }

                a {
                        padding-bottom: 10px;
                }
                span{
                        color: red;
                }
        </style>
</head>

<body>
   <div class="body">
        <div class="head">
            <h1>Assignment - final</h1>
            <h1 class=id>id-191311156</h1>
        </div>

        <div class="login">
             <h1>Login</h1>
             <form action="" method="post" class="login-form">

                <div class="field">
                     Enter your Email:<br>
                     <input type="email" name="email" id="email" required value="<?php echo isset($email) ? $email : ""; ?>">
                     <span><?php echo isset($email) && ($statusEmail == 1) ? "Email not found!!" : ""; ?></span>
               </div>
                <div class="field">
                     password<br>
                     <input type="password" name="pass" id="pass" required value="<?php echo isset($pass) ? $pass : ""; ?>">
                     <span><?php echo isset($pass) && ($statusPass == 1) ? "Password didnt match!!" : ""; ?></span>
                </div>
                <div class="field">
                 <input type="submit" name="login" id="login">
                </div>
                      
               

        </form>
      </div>
        </div>
</body>

</html>