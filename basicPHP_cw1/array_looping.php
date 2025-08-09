<?php 

//a
$vegetables = ["Onions","Tomatoes", "Chillies", "Bittergourd"];
echo "Vegetables: <br>";
for($i=0;$i<count($vegetables);$i++)
{
    echo "$vegetables[$i]<br>";
}

echo " <br><br>Fruits with colours: <br>";
//b
$fruits =[

    "Apple"=> "Red",
    "Banana"=> "Yellow",
    "Guava"=> "Green"

];

foreach($fruits as $fruit => $colour){
    echo "$fruit : $colour <br>";
}

//c
echo " <br><br>Iteration 1: <br>";
foreach($vegetables as $veggie) {
    echo "$veggie<br>";
}

array_push($vegetables,"Bottlegourd");
echo " <br><br>Iteration 2 push: <br>";
foreach($vegetables as $veggie) {
    echo "$veggie<br>";
}

array_pop($vegetables);
echo " <br><br>Iteration 3 pop: <br>";
foreach($vegetables as $veggie) {
    echo "$veggie<br>";
}

$sliced_arr= array_slice($vegetables,1,2);
echo " <br><br>Iteration 4: slice <br>";
foreach($sliced_arr as $arr) {
    echo "$arr<br>";
}

$arr_keys= array_keys($fruits);
echo " <br><br>Iteration 4: keys <br>";
foreach($arr_keys as $fruit) {
    echo "$fruit<br>";
}

$foods = array_merge($fruits,$vegetables);
echo " <br><br>Iteration 5: merge <br>";
foreach($foods as $food) {
    echo "$food<br>";
}
?>