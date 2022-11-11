<?php

include "db_connector.php";
include "dateformat.php";
session_start();


if(isset($_SESSION["username"])){
echo "hello " . $_SESSION["username"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
</head>
<style>
    table {
        background-color: #ffeae8;
        border: 1px solid green;
        max-height: 500px;
        border-collapse: collapse;
        overflow: auto;
        margin: 0 auto;
      

    }
   #history,#orders{
    max-height: 500px;
    overflow: auto;
   }
   .thead{
       position: fixed;
   }

    th {
        color: white;
        background: #133913;
        padding: 5px;
        border: 1px solid #008000;
    }

    td {
        border: 1px solid #008000;
        padding: 5px;
        text-align: center;
    }

    a {
        text-decoration: none;
        color: black;
    }

    h1,h3 {
        text-align: center;
    }
   
</style>

<body>
<h1>pending orders</h1>
<div id = "orders"></div>
    <table>

        <tr >
            <th>ID</th>
            <th>email</th>
            <th>phone</th>
            <th>items</th>
            <th>ordered at</th>
            <th>status</th>
        </tr>

        <?php

        $result = mysqli_query($connect, "select * from orders");
       

   

        while ($row = mysqli_fetch_array($result)) { ?>


            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['email']; ?> </td>
                <td><?php echo $row['phone']; ?> </td>
                <td><?php echo $row['items']; ?> </td>
                <td><?php echo $row['time']; ?></td>

                <td><a onclick="message()" href="delevered.php?idno= <?php echo $row['id']; ?>" target="">mark as delevered</a></td>

            </tr>

        <?php
     }
        
        mysqli_close($connect);

        ?>
       
    </table>
    
  <h1>delevery history</h1>



  <div id="history">


    <table>
    <tr>
            <th>email</th>
            <th>phone</th>
            <th>items</th>
            <th>ordered at</th>
            <th>served at</th>
            <th>status</th>
        </tr>

        <?php
        include "db_connector.php";

        $result1 = mysqli_query($connect, " SELECT * from history");

        while ($row = mysqli_fetch_array($result1)) { ?>


            <tr>
                <td><?php echo $row['email']; ?> </td>
                <td><?php echo "0".$row['mobile']; ?> </td>
                <td><?php echo $row['items']; ?> </td>
                <td><?php echo $row['ordertime']; ?></td>
                <td><?php echo $row['dtime']; ?></td>
                <td><?php echo "delevired"; ?></td>

        

            </tr>

        <?php

        }
        mysqli_close($connect);
    }else{
        echo "login first";
    }
        ?>
       
    </table>
    </div>
    <script>
        function message(){
            alart("order deleverd, details moved to history");
        }
    </script>
</body>

</html>