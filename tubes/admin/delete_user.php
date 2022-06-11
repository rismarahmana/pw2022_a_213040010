<?php 
include '../database.php';
$id = $_GET['id'];
$query = mysqli_query($connect,"DELETE FROM users WHERE id_user='$id'");
header('Location: users.php');
exit;