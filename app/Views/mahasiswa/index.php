<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f4f6f9;">

<div class="container" style="margin-top: 30px;">
    
    <div style="background-color: #0d6efd; color: white; padding: 15px; border-radius: 5px;">
        <h2>Sistem Informasi Akademik</h2>
        <h4>Data Mahasiswa - Politeknik Negeri Jember</h4>
    </div>
<br>
<a href="/si-akademik/public/dashboard" class="btn btn-secondary mb-3">Kembali ke Dashboard</a>
    <div class="card">
        <div class="card-header">
            <b>Daftar Mahasiswa</b>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="table-primary">
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mahasiswa as $mhs): ?>
                    <tr>
                        <td><?= $mhs['nim']; ?></td>
                        <td><?= $mhs['nama']; ?></td>
                        <td><?= $mhs['prodi']; ?></td>
                        <td>
                            <a href="?url=mahasiswa/detail&nim=<?= $mhs['nim']; ?>" class="btn btn-sm btn-info">
                                Detail
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
