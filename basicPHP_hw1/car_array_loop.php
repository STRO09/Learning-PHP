<?php

$carModels = ["Civic", "Corolla", "Mustang", "Model S", "A4"];

echo "Car Models :<br>";
for ($i = 0; $i < count($carModels); $i++) {
    echo $carModels[$i] . "<br>";
}

$carPrices = [
    "Civic" => 22000,
    "Corolla" => 21000,
    "Mustang" => 35000,
    "Model S" => 80000,
    "A4" => 40000
];

echo "<br>Car Models and Prices :<br>";
foreach ($carPrices as $model => $price) {
    echo "$model : $$price<br>";
}

array_push($carModels, "Camry");
echo "<br>After array_push:<br>";
foreach ($carModels as $model) {
    echo $model . "<br>";
}

array_pop($carModels);
echo "<br>After array_pop:<br>";
foreach ($carModels as $model) {
    echo $model . "<br>";
}

$sliced = array_slice($carModels, 1, 3);
echo "<br>After array_slice (1,3):<br>";
foreach ($sliced as $model) {
    echo $model . "<br>";
}

$carKeys = array_keys($carPrices);
echo "<br>After array_keys:<br>";
foreach ($carKeys as $model) {
    echo $model . "<br>";
}

$merged = array_merge($carModels, $carKeys);
echo "<br>Merged Array:<br>";
foreach ($merged as $item) {
    echo $item. "<br>";
}

?>