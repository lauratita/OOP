<?php
include '../config/koneksi.php';

$db = new Database();
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
        <h1>DATA SISWA</h1>
        <a href="tambah.php" class="btn btn-primary btn-sm mt-2">Tambah Siswa</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($db->tampil_data() as $siswa) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $siswa['nis'] ?></td>
                    <td><?= $siswa['nama'] ?></td>
                    <td><?= $siswa['alamat'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $siswa['id']?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses.php?id=<?= $siswa['id']?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>
                        <!-- <a href="" class="btn btn-primary btn-sm">Show</a> -->
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <!-- modal edit -->
        <!-- <div class=" modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditLabel">Edit Biodata Siswa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="proses.php?aksi=tambah" method="POST">
                                            <div class="mb-3">
                                                <label for="nis" class="form-label">NIS</label>
                                                <input type="text" class="form-control" id="nis" name="nis" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <textarea name="alamat" id="alamat" cols="30" rows="5"
                                                    class="form-control"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="id" id="id">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" id="ubah" value="Save">
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
    </div> -->
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>