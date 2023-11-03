<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        /* CSS untuk menengahkan tabel secara vertikal */
        .center-table {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* CSS untuk memberikan margin pada judul */
        .judul {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <div class="center-table">
        <div class="col-sm-9">
            <div class="judul">
                <h1>Daftar Mahasiswa</h1>
            </div>
            <table class="table table-hover table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                    <tr>
                        <th class="table-primary">No</th>
                        <th class="table-primary">Nama</th>
                        <th class="table-primary">NIM</th>
                        <th class="table-primary">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $mahasiswa) : ?>
                        <tr>
                            <td><?php echo $mahasiswa['id']; ?></td>
                            <td><?php echo $mahasiswa['nama']; ?></td>
                            <td><?php echo $mahasiswa['nim']; ?></td>
                            <td><?php echo $mahasiswa['jurusan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>






























