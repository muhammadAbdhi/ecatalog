<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    $jurusan = ['ilmu komputer', 'statistika', 'biologi', 'farmasi'];
    echo form_open('Mahasiswa/save', 'id=myForm');
    ?>
    <div class="container-md mx-auto">
        <h2 class="text-center">Form Mahasiswa</h2>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <?php echo form_input(['name' => 'nim', 'class' => 'form-control']); ?>
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <?php echo form_input(['name' => 'nama', 'class' => 'form-control']); ?>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <?php
                echo form_radio(['name' => 'jenisKelamin', 'class' => 'form-check-input', 'id' => 'lakiLaki', 'value' => 'Laki-Laki', 'checked' => true]);
                ?>
                <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
            </div>
            <div class="form-check">
                <?php
                echo form_radio(['name' => 'jenisKelamin', 'class' => 'form-check-input', 'id' => 'perempuan', 'value' => 'Perempuan']);
                ?>
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <?php echo form_input(['type' => 'date', 'name' => 'tgl_lahir', 'class' => 'form-control']); ?>
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <?php echo form_input(['name' => 'umur', 'class' => 'form-control']); ?>
        </div>

        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <?php
            $jurusanOptions = array_combine($jurusan, $jurusan);
            echo form_dropdown('jurusan', $jurusanOptions, '', 'class="form-select"');
            ?>
        </div>

        <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
    </div>

    <?php echo form_close(); ?>
</body>

</html>
