<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    require "functions.php";
    require "data.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        calculateSign($horoskop, $month, $day);
    } 
    else{
        die("Woops");
    }
}
else{
    die ("Så får du inte göra!!!!");
}
?>
