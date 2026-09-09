<?php

class Mahasiswa
{
    public function getAll()
    {
        return [
            [
                'nim' => '23001',
                'nama' => 'Andi',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23002',
                'nama' => 'Budi',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23003',
                'nama' => 'Citra',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'nim' => '23004',
                'nama' => 'Agus',
                'prodi' => 'Teknik Komputer'
            ],
            [
                'nim' => '23005',
                'nama' => 'Dana',
                'prodi' => 'Teknik Komputer'
            ],
            [
                'nim' => '23006',
                'nama' => 'Shofa',
                'prodi' => 'Teknik Rekaya Perangkat Lunak'
            ]
        ];
    }

    public function getByNim($nim)
    {
        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] == $nim) {
                return $mhs;
            }
        }
    }
}