<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Register</h2>
    <form action="" method="POST">
        Name: <input type="text" name="user"><br>
        Password: <input type="text" name="pass"><br>
        Confirm Password: <input type="text" name="cpass"><br>
        <button type="submit">Register</button>

    </form>


    <?php

include 'db.php';


if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $name = $_POST["user"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    if(empty($name)){
        echo "<script> alert('NAME IS COMPULSORY')</script>";
        exit;
    }

    if($pass!=$cpass) {
        echo "<script> alert('passwords are not matching')</script>";
        exit;
    }

    $passhash = password_hash($pass,PASSWORD_DEFAULT);

    $sql = $conn -> prepare("insert into session(name,password) values(?,?)");
    $sql->bind_param('ss',$name,$passhash);
    if($sql->execute()){
        header('Location:login.php');
    }
}
    ?>
</body>

</html>