<?php
session_start();

if(isset($_SESSION["usersSign"])){
	$time = time();
	$time_modified=date('D M Y @ H:i:s',strtotime('+1 week'));
    echo "<strong><p>Ditt horoskop är: " . $_SESSION["usersSign"] . "</p></strong>"." " .$_SESSION["description"];
   echo '<br>'."köp en lot efter en vecka exact i den här tiden:".$time_modified;
};
?>