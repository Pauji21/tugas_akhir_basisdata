<?php
include "koneksi.php";
$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
    <title>Data Siswa</title>
</head>
<body>
    <div class="header">
        <img class="logo" src="img/siswa.png" alt="no image">
        <h1>Data Siswa</h1>
    </div>

    <div class="container">
        <h2>Daftar Siswa</h2>
        <table>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>No HP</th>
                <th>Alamat</th>
            </tr>
            <?php
            while($row = $result->fetch_assoc()) {
            echo
            '<tr>'.
                '<td>'.$row["nisn"].'</td>'.
                '<td>'.$row["nama"].'</td>'.
                '<td>'.$row["jurusan"].'</td>'.
                '<td>'.$row["nohp"].'</td>'.
                '<td>'.$row["alamat"].'</td>'.
            '</tr>';
            }
            ?>
        </table>

        <h2>Tambah Siswa</h2>
        <form action="tambah_post.php" method="POST">
            <label for="nisn">NISN:</label>
            <input type="text" id="nisn" name="nisn"><br><br>
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="jurusan">Jurusan :</label>
            <input type="text" id="jurusan" name="jurusan"><br><br>
            <label for="nohp">No HP :</label>
            <input type="text" id="nohp" name="nohp"><br><br>
            <label for="alamat">Alamat :</label>
            <input type="text" id="alamat" name="alamat"><br><br>
            <input type="submit" value="Tambah">
        </form>

        <h2>Update Siswa</h2>
        <form action="ubah_post.php" method="POST">
            <label for="nisn">NISN:</label>
            <input type="text" id="nisn" name="nisn"><br><br>
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="jurusan">Jurusan :</label>
            <input type="text" id="jurusan" name="jurusan"><br><br>
            <label for="nohp">No HP :</label>
            <input type="text" id="nohp" name="nohp"><br><br>
            <label for="alamat">Alamat :</label>
            <input type="text" id="alamat" name="alamat"><br><br>
            <input type="submit" value="Ubah">
        </form>

        <h2>Hapus Siswa</h2>
        <form action="hapus_post.php" method="POST">
            <label for="nisn">NISN :</label>
            <input type="text" id="nisn" name="nisn"><br><br>
            <input type="submit" value="Hapus">
        </form>
    </div>
</body>