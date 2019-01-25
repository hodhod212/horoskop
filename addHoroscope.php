
<?php
function error($msg){
	$response = array("success"=>false, "message"=>$msg);
	return json_encode($response);
}
$name = $_GET['name'];
if($name==''){
	die(error('Error: No name'));
}
$message = "Created".$name;
$response = array();
$response['success']= true;
$response['message']=$message;
echo json_encode($response);
?>
