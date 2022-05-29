<?php 
    // $mahasiswa = [
    //     ["Dedi Mulyadi", "153040111", "Teknik Informatika", "dedimulyadi@yahoo.com"],
    //     ["Dodi Pamungkas", "153040112", "Teknik Informatika", "dedipamungkas@yahoo.com"],
    //     ["Ahmad Sobari", "153040113", "Teknik Informatika", "asobari@yahoo.com"]
    // ];

    // array associative

    $mahasiswa = [
        [
            "nama" => "Dedi Mulyadi",
            "nrp" => "153040111",
            "email" => "dedimulyadi@yahoo.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "dedi.jpg"
        ],
        [
            "nama" => "Dodi Pamungkas",
            "nrp" => "153040112",
            "email" => "dodipamungkas@yahoo.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "dodi.jpg"
        ],
        [
            "nama" => "Ahmad Sobari",
            "nrp" => "153040113",
            "email" => "asobari@yahoo.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "ahmad.png"
        ]
    ];
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

<?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="gambar/<?= $mhs["gambar"] ?>"></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>Jurusan : <?= $mhs["email"]; ?></li>
        <li>Email : <?= $mhs["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>    
</body>
</html>