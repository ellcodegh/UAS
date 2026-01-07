<?php
include "koneksi.php";

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$pesan  = $_POST['pesan'];
$tgl    = date("Y-m-d H:i:s");

mysqli_query($koneksi, "INSERT INTO buku_tamu VALUES (
    NULL, '$nama', '$email', '$pesan', '$tgl'
)");

header("location:trims.php");
?>
