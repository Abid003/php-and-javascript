<?php
include 'dateformat.php';
include 'db_connector.php';

session_start();
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
    echo "logged in as <b>".$name."</b>";


    if (isset($_POST['send'])) {

        $chat = $_POST['message'];


        if ($name != "admin") {
            $sql = "INSERT INTO $name(user) values ('$chat')";
            $querry = mysqli_query($connect, $sql);
           
        }
        // if ($name == "admin") {
        //     $sql = "INSERT INTO $name(admin) values ('$chat')";
        //     $querry = mysqli_query($connect, $sql);
            
        // }

        header("location:chat.php");
    }
} else {
    header("location:noAccess.php");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat with us</title>
    <style>
        <?php include 'chat.css'; ?>
        <?php  if ($name != "admin"){
             include 'user.css'; 
        }
        else{
            include 'admin.css'; 
        }
        
        ?>
    </style>
</head>

<body onload="scrollToBottom()">
    <div class="head">
    <p>chat with</p>
        <h1>Admin</h1>
       
    </div>



    <div class="input">
        <form action="" method="POST">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Wrtie Message" required></textarea>
            <input type="submit" name="send" value="send">
        </form>
    </div>

    </div>

    <div id="message">
        <table>

            <?php
            include 'db_connector.php';
            $sql1 = "SELECT * from $name";

            $querry1 = mysqli_query($connect, $sql1);

            while ($info = mysqli_fetch_array($querry1)) {
            ?>

                <tr>
                    <div class="user_text">
                    <td id="time-user"><?php echo is_null($info['user']) ? "" : dateFormat($info['time']); ?></td>
                        <?php 
                        if(!is_null($info['user'])){
                            echo "<td id='user'>".$info['user']."</td>";
                        }
                        ?>
                       
                    </div>

                    <div class="admin_text">
                    <?php 
                        if(!is_null($info['admin'])){
                            echo "<td id='admin'>".$info['admin']."</td>";
                        }
                        ?>
                        <td id="time-admin"><?php echo is_null($info['admin']) ? "" : dateFormat($info['time']); ?></td>
                    </div>

                </tr>

            <?php
            }

            ?>
        </table>
    </div>
    <br><a href="../index.html">home</a>
    <?php echo '<br><a href = "logout.php?logout">logout</a>'; ?>
   

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
   function scrollToBottom() {
 // Bottom
var objDiv = document.getElementById("message");
objDiv.scrollTop = objDiv.scrollHeight;
}
    </script>
  

</body>

</html>