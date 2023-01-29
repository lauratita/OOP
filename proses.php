<?php
include 'koneksi.php';

$db = new Database();
$aksi = $_GET['aksi'];

if($aksi == "tambah") {
    // tambah siswa
    // var_dump($_POST['nis']);
    $db->tambah_siswa($_POST['nis'], $_POST['nama'], $_POST['alamat']);
    header("location:siswa.php");
}

?>