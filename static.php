<?php

class Novel
{
    public static $name;
    public static $count = 1;

    public static  function set_name($name)
    {
        self::$name = $name;
    }

    public static function get_name()
    {
        return "Nama novel " . self::$name . " telah diambil sebanyak " . self::$count++ . " kali ";
    }
}

class Novel2
{
    public $name;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return "Ini bukan novel " . $this->name . " yang static";
    }
}

// static
Novel::$name = "BUMI";
echo Novel::get_name();
echo "<br>";
echo "<hr>";
echo Novel::get_name();
echo "<br>";
echo "<hr>";
echo Novel::get_name();
echo "<br>";
echo "<hr>";
echo Novel::get_name();
echo "<br>";
echo "<hr>";
echo Novel::get_name();
echo "<br>";
echo "<hr>";
echo "<br>";
echo "<br>";
echo "<hr>";
// bukan static
$pulang_pergi = new Novel2();
$pulang_pergi->set_name("Pulang Pergi");
echo $pulang_pergi->get_name();
echo "<br>";
echo "<hr>";
$janji = new Novel2();
$janji->set_name("janji");
echo $janji->get_name();
echo "<br>";
echo "<hr>";
$hello_wordl = new Novel2();
$hello_wordl->set_name("hello world");
echo $hello_wordl->get_name();
echo "<br>";
echo "<hr>";
