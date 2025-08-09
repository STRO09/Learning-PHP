<?php

$single = 'Single quote string';
$double = "Double quote string";

echo $single . $double;

echo "Substring quote pos: " . substr($single, 3, 5);

echo "Before replace: " . $double . ", After replace: " . str_replace("string", "replaced string", $double);


echo "<br>Length of \$single: " . strlen($single);
echo "<br>Lowercase \$double: " . strtolower($double);
echo "<br>Uppercase \$double: " . strtoupper($double);

echo "<br> <pre>'      Ahhh yesss.... no.   ' After trim:" .trim("      Ahhh yesss.... no.   "). "</pre>";
echo "<br>Substring of $single (start 7, len 5): " . substr($single, 7, 5);
?>