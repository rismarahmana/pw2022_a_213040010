<?php
        
 $mahasiswa = [
    [
        "gambar" => "img/1.jpg",
        "nama" => "Risma Rahmana", 
        "npm" => "213040010", 
        "email" => "rismarahmana@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "img/1.jpg",
        "nama" => "Aufaa Husniati", 
        "npm" => "213040018", 
        "email" => "auffa@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "img/1.jpg",
        "nama" => "Syifa rizki", 
        "npm" => "213040005", 
        "email" => "syifa@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "img/1.jpg",
        "nama" => "Indrianti", 
        "jurusan" => "Teknik Informatika",
        "npm" => "213040034", 
        "email" => "indri@gmail.com", 
        
    ],
    [
      "gambar" => "img/nophoto.jpg",
      "nama" => "Narita Ratukuri", 
      "jurusan" => "Kedokteran",
      "npm" => "213040027", 
      "email" => "ratkur@gmail.com", 
      
  ],
  [
    "gambar" => "img/nophoto.jpg",
    "nama" => "Wahyu Ramadhan", 
    "jurusan" => "Perencanaan Wilayah Kota",
    "npm" => "213020031", 
    "email" => "whyrft@gmail.com", 
    
],
[
  "gambar" => "img/nophoto.jpg",
  "nama" => "Dida Nuur Agustita", 
  "jurusan" => "Pendidikan Bahasa Sunda",
  "npm" => "2021040045", 
  "email" => "dudeid@gmail.com", 
  
],
[
  "gambar" => "img/nophoto.jpg",
  "nama" => "Audys Lasalsa", 
  "jurusan" => "Teknik Arsitektur",
  "npm" => "221210980119", 
  "email" => "abudes@gmail.com", 
  
],
[
  "gambar" => "img/nophoto.jpg",
  "nama" => "Tedhy", 
  "jurusan" => "Teknik Kimia",
  "npm" => "2121200342", 
  "email" => "tedh@gmail.com", 
  
],
[
  "gambar" => "img/nophoto.jpg",
  "nama" => "Farid", 
  "jurusan" => "Pendidikan Olahraga",
  "npm" => "2131209003", 
  "email" => "rid@gmail.com", 
  
],
];


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>

  <div class="container">
      <h1>Daftar Mahasiswa</h1>

      <table class="table">
         <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Email</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
  
  <?php  $no = 1;
  foreach($mahasiswa as $mhs) { ?>
    <tr class="align-middle">
      <th scope="row"><?= $no++; ?></th>
      <td>
        <img src="<?= $mhs["gambar"]; ?>
        width="50px" class="rounded-circle">
      </td>
      <td><?= $mhs["nama"] ?></td>
      <td><?= $mhs["npm"] ?></td>
      <td><?= $mhs["email"] ?></td>
      <td><?=$mhs["jurusan"] ?></td>
      <td>
          <a href="" class="btn badge bg-warning">edit</a>
          <a href="" class="btn badge bg-danger">delete</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
 </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html> 
