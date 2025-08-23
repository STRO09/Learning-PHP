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
    <h2>HOme</h2>
    <p>Hii, <?php echo $_SESSION["name"] ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>