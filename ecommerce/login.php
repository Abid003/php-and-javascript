<?php

include "db_connector.php";

if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $emailchkQuerry =mysqli_query($con,"SELECT email FROM dataTable where email = '$email' ");
        $passchkQuerry =mysqli_query($con,"SELECT password FROM dataTable where email = '$email' ");

        $emailchk = mysqli_fetch_array($emailchkQuerry);
        $passchk = mysqli_fetch_array($passchkQuerry);


        if(is_null($emailchk)){
                echo "email not found";
        }
        
     

        elseif($emailchk['email'] == $email &&  $passchk['password'] == $password){
                session_start();
                $_SESSION['email'] = $email;
                header('Location: home.php');
                exit();
        }
        else{
                echo "email or password didnt match";
        }

}
?>


<h1>Login page</h1>
<form action="" method="post" class="login-form">
        Enter your Email:<br>
        <input type="input" name="email" required><br>

        password<br>
        <input type="password" name="password" required><br>

        <input type="submit" name="login"><br>
</form>