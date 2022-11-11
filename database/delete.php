<?php

include "db_connector.php";
$id = $_GET['idno'];

$query = mysqli_query($connect, "SELECT * FROM studentInfo where id='$id' ");
$row = mysqli_fetch_array($query);
$sid = $row['id'];




if (isset($_POST['delete'])) {



    $sql = mysqli_query($connect, "DELETE FROM studentInfo WHERE id=$sid");

    if ($sql) {
        echo "deleted successfuly";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warning!</title>
</head>
<body>
    <form action="" method="POST">
        are you sure?
        <input type="submit"name="delete" value="Delete">
    </form>
</body>
</html>