<?
//  ARRAY
//  Array adalah variable yang dapat menampung lebih dari satu nilai sekaligus

//  $hari1 = "Senin";
//  $hari2 = "Selasa";

//  $bulan1 = "Januari";
//  $bulan12 = "Desember";

//  $mahaiswa213040010 = "Risma";

//  Membuat array
//  $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; // cara baru
//  $bulan = array("Januari", "Februari", "Maret", "April"); // cara lama
//  $myArray = [100, "Risma", true];


//  Mencetak Array
//  Mencetak 1 elemen / nilai mengggunakan indexnya, index dimulai dari 0
//  echo $hari[1];
//  echo "<br>";
//  echo $bulan[2];
//  echo "<hr>";

//  mencetak semua elemen pada aray
//  var_dump() atau print_r()
//  khusus untuk debugging
//  var_dump($hari);
//  echo "<br>";
//  print_r($bulan);
//  echo "<hr>";

//  mencetak mengunakan lopping
//  for
//  for ($i = 0; $i < count($hari); $i++) {
//      echo $hari[$i];
//      echo "<br>";
//  }

//  echo "<hr>";

//  foreach (khusus untuk array)
//  foreach($bulan as $b) {
//      echo $b;
//      echo "<br>";
//  }

//  foreach ($hari as $a => $b) {
//      echo "Key: $a, Value: $b";
//      echo "<hr>";
//  }

//   memanipulasi isi array
//   menambah elemen baru di akhir array
//   $hari[] = "Sabtu";
//   $hari[count($hari)] = "Minggu";
//   var_dump($hari);

// BATAS PERTEMUAN OFFLINE

// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh menggunakan tipe data yang berbeda
// pasangan antara key dan value
// key nya adalh index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false ];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan elemen pada array
// echo $arr1[0];
// echo "<br>";
// ech $bulan[1]

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>
<!-- pertemuan offline -->
<!-- <div style="height:1000px"></div> -->