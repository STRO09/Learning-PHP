<?php 

$servername = "localhost";
$username = "root";
$password = "tfws.wow///POP()";
$dbname="DemoPHP";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn) {
    echo "DB not connected";
}

?>