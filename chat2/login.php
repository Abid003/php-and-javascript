<?php
include 'db_connector.php';
$nameStatus = 0;
$passwordStatus = 0;
$passwordErrMsg = "";
$nameErrMsg = "";

if(isset($_POST["login"])){

    $userName = $_POST['name'];
    $password = $_POST["password"];

    
    // check user name exists or not 
    $sqlU = "SELECT name from info where name = '$userName'";
    $findName = mysqli_query($connect,$sqlU);
    $nameFetch = mysqli_fetch_array($findName);

    if(is_null($nameFetch['name'])){
        $nameStatus = 1;
        $nameErrMsg = "username not found </br>";
    }

     // match password
     $sqlP = "SELECT password from info where name = '$userName'";
     $findPass = mysqli_query($connect,$sqlP);
     $passFetch = mysqli_fetch_array($findPass);
    
     if($password != $passFetch['password']){
         $passwordStatus = 1;
         $passwordErrMsg = "wrong password</br>";
     }
     echo $passwordStatus;
     echo $nameStatus;
    

     if($userName == "admin" && $password == "1234u2"){
        session_start();
        $_SESSION['username'] = $userName;
   
            header('Location: userlist.php');
            exit();
    }


    if($nameStatus == 0 && $passwordStatus == 0){
        session_start();
        $_SESSION['username'] = $userName;
   
            header('Location: chat.php');
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
    <link rel="stylesheet" href="login.css">
</head>

<body>

<form action="" method="POST">
    <h2>login</h2>
        <label for="name">Enter username</label>
        <input type="text" name="name" value="<?php echo isset($userName) ? $userName : ''; ?>" placeholder="enter your user name" required>
        <span style="color: red;"><?php echo $nameErrMsg; ?></span>

        <label for="password">password</label>
        <input type="text" name="password" value="<?php echo isset($password) ? $password : ''; ?>" placeholder="enter your password" required>
        <span style="color: red;"><?php echo $passwordErrMsg; ?></span>

        <input id="submit" type="submit" name="login" value="Login">
        <p>don't have an <br> account?</p>
        <a href="signup.php">signup</a>
    </form>

    


</body>

</html>