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

        <button type="submit">Delete</button>
    </form>


    <?php 
    include 'db.php';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $name = $_POST["name"];


        $sql = $conn -> prepare("delete from user where name=?");
        $sql-> bind_param('s',$name);
        if($sql -> execute()){
            echo "Data Deleted successfully";
        }
        else {
            echo "Delete error";
        }

    }
?>
</body>
</html>