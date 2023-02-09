<?php
// class laptop
class laptop
{
    private $pemilik;
    private $merk;

    // contructtor sebagai pembuat nilai awal
    public function __construct($pemilik, $merk)
    {
        $this->pemilik = $pemilik;
        $this->merk = $merk;
    }

    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop $this->merk punya $this->pemilik";
    }


    // property untuk class laptop
    // var $pemilik;
    // var $merk;
    // var $ukuran_layar;

    // method untuk calss laptop
    // function hidupkan_laptop()
    // {
    //     return "Hidupkan Laptop";
    // }
    // function matikan_laptop()
    // {
    //     return "Matikan Laptop";
    // }
}

// buat objek dari class laptop (instansiasi)
$laptop_andi = new laptop("Andi", "Asus");

echo $laptop_andi->hidupkan_laptop();
echo "<br />";

$laptop_andi = new laptop("Andi", "Hp");

echo $laptop_andi->hidupkan_laptop();


// objek dari class laptop (instansiasi)
// $laptop_anto = new laptop();
// $laptop_andi = new laptop();

// set property
// $laptop_anto->pemilik = "Anto";
// $laptop_anto->merk = "Asus";
// $laptop_anto->ukuran_layar = "15 inchi";

// tampilkan property
// echo $laptop_anto->pemilik;
// echo "<br />";
// echo $laptop_anto->merk;
// echo "<br />";
// echo $laptop_anto->ukuran_layar;
// echo "<br />";

// tampilkan method
// echo $laptop_anto->hidupkan_laptop();
// echo "<br />";
// echo $laptop_anto->matikan_laptop();