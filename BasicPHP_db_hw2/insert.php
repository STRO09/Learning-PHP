<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Insert Employee</h2>
    <form action="" method="POST">
        Name: <input type="text" name="name"><br>
        Position: <input type="text" name="job"><br>
        Salary: <input type="number" name="sal"><br>
        <button type="submit">Insert</button>
    </form>

    <a href="actions.php">Back to actions page</a>

    <?php

    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $position = $_POST["job"];
        $salary = $_POST["sal"];

        $sql = $conn->prepare("insert into emp(name,position,salary) values(?,?,?)");
        $sql->bind_param('ssd', $name, $position, $salary);
        if ($sql->execute()) {
            echo "<script>alert('Data inserted successfully')</script> ";
        } else {

            echo "<script>alert('Data not inserted ')</script>";
        }
    }

    ?>
</body>

</html>