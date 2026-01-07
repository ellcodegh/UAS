<?php
date_default_timezone_set("Asia/Jakarta");

$koneksi = mysqli_connect("localhost", "root", "", "uas_pwd");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
