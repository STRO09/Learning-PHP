<?php session_start();
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

        <div class="container p-5">
            <form method="POST">

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="fname" id="formId1" placeholder="" />
                    <label for="formId1">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="formId1" placeholder="" />
                    <label for="formId1">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="uname" id="formId1" placeholder="" />
                    <label for="formId1">UserName</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="pass" id="formId1" placeholder="" />
                    <label for="formId1">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>


            </form>
        </div>

    </main>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $_SESSION['fname'] = $_POST["fname"];
        $_SESSION['email'] = $_POST["email"];
        $_SESSION['uname'] = $_POST["uname"];
        $_SESSION['pass'] = $_POST["pass"];

        header('Location:register.php');

    }
    ?>
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