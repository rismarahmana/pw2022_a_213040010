<?php
include '../database.php';
if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $merk_produk = $_POST['merk_produk'];
    $jenis_produk = $_POST['jenis_produk'];
    $kode_produk = $_POST['kode_produk'];
    $supplier = $_POST['supplier'];
    $gambar_produk;
    $deskripsi;
    if (!empty($_FILES['gambar_produk'])) {        
        $gambar_produk = $_FILES['gambar_produk']['name'];
        $ekstensi_diperbolehkan	= array('png','jpg');
        // $nama_gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar_produk);
        $ekstensi = strtolower(end($x));
        $ukuran	= $_FILES['gambar_produk']['size'];
        $file_tmp = $_FILES['gambar_produk']['tmp_name'];

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1100000){			
                move_uploaded_file($file_tmp, '../image/'.$gambar_produk);
            }
        }
    }else{
        $gambar_produk = "-";
    }
    if (!empty($_FILES['deskripsi'])) {        
        $deskripsi = $_POST['deskripsi'];        
    }else{
        $deskripsi = "-";
    }
    $query = mysqli_query($connect,"INSERT INTO produk(id_produk, nama_produk, merk_produk, jenis_produk, harga_produk, deskripsi, gambar_produk,id_supplier) VALUES ('$kode_produk','$nama_produk','$merk_produk','$jenis_produk','$harga_produk','$deskripsi','$gambar_produk','$supplier')");
    if ($query) {
        header('Location: produk.php');
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
                        <label for="Kode Produk">Kode Produk</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="kode_produk" id="kode_produk" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Nama Produk">Nama Produk</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Merk Produk">Merk Produk</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="merk_produk" id="merk_produk" class="form-control" required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="jenis Produk">Jenis Produk</label>
                    </div>
                    <div class="col-md-9">
                        <select type="text" name="jenis_produk" id="jenis_produk" class="form-control" required>
                            <option value="Handphone">Handphone</option>
                            <option value="Tablet">Tablet</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Accessories">Accessories</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="supplier">Supplier</label>
                    </div>
                    <div class="col-md-9">
                        <select type="text" name="supplier" id="supplier" class="form-control" required>
                            <?php 
                            $query = mysqli_query($connect,"SELECT*FROM SUPPLIER");
                            while($data = mysqli_fetch_array($query)){?>
                                <option value="<?= $data['id_supplier'] ?>"><?= $data['nama'] ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Harga Produk">Harga Produk</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" name="harga_produk" id="harga_produk" class="form-control" min=0 required>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="Deskripsi Produk">Deskripsi Produk</label>
                    </div>
                    <div class="col-md-9">
                        <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="3"></textarea>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="gambar Produk">Gambar Produk</label>
                    </div>
                    <div class="col-md-9">
                        <input type="file" name="gambar_produk" id="gambar_produk" class="form-control">
                    </div>
                </div><br>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary">
            </form><br>
        </div>
    </div>
</body>
</html>
