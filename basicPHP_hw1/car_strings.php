<?php

$carSingle = 'Toyota Corolla';
$carDouble = "The new Ford Mustang is fast.";

echo $carSingle . "<br>";
echo $carDouble . "<br>";

$model = "Mustang";
$price = 35000;
$concat = $model . " costs $" . $price;
echo $concat . "<br>";

$pos = strpos($carDouble, "fast");
echo "Position of 'fast' in $carDouble: $pos<br>";

$replaced = str_replace("fast", "very fast", $carDouble);
echo "$carDouble After replacement: $replaced<br>";

echo "Desc length: " . strlen($carDouble) . "<br>";
echo "Lowercase: " . strtolower($carDouble) . "<br>";
echo "Uppercase: " . strtoupper($carDouble) . "<br>";

$spaced = "   Audi A4 Premium   ";
echo "<pre>$spaced after Trim: " . trim($spaced) . "</pre><br>";

echo "Substring: " . substr($carSingle, 4, 6);

?>