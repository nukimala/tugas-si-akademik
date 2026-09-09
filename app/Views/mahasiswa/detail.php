<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f6f9;">

<div class="container" style="margin-top: 30px; max-width: 600px;">
    
    <div style="background-color: #0d6efd; color: white; padding: 15px; border-radius: 5px; text-align: center;">
        <h2>Detail Mahasiswa</h2>
    </div>
    
    <br>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title" style="border-bottom: 2px solid #0d6efd; padding-bottom: 10px;">
                Informasi Lengkap
            </h5>
            
            <p style="font-size: 18px; margin-top: 15px;">
                <strong>NIM:</strong><br>
                <?= $mahasiswa['nim']; ?>
            </p>
            
            <p style="font-size: 18px;">
                <strong>Nama:</strong><br>
                <span class="text-primary"><?= $mahasiswa['nama']; ?></span>
            </p>
            
            <p style="font-size: 18px;">
                <strong>Program Studi:</strong><br>
                <?= $mahasiswa['prodi']; ?>
            </p>
            
            <br>
            <a href="?url=mahasiswa" class="btn btn-secondary">
                &laquo; Kembali ke Daftar
            </a>
        </div>
    </div>

</div>

</body>
</html>