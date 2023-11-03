<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mata Kuliah</title>
</head>

<body>
    <?php
    echo form_open('Mata_Kuliah_C/update', 'id=myForm');
    ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="text-center">Edit Mata Kuliah</h2>

                <div class="mb-3">
                    <label for="kode_mk" class="form-label">Kode MK</label>
                    <?php
                    echo form_input(['name' => 'kode_mk', 'class' => 'form-control', 'value' => $getData->kode_mk]); // Menggunakan data dari model
                    ?>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama MK</label>
                    <?php
                    echo form_input(['name' => 'nama', 'class' => 'form-control', 'value' => $getData->nama_mk]); // Menggunakan data dari model
                    ?>
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label">SKS</label>
                    <?php
                    echo form_input(['name' => 'sks', 'class' => 'form-control', 'value' => $getData->sks]); // Menggunakan data dari model
                    ?>
                </div>

                <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
            </div>
        </div>
    </div>

    <?php echo form_close(); ?>
</body>

</html>
