<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Update Employee</h2>
    <form action="" method="POST">
        ID: <input type="number" name="id"><br>
        Salary: <input type="number" name="sal"><br>
        <button type="submit">Update</button>
    </form>

    <a href="actions.php">Back to actions page</a>

    <?php

    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $salary = $_POST["sal"];

        $sql = $conn->prepare("UPDATE emp SET salary=? where id=?");
        $sql->bind_param('di', $salary,$id);
        if ($sql->execute()) {
            echo "<script>alert('Data updated successfully')</script>";
        } else {

            echo "<script>alert('Data not updated')</script>";
        }
    }

    ?>
</body>

</html>