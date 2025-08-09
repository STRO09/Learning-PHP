<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="insert.php" aria-current="page">Insert
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="update.php">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="delete.php">Delete</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">View</a>
                    </li>
                   
                </ul>
                
            </div>
        </div>
    </nav>
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