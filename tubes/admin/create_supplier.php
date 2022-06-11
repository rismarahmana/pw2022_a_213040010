<?php
include '../database.php';
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $id_supplier = $_POST['id_supplier'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $query = mysqli_query($connect,"INSERT INTO supplier(id_supplier, nama, alamat, kontak) VALUES ('$id_supplier','$nama','$alamat','$kontak')");
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
                        <input type="text" name="id_supplier" id="id_supplier" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Nama Supplier">Nama Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Alamat Supplier">Alamat Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Kontak Supplier">Kontak Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kontak" id="kontak" class="form-control" min=0 required>
                    </div>
                </div><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </form><br>
        </div>
    </div>
</body>
</html>
