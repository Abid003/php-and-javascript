
<?php

    if(isset($_FILES['image'])){
        echo "<pre>";

        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
    }

    if(move_uploaded_file($file_temp,"server/".$file_name)){
        echo "uploaded successfully";
    }
    else{
        echo "couldnt upload file";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <form action="" method = "post" enctype = "multipart/form-data">
    <input type="file" name="image" ><br><br>
    <input type="submit" values= "submit" name="save"><br>

    </form>

</head>
<body>
    
</body>
</html>