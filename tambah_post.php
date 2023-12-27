<?php
include "koneksi.php";

$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

$cekduplicate = mysqli_num_rows(mysqli_query($conn, "SELECT nisn FROM siswa WHERE nisn='$nisn'"));

if($cekduplicate > 0)
{
    echo '<script language="javascript">
    alert ("[ERROR] Data sudah ada!");
    window.location="siswa.php";
    </script>';
    exit();
}

// Menyimpan data ke database
$sql = "INSERT INTO siswa (nisn, nama, jurusan, nohp, alamat) VALUES ('$nisn', '$nama', '$jurusan', '$nohp', '$alamat')";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil ditambahkan!");
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
