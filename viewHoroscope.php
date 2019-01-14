<?php

function get_dinHoroskp($name)
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