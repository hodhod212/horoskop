<?php
	if(isset($_GET['submit']))
	{
		$name = $_GET['name'];
		
		$url = "http://localhost/horoskop/api/".$name;
		
		$client = curl_init($url);
		curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
		$response = curl_exec($client);
		
		$result = json_decode($response);
		
		echo $result->data; 
	}
?>