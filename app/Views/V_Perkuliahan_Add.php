<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Perkuliahan</title>
</head>

<body>
    <?php echo form_open('Perkuliahan_C/submit', 'id=myForm'); ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="text-center">Form Perkuliahan</h2>

                <div class="mb-3">
                    <label for="nim" class="form-label">NIM Mahasiswa</label>
                    <?php
                    echo form_dropdown(
                        'nim',
                        array_reduce($nimOptions, function ($result, $item) {
                            $result[$item->nim] = "$item->nim - $item->nama_mhs";
                            return $result;
                        }, ['' => 'Pilih NIM Mahasiswa']),
                        set_value('nim'), // Untuk validasi form, pastikan Anda memanggil set_value() jika diperlukan
                        'class="form-control"'
                    );
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
                            set_value('kode_mk'), // Untuk validasi form, pastikan Anda memanggil set_value() jika diperlukan
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
                            set_value('nip'), // Untuk validasi form, pastikan Anda memanggil set_value() jika diperlukan
                            'class="form-control"'
                        );
                        ?>
                    </div>

                <div class="mb-3">
                    <label for="nilai" class="form-label">Nilai</label>
                    <?php echo form_input(['name' => 'nilai', 'class' => 'form-control']); ?>
                </div>

                <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</body>

</html>
