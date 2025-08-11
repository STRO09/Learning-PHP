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
        Email: <input type="text" name="mail"><br>
        Position: <input type="text" name="title"><br>
        Password: <input type="text" name="pass"><br>
        Confirm Password: <input type="text" name="cpass"><br>
        <button type="submit">Register</button>

    </form>


    <?php

include 'db.php';


if($_SERVER["REQUEST_METHOD"]==="POST")
{
    $name = $_POST["user"];
    $email = $_POST["mail"];
    $title = $_POST["title"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    if(empty($name)||empty($email)||empty($title)||empty($pass)||empty($cpass)){
        echo "<script> alert('ALL FIELDS ARE COMPULSORY')</script>";
        exit;
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       echo "<script> alert('Please enter valid email format')</script>";
        exit;  
    }

    if($pass!=$cpass) {
        echo "<script> alert('Passwords are not matching')</script>";
        exit;
    }

    $passhash = password_hash($pass,PASSWORD_DEFAULT);

    $sql = $conn -> prepare("insert into emp_register(name,email,password,position) values(?,?,?,?)");
    $sql->bind_param('ssss',$name,$email, $passhash,$title);
    if($sql->execute()){
        echo "<script> alert('EMp registered successfully')</script>";
    }
    else {
        echo "<script> alert('Email already exists')</script>";
        exit;
    }
}
    ?>
</body>

</html>