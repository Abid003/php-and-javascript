
<?php

    if(isset($_POST["sub"])){//er ortho if form submit hoise then eta kaj korbe
        $name = $_POST["name"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
    
        echo $name."  ".$email."  ".$mobile."  ";
    
        if($name == ""){
            $nameError = "name field must be filled";
        }
    
        if(empty($email)){
            $emailError = "email field must be filled";
        }
        if(empty($mobile)){
            $mobileError = "mobile field must be filled";
        }
    }

  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">

    name: <br>
    <input type="text" name="name" value="<?php echo isset($name)?$name:"";?>" placeholder ="your name"><span style ="color:red"><?php echo isset($nameError)?$nameError:""; ?></span>
    <br>
    email: <br>
    <input type="email" name="email" value="<?php  echo isset($email)?$email:""; ?>"placeholder ="your email"><span style ="color:red"><?php echo isset($emailError)?$emailError:""; ?></span>
    
    <br>
    number: <br>
    <input type="text" name="mobile"  value="<?php  echo isset($mobile)?$mobile:""; ?>" placeholder ="your phone no"><span style ="color:red"><?php echo isset($mobileError) ?$mobileError:""; ?></span>
    <br>

    <input type="submit" name="sub" value ="submit"><br>

    </form>
</body>
</html>


<?php

    if(isset($_POST["name"])){
        echo $_POST["name"];
    }

?>