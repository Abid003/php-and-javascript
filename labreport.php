<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab report 1</title>

    <style>

        table{
            border: 1px solid black;
            border-collapse: collapse;
        }

        th{
            border: 1px solid black;
        }

        td{
            border: 1px solid black;
        }

    </style>

</head>
<body>

<h1>info table</h1>

<table>
    <tr>
     
        <th>Username</th>
        <th>email</th>
        <th>phone</th>
        <th>age</th>

    </tr>
<?php 

    $connect = mysqli_connect("localhost","root","","database1");

    if(mysqli_connect_errno()){
        echo "failed to connect with the data base";
    }
    else{
        echo "";
    }
   

    $result = mysqli_query($connect,"select * from Info");

    while($row = mysqli_fetch_array($result)){
        echo "<tr><td>".$row['Username']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['age']."</td></tr>";
    }


    mysqli_close($connect);

?>
</table>

</body>
</html>