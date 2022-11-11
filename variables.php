<?php

    $text = "hellow";
    $x = 5;
    $y = 10;
    $z = $x+$y;

    echo $text."<br>";
    echo $x." + ".$y." = ".$z."<br>";

    //constant declaration
    define("hello","hellow world");
    echo hello."<br>";

    define('pi', '3.1416');
    echo pi;
    
    //create constant with case inscensetive
    
    define("Value", "15",true);
    echo value;

?>
