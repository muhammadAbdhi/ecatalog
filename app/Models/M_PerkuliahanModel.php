<?php

namespace App\Models;

use CodeIgniter\Model;

class M_PerkuliahanModel extends Model
{
    public function getAllData()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        return $builder->get()->getResult();
    }
    public function insertData($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        return $builder->insert($data);
    }
    public function getDataById($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        $builder->where('id_perkuliahan', $id);
        return $builder->get()->getRow();
    }
    public function updateData($id, $data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        $builder->where('id_perkuliahan', $id);
        return $builder->update($data);
    }
    public function deleteData($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perkuliahan');
        $builder->where('id_perkuliahan', $id);
        return $builder->delete();
    }

    public function getPerkuliahanWithRelations()
    {
        $db = \Config\Database::connect();
        return $this
            ->select('perkuliahan.*, mahasiswa.nim, mahasiswa.nama_mhs, matakuliah.kode_mk, matakuliah.nama_mk, dosen.nip, dosen.nama_dosen')
            ->join('mahasiswa', 'mahasiswa.nim = perkuliahan.nim')
            ->join('matakuliah', 'matakuliah.kode_mk = perkuliahan.kode_mk')
            ->join('dosen', 'dosen.nip = perkuliahan.nip')
            ->findAll();
    }

    public function getMahasiswaOptions()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('mahasiswa');
        return $builder->select('nim, nama_mhs')->get()->getResult();
    }

    public function getMatakuliahOptions()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('matakuliah');
        return $builder->select('kode_mk, nama_mk')->get()->getResult();
    }

    public function getDosenOptions()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('dosen');
        return $builder->select('nip, nama_dosen')->get()->getResult();
    }
}
