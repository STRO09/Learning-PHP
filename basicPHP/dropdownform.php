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
    Age: <input type="number" name="Age"><br>
    Gender: <select name="gender" id="">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>
    </select>
    <br>
    <button type="submit">Submit</button>
</form>

<?php 
if($_SERVER["REQUEST_METHOD"]==="POST") 
    {
        $name = $_POST["name"];
        $age = $_POST["Age"];
        $gender = $_POST["gender"];

        echo "Hello, $name. You are $age years old and identify as $gender";
    }
?>
</body>
</html>