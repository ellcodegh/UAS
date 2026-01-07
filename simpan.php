<?php
include "koneksi.php";

$nama  = bersihkan($_POST['nama']);
$email = bersihkan($_POST['email']);
$pesan = bersihkan($_POST['pesan']);

mysqli_query($koneksi, "
    INSERT INTO buku_tamu (nama, email, pesan, tanggal)
    VALUES ('$nama', '$email', '$pesan', NOW())
");

header("location:trims.php");
?>
