<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';

    if(isset($_POST["submit"])) {

        // untuk mengecek ada perubahan terhadap data yang telah diinputkan
        if(tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal ditambahkan');
                    document.location.href = 'tambah.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menambah Data Mahasiswa</title>
</head>
<body>
    
<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post">
    <ul>
        <li>
            <label for="npm">NPM : </label>
            <input type="text" name="npm" id="npm" required>
        </li>
        <li>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama">
        </li>
        <li>
            <label for="email">Email : </label>
            <input type="text" name="email" id="email">
        </li>
        <li>
            <label for="jurusan">Jurusan : </label>
            <input type="text" name="jurusan" id="jurusan">
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>

</body>
</html>