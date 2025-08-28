<?php
require 'db.php';
session_start();
$blogid = $_GET["id"];

$sql = $conn -> prepare("delete from blog where id=? ");
$sql->bind_param('i',$blogid);
$sql->execute();

header("Location:dashboard.php");

?>
