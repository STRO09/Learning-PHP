<?php
include 'db.php';
session_start();
if (!isset($_SESSION["name"]))
    header("Location:login.php");

$blogid = $_GET["id"];

$result = $conn->prepare("select title, content,img from blog where id=?");
$result->bind_param('i', $blogid);
$result->execute();
$result->store_result();
$result->bind_result($oldtitle, $oldcontent, $oldimgname);
$result->fetch();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newtitle = $_POST["title"];
    $newcontent = $_POST["content"];

    $newblogimg = isset($_FILES["blog_img"]["name"]) ? $_FILES["blog_img"]["name"] : null;

    if (!empty($_FILES["blog_img"]["name"])) {
        $newblogimg = $_FILES["blog_img"]["name"];
        move_uploaded_file($_FILES["blog_img"]["tmp_name"], "uploads/blogs/" . $newblogimg);
    } else {
        $newblogimg = $oldimgname;
    }

    $sql = $conn->prepare("update blog SET title=?,content=?,img=? where id=?");
    $sql->bind_param(
        'sssi',
        $newtitle,
        $newcontent,
        $newblogimg,
        $blogid

    );
    if ($sql->execute()) {
        echo "<script>alert('Blog was updated!')</script>";
        header("Location:dashboard.php");
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
                <h2 class="text-center">Edit blog</h2>
                <div class="mb-3">
                    <label for="" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder=""
                        value="<?= $oldtitle ?>" required />

                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Content <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="content" id="" rows="10" aria-describedby="helpId"
                        placeholder="" required><?= $oldcontent ?></textarea>

                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Choose a picture to update:</label>
                    <input type="file" accept="image/*" class="form-control" name="blog_img" id=""
                        aria-describedby="helpId" placeholder="" />

                </div>

                <button type="submit" class="btn btn-success">
                    Confirm changes
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