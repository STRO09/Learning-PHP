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
    Age: <input type="number" name="Age"> <br>
    Gender: <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
    </select>

    <button type="submit">Submit</button>
    </form>


    <?php 

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST["name"];
    $Age = $_POST["Age"];
    $gender = $_POST["gender"];

    echo "Hello, $name. You are $Age years old and identify as $gender";
}
?>
</body>
</html>