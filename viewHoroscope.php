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

/*function get_dinHoroskp($name)
{
  include(products.php);
	
	foreach($products as $product=>$dinHoroskp)
	{
		if($product==$name)
		{
			return $dinHoroskp;
			break;
		}
	}
}

?>
<?php
  /*session_start();  
  if(isset($_SESSION['views']))
      $_SESSION['views'] = $_SESSION['views']+ 1;
  else
      $_SESSION['views'] = 1;

  echo "views = " . $_SESSION['views']; */
?>