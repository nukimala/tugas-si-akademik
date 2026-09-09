<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f6f9;">

<div class="container" style="margin-top: 30px;">
    
    <div style="background-color: #198754; color: white; padding: 15px; border-radius: 5px;">
        <h2>Sistem Informasi Akademik</h2>
        <h4>Data Dosen - Politeknik Negeri Jember</h4>
    </div>
    <br>
    <a href="/si-akademik/public/dashboard" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>


    <div class="card">
        <div class="card-header">
            <b>Daftar Dosen</b>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="table-success">
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dosen as $dsn): ?>
                    <tr>
                        <td><?= $dsn['nidn']; ?></td>
                        <td><?= $dsn['nama']; ?></td>
                        <td><?= $dsn['prodi']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
