<?php 
session_start();?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>
<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .main {
    width: 500px;
    height: 500px;
    margin-top: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid black;
    border-radius: 6px;
    box-shadow: 0px 10px 30px 0px;

  }

  .d {
    padding: 10px;
  }
</style>

<body>
  <div class="main">

    <form action="" method="POST">
      <div class="d">Username: <input type="text" name="uname"><br></div>
      <div class="d"> Password: <input type="text" name="pass"><br></div>
      <div class="d"> <button type="submit">Login</button>
      </div>
    </form>
  </div>
  <?php
  if($_SERVER["REQUEST_METHOD"] ==="POST"){
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    if($uname=="admin" && $pass == "admin"){
      $_SESSION['name'] = $uname;
      header('Location:dashboard.php');
    }
    else {
      echo "<script>alert('Wrong credentials')</script>";
    }
  }
  ?>
</body>

</html>