<?php 
session_start();
if( !isset($_SESSION["login"]) ){
    header("Location: login.php");
    exit;
}
require 'functions.php';

    if(isset($_POST["register"])){
        if( registrasi($_POST) > 0 ){
            echo "<script>alert('Registrasi Berhasil')</script>";
        } else{
            echo mysqli_error($db);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username" placeholder="Masukkan username" required>
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password" required>
            </li>
            <li>
                <label for="password2">Konfirmasi Password :</label>
                <input type="password" name="password2" id="password2" placeholder="Masukkan konfirmasi password" required>
            </li>
            <li>
                <label for="email">E-mail :</label>
                <input type="text" name="email" id="email" placeholder="Masukkan E-mail" required>
            </li>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>
    </form>
</body>
</html>