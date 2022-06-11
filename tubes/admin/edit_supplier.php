<?php
include '../database.php';
$ID = $_GET['id'];
$query = mysqli_query($connect,"SELECT*FROM SUPPLIER WHERE ID_SUPPLIER = '$ID'");
$DATA = mysqli_fetch_array($query);
$nama = $DATA['nama'];
$id_supplier = $DATA['id_supplier'];
$alamat = $DATA['alamat'];
$kontak = $DATA['kontak'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $id_supplier = $_POST['id_supplier'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $query = mysqli_query($connect,"UPDATE supplier SET nama = '$nama', alamat='$alamat', kontak='$kontak' WHERE id_supplier = '$id_supplier'");
    if ($query) {
        header('Location: supplier.php');
        exit;
    }
}
require_once 'header.php';

?>
    <div class="container text-center"><br>
        <div class="container card col-md-9"><br>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3">
                        <label for="Kode Supplier">Kode Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <input value="<?= $id_supplier ?>" type="text" readonly name="id_supplier" id="id_supplier" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Nama Supplier">Nama Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <input value="<?= $nama ?>" type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Alamat Supplier">Alamat Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <input value="<?= $alamat ?>" type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Kontak Supplier">Kontak Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <input value="<?= $kontak ?>" type="text" name="kontak" id="kontak" class="form-control" min=0 required>
                    </div>
                </div><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </form><br>
        </div>
    </div>
</body>
</html>
