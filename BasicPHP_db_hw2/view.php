<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>View Employees</h2>
    <?php

    include 'db.php';
    $sql = $conn->query("select * from emp");
    ?>

    <table>

        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Salary</th>
        </thead>

        <tbody>
            <?php
            while ($row = $sql->fetch_assoc()) { ?>

                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["Position"]; ?></td>
                    <td><?php echo $row["Salary"]; ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>


    <a href="actions.php">Back to actions page</a>

</body>

</html>