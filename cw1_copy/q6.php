<?php 

$single = 'Single quote string';
$double = "Double quote string";

echo $single.$double;

echo "Substring quote pos: ".substr($single,3,5);

echo "Before replace: ".$double.", After replace: ".str_replace("string","replaced string",$double);
?>