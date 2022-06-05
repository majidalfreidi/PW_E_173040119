<?php 
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
}

    require 'functions.php';

    if( isset($_POST["login"]) ){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

        if( mysqli_num_rows($result) ){
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                // session
                $_SESSION["login"] = true;

                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if( isset($error) ) : ?>
        <p style="color:red; font-style: bold;">Username/Password yang anda masukkan salah!</p>
    <?php endif; ?>    

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
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>