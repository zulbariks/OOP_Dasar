<?php


class Product
{

    public $namaProduk;
    public $harga;

    function setProduk($namaProduk, $harga)
    {
        $this->namaProduk = $namaProduk;
        $this->harga = $harga;
    }

    function getProduk()
    {
        return "name:" . $this->namaProduk . "harga:" . $this->harga;
    }
}

$deathBook = new Product();
$qolam = new Product();

$deathBook->setProduk("deathBook", 100.000);
$qolam->setProduk("qolam", 234000.000);
echo $deathBook->getProduk();
echo "</br>";
echo $qolam->getProduk();

echo "</br>";
echo "</br>";
// nama kota
class Kota
{
    public $namaKota;
    public $jarak;

    function setKota($namaKota, $jarak)
    {
        $this->namaKota = $namaKota;
        $this->jarak = $jarak;
    }

    function getKota()
    {
        return "Kota: " . $this->namaKota . " - Jarak: " . $this->jarak . " km";
    }
}

$jakarta = new Kota();
$bandung = new Kota();

$jakarta->setKota("Jakarta", 0);
$bandung->setKota("Bandung", 150);

echo $jakarta->getKota();
echo "</br>";
echo $bandung->getKota();

echo "</br>";
echo "</br>";
// nama buah
class Buah
{
    public $namaBuah;
    public $rasa;

    function setBuah($namaBuah, $rasa)
    {
        $this->namaBuah = $namaBuah;
        $this->rasa = $rasa;
    }

    function getBuah()
    {
        return "Buah: " . $this->namaBuah . " - Rasa: " . $this->rasa;
    }
}

$mangga = new Buah();
$apel = new Buah();

$mangga->setBuah("Mangga", "Manis");
$apel->setBuah("Apel", "Asam");
    
echo $mangga->getBuah();
echo "</br>";
echo $apel->getBuah();



// laptop

class Laptop
{
    public $nama_panjang;
    public $merk;
    public $ssd;
    public $ram;


    function setLaptop($nama_panjang, $merk, $ram, $ssd)
    {
        $this->nama_panjang = $nama_panjang;
        $this->merk = $merk;
        $this->ram = $ram;
        $this->ssd = $ssd;
    }

    function getLaptop()
    {
        return "merk:" . $this->merk . "ram:" . $this->ram . "ssd:" . $this->ssd;
    }
}
// $productOne = new Product();
// $productTwo = new Product();
// var_dump($productOne);
// echo "</br>";
// var_dump($productTwo);
