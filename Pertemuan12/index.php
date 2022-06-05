<?php 
    require'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa");

    if(isset($_POST["cari"]) ){
        $mahasiswa = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <br>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus autocomplete="off" placeholder="Cari disini.....">
        <button name="cari">Cari!</button>
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

    <?php $i=1; ?>    
    <?php foreach( $mahasiswa as $row ) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> | <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Apakah Yakin ingin menghapus data ini?')">hapus</a></td>
            <td><img src="gambar/<?= $row["gambar"] ?>" width="50"></td>
            <td><?= $row["nrp"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

    </table>
    
</body>
</html>