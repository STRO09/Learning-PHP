<?php 
$servername='localhost';
$dbname='demophp';
$username='root';
$password='tfws.wow///POP()';

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn) {
    // echo "Db not connected";
    echo "alert('DB not connected')";
}
?>