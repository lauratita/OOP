<?php
include 'koneksi.php';

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
                    foreach($db->tampil_data() as $siswa) {
                ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $siswa['nis']?></td>
                    <td><?= $siswa['nama']?></td>
                    <td><?= $siswa['alamat']?></td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                        <a href="" class="btn btn-primary btn-sm">Show</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>