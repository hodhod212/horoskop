<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    require "functions.php";
    require "data.php";
    $personNumber = $_POST["personnr"];
    header("Content-Type", "application/json");

    $wasSuccessful = calculateSign($horoskop, $personNumber);
    if ($wasSuccessful) {
        echo true;
    } else {
        echo false;
    }   
}
else{
    echo json_encode(false);
}
?>
