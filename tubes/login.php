<?php 
include 'database.php'; 
session_start();
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id']; 
    $key = $_COOKIE['key'];
  
    ///ambil username
    $result = mysqli_query($koneksi, "SELECT username FROM users WHERE id_user = $id");
    $row = mysqli_fetch_assoc($result);
  
    //cek username
    if($key == hash('sha256', $row['username'])){
      $_SESSION['login'] = true;
    }
}
if (isset($_SESSION["login"])){
    header("location: admin/");
    exit;
}
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($connect, "SELECT*FROM users WHERE username='$username' and password='$password' and level = 'Admin'");

    if (mysqli_num_rows($sql)>0) {
        session_start();
        $_SESSION['username'] = $username;
        while($data = mysqli_fetch_array($sql)){
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
        }
        $_SESSION['status'] = "admin";
        if(isset($_POST["remember"])){
            //buat coookie
            setcookie('login', 'true', time()+ 60);
            setcookie('id', $data['id_user'], time()+60);
            setcookie('key', hash('sha256',$data['username']), time()+60);
        }
        header("location:admin/index.php");
    }else{
        header("location:index.php");	
    }
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    // $query = mysqli_query($connect,"SELECT*FROM users WHERE username= '$username' and password ='$password'");
    // $data = mysqli_fetch_array($query);
    // $_SESSION['username'] = $data['username'];
    // $_SESSION['level'] = "Admin";
    // if(isset($_POST["remember_me"])){
    //     //buat coookie
    //     //setcookie('login', 'true', time()+ 60);
    //     setcookie('id', $data['id_user'], time()+60);
    //     setcookie('key', hash('sha256',$data['username']), time()+60);
    // }
    // header("location: admin/");
    // exit;
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
    <style>
        nav{
            font-family: Apercu,Gill Sans MT,Gill Sans,Arial,sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            background-color: black;            
        }
        nav a, .navbar-nav a{
            color: white;        
        }
        nav a:hover, .navbar-nav a:hover{
            color: white;        
        }
        .text_banner{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Login Page</a>
        </div>
    </nav>
    <div class="container col-md-6"><br>
        <div class="card container-fluid"><br>
            <form action="" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="username">Username</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-9">                            
                            <input type="checkbox" name="remember" id="remember"> Remember Me
                        </div>
                    </div>
                </div><br>
                <div class="form-group text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <input type="submit" name="submit" value="Login" class="btn btn-primary col-md-2">
                        <div class="col-md-1"></div>
                        <button type="reset" class="btn btn-danger col-md-2">Discard</button>
                    </div><br>
                    <p>New here? <a href="register.php">Register Here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>