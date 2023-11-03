<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Perkuliahan</title>
</head>

<body>
    <?php
    echo form_open('Perkuliahan_C/update', 'id=myForm');
    ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="text-center">Edit Data Perkuliahan</h2>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM Mahasiswa</label>
                    <?php echo form_input(['name' => 'nim', 'class' => 'form-control', 'value' => $getData->nim, 'readonly' => 'readonly']); // Menggunakan data dari model 
                    ?>
                </div>

                <div class="mb-3">
                    <label for="kode_mk" class="form-label">Kode MK (Matakuliah)</label>
                    <?php
                    echo form_dropdown(
                        'kode_mk',
                        array_reduce($kodeMkOptions, function ($result, $item) {
                            $result[$item->kode_mk] = "$item->kode_mk - $item->nama_mk";
                            return $result;
                        }, ['' => 'Pilih Kode MK (Matakuliah)']),
                        set_value('kode_mk', $getData->kode_mk), // Menggunakan data dari model
                        'class="form-control"'
                    );
                    ?>
                </div>

                <div class="mb-3">
                    <label for="nip" class="form-label">NIP Dosen</label>
                    <?php
                    echo form_dropdown(
                        'nip',
                        array_reduce($nipOptions, function ($result, $item) {
                            $result[$item->nip] = "$item->nip - $item->nama_dosen";
                            return $result;
                        }, ['' => 'Pilih NIP Dosen']),
                        set_value('nip', $getData->nip), // Menggunakan data dari model
                        'class="form-control"'
                    );
                    ?>
                </div>


                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai</label>
                    <?php echo form_input(['name' => 'nilai', 'class' => 'form-control', 'value' => $getData->nilai]); // Menggunakan data dari model 
                    ?>
                </div>

                <?php echo form_hidden('id_perkuliahan', $getData->id_perkuliahan); // Mengirim ID perkuliahan yang akan diupdate 
                ?>
                <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
            </div>
        </div>
    </div>

    <?php echo form_close(); ?>
</body>

</html>