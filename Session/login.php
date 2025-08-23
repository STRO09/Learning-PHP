<?php
session_start();
include 'db.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Login</h2>
    <form action="" method="POST">
        Name: <input type="text" name="user"><br>
        Password: <input type="text" name="pass"><br>
        <button type="submit">Login</button>

    </form>


    <?php



    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["user"];
        $pass = $_POST["pass"];

        if (empty($name)) {
            echo "<script> alert('NAME IS COMPULSORY')</script>";
            exit;
        }

        $sql = $conn->prepare("select password from session where name=?");
        $sql->bind_param('s', $name);
        $sql->execute();

        $sql->store_result();
        $sql->bind_result($fetchedpass);

        if ($sql->fetch() && password_verify($pass, $fetchedpass)) {
            $_SESSION["name"]=$name;
            header('Location:home.php');
        } else {

            echo "Password is wrong";
        }

    }
    ?>
</body>

</html>