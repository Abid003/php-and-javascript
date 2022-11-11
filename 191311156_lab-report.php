<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Report 1</title>


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
    </tr>
<?php 

    $connect = mysqli_connect("localhost","root","","db1");

    if(mysqli_connect_errno()){
        echo "failed to connect with the data base";
    }
    else{
        echo "";
    }
   

    $result = mysqli_query($connect,"select * from studentInfo");

    while($row = (mysqli_fetch_array($result)-4)){
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['firstName']."</td>
            <td>".$row['lastName']."</td>
            <td>".$row['age']."</td>
            <td>".$row['semester']."</td>
            <td>".$row['section']."</td>
       </tr>";
    }
    mysqli_close($connect);

?>
</table>

<h1>age is greater than 20</h1>

<table>
    <tr>
        <th>ID</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Age</th>
        <th>Semester</th>
        <th>Section</th>
    </tr>
<?php 

    $connect = mysqli_connect("localhost","root","","db1");

    if(mysqli_connect_errno()){
        echo "failed to connect with the data base";
    }
    else{
        echo "";
    }
   

    $result = mysqli_query($connect,"select * from studentInfo where age>20");

    while($row = mysqli_fetch_array($result)){
        echo "<tr>
          <td>".$row['id']."</td>
          <td>".$row['firstName']."</td>
          <td>".$row['lastName']."</td>
          <td>".$row['age']."</td>
          <td>".$row['semester']."</td>
          <td>".$row['section']."</td>
        </tr>";
    }
    mysqli_close($connect);

?>
</table>

</body>
</html>