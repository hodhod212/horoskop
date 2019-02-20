<?php
parse_str(file_get_contents("php://input"), $_PUT);
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    session_start();
    require "functions.php";
    require "data.php";
    
    $personnummer = $_PUT["personnr"];
    header("Content-Type", "application/json");

    $wasSuccessful = updateSign($horoskop, $personnummer);
    if ($wasSuccessful) {
        echo true;
    } else {
        echo false;
    }    
}

else{
    //die ("false");
    echo false;
}
?>