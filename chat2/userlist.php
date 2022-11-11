<?php
session_start();
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
    $default = 'chat1';

    $chatTo = "chat1";
} else {
    header("location:noAccess.php");
}
if (isset($_GET['idno'])) {
    $chatTo = $_GET['idno'];
    $sql1 = "SELECT * from $chatTo";
    echo $chatTo;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usrlists</title>
    <link rel="stylesheet" href="liststyle.css">
</head>

<body>
    <div class="users">
        <h2>All signed up users</h2>
        
            <?php
            include 'db_connector.php';
            $sql1 = "SELECT name,mobile from info";

            $querry1 = mysqli_query($connect, $sql1);


            while ($info = mysqli_fetch_array($querry1)) {
            ?>
                <tr>
                    <td>
                    <div class="names">
                        <h3><a href="adminchat.php?idno= <?php echo $info['name']; ?>" target=""><?php echo ($info['name'] != 'admin') ? $info['name'] : '' ?></a></h3>
                        <p id="mobile"> <?php echo ($info['name'] != 'admin') ? '0' + $info['mobile'] : '' ?></p>
                        </div>
                    </td>
                </tr>

            <?php
            }

            ?>

         
        

    </div>
    <a href="../index.html"><button>home</button></a>
</body>

</html>