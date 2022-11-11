<?php
include "db_connector.php";

if (isset($_POST['Sign_up'])) {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
    $c_password = $_POST['conformpassword'];

    $emailquery = "select * from users where Email='$email'";
    $query = mysqli_query($connect, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        echo "Email alredy exit";
    } else {
        if ($password === $c_password) {


            $specialChars = preg_match('@[^\w]@', $password);
            if (!$specialChars || strlen($password) < 8) {
                echo "pls try again  8 char with 1 special char";
            } else {
                $query = "INSERT INTO users(username,password,email)  VALUES ('$name','$password','$email')";
                $sql = mysqli_query($connect, $query);
                if ($sql) {
                    echo "Your account has been created successfully";
                } else {
                    echo "Not Inseted";
                }
            }
        } else {
            echo "password are not matching";
        }
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
    <div class="signup">
        <h2>signup Here</h2><br><br>
        <form action="#" method="post">
            <input type="text" name="Name" placeholder="Enter Name Here"><br><br>
            <input type="Email" name="Email" placeholder="Enter Email Here"><br><br>
            <input type="password" name="password" placeholder="Enter Password Here"><br><br>

            <input type="password" name="conformpassword" placeholder="Enter conform password Here"><br><br>
            <button type="submit" name="Sign_up">Sign Up</button><br />
            <p>Already Registered? <a href="signin.php">Login</a></p>
        </form>


    </div>
</body>