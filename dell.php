<?php
include('Stripegateway.php');
$myStripe = new Stripegateway();
$data = array('ID' => 'cus_DsvvhZoAKX1UTm');
$result = $myStripe->delcustomer($data);
echo "<pre>"; print_r($result);
?> 