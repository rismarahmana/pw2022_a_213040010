<?php
 // Date
 // untuk menampilkan tanggal dengan format tertentu
 // echo date("l, d-M-Y");

 // Time
 // UNIX Timestamp / EPOUCH time
 // detik yang sudah berlalu yang sudah berlalu sejak januari 1970
 // echo time();
 // echo date("l", time()-60*60*24*100);

 // mktime
 // membuat sendiri detik
 // mktime(0,0,0,0,0,0)
 // jam, menit, detik, bulan, tahun
 // echo date("l", mktime(0,0,0,8,25,1985));

 // strtotime
 // echo strtotime("l", strtotime("25 aug 1985"));
?>