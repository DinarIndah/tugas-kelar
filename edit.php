<?php
include ('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('id' =>'cus_DsvvhZoAKX1UTm',
			'description'=>'yow ini pembelian');
	$result = $myStripe->editcustomer($data);
	echo "<pre>"; print_r($result);
