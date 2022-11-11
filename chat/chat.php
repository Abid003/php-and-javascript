<?php
include 'dateformat.php';
include 'connect_db.php';

if (isset($_POST['send'])) {
    header("location:chat.php");
    $chat = $_POST['message'];


    $sql = "INSERT INTO texts(messages) values ('$chat')";
    $querry = mysqli_query($connect, $sql);
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
    </style>
</head>

<body>
    <div class="head">

        <h3>chat with us</h3>
        <p>chat us to confirm everything</p>
    </div>


    <div class="body">
<div class="chatting">
<div class="chat">
            <table>

                <?php
                include 'connect_db.php';
                $sql1 = "SELECT * from texts";

                $querry1 = mysqli_query($connect, $sql1);
                
                while ($info = mysqli_fetch_array($querry1)) {
                ?>

                    <tr>
                        <td id="message"><?php echo $info['messages'] ?></td>
                        <td id="time"><?php

                                        echo dateFormat($info['sent_at']); ?></td>
                    </tr>

                <?php
                }

                ?>
            </table>
        </div>
</div>
        

        <div class="input">
            <form action="" method="POST">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Wrtie Message" required></textarea>
                <input type="submit" name="send" value="send">
            </form>
            </div>

    </div>

    <?php include 'chat.js'; ?>

</body>

</html>