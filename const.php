<?php

// buat class laptop
class laptop{
    // buat konstanta
    const DOLLAR = '12000';
}

// buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

// panggil konstanta class
echo "Harga dollar saat ini = Rp . " . $laptop_baru::DOLLAR;
// echo "harga dollar saat ini = Rp. " .laptop::DOLLAR;