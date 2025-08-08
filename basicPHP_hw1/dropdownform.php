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
    Phone: <input type="number" name="no"><br>
    Preferred Car: <select name="car" id="">
        <option value="Toyota">Toyota</option>
        <option value="Ford">Ford</option>
        <option value="Tesla">Tesla</option>
    </select>
    <br>
    <button type="submit">Submit</button>
</form>

<?php 
if($_SERVER["REQUEST_METHOD"]==="POST") 
    {
        $name = $_POST["name"];
        $Phone = $_POST["no"];
        $brand = $_POST["car"];

        echo "Hello, $name.  Your phone number is $Phone and your  
preferred car brand is $brand.";
    }
?>
</body>
</html>