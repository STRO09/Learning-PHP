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
        Address: <input type="text" name="add"> <br>
        Salary: <input type="text" name="sal"> <br>
        <button type="submit">Insert</button>
    </form>


    <?php
    include 'db.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $address = $_POST["add"];
        $salary = $_POST["sal"];

        $sql = $conn->prepare("insert into user values(?,?,?)");
        $sql->bind_param('ssd', $name, $address, $salary);
        if ($sql->execute()) {
            echo "Data isnerted successfully";
        } else {
            echo "Insert error";
        }

    }
    ?>
</body>

</html>