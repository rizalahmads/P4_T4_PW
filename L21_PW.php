<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Menampilkan input dari kelas L2_PW -->
    <?php
    echo"<script>alert('Data Berhasil Disimpan')</script>";
    echo "Nama: " . $_GET["nama"] . "<br>";
    echo "E-mail: " . $_GET["email"] . "<br>";
    echo "Password: " . $_GET["password"] . "<br>";
    echo "Tanggal Lahir: " . $_GET["tl"] . "<br>";
    echo "Program Studi: " . $_GET["ps"] . "<br>";
    echo "Alamat: " . $_GET["alamat"] . "<br>";
    echo "Handphone: " . $_GET["hp"] . "<br>";
    echo "Jenis Kelamin: " . $_GET["jk"] . "<br>";


    
    echo "<script>
    window.location.href = 'login.php';
    </script>";

    echo"<script>alert('Data Berhasil Disimpan')</script>";
    ?>


    

</body>
</html>