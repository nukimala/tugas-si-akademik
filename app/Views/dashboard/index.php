<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f6f9;">
    <div class="container" style="margin-top: 60px;">
        <div class="card shadow-sm">
            <div class="card-body text-center p-5">
                <h1 class="text-primary mb-3">Sistem Informasi Akademik</h1>
                <h4>Selamat Datang, <b><?= $_SESSION['username']; ?></b>!</h4>
                <hr class="my-4">
                
                <!-- Menu Tombol -->
                <div class="d-flex justify-content-center gap-3">
                    <a href="/si-akademik/public/mahasiswa" class="btn btn-outline-primary btn-lg">Data Mahasiswa</a>
                    <a href="/si-akademik/public/dosen" class="btn btn-outline-success btn-lg">Data Dosen</a>
                    <a href="/si-akademik/public/logout" class="btn btn-danger btn-lg">Logout</a>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
