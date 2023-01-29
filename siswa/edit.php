<?php
include '../config/koneksi.php';

$db = new Database();
$edit = $db->edit_siswa($_GET['id']);
// $db->tampil_data();
// echo "Hello World";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>OOP</title>
</head>

<body>
    <div class="container">
        <h3>Edit Siswa</h3>

        <form action="proses.php?aksi=update" method="POST">
            <?php
            foreach ($edit as $siswa) {
            ?>

            <input type="hidden" name="id" value="<?= $siswa['id']?>">
            <div class="mb-3 col-6">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" value="<?= $siswa['nis'] ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama'] ?>">
            </div>
            <div class="mb-3 col-6">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="5"
                    class="form-control"><?= $siswa['alamat'] ?></textarea>
            </div>

            <?php
            }
            ?>

            <button type=" submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>