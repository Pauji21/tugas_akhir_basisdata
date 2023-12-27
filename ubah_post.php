<?php
include "koneksi.php";

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

// Menyimpan data ke database
$sql = "UPDATE siswa SET nama='$nama', jurusan='$jurusan', nohp='$nohp', alamat='$alamat' WHERE nisn=$nisn";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil diubah!");
    window.location="siswa.php";
    </script>';
    exit();
} else {
    echo 
    '<script language="javascript">
    alert ("[ERROR] Error SQL Query!");
    window.location="siswa.php";
    </script>';
    exit();
}

$conn->close();
?>
