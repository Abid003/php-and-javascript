<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report 1</title>
</head>
<body>

<h1>Student info table</h1>
<p>all info is given below</p><br>

<?php 

    $connect = mysqli_connect("localhost","root","","db1");

    if(mysqli_connect_errno()){
        echo "failed to connect with the data base";
    }
    else{
        echo "connection stablished successfully";
    }

    $result = mysqli_query($connect,"select * from studentInfo");
    while($row = mysqli_fetch_array($result)){
        echo "<br>";
        echo $row['id']."  ".$row['firstName']."  ".$row['lastName']." ".$row['age']." ".$row['semester']." ".$row['section'];
    }

    mysqli_close($connect);

?>


</body>
</html>