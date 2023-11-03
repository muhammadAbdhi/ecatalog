<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa extends Model
{
    public function getMahasiswa()
    {
        $data = array (
            array(
                'id' => 1,
                'nama' => 'Adi',
                'nim' => '1234567890',
                'jurusan' => 'Teknik Informatika',
            ),
            array(
                'id' => 2,
                'nama' => 'Budi',
                'nim' => '9876543210',
                'jurusan' => 'Sistem Informasi',
            ),
            array(
                'id' => 3,
                'nama' => 'Cici',
                'nim' => '0987654321',
                'jurusan' => 'Manajemen Informatika',
            ),
        );

        return $data;
    }
}
