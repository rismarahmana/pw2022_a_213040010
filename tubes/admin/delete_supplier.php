<?php
include '../database.php';
$id = $_GET['id'];
$query = mysqli_query($connect,"DELETE FROM `supplier` WHERE id_supplier = '$id'");
if ($query) {
    header('Location: supplier.php');
    exit;
}
?>