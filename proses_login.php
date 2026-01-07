<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM admin 
    WHERE username='$username' AND password='$password'");

$data = mysqli_num_rows($query);

if ($data > 0) {
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    header("location:index.php");
} else {
    echo "<script>alert('Login gagal!');window.location='login.php';</script>";
}
?>
