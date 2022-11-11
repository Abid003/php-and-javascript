<?php

    session_start();
    if(isset($_SESSION['username'])){
        echo "logged in as  ".$_SESSION['username'];
        echo '<br><a href = "logout.php?logout">logout</a>';
    }
    else{
        echo "please login first";
    }
   

?>