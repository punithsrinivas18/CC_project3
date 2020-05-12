<?php

function get_price($name)
{
	$products = [
		"Registration_fee"=>10,
		"Famous_Five"=>15,
		"Secret_Seven"=>12,
		"Dark_Fantasy"=>25,
		"Online_learning"=>30		
	];
	
	
	foreach($products as $product=>$price)
	{
		if($product==$name)
		{
			return $price;
			break;
		}
	}
}

?>
