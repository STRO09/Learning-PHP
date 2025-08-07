<?php 

$veggies = array("Broccoli","Onion", "Bittergourd","Tomato");

echo "Iteration 1<br>";
for($i =0;$i<count($veggies);$i++){
    echo " $veggies[$i] <br> ";
}

array_push($veggies,"Chilli");

echo "<br>Iteration 2 - push<br>";
for($i =0;$i<count($veggies);$i++){
    echo " $veggies[$i] <br> ";
}

array_pop($veggies);

echo "<br>Iteration 3 - pop<br>";
for($i =0;$i<count($veggies);$i++){
    echo " $veggies[$i] <br> ";
}

$sliced_array= array_slice($veggies,2,2);

echo "<br>Iteration 4 - slice<br>";
for($i =0;$i<count($sliced_array);$i++){
    echo " $sliced_array[$i] <br> ";
}

$fruits = [

    "Apple"=> "Red",
    "Banana"=> "Yellow",
    "Cherry"=> "Red",
    "Guava"=> "Green"
];

echo "<br><br> Fruits with colours: <br>";
foreach($fruits as $fruit => $colour){
    echo "Fruit: $fruit - Colour: $colour <br>";
}

echo "<br><br> Fruits: <br>";
foreach(array_keys($fruits) as $fruit){
    echo "$fruit<br>";
}

echo "<br>Foods: <br>";

$foods = array_merge($veggies,array_keys($fruits));
foreach($foods as $food) {

    echo "$food<br>";
}

?>