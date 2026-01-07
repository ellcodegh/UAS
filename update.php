<?php
include "koneksi.php";

$id    = (int) $_POST['id']; // casting int (aman)
$nama  = bersihkan($_POST['nama']);
$email = bersihkan($_POST['email']);
$pesan = bersihkan($_POST['pesan']);

mysqli_query($koneksi, "
    UPDATE buku_tamu SET
        nama='$nama',
        email='$email',
        pesan='$pesan'
    WHERE id='$id'
");

header("location:index.php");
?>
