<?php

class Database
{
    public $host = "localhost";
    public $username = "root";
    public $pass = "";
    public $db = "oop";
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->pass);
        mysqli_select_db($this->conn, $this->db);

        // if ($this->conn) {
        //     echo "Koneksi berhasil";
        // } else {
        //     echo "Koneksi gagal : " . mysqli_connect_error();
        // }
    }

    public function tampil_data()
    {
        $data = mysqli_query($this->conn, "SELECT * FROM siswa");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;

        // var_dump($rows);
    }

    public function tambah_siswa($nis, $nama, $alamat)
    {
        mysqli_query($this->conn, "INSERT INTO siswa VALUES (NULL, '$nis', '$nama', '$alamat' )");
    }

    public function edit_siswa($id)
    {
        $data = mysqli_query($this->conn, "SELECT * FROM siswa WHERE id='$id'");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

    public function update_siswa($id, $nis, $nama, $alamat)
    {
        mysqli_query($this->conn, "UPDATE `siswa` SET `nis` = '$nis', `nama` = '$nama', `alamat` = '$alamat' WHERE `siswa`.`id` = '$id'");
    }

    public function hapus_siswa($id)
    {
        mysqli_query($this->conn, "DELETE FROM siswa WHERE id = '$id'");
    }
}