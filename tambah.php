<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
   
</head>
<body>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="col-md-6">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center rounded-top">
                <h4 class="mb-0">
                    <i class="bi bi-book"></i> Buku Tamu
                </h4>
                <small>Silakan isi pesan Anda</small>
            </div>

            <div class="card-body px-4">
                <form method="post" action="simpan.php">

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person"></i>
                            </span>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-chat-dots"></i>
                            </span>
                            <textarea name="pesan" class="form-control" rows="4"
                                placeholder="Tulis pesan Anda..." required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2">
                        <i class="bi bi-send"></i> Kirim Pesan
                    </button>

                </form>
            </div>

            <div class="card-footer text-center text-muted">
                Terima kasih atas kunjungan Anda 
            </div>
        </div>
    </div>
</div>

</body>
</html>
