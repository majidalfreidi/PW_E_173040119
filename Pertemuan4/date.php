<?php 
// Date 
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
// UNIX timestamp / EPOCH time

// echo time();
// echo date("l", time()-60*60*24*100);

// MKTIME
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
echo strtotime("25 aug 1985");
?>