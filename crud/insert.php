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
        Address: <input type="text" name="add"> <br>
        Salary: <input type="text" name="sal"> <br>
        <button type="submit">Insert</button>
    </form>


    <?php 
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name = $_POST["name"];
        $address = $_POST["add"];
        $salary = $_POST["sal"];

        $sql = $conn -> prepare("insert into user values(?,?,?)");
        $sql-> bind_param('ssd',$name,$address,$salary);
        if($sql -> execute()){
            echo "Data isnerted successfully";
        }
        else {
            echo "Insert error";
        }

    }
?>
</body>
</html>