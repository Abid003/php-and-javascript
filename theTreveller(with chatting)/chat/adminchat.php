<?php
include 'dateformat.php';
include 'db_connector.php';


session_start();
if (isset($_GET['idno'])) {
    $chatTo = $_GET['idno'];
    $user = $chatTo;
} 



if(isset($_GET['user'])){
     $user = $_GET['user'];
}
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
   
    echo  $name;
   

    if (isset($_POST['send'])) {

        $chat = $_POST['message'];

        $sql = "INSERT INTO $user(admin) values ('$chat')";
        $querry = mysqli_query($connect, $sql);

        header("location:adminchat.php?user=".$user);
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
        <?php include 'chat.css'; ?><?php if ($name == "user") {
                                        include 'user.css';
                                    } else {
                                        include 'admin.css';
                                    }

                                    ?>
    </style>
</head>

<body onload="scrollToBottom()">
    <div class="head">
    <p>chat with</p>
        <h1><?php echo $user; ?></h1>
        <hr>
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
            
        
                $sql1 = "SELECT * from $user";

            $querry1 = mysqli_query($connect, $sql1);

            while ($info = mysqli_fetch_array($querry1)) {
            ?>
                <tr>
                    <div class="user_text">
                        <td id="time-user"><?php echo is_null($info['user']) ? "" : dateFormat($info['time']); ?></td>
                        <?php
                        if (!is_null($info['user'])) {
                            echo "<td id='user'>" . $info['user'] . "</td>";
                        }
                        ?>

                    </div>
                    <td id="time-admin"><?php echo is_null($info['admin']) ? "" : dateFormat($info['time']); ?></td>
                    <div class="admin_text">
                        <?php
                        if (!is_null($info['admin'])) {
                            echo "<td id='admin'>" . $info['admin'] . "</td>";
                        }
                        ?>

                    </div>

                </tr>

            <?php
            }

            ?>
        </table>
    </div>
    <a href="userlist.php">view all user</a><br>
    <?php echo '<br><a href = "logout.php?logout">logout admin</a>'; ?>

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