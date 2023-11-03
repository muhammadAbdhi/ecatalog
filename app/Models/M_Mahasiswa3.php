<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Mahasiswa3 extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nama_mhs', 'tgl_lahir', 'alamat', 'jenis_kelamin'];
}
