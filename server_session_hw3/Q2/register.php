<?php
session_start();
$fname = isset($_SESSION['fname']) ? $_SESSION['fname'] : '';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : '';
$pass = isset($_SESSION['pass']) ? $_SESSION['pass'] : '';
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
            <form>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="fname" id="formId1" value="<?php echo $fname; ?>"
                        readonly />
                    <label for="formId1">Full Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="formId2" value="<?php echo $email; ?>"
                        readonly />
                    <label for="formId2">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="uname" id="formId3" value="<?php echo $uname; ?>"
                        readonly />
                    <label for="formId3">UserName</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="pass" id="formId4" value="<?php echo $pass; ?>"
                        placeholder="Password" readonly />
                    <label for="formId4">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </form>
        </div>

    </main>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        header('Location:project_login.php');

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