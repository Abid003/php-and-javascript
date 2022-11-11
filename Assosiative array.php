<?php

//normalarray
    $a = array(12,3,"daaf",5,3.333,13);
    $a[6] = 24;
    for($i = 0; $i<7;$i++){
        echo $a[$i]."<br>";
    }


    //assosiative array

    $age = array("Abd"=>"13","honda"=>"21","been"=>"23","mark" => "55");

    echo $age["abd"]."<br>";

    foreach ($age as $key => $key_value){
        echo "key = ".$key." $key_value ".$key_value;
    }
    
    

?>