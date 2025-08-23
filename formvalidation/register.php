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
        Password: <input type="text" name="pass"><br>
        Confirm Password: <input type="text" name="cpass"><br>
        <button type="submit">Register</button>

    </form>


    <?php

    include 'db.php';


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["user"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];

        if (empty($name) || empty($mail) || empty($pass) || empty($cpass)) {
            echo "<script> alert('All fields are compulsory')</script>";
            exit;
        }

        if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
           echo "<script> alert('Email Format is invalid')</script>"; 
           exit; 
        }

        if ($pass != $cpass) {
            echo "<script> alert('Passwords are not matching')</script>";
            exit;
        }

        $passhash = password_hash($pass, PASSWORD_DEFAULT);

        $sql = $conn->prepare("insert into session(name,password) values(?,?)");
        $sql->bind_param('ss', $name, $passhash);
        if ($sql->execute()) {
            echo "Data inserted successfully";
        }
    }
    ?>
</body>

</html>