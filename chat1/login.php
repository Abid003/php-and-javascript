<?php

$nameStatus = 0;
$passwordStatus = 0;
$passwordErrMsg = "";
$nameErrMsg = "";


if(isset($_POST["login"])){

    $userName = $_POST['name'];
    $password = $_POST["password"];

    checkName($userName);
  //  checkPassword($password);

    if($userName == 0 && $password == 0){
        
    }
}


function checkName($userName){
    include('include/db_connector.php');
    $sql = "SELECT username from info where username = '$userName' ";
    $findusername = mysqli_query($connect,$sql);
    $checkName = mysqli_fetch_array($findusername);

    if(is_null($checkName)){
        global $nameErrMsg, $nameStatus;
      $nameStatus = 1;
       $nameErrMsg = "username not found </br>";
   }
}

function checkPassword($password){
    include('include/db_connector.php');
    $sql = "SELECT password from info where password = '$password' ";
    $findpass = mysqli_query($connect,$sql);
    $checkPass = mysqli_fetch_array($findpass);

    if(is_null($checkPass)){
        $passwordStatus = 1;
        $passwordErrMsg = "password didnt match </br>";
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
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <form action="" method="POST">
        <label for="name">Enter username</label>
        <input type="text" name="name" value="<?php echo isset($userName) ? $userName : ''; ?>" placeholder="enter your user name" required>
        <span style="color: red;"><?php echo $nameErrMsg; ?></span>

        <label for="password">password</label>
        <input type="text" name="password" value="<?php echo isset($password) ? $password : ''; ?>" placeholder="enter your password" required>
        <span style="color: red;"><?php echo $passwordErrMsg; ?></span>

        <input type="submit" name="login" value="Login">
    </form>

</body>

</html>