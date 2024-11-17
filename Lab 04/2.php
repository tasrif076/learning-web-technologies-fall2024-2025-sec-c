<?php
$price = 200; 
$vat_rate = 0.15; 

$vat = $price * $vat_rate;
$vat_price = $price + $vat;

echo "Total Amount with VAT: " . $vat_price;
?>
