<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="GET">
    Email: <input type="email" name="mail"><br>
    Password: <input type="password" name="pass"><br>
    Subscribe to the NewsLetter? <input type="checkbox" name="sub" value="Yes">
    <br>
    <button type="submit">Submit</button>
</form>

<?php 
if($_SERVER["REQUEST_METHOD"]==="GET") 
    {
        $email = $_GET["mail"];
        $password = $_GET["pass"];
        $isSubscribed = isset($_GET["sub"])?"subscribed":"not subscribed";

        echo "Thank you for signing up, $email. You have $isSubscribed to the NewsLetter.";
    }
?>
</body>
</html>