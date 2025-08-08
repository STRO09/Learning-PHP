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
    Password: <input type="password" name="pass"> <br>
    Subscribe to the newsLetter? <input type="checkbox" name="subscribe" id="" value="Yes"><br>
    <button type="submit">Submit</button>

    </form>


    <?php 

if($_SERVER["REQUEST_METHOD"]==="GET"){
    $Email = $_GET["mail"];
    $password = $_GET["pass"];
    $isSubscribed = isset($_GET["subscribe"])?"Subscribed":"Not Subscribed";


    echo "Thank you for signing up, $Email. You have $isSubscribed to the newsLetter";
}
?>
</body>
</html>