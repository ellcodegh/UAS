<?php
include "koneksi.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM buku_tamu WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-warning text-white text-center">
                    <h4>Edit Buku Tamu</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="update.php">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" value="<?= $row['nama'] ?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= $row['email'] ?>" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Pesan</label>
                            <textarea name="pesan" class="form-control"><?= $row['pesan'] ?></textarea>
                        </div>

                        <button class="btn btn-warning w-100">Update</button>
                        <a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
