<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <!-- Form untuk Penyewaan Buku -->
        <form action="penyewaanpost.php" method="get">
        <h1>Form Penyewaan</h1>
        <label for="jb">Judul Buku</label>
        <input type="text" name="jb" id="jb">
        <br>
        <label for="kb">Kategori Buku</label>
        <select name="kb" id="kb">
            <option value="Novel">Novel</option>
            <option value="Komik">Komik</option>
            <option value="Ensiklopedia">Ensiklopedia</option>
            <option value="Biografi">Biografi</option>
            <option value="Majalah">Majalah</option>
        </select>
        <br>
        <label for="tp">Tanggal Pinjam</label>
        <input type="date" name="tp" id="tp">
        <br>
        <label for="lp">Lama Pinjam</label>
        <input type="number" name="lp" id="lp">hari
        <br>
        <label for="na">Nama Anggota</label>
        <input type="text" name="na" id="na">
        <br>
        <label for="np">Nama Petugas</label>
        <select name="np" id="np">
            <option value="Petugas 1">Petugas 1</option>
            <option value="Petugas 2">Petugas 2</option>
            <option value="Petugas 3">Petugas 3</option>
            <option value="Petugas 4">Petugas 4</option>
            <option value="Petugas 5">Petugas 5</option>        
        </select>
        <br>
        <input type="submit" value="Save">
        <input type="reset" value="Cancel">
    </form>

</body>
</html>