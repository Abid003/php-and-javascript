<?php

include "db_connector.php";
$id = $_GET['idno'];

$query = mysqli_query($connect, "SELECT * FROM studentInfo where id='$id' ");
$row = mysqli_fetch_array($query);
$sid = $row['id'];
$fname = $row['firstName'];
$lname = $row['lastName'];
$sem = $row['semester'];
$sec = $row['section'];
$age = $row['age'];




if (isset($_POST['update'])) {

    $fnameUp = $_POST['fname'];
    $lnameUp = $_POST['lname'];
    $semUp = $_POST['sem'];
    $secUp = $_POST['sect'];
    $ageUp = $_POST['agee'];

    $sql = mysqli_query($connect, "UPDATE studentInfo SET firstName='$fnameUp',lastName='$lnameUp',section='$secUp',age='$ageUp',semester='$semUp' WHERE id = '$sid' ");

    if ($sql) {
        echo "updated successfuly";
    }
}



?>





<form action="" method="POST">

    firstName : <br>
    <input type="text" name="fname" value="<?php echo $fname; ?>" placeholder="first name">
    <br>
    lastName : <br>
    <input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="lirst name">
    <br>
    age: <br>
    <input type="text" name="agee" value="<?php echo $age; ?>" placeholder="age">
    <br>
    semester : <br>
    <input type="text" name="sem" value="<?php echo $sem; ?>" placeholder="sem"><br>
    sec : <br>
    <input type="text" name="sect" value="<?php echo $sec; ?>" placeholder="sec">

    <input type="text" name="up_id" value="<?php echo $sid ?>">
    <input type="submit" name="update" value="update">
    <input type="reset" name="reset" value="clear">

</form>