<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("location:login.php");
}
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM buku_tamu ORDER BY id DESC");
$no = 1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h4>Data Buku Tamu</h4>
        </div>
        <div class="card-body">

            <a href="tambah.php" target="_blank" class="btn btn-success mb-3">Tambah Data</a>
            <a href="cetak_pdf.php" target="_blank" class="btn btn-danger mb-3">Cetak PDF</a>
            <a href="logout.php" class="btn btn-danger mb-3 float-end">Logout</a>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['pesan'] ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $row['id'] ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin hapus data?')">
                               Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
