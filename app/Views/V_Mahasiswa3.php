<?php $this->extend('layouts/template'); ?>

<?php $this->section('content'); ?>
    <h2>Daftar Mahasiswa</h2>
    <a href="/mahasiswa/tambah" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['nim'] ?></td>
                    <td><?= $mhs['nama_mhs'] ?></td>
                    <td><?= $mhs['tgl_lahir'] ?></td>
                    <td><?= $mhs['alamat'] ?></td>
                    <td><?= $mhs['jenis_kelamin'] ?></td>
                    <td>
                        <a href="/mahasiswa/edit/<?= $mhs['nim'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/mahasiswa/hapus/<?= $mhs['nim'] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $this->endSection(); ?>
