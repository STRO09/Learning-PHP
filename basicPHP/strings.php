<?php 
$single = 'Tata Docomo';
$double = "HEllo new World";

echo "$single <br>";
echo "$double <br>";

echo "$single[2] <br>";
echo "$double[7] <br>";

$newstr = $single.$double;
echo "$newstr<br>"; 

echo "Substring 'new' position: ".strpos($double,"new"). "<br>";

echo "Replacing string word: ".str_replace("new","old",$double). "<br>";

echo "Double String len: ".strlen($double)."<br>";

echo "$double as Lowercase: ".strtolower($double)."<br>";

echo "$double as Uppercase: ".strtoupper($double)."<br>";

$spacestr = "       Ah yes.....   ";
echo "<pre>$spacestr but trimmed: ".trim($spacestr)."</pre> <br>";

echo "Substring of single str from pos 2 with length 7: ".substr($single,2,7);
?>