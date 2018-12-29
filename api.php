<?php
header("Content-Type:application/json");
require "viewHoroscope.php";

if(!empty($_GET['name']))
{
	$name=$_GET['name'];
	$dinHoroskp = get_dinHoroskp($name);
	
	if(empty($dinHoroskp))
	{
		response(200,"Product Not Found",NULL);
	}
	else
	{
		response(200,"Product Found",$dinHoroskp);
	}
	
}
else
{
	response(400,"Invalid Request",NULL);
}

function response($status,$status_message,$data)
{
	header("HTTP/1.1 ".$status);
	
	$response['status']=$status;
	$response['status_message']=$status_message;
	$response['data']=$data;
	
	$json_response = json_encode($response);
	echo $json_response;
}