<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uname = $_POST["uname"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    if ($pass != $cpass) {
        echo "<script>alert('Passwords must match')</script>";
        exit;
    }
    $password = password_hash($pass,PASSWORD_DEFAULT);
    $pfpname = isset($_FILES["pfp"]["name"]) ? $_FILES["pfp"]["name"] : null;

    if (isset($_FILES["pfp"]["name"])) {
        move_uploaded_file($_FILES["pfp"]["tmp_name"], "uploads/pfps/".$_FILES["pfp"]["name"]);
    }

    $sql = $conn->prepare("insert into user(uname,email,phone,password,pfp) values(?,?,?,?,?)");
    $sql->bind_param(
        'ssdss',
        $uname,
        $mail
        ,
        $phone,
        $password,
        $pfpname
    );
    if($sql->execute()){
       echo "<script>alert('Registration was successful!')</script>"; 
       header("Location:login.php");
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
        <div class="container p-5 ">
            <form action="" method="post" enctype="multipart/form-data">
                <h2 class="text-center">Register form</h2>
                <div class="mb-3">
                    <label for="" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" pattern="[A-Za-z]+" class="form-control" name="uname" id=""
                        aria-describedby="helpId" placeholder="" required />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="mail" id="" aria-describedby="helpId" placeholder=""
                        required />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Phone <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" name="phone" id="" aria-describedby="helpId" placeholder=""
                        required />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="pass" id="" aria-describedby="helpId" placeholder=""
                        required />

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="cpass" id="" aria-describedby="helpId"
                        placeholder="" required />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Choose your profile photo:</label>
                    <input type="file" accept="image/*" class="form-control" name="pfp" id="" aria-describedby="helpId"
                        placeholder="" />

                </div>

                <button type="submit" class="btn btn-success">
                    Register
                </button>


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