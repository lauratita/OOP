<?php
// buat abstract class
abstract class komputer
{
    // buat abstract method
    abstract public function booting_os();
}

interface mouse
{
    public function double_klik();
}

class laptop extends komputer implements mouse
{
    public function booting_os()
    {
        return "Proses booting sistem opr laptop";
    }
    public function double_klik()
    {
        return "double klik mouse laptop";
    }
}

class pc extends komputer implements mouse
{
    public function booting_os()
    {
        return "proses booting sistem opr pc";
    }
    public function double_klik()
    {
        return "double klik mouse pc";
    }
}

class chromebook extends komputer implements mouse
{
    public function booting_os()
    {
        return "proses booting sistem opr chromebook";
    }
    public function double_klik()
    {
        return "double klik mouse chromebook";
    }
}

// buat objek dari class di atas
$laptop_baru = new laptop();
$pc_baru = new pc();
$chromebook_baru = new chromebook();

// buat fungsi untuk memproses objek
function booting_os_komputer($objek_komputer)
{
    return $objek_komputer->booting();
}

function double_klik_komputer($objek_komputer)
{
    return $objek_komputer->double_klik();
}

// jalankan fungsi
echo booting_os_komputer($laptop_baru);
echo "<br />";
echo double_klik_komputer($laptop_baru);
echo "<br />";
echo "<br />";

echo booting_os_komputer($pc_baru);
echo "<br />";
echo double_klik_komputer($pc_baru);
echo "<br />";
echo "<br />";

echo booting_os_komputer($chromebook_baru);
echo "<br />";
echo double_klik_komputer($chromebook_baru);

// // buat abstract class
// abstract class komputer {
//     // buat abstract method
//     abstract public function booting_os();
// }

// class laptop extends komputer {
//     public function booting_os()
//     {
//         return "proses booting sistem opr laptop";
//     }
// }

// class pc extends komputer {
//     public function booting_os()
//     {
//         return "proses booting sistem opr pc";
//     }
// }

// class chromebook extends komputer {
//     public function booting_os()
//     {
//         return "proses booting sistem opr chromebook";
//     }
// }

// // buat objek dari class di atas
// $laptop_baru = new laptop();
// $pc_baru = new pc();
// $chromebook_baru = new chromebook();

// // buat fungsi untuk memproses objek
// function booting_os_komputer($objek_komputer){
//     return $objek_komputer->booting_os();
// }

// // jalankan fungsi
// echo booting_os_komputer($laptop_baru);
// echo "<br />";
// echo booting_os_komputer($pc_baru);
// echo "<br />";
// echo booting_os_komputer($chromebook_baru);