<?php
session_start();
if(empty($_SESSION['status'])){
    header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        .list_item a{
            color: white;
            text-decoration: none;
        }
        .d-flex .p-2 a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar justify-content-between container-fluid">
        <a class="navbar-brand">RIFPHONE STORE</a>
        <?php if ($_SESSION['status']!="admin") {
            echo '
            <div class="p-2"><a href="produk.php" class="nav-link disabled">Home</a></div>
            <div class="p-2"><a href="produk.php" class="nav-link disabled">Produk</a></div>
            <div class="p-2"><a href="" class="nav-link disabled">Users</a></div>
            <div class="p-2"><a href="" class="nav-link disabled">Supplier</a></div>
            ';
        } else { ?>
        <div class="d-flex flex-row">
            <div class="p-2"><a href="index.php" class="nav-link">Home</a></div>
            <div class="p-2"><a href="produk.php" class="nav-link">Produk</a></div>
            <div class="p-2"><a href="users.php" class="nav-link">Users</a></div>  
            <div class="p-2"><a href="supplier.php" class="nav-link">Supplier</a></div>      
        </div>
        <div class="list_item">
            <input type="text" placeholder="Search..." id="search" name="search">
            <a href="../logout.php"><i class="fa fa-user" style="color:white"></i><?= $_SESSION['username']; ?>  Log Out</a>
        </div>
        <?php }?>
    </nav>