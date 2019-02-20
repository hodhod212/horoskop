<?php
session_start();
$A=rand(2,9);
if(isset($_SESSION["usersSign"])){
	$time = time();
	$time_modified=date('D M Y @ H:i:s',strtotime('+3 month'));
    echo "<strong><p>Ditt horoskop är: " . $_SESSION["usersSign"] . "</p></strong>"." " .$_SESSION["description"];
   echo '<br>'."köp en lott efter tre monader och ".$A." sekunder exact i den här tiden:".$time_modified;
};
?>