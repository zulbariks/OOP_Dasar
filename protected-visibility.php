<?php
class Hewan
{
    protected $nama;

    // Constructor untuk menetapkan nama
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // Method protected dapat diakses oleh subclass
    protected function infoNama()
    {
        return "Nama hewan ini adalah " . $this->nama;
    }
}

class Anjing extends Hewan
{
    // Method public dapat memanggil method protected dari kelas induk
    public function info()
    {
        return $this->infoNama(); // Memanggil method protected dari kelas induk
    }
}

$anjing = new Anjing("Bulldog");
// echo $anjing->nama; // Ini akan menyebabkan error karena $nama bersifat protected
echo $anjing->info(); // Ini berhasil karena info() memanggil method protected dari dalam kelas turunan
