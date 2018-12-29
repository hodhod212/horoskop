<?php
$rest = $_SERVER['REQUEST_METHOD'];
IF ($rest == 'GET') {
    if (isset($_GET['filename'])) {
        $file_content = file_get_contents($_GET['filename']);
        echo $file_content;
    } else {
        die("ERROR: REQUIRED PARAMETERS NOT GIVEN!");
    }
} elseif ($rest == 'POST') {
   if (isset($_POST['filename']) and isset($_POST['connect'])) {
       file_put_contents($_POST['filename'], $_POST['connect']);
   } else {
    die("ERROR: REQUIRED PARAMETERS NOT GIVEN!");
   }
} elseif ($rest == 'DELETE') {
    parse_str(file_get_contents('php:imput'),$_DELETE);
    IF (isset($_DELETE['file'])) {
        unlink($_DELETE['file']);
    } else {
        die("ERROR: REQUIRED PARAMETERS NOT GIVEN!");
 
    }
}
?>