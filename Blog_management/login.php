<?php
require 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];


    $sql = $conn->prepare("select id, password,uname from user where email = ?");
    $sql->bind_param(
        's',
        $mail,

    );
    $sql->execute();
    $sql->store_result();
    $sql->bind_result($id, $passhash, $uname);
    $sql->fetch();
    if (password_verify($pass, $passhash)) {
        echo "<script>alert('Login successful')</script>";
        $_SESSION["name"] = $uname;
        header("Location:dashboard.php");
    } else {
        echo "<script>alert('Wrong credentials. Login failed'); window.location.href= 'Login.php';</script>";

    }
}

?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container pt-5 px-5 pb-2" style="max-width:500px; margin:150px auto; box-shadow: 0 0 25px rgba(0, 0, 0,0.1); border-radius: 1rem;">
            <form action="" method="post" enctype="multipart/form-data">
                <h2 class="text-center text-primary">Login form</h2>

                <div class="mb-3">
                    <label for="" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="mail" id="" aria-describedby="helpId" placeholder=""
                        required />

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="pass" id="" aria-describedby="helpId" placeholder=""
                        required />

                </div>
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">Don't have an account? <a href="Register.php">Sign up</a></label>
                </div>


            </form>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>