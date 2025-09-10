<?php
include 'db.php';
session_start();

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
        <style>
            .c:hover {
                transform: translateY(-5px);
            }
        </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <?php
            if (isset($_SESSION["name"])) {
                $sql = $conn->prepare("select pfp,id from user where uname=?");
                $sql->bind_param('s', $_SESSION["name"]);
                $sql->execute();
                $sql->store_result();
                $sql->bind_result($img_src, $uid);
                $sql->fetch();
            }

            if (empty($img_src)) {
                $img_src = "https://www.shutterstock.com/image-vector/blank-avatar-photo-place-holder-600nw-1095249842.jpg";
            } else {
                $img_src = "uploads/pfps/" . $img_src;
            }

            ?>
            <div class="container-fluid d-flex align-items-center">
                <!-- Profile section -->
                <div class="d-flex flex-column">
                    <img src="<?php echo $img_src ?>" height="40" width="40" class="rounded-circle" alt="">
                    <p class="mx-1"><?php echo isset($_SESSION["name"]) ? $_SESSION["name"] : "Not logged in" ?></p>
                </div>

                <!-- Add Blog button -->
                <button type="button" class="btn btn-primary mx-3 mb-4">
                    <a href="addblog.php" style="text-decoration: none;color:#fff
                    ">Add blog</a>
                </button>

                <!-- Logout button pushed to the far right -->
                <button type="button" class="btn btn-danger ms-auto mb-4">
                    <a href="logout.php" style="text-decoration: none;color:#fff
                    ">Logout</a>
                </button>
            </div>
        </nav>
    </header>
    <main>
        <?php
        $result = $conn->prepare("select blog.*,user.uname from blog join user on blog.user_id=user.id");
        $result->execute();
        $result->store_result();
        $result->bind_result($blog_id, $title, $content, $blogimg, $user_id, $created_at, $uname); // Adjust columns as per your table
        
        ?>
        <div class="container my-5 d-flex flex-wrap justify-content-center">
            <?php
            while ($result->fetch()) {
                ?>
                <div class="card col-3 m-3 p-2 c">
                    <?php if ($blogimg != null) { ?>
                        <img class="card-img-top" src="<?= 'uploads/blogs/' . $blogimg ?>" alt="Title" height="300px"
                            width="100px" />
                    <?php } ?>
                    <div class="card-body">
                        <h4 class="card-title"> <?= $title ?> </h4>
                        <p class="card-text"><?= $content ?></p>
                    </div>
                    <?php
                    if ($uid == $user_id) {
                        ?>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary ms-3  me-5">
                                <a href="edit.php?id=<?=$blog_id ?>" style="text-decoration: none;color:#fff">Edit</a>
                            </button>

                            <button type="button" class="btn btn-danger ms-5">
                                <a href="delete.php?id=<?=$blog_id ?>" style="text-decoration: none;color:#fff">Delete</a>
                            </button>

                        </div><?php
                    }
                    ?>
                </div>

                <?php
            }
            ?>
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