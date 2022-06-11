<?php
 // Studi kasus
 
 $mahasiswa = [
     ["Risma Rahmana", "213040010", "rismarahmana@gmail.com", "Teknik Informatika"],
     ["Aufaa Husniati", "213040018", "auffa@gmail.com", "Teknik Informatika"],
     ["Syifa rizki", "213040005", "syifa@gmail.com", "Teknik Informatika"],
 ];

?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo  $mhs[0] ?> </li>
    <li>NPM: <?php echo $mhs[1] ?> </li>
    <li>Email: <?php echo  $mhs[2] ?> </li>
    <li>Jurusan: <?php echo $mhs[3] ?> </li>
</ul>
<?php } ?>

<?php
$mahasiswa = ["Risma Rahmana", "213040010", "Teknik Informatika", "rismarahmana@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<ul>
   <li><?= $mahasiswa[0]; ?></li>
   <li><?= $mahasiswa[1]; ?></li>
   <li><?= $mahasiswa[2]; ?></li>
   <li><?= $mahasiswa[3]; ?></li>
</ul>


</body>
</html>