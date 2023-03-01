<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form Login</title>
</head>
<body>
    
<form action="L21_PW.php" method="get">
    <h1>Sign Up</h1>
        <div>
            <label for="Nama">Nama</label><br>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label for="E-mail">E-mail</label><br>
            <input type="text" name="email" id="nama">
        </div>
        <div>
            <label for="Password">Password</label><br>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="TanggalLahir">Tanggal Lahir</label><br>
            <input type="date" name="tl">
        </div>
        <div>
            <label for="ProgramStudi">Program Studi</label><br>
            <select name="ps" id="ps">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="MI">Manajemen Business</option>
            </select>
        </div>
        <div>
            <label for="Alamat">Alamat</label><br>
            <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="Handphone">Handphone</label>
            <input type="number" name="hp">
        </div>
        <div>
            <label for="JenisKelamin">Jenis Kelamin</label>
            <input type="radio" name="jk" id="jk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jk" id="jk" value="Perempuan">Perempuan
        </div>
        <div>
            <input type="submit" value="Save">
            <input type="reset" value="Cancel">
        </div>
</form>

</body>
</html>