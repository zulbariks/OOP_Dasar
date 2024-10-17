<?php

class Mobil
{
    private $merk;

    // Constructor untuk menetapkan merk
    public function __construct($merk)
    {
        $this->merk = $merk;
    }

    // Method private hanya dapat diakses dari dalam kelas
    private function getMerk()
    {
        return $this->merk;
    }

    // Method public yang dapat memanggil method private
    public function tampilkanMerk()
    {
        return $this->getMerk(); // Memanggil method private
    }
}

$mobil = new Mobil("Toyota");
// echo $mobil->merk; // Ini akan menyebabkan error karena $merk bersifat private
// echo $mobil->getMerk(); // Ini juga akan menyebabkan error karena getMerk() bersifat private
echo $mobil->tampilkanMerk(); // Ini berhasil karena tampilkanMerk() memanggil method private dari dalam kelas
