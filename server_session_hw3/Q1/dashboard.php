
<?php 
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Hello, <?php echo $_SESSION['name']?></p>
    </div>
    <div>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>