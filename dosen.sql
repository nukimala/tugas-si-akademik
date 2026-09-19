CREATE DATABASE IF NOT EXISTS si_akademik;
USE si_akademik;

CREATE TABLE IF NOT EXISTS dosen (
 id INT AUTO_INCREMENT PRIMARY KEY,
 nidn VARCHAR(20) NOT NULL UNIQUE,
 nama VARCHAR(100) NOT NULL,
 bidang_keahlian VARCHAR(100) NOT NULL
);

INSERT INTO dosen (nidn, nama, bidang_keahlian)
VALUES
('0012345678', 'Dr. Ahmad', 'Pemrograman Web'),
('0012345679', 'Siti Aminah, M.Kom.', 'Basis Data'),
('0012345680', 'Budi Santoso, M.T.', 'Jaringan Komputer'),
('0012345681', 'Citra Lestari, M.Kom.', 'Kecerdasan Buatan'),
('0012345682', 'Dewi Anggraini, M.T.', 'Pengolahan Citra');
