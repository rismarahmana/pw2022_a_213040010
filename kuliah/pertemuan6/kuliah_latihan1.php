<?php
 // array assosiative
 // array yang indexnya berupa string yang ber asosiasi dengan nilainya
 // index dimulai dari 0
 
 $mahasiswa = [
    [
        "gambar" => " ",
        "nama" => "Risma Rahmana", 
        "npm" => "213040010", 
        "email" => "rismarahmana@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => " ",
        "nama" => "Aufaa Husniati", 
        "npm" => "213040018", 
        "email" => "auffa@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => " ",
        "nama" => "Syifa rizki", 
        "npm" => "213040005", 
        "email" => "syifa@gmail.com", 
        "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => " ",
        "nama" => "Indrianti", 
        "jurusan" => "Teknik Informatika",
        "npm" => "213040034", 
        "email" => "indri@gmail.com", 
        
    ]
 ];
 // var_dump($mahasiswa[2]["email"]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
 <ul>
    <li>Nama: <?php echo  $mhs["nama"] ?> </li>
    <li>NPM: <?php echo $mhs["npm"] ?> </li>
    <li>Email: <?php echo  $mhs["email"] ?> </li>
    <li>Jurusan: <?php echo $mhs["jurusan"] ?> </li>
 </ul>
<?php } ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: salmon;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform:rotate(360deg);
            border-radius: 50px;
        }
        .clear { clear: both; 
        }
    </style>
</head>

<body>
     <?php
     $angka = [
         [1, 2, 3],
         [4, 5, 6],
         [7, 8, 9]
     ]

     ?>

     <?php foreach($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><? $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
     <?php endforeach; ?>

</body>
</html>