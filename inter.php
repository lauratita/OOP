<?php
interface mouse{
    public function klik_kanan();
    public function klik_kiri();
}

interface keyboard{
    public function tekan_enter();
}

class laptop implements mouse, keyboard{
    public function klik_kanan()
    {
        return "Klik kanan";
    }

    public function klik_kiri()
    {
        return "Klik kiri";
    }

    public function tekan_enter()
    {
        return "tekan tombol enter";
    }
}

$laptop_baru = new laptop();
echo $laptop_baru->tekan_enter();

// interface mouse{
//     public function klik_kanan();
//     public function klik_kiri();
// }

// interface mouse_gaming extends mouse{
//     public function ubah_dpi();
// }

// class laptop implements mouse_gaming{
//     public function klik_kanan()
//     {
//         return "Klik kanan";
//     }

//     public function klik_kiri()
//     {
//         return "Klik kiri";
//     }

//     public function ubah_dpi()
//     {
//         return "Ubah settingan DPI mouse";
//     }
// }

// $laptop_baru = new laptop();
// echo $laptop_baru->ubah_dpi();

// $laptop_baru = new laptop();
// echo $laptop_baru->klik_kanan();