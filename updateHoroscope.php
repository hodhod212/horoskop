<?php
parse_str(ﬁle_get_contents("php://input"), $_PUT);
$url = "https://localhost/horoskop/index.php";

$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNFRANSFER,1);
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'PUT');
curl_setopt($ch,CURLOPT_POSTFIELDS,"var='hello Ali'");
echo curl_exec($ch);
?>