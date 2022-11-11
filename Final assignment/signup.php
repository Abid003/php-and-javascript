<?php
include "db_connector.php";

if (isset($_POST['submit'])) {
    $statusEmail = $statusPass = $statusCpass = 0;
    $nam = $_POST['nam'];
    $roll = $_POST['roll'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $emailq  =  "SELECT email FROM registration where email = '$email' ";
    $findEmail = mysqli_query($connect, $emailq);
    $existEmail = mysqli_fetch_array($findEmail);

    if (is_null($existEmail)) {
        $statusEmail = 1;
    }
      if (strlen($pass) >= 8) {
        $statusPass = 1;
    }
      if ($pass == $cpass) {
        $statusCpass = 1;
    } 

    if($statusCpass==1 && $statusEmail == 1 && $statusPass==1){
        $sql =  "INSERT INTO registration (name, roll ,fathersName, mothersName, birth, email, pass)
        VALUES ('$nam', $roll, '$fname', '$mname', '$dob', '$email','$pass'); ";

    $go = mysqli_query($connect, $sql);

    if ($go) {
        echo "registered successfuly go back to login page to continue";
    } else {
        echo "error!" . mysqli_error($connect);
    }
    }
    else {
      
    }
}


?>


<!DOCTYPE html>

<head>
    <title>signup</title>

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

        .signup {
            position: absolute;
            background-color: white;
            opacity: 90%;
            height: 700px;
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
        .id{
            font-size: 18px;
        }
    </style>
</head>

<body>

    <div class="body">
        <div class="head">
            <h1 class=id>Assignment - final</h1>
            <h1 class=id>id-191311156</h1>
        </div>

        <div class="signup">

            <h1>Sign Up</h1>
            <form action="" method="post" class="login-form">
                <div class="field">
                    Enter your name:<br>
                    <input type="text" name="nam" id="nam" value="<?php echo isset($nam) ? $nam : ""; ?>" required>
                </div>


                <div class="field">
                    Enter Roll Number:<br>
                    <input type="number" name="roll" id="roll" value="<?php echo isset($roll) ? $roll : ""; ?>" required>
                </div>


                <div class="field">
                    Enter your Father’s Name:<br>
                    <input type="text" name="fname" id="fname" value="<?php echo isset($fname) ? $fname : ""; ?>" required>
                </div>


                <div class="field">
                    Enter your Mother’s Name:<br>
                    <input type="text" name="mname" id="mname" value="<?php echo isset($mname) ? $mname : ""; ?>" required>
                </div>


                <div class="field">
                    Enter your Date of Birth:<br>
                    <input type="date" name="dob" id="dob" value="<?php echo isset($dob) ? $dob : ""; ?>" required>
                </div>


                <div class="field">
                    Enter your Email:<br>
                    <input type="email" name="email" id="email" value="<?php echo isset($email) ? $email : ""; ?>" required> <span style="color:red"><?php echo isset($email) && ($statusEmail != 1) ? "Email already exists!!" : ""; ?></span>
                </div>


                <div class="field">
                    Type a new password<br>
                    <input type="password" name="pass" id="pass" required value="<?php echo isset($pass) ? $pass : ""; ?>"> <span style="color:red"><?php echo isset($pass) && ($statusPass != 1) ? "password size must be at least 8 !!" : ""; ?></span>
                </div>


                <div class="field">
                    Confirm password<br>
                    <input type="password" name="cpass" id="cpass" required value="<?php echo isset($cpass) ? $cpass : ""; ?>">
                    <span style="color:red"><?php echo isset($cpass) && ($statusCpass != 1) ? "confirm password didnt match!!" : ""; ?></span>

                </div>


                <input type="submit" name="submit" id="submit" required><br>

                <div class="account">
                    <p>already have an account?</p>
                    <a href="login.php">Login</a>
                </div>


            </form>
        </div>

    </div>



</body>

</html>

<?php
    if(isset($pass)){
        echo $statusPass;
        echo strlen($pass);
    }
    if(isset($cpass)){
        echo $statusCpass;
    }
?>