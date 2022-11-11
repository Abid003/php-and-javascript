<?php

include "include/db_connector.php";

//status flags and error messages
$nameStatus = 0;
$phoneStatus = 0;
$passwordStatus = 0;
$nameErrMsg = "";
$phoneErrMsg  = "";
$passwordErrMsg = "";
$phnErrMsg = "";

if (isset($_POST['signup'])) {

    $userName = $_POST["name"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];




    //test 
    // echo $userName;
    // echo $password;
    // echo $phone;
    // echo substr($phone, 0, 2);


    // check username already exists or not 
    $namesql = "SELECT username from info where username = '$userName'";
    $findusername = mysqli_query($connect,$namesql);
    $existName = mysqli_fetch_array($findusername);

    if(!is_null($existName)){
         $nameStatus = 1;
         $nameErrMsg = "username is already taken </br>";
    }


    if (strlen($phone) != 11 || !str_contains(substr($phone, 0, 2), '01')) {

        $phoneStatus = 1;
        $phoneErrMsg = "invalid phone number </br>";
    }

    if (strlen($password) < 4) {
        $passwordStatus = 1;
        $passwordErrMsg = "password lenth shoulde be at least 4 </br>";
    }


    if($nameStatus == 0 & $phoneStatus ==0 && $passwordStatus ==0){
        signup($userName,$phone,$password);
    }

}

function signup($userName,$phone,$password){
    $sql = "INSERT INTO info(username,password,phone) values ('$userName','$password','$phone')";
    include('include/db_connector.php');
    $go = mysqli_query($connect,$sql);
    if ($go) {
        echo "sined up successfuly. Go back to login page to continue";
    } else {
        echo "error!" . mysqli_error($connect);
    }
    
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <div class="body">
        <form action="" method="POST">
            <label for="name">username</label>
            <input type="text" name="name" value="<?php echo isset($userName) ? $userName : ''; ?>" placeholder="enter your user name" required>
            <span style="color: red;"><?php echo $nameErrMsg; ?></span>

            <label for="password">enter your password</label>
            <input type="password" name="password" required value="<?php echo isset($password) ? $password : ''; ?>" placeholder="enter your password">
            <span style="color: red;"><?php echo $passwordErrMsg; ?></span>

            <label for="phone">enter your phone number</label>
            <input type="number" name="phone"  required  value="<?php echo isset($phone)?$phone:'' ?>" placeholder="enter your phone number">
            <span style=" color:red;"><?php echo $phoneErrMsg;?>
        </span>

            <input type="submit" name="signup">

            <a href="login.php">login</a>



            <?php

            if (isset($_POST['signup'])) {
                echo $nameStatus;
                echo $phoneStatus;
                echo $passwordStatus;
            }

            ?>

        </form>
    </div>
</body>

</html>


