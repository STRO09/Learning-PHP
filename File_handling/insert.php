<?php 
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $salary = $_POST["sal"];
    $address = $_POST["address"];

    $result =$conn->prepare("insert into user(name,salary,address) values(?,?,?)");
    $result -> bind_param('sds',$name,$salary,$address);
    $result->execute();

}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="name"><br>
        Salary: <input type="number" name="sal"><br>
        Address: <input type="text" name="address"><br>
        <button type="submit">Insert</button>
        
        
    </form>
</body>
</html>