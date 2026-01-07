<?php
include "koneksi.php";

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$pesan  = $_POST['pesan'];

mysqli_query($koneksi, "UPDATE buku_tamu SET
    nama='$nama',
    email='$email',
    pesan='$pesan'
WHERE id='$id'");

header("location:index.php");
?>
