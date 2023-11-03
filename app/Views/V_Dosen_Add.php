<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Dosen</title>
</head>

<body>
    <?php
    echo form_open('Dosen_C/submit', 'id=myForm');
    ?>
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <h2 class="text-center">Form Dosen</h2>

                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <?php echo form_input(['name' => 'nip', 'class' => 'form-control']); ?>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <?php echo form_input(['name' => 'nama', 'class' => 'form-control']); ?>
                </div>

                <?php echo form_submit('submit', 'Submit', 'class="btn btn-primary"'); ?>
            </div>
        </div>
    </div>

    <?php echo form_close(); ?>
</body>

</html>