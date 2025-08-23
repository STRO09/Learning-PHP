<?php 
include 'db.php';
header('content-type:text/csv');;
header('content-disposition:attachment;filename=users.csv ');;

$output =fopen("php://output","w");
fputcsv($output,array('id','name','salary', 'address'));
$result = $conn -> query("select * from user");
while($row =$result->fetch_assoc()){
    fputcsv($output,$row);
}
?>