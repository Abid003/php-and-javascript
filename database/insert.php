<?php

include "db_connector.php";

if (isset($_POST['add'])) {

    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $sem = $_POST['sem'];
    $sec = $_POST['sec'];
    $age = $_POST['age'];

    $sql =  "INSERT INTO studentInfo (id, firstName, lastName, age, section,semester)
    VALUES ($id, '$fname', '$lname', $age, '$sec', '$sem'); ";

    $go =mysqli_query($connect,$sql);

    if ($go) {
        echo "added successfuly";
    }else{
        echo"error!".mysqli_error($connect);
    }
}


?>



<form action="" method="POST">

    ID : <br>
    <input type="text" name="id" placeholder="ID">
    <br>
    firstName : <br>
    <input type="text" name="fname" placeholder="first name">
    <br>
    lastName : <br>
    <input type="text" name="lname" placeholder="last name">
    <br>
    age: <br>
    <input type="text" name="age" placeholder="age">
    <br>
    semester : <br>
    <input type="text" name="sem" placeholder="sem"><br>
    sec : <br>
    <input type="text" name="sec" placeholder="sec">
    <br>
    <input type="submit" name="add" value="add">

</form>
