<?php
include "koneksi.php";

$nisn = $_POST['nisn'];

$sql = "DELETE FROM siswa WHERE nisn=$nisn";

if ($conn->query($sql) === TRUE) {
    echo 
    '<script language="javascript">
    alert ("[SUKSES] Data berhasil dihapus!");
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
