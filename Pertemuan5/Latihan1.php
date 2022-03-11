<?php 
    // Array
    // variable yang boleh memiliki banyak nilai

    // membuat array
    // cara lama
    $hari = array("senin", "selasa", "rabu");
    // cara baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "Tulisan", false];

    // Menampilkan array
    // var_dump / print_r
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";
    // menampilkan 1 array
    // echo arr1[0];

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "kamis";
    $hari[] = "jumat";
    echo "<br>";
    var_dump($hari);
?>