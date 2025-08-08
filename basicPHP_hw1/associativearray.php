<?php

// Associative array of car models and their brands
$cars = [
    "Civic" => "Honda",
    "Corolla" => "Toyota",
    "Mustang" => "Ford",
    "Model S" => "Tesla",
    "A4" => "Audi"
];

foreach($cars as $model => $brand) {
    echo "$model : $brand <br>";
}

?>