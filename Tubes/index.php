<?php 
session_start();
if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
    require'functions.php';

    $jumlahDataPerHalaman = 3;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
    <style>
        * {
	        box-sizing: border-box;
        }
        body {
            font-family: poppins;
            font-size: 16px;
            color: black;
        }
        .container {
            background-color: white;
            margin: auto auto;
            padding: 40px;
            border-radius: 5px;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: auto;
            height: auto;
        }
        .container .header-text{
            font-size: 32px;
            font-weight: 600;
            padding-bottom: 30px;
            text-align: center;
        }
        a[name=logout], a[name=tambah] {
            font-family: sans-serif;
            font-size: 15px;
            background: #22a4cf;
            color: white;
            border-radius: 10px;
            padding: 12px 20px;
            margin-top: 10px;
            text-decoration: none;
        }
        a[name=disable-click]{
            pointer-events: none; 
            cursor: default;
            font-family: sans-serif;
            font-size: 15px;
            background: gray;
            padding: 7px 13px;
            margin-top: 10px;
            text-decoration: none; 
            color: white;
        }
        a[name=pagination]{
            font-family: sans-serif;
            font-size: 15px;
            background: #22a4cf;
            color: white;
            padding: 7px 13px;
            margin-top: 10px;
            text-decoration: none;
        }
        a[name=ubah]{
            font-family: sans-serif;
            font-size: 15px;
            background: green;
            color: white;
            border-radius: 10px;
            padding: 3px 14px;
            margin-top: 10px;
            text-decoration: none;
        }
        a[name=hapus]{
            font-family: sans-serif;
            font-size: 15px;
            background: red;
            color: white;
            border-radius: 10px;
            padding: 3px 14px;
            margin-top: 10px;
            text-decoration: none;
        }
        a[name=logout]:hover, a[name=tambah]:hover, a[name=pagination]:hover, a[name=ubah], a[name=hapus] {
            opacity:0.9;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <a name="logout" href="logout.php">Logout</a>

        <div class="header-text">
            Daftar Mahasiswa
        </div>
        <a name="tambah" href="tambah.php">Tambah data mahasiswa</a>
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
                <td><?= $i+$awalData ?></td>
                <td><a name="ubah" href="ubah.php?id=<?= $row["id"] ?>">ubah</a>  <a name="hapus" href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Apakah Yakin ingin menghapus data ini?')">hapus</a></td>
                <td><img src="gambar/<?= $row["gambar"] ?>" width="50"></td>
                <td><?= $row["nrp"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

        </table>
        <br>

        <!-- Pagination -->
        <?php if( $halamanAktif > 1 ) : ?>
            <a name="pagination" href="?halaman=<?= $halamanAktif - 1 ?>">&laquo; Prev</a>
        <?php else : ?>
            <a name="disable-click" href="">&laquo; Prev</a>
        <?php endif; ?>
        <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if( $i == $halamanAktif ) : ?>
                <a name="pagination" href="?halaman=<?= $i ?>" style="background: grey;"><?= $i ?></a>
            <?php else : ?>
                <a name="pagination" href="?halaman=<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if( $halamanAktif < $jumlahHalaman ) : ?>
            <a name="pagination" href="?halaman=<?= $halamanAktif + 1 ?>">Next &raquo;</a>
        <?php else : ?>
            <a name="disable-click" href="">Next &raquo;</a>
        <?php endif; ?>

</div>
</body>
</html>