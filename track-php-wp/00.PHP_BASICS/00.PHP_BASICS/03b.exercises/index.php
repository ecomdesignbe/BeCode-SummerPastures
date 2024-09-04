<?php
/*
Let's do some exercises !
1.

With these variables, print The weather in Brussels is 24C° and it's rainy.

$city = "Brussels";

$weather_condition = "rainy";

$temperature = 24.16879;
*/

$city = "Brussels";

$weather_condition = "rainy";

$temperature = 24.16879;

echo "The weather in " . $city . " is ". round($temperature) . "C° and it's ". $weather_condition;
echo "<br><br>";

/*
2.
Print the price with VAT of a product that costs 37.5€ without VAT.

The VAT is 21%.
*/
$price_without_vat = 37.5;

$vat = 21;

$price_with_vat = (($price_without_vat * $vat) / 100) + $price_without_vat;

echo $price_with_vat;
echo "<br><br>";



/*
3.
Surface of a circle : Print the surface of a circle that has a radius of 37,59cm.(search on Google the formula to do it)

The result must be an integer (no decimals)
*/
$radius = 37.59;

$surface = ($radius * $radius) * pi();

echo round($surface);

?>