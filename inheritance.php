<?php

class Transportation
{
    public $name,
        $brand;
    public function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }


    public function run()
    {
        $str = "Transportasi dengan merk " . $this->name . " Dari PT " . $this->brand . " Telah berjalan";

        return $str;
    }

    public function stop()
    {
        return "Transpotasi dengan nama " . $this->name . " Telah berhenti";
    }
}
// mobil
class Car extends Transportation
{
    public $jumlah_pintu;

    public function __construct($name, $brand, $jumlah_pintu)
    {
        parent::__construct($name, $brand);
        $this->jumlah_pintu = $jumlah_pintu;
    }

    public function run()
    {
        $str = "Mobil  dengan merk " . $this->name . " Dari PT " . $this->brand . " Telah berjalan dan memili " . $this->jumlah_pintu . " pintu ";

        return $str;
    }
}
// motor
class Motor extends Transportation
{
    public $size_jok;
    public function __construct($name, $brand, $size_jok)
    {
        parent::__construct($name, $brand);
        $this->size_jok = $size_jok;
    }
    public function run()
    {
        $str = "Motor dengan merk " . $this->name . " Dari PT " . $this->brand . " Telah berjalan dengan size jok  " . $this->size_jok;

        return $str;
    }
}
// pesawat
class Plane extends Transportation
{
    public $ketingiian;
    public function __construct($name, $brand, $ketingiian)
    {
        parent::__construct($name, $brand);
        $this->ketingiian = $ketingiian;
    }
    public function run()
    {
        $str = "Pesawat dengan merk " . $this->name . " Dari PT " . $this->brand . " Telah terbang dengan ketinggingian " . $this->ketingiian . " kaki ";

        return $str;
    }
}

$motor = new Motor("supra", "Honda", "38cm");
$mobil = new Car("GTR", "Honda", 4);
$pesawat = new Plane("boeing", "Honda", 189000);
echo $motor->run();
echo "</br>";
echo "<hr>";
echo  $mobil->run();
echo "</br>";
echo "<hr>";
echo  $pesawat->run();
echo "<hr>";
