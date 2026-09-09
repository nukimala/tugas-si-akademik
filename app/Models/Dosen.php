<?php

class Dosen
{
    public function getAll()
    {
        return[
            [
                'nidn' => '001',
                'nama' => 'Raditya Arief Pratama, S.Kom., M.Eng.',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nidn' => '002',
                'nama' => 'Ulfa Emi Rahmwati, S.Kom., M.Kom.',
                'prodi' => 'Teknik Komputer'
            ],
            [
                'nidn' => '003',
                'nama' => 'Muhammad Ainul Fikri, S.T., M.Eng.',
                'prodi' => 'Sistem Informasi'
            ]
        ];
    }

    public function getByNidn($nidn)
    {
        $dosen = $this->getAll();

        foreach ($dosen as $dsn ) {
            if ($dsn['nidn'] == $nidn) {
                return $dsn;
            }
        }
    }
    
}