<?php 
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
    <title>Latihan GET</title>

</head>
<body>
<h1>Daftar Mahasiswa</h1>

<ul>
<?php foreach($mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
        <?php endforeach; ?>    
</ul>
</body>
</html>
