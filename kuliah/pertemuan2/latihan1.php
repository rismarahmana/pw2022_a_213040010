<?php
    // Pertemuan 2, membahas sintaks PHP
    // Nilai: integer, string, boolean
    echo 10;
    echo "<hr>";

    // Variabel
    // wadah untuk menyimpan NILAI
    // namanya bebas, tidak boleh diawali angka
    // tidak boleh ada spasi
    $nama = 'Risma';
    echo $nama;
    echo "<br>";
    // bisa ditimpa / overwrite
    $nama = 'Rahmana';
    echo $nama;
    echo "<hr>";

    // string 
    // '', ""
    echo "Jum'at";
    echo "<br>";
    // escape character
    // \
    echo 'Risma : "Jum\'at"';
    echo "<br>";
    echo "Risma : \"Jum'at\"";
    echo "<br>";

    // Interpolasi
    // Mencetak isi variabel
    // hanya digunakan oleh ""
    echo "Halo nama saya $nama" ;
    echo "<br>";
    $price = 200;
    echo "Price: $$price";
    echo "<hr>";

    // OPERATOR
    // aritmatika
    // +, -, *, /, % (modulo / modulus / sisa bagi)
    echo (1 + 2) * 3 - 4; // KaBaTaKu
    echo "<br>";
    $alas = 10;
    $tinggi = 20;
    $luas_segi_tiga = ($alas * $tinggi) / 2;
    echo $luas_segi_tiga;
    echo "<br>";
    echo 3 % 2;
    echo "<hr>";

    // concat
    // penggabung string
    // .
    $nama_depan = 'Risma';
    $nama_belakang = 'Rahmana';
    echo $nama_depan . " " . $nama_belakang;
    echo "<hr>";

    // perbandingan
    // <, >, <=, >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    echo 10 == "10";
    echo "<hr>";

    // Identitas / strict comparison
    // ===, !==
    echo 10 === "10";
    echo "<hr>";

    // Increment / Decrement
    // Penambahan / pengurangan 1
    // ++, --
    $x = 10;
    echo ++$x;
    echo "<br>";
    echo $x++;
    echo "<hr>"; 
?>

<?php   
    // pertemuan 2 - php dasar
    // sintaks php

    // standar, output
    // echo, print
    // print_r
    // var_dump

    // penulisan sintaks php
    // 1. php di dalam html
    // 2. html di dalam php

    // Variabel dan Tipe Data
    // Variabel
    // tidak boleh diawali dengan angka, tapi boleh mengandung angka
    // $nama = "Risma Rahmana";
    // echo 'Halo, nama saya $nama';

    // operator
    // aritmatika
    // + - * / %
    // $x = 10;
    // $y = 20;
    // echo $x * $y;

    // penggabung string / concatetion / concat
    // .
    // $nama_depan = "Risma";
    // $nama_belakang = "Rahmana";
    // echo $nama_depan . " " . $nama_belakang;

    // assignment
    // =, +=, -=, *=, /=, %=, .=
    // $x = 1;
    // $x += 5;
    // echo $x;
    // $nama = "Risma";
    // $nama .= " ";
    // $nama .= "Rahmana";
    // echo $nama;

    // perbandingan
    // <, >, <=, >=, ==
    // var_dump(1 == "1");

    // identitas
    // ===, !==
    // var_dump(1 === "1");

    // logika
    // &&, ||, !
    // $x = 30;
    // var_dump($x < 20 || $x % 2 == 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    
</body>
</html>

    