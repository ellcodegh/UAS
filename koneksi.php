<?php
date_default_timezone_set("Asia/Jakarta");

$koneksi = mysqli_connect("localhost", "root", "", "uas_pwd");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function bersihkan($data) {
    global $koneksi;
    $data = trim($data); // hapus spasi
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8'); // cegah XSS
    $data = mysqli_real_escape_string($koneksi, $data); // cegah SQL Injection
    return $data;
}
?>
