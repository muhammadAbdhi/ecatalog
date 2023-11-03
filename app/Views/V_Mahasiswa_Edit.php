<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <?php
    echo form_open('Mahasiswa_C/update', 'id=myForm');
    ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="text-center">Edit Mahasiswa</h2>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <?php
                    echo form_input(['name' => 'nim', 'class' => 'form-control', 'value' => $getData->nim]); // Menggunakan data dari model
                    ?>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <?php
                    echo form_input(['name' => 'nama', 'class' => 'form-control', 'value' => $getData->nama_mhs]); // Menggunakan data dari model
                    ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check">    
                        <?php
                        $jenisKelaminLakiLakiChecked = ($getData->jenis_kelamin == 'Laki-Laki') ? true : false;
                        echo form_radio(['name' => 'jenisKelamin', 'class' => 'form-check-input', 'id' => 'Laki-Laki', 'value' => 'Laki-Laki', 'checked' => $jenisKelaminLakiLakiChecked]); // Menggunakan data dari model
                        ?>
                        <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <?php
                        $jenisKelaminPerempuanChecked = ($getData->jenis_kelamin == 'Perempuan') ? true : false;
                        echo form_radio(['name' => 'jenisKelamin', 'class' => 'form-check-input', 'id' => 'perempuan', 'value' => 'Perempuan', 'checked' => $jenisKelaminPerempuanChecked]); // Menggunakan data dari model
                        ?>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                    <?php
                    echo form_input(['type' => 'date', 'name' => 'tgl_lahir', 'class' => 'form-control', 'value' => $getData->tgl_lahir]); // Menggunakan data dari model
                    ?>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <?php
                    echo form_input(['name' => 'alamat', 'class' => 'form-control', 'value' => $getData->alamat]); // Menggunakan data dari model
                    ?>
                </div>

                <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
            </div>
        </div>
    </div>

    <?php echo form_close(); ?>
</body>

</html>
