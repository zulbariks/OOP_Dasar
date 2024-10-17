<?php

class Animals
{
    public $name = "Binatang",
        $sound = "Rawwwwwwwwwwwrrrrrrrrrr",
        $species = "binatang darat";

    public function __construct($name, $sound, $species)
    {
        $this->name = $name;
        $this->sound = $sound;
        $this->species = $species;
    }

    public function make_sound()
    {
        return  $this->name . " Bersuara " . $this->sound . " Berjenis " . $this->species;
    }
}

$anjing = new Animals("Anjing", "gukgukguk", "Mamalia");

$babi = new Animals("Babi", "ngikngikngik", "Papalia");


echo $anjing->make_sound();
echo "</br>";
echo $babi->make_sound();
echo "</br>";
echo "</br>";
echo "</br>";

class Diniyyah
{
    public $name,
        $tashrif,
        $wazan,
        $gender;

    public function make_masdar()
    {
        return "Wazan dari " . $this->tashrif . " Untuk " . $this->gender;
    }
}

$nahwu = new Diniyyah();
$nahwu->name = "Nahwu";
$nahwu->tashrif = "Fa'ala-Yuf'ilu";
$nahwu->wazan  = "Fu'ila";
$nahwu->gender = "Muannats";

$shorof = new Diniyyah();
$shorof->name = "Shorof";
$shorof->tashrif = "Fa'alaa-Yufaa'ilu";
$shorof->wazan  = "Fa'alaa";
$shorof->gender = "Mudzakkar";

echo $nahwu->make_masdar();
echo "</br>";
echo $shorof->make_masdar();
echo "</br>";


