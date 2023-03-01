<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Menampilkan input dari kelas penyewaan.php -->
    <?php
    echo "Judul Buku: " . $_GET["jb"] . "<br>";
    echo "Kategori Buku: " . $_GET["kb"] . "<br>";
    echo "Tanggal Pinjam: " . $_GET["tp"] . "<br>";
    echo "Lama Pinjam: " . $_GET["lp"] . "<br>";
    echo "Nama Anggota: " . $_GET["na"] . "<br>";
    echo "Nama Petugas: " . $_GET["np"] . "<br>";
    
    echo "<a href='penyewaan.php'>Kembali</a>";
    ?>
</body>
</html>