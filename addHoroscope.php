
<?php
parse_str(ﬁle_get_contents("php://input"), $_PUT);
function PUT_dinHoroskp($name)
{
  include(products.php);
	
	foreach($products as $product=>$dinHoroskp)
	{
		if($product==$name)
		{
			return $dinHoroskp;
		}else {
    $products.push($name);
    echo $name;
    }
	}
}

?>
