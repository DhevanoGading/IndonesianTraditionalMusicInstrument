<?php

session_start();
if (!isset($_SESSION['username'])){
  header('Location: Login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="StyleWelc.css">
</head>
<body>
    <img src="https://upload.wikimedia.org/wikipedia/commons/a/aa/Gamelan_Musik_Tradisional_Indonesia.jpg" alt="alat musik indonesia">
    <div class="teks">
        <h1 class="judul">Selamat Datang</h1>
        <p class="p1">
            Terimakasih telah mengunjungi website ini
        </p>
        <p class="p2">
            Website ini akan memberikan anda informasi seputar alat tradisional Indonesia
        </p>
        <a href="Home.html" class="masuk">Masuk</a>
    </div>
</body>
</html>