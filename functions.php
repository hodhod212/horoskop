<?php

function calculateSign($horoskop, $month, $day){
    $personnummer = $_POST["personnr"];
    $month = $personnummer[2] . $personnummer[3]; 
    $day = $personnummer[4] . $personnummer[5]; 


    if(empty($_SESSION["usersSign"])){
        foreach ($horoskop as $a){
            if ($month == $a->minMonth and $day >= $a->minDay ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                echo "true";
                
            }
            elseif($month == $a->maxMonth and $day <= $a->maxDay  ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                echo "true";
            }
        }
    }
}

function updateSign($horoskop, $month, $day){

    parse_str(file_get_contents("php://input"), $_PUT);
    $personnummer = $_PUT["personnr"];

    $month = $personnummer[2] . $personnummer[3]; 
    $day = $personnummer[4] . $personnummer[5]; 

    if(isset($_SESSION["usersSign"])){
        foreach ($horoskop as $a){
            if ($month == $a->minMonth and $day >= $a->minDay ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                echo "true";
                
            }
            elseif($month == $a->maxMonth and $day <= $a->maxDay  ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                echo "true";
            }
        }
    }
    else{
        echo "false";
    }
};
?>