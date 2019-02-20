<?php

function calculateSign($horoskop, $personnummer){
    $month = $personnummer[2] . $personnummer[3]; 
    $day = $personnummer[4] . $personnummer[5]; 


    if(empty($_SESSION["usersSign"])){
        foreach ($horoskop as $a){
            if ($month == $a->minMonth and $day >= $a->minDay ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                return true;
                
            }
            elseif($month == $a->maxMonth and $day <= $a->maxDay  ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                return true;
            }
        }
    }
    return false;
}

function updateSign($horoskop, $personnummer){

    $month = $personnummer[2] . $personnummer[3]; 
    $day = $personnummer[4] . $personnummer[5]; 

    if(isset($_SESSION["usersSign"])){
        foreach ($horoskop as $a){
            if ($month == $a->minMonth and $day >= $a->minDay ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                return true;
                
            }
            elseif($month == $a->maxMonth and $day <= $a->maxDay  ){
                $_SESSION["usersSign"] = $a->name;
                $_SESSION["description"] = $a->description;
                return true;
            }
        }
    }
    else{
        return false;
    }
};
?>