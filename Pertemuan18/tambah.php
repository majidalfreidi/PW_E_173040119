<?php 
session_start();
if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
require 'functions.php';
$db = mysqli_connect("localhost", "root", "", "PW_E_173040119");

if(isset($_POST["submit"])){
    
    if( tambah($_POST) > 0 ){
        echo "<script>alert('Data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan!');
        document.location.href = 'index.php';
    </script>";
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>

    <style>
        * {
	        box-sizing: border-box;
        }
        body {
            font-family: poppins;
            font-size: 16px;
            color: #fff;
        }
        .form-box {
            background-color: rgba(0, 0, 0, 0.5);
            margin: auto auto;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px #000;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 500px;
            height: 500px;
        }
        .form-box .header-text {
            font-size: 32px;
            font-weight: 600;
            padding-bottom: 30px;
            text-align: center;
        }
        .form-box input {
            margin: 10px 0px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 18px;
            font-family: poppins;
        }
        .form-box input[type=checkbox] {
            display: none;
        }
        .form-box label {
            position: relative;
            margin-left: 5px;
            margin-right: 10px;
            top: 5px;
            display: inline-block;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        .form-box label:before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 5px;
            position: absolute;
            left: 0;
            bottom: 1px;
            background-color: #ddd;
        }
        .form-box input[type=checkbox]:checked+label:before {
            content: "\2713";
            font-size: 20px;
            color: #000;
            text-align: center;
            line-height: 20px;
        }
        .form-box span {
            font-size: 14px;
        }
        .form-box button {
            background-color: deepskyblue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            padding: 10px;
            margin: 20px 0px;
        }
        span a {
            color: #BBB;
        }
    </style>
</head>
<body>
<div class="form-box">
        <div class="header-text">
			Tambah data Mahasiswa
		</div>

    <form action="" method="post" enctype="multipart/form-data">
        
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>

                <input type="text" name="nrp" id="nrp" placeholder="Masukkan NRP" required>

                <input type="text" name="email" id="email" placeholder="Masukkan Email" required>

                <input type="text" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan" required>

                <input type="file" name="gambar" id="gambar" required>

                <button type="submit" name="submit">Tambah Data!</button>

    </form>
</div>
</body>
</html>