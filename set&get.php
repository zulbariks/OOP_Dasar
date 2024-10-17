<?php

class Transportation
{
    public $name,
        $brand;

    // setter
    public function set_name()
    {
        return $this->name;
    }

    // getter
    public function get_brand()
    {
        return $this->brand;
    }

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
// Private visibility

class Sports
{
    private $olahraga;

    public function set_olahraga($olahraga)
    {
        return $this->olahraga = $olahraga;
    }

    public function get_olahraga()
    {
        return $this->olahraga;
    }

    public function __construct($olahraga)
    {
        $this->olahraga = $olahraga;
    }

    private function getOlahraga()
    {
        return $this->olahraga;
    }

    public function tampilkanOlahraga()
    {
        return $this->getOlahraga();
    }
}

$sports = new Sports("GYM");
echo $sports->tampilkanOlahraga();
echo "<br>";
echo "<hr>";
echo $sports->set_olahraga("Push Up");

// fruits 
// 13. *Food*  
//    - *Parent class*: Food  
//      - *Properties*: name (public), calories (protected)  
//      - *Methods*: 
//        - __construct($name, $calories)
//        - eat() returns "Eating [name]"
//    - *Child class*: Fruit  
//      - *Properties*: vitaminCContent (public)  
//      - *Methods*: 
//        - __construct($name, $calories, $vitaminCContent)  
//        - eat() overrides to return "Eating [name] with [vitaminCContent]mg of vitamin C"
echo "</hr>";
echo "<hr>";

class Food
{
    public $name;
    protected $calories;

    public function __construct($name, $calories)
    {
        $this->name = $name;
        $this->calories = $calories;
    }

    protected function getName()
    {
        return "Anda sedang eating buah " . $this->name . " yang memiliki kalori " . $this->calories;
    }
}

class Fruits extends Food
{
    public function info()
    {
        return $this->getName();
    }
}

$mangga = new Fruits("Mangga Indramayu", "121298KKL");
echo $mangga->info();
echo "<br>";
echo "<hr>";
echo $mobil->get_brand();
$mobil->set_name("TOYOTA");
echo "<br>";
echo "<hr>";
