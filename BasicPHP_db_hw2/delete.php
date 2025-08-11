<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Delete Employee</h2>
    <form action="" method="POST">
        ID: <input type="number" name="id"><br>
        <button type="submit">Delete</button>
    </form>

    <a href="actions.php">Back to actions page</a>

    <?php

    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];

        $sql = $conn->prepare("DELETE FROM EMP where id=?");
        $sql->bind_param('i', $id);
        if ($sql->execute()) {
            echo "<script>alert('Data deleted successfully')</script>";
        } else {

            echo "<script>alert('Data not deleted')</script>";
        }
    }

    ?>
</body>

</html>