<?php
include '../database.php';
$id = $_GET['id'];
$query = mysqli_query($connect,"DELETE FROM `produk` WHERE id_produk = '$id'");
if ($query) {
    header('Location: produk.php');
    exit;
}
?>