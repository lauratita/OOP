<?php
// buat class komputer
class komputer {
    // protected static method
    protected static function beli_komputer(){
        return "Beli Komputer Baru";
    }
}

// turunkan class komouter ke class laptop
class laptop extends komputer{
    // private static method
    private static function beli_laptop(){
        return "Beli Laptop Baru";
    }

    // public static method
    public static function beli_semua(){
        echo parent::beli_komputer();
        echo "<br />";
        echo self::beli_laptop();
    }
}

// panggil static method
laptop::beli_semua();

// buat class laptop
// class laptop {
//     public $merk;
//     public $pemilik;

//     // static property
//     public static $harga_beli;

//     // static method
//     public static function beli_laptop(){
//         return "Beli laptop seharga Rp" . self::$harga_beli;
//     } 
// }

// // set static property
// laptop::$harga_beli=4000000;

// // get static property
// // echo "harga beli : Rp" . laptop::$harga_beli;

// // echo "<br />";

// // panggil static method
// echo laptop::beli_laptop();