<?php 
include '../database.php';
$id = $_GET['id'];
$query = mysqli_query($connect,"SELECT*FROM users WHERE id_user='$id'");
$data = mysqli_fetch_array($query);
$username = $data['username'];
$password = $data['password'];
    
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($connect,"UPDATE users SET username='$username', password='$password' where id_user = '$id'");
    if ($query) {
        header('Location: users.php');
        exit;
    }
}
require_once 'header.php';
?>

    <div class="container col-md-6"><br>
        <div class="card container-fluid"><br>
            <form action="" method="post">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="username">Username</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="username" id="username" value="<?= $username ?>" class="form-control">
                        </div>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-md-9">
                            <input type="password" name="password" id="password" value="<?= $password ?>" class="form-control">
                        </div>
                    </div>
                </div><br>
                <div class="form-group text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <input name="submit" type="submit" class="btn btn-primary col-md-2" value="Edit User ">
                        <div class="col-md-1"></div>
                        <button type="reset" class="btn btn-danger col-md-2">Discard</button>
                    </div><br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>