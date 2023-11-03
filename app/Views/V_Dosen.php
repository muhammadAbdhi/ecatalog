<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">



</head>


<body>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="d-flex card-header py-3 justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Table <?php echo $title ?></h6>
            <a href="<?php echo site_url('dosen_c/add') ?>" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIP</th>
                            <th>Nama Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($getData as $row) { ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $row->nip ?></td>
                                <td><?php echo $row->nama_dosen ?></td>
                                <td><a href="<?php echo site_url('Dosen_C/edit/' . $row->nip) ?>"><button class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></button></a></a>
                                    <a href="<?php echo site_url('Dosen_C/delete/' . $row->nip) ?>"><button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button></a>
                                </td>
                            </tr>
                        <?php $i++;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>