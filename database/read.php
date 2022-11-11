<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uptade and delete</title>


    <style>

        table{
            background-color: #ffeae8;
            border: 1px solid green;
            border-collapse: collapse;
        }
        th{
            color:white;
            background: #47a18d;
            padding: 5px;
            border: 1px solid red;
        }
        td{
            border: 1px solid red;
            padding: 5px;
            text-align: center;
        }

        a{
            text-decoration: none;
            color: black;
        }
    </style>


</head>
<body>

<h1>Student info table</h1>
<p>all info is given below</p><br>


<table>
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Age</th>
        <th>Semester</th>
        <th>Section</th>
        <th colspan="3">Action</th>
    </tr>
<?php 

    $connect = mysqli_connect("localhost","root","","db1");

    if(mysqli_connect_errno()){
        echo "failed to connect with the data base";
    }
    else{
        echo "ok";
    }
   

    $result = mysqli_query($connect,"select * from studentInfo");

    while($row = mysqli_fetch_array($result)){ ?>


        <tr>
             <td><?php echo $row['id']; ?></td>
             <td><?php echo $row['firstName'];?> </td>
             <td><?php echo $row['lastName'];?> </td>
             <td><?php echo $row['age']; ?> </td>
             <td><?php echo $row['semester']; ?></td>
             <td><?php echo $row['section']; ?></td>

             <td><a href="update.php?idno= <?php echo $row['id'];?>" target = "_blank">Update</a></td>

             <td><a href="delete.php?idno= <?php echo $row['id'];?>" target = "_blank">Delete</a></td>
     </tr>;
    
 <?php


    }
    mysqli_close($connect);

?>


?>
<tr>
         <td colspan="8"><a href="insert.php" target = "_blank">add new data</a></td>
     </tr>
</table>

</body>
</html>