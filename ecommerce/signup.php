<?php
include "db_connector.php";

if (isset($_POST['submit'])) {


    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $fatherName = $_POST['fathername'];
    $motherName = $_POST['mothername'];
    $birth = $_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];


    $sql = mysqli_query($con, "SELECT email FROM dataTable WHERE email = '$email'"); ;
    $result = mysqli_fetch_array($sql);



    if ($password == $confirmPass && strlen($password) > 7 && is_null($result)) {
        $dataInsert = mysqli_query($con, "INSERT INTO dataTable (name, roll ,fathersName, mothersName, birth, email, password)
        VALUES ('$name', $roll, '$fatherName', '$motherName', '$birth', '$email','$password'); ");
    
            if ($dataInsert) {
                echo "registered successfully. go back to login page to continue..";
            } else {
                echo "error occurs" . mysqli_error($con);
            }
    }
}


?>

<!-- create table dataTable
(name varchar(30),
 roll int, 
 fathersName varchar(30), 
 mothersName varchar(30), 
 birth varchar(30),
 email varchar(30),
 pass varchar(30)) -->

<!DOCTYPE html>

<head>
    <title>signup</title>
</head>

<body>
    <h1>Sign up page</h1>
    <form action="" method="post" class="login-form">
        Enter your name:<br>
        <input type="text" name="name" value="<?php echo isset($name) ? $name : ""; ?>" required ><br>

        Enter Roll Number:<br>
        <input type="number" name="roll" value="<?php echo isset($roll) ? $roll : ""; ?>"  required><br>

        Enter your Father’s Name:<br>
        <input type="text" name="fathername" value="<?php echo isset($fatherName) ? $fatherName : ""; ?>" required><br>

        Enter your Mother’s Name:<br>
        <input type="text" name="mothername" value="<?php echo isset($motherName) ? $motherName : ""; ?>" required><br>

        Enter your Date of Birth:<br>
        <input type="date" name="date" value="<?php echo isset($birth) ? $birth : ""; ?>" required><br>

        Enter your Email:<br>
        <input type="email" name="email" value="<?php echo isset($email) ? $email : ""; ?>" required>
        <span style="color:red"><?php echo isset($email) && (!is_null($result)) ? is_null($result)."This email already exists..." : ""; ?></span>
        <br>

        Type a new password<br>
        <input type="password" name="password" required>
        <span style="color:red"><?php echo isset($password)&&(strlen($password) <8) &&(strlen($password) >0)? "password size should be at least 8" : ""; ?></span>
        <br>

        confirm password<br>
        <input type="password" name="confirmPass" required>
        <span style="color:red"><?php echo isset($confirmPass) && ($confirmPass != $password) ? "password didnt match" : ""; ?></span>
        <br>
        <br>


        <input type="submit" name="submit"><br>

        <p>already have an account?</p>
        <a href="login.php">Login</a>



    </form>

</body>

</html>
