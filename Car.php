<?php


// Izveido, lūdzu, klasi Car, kurai ir publiska īpašības brand un privāta īpašība mileage
// Izveido, lūdzu, konstruktoru, kurš liek padot abas īpašības, klases Car objektu veidojot
// Izveido, lūdzu, destruktoru, kurš izvada paziņojumu [brand] is dead at mileage [mileage], kad klases Car objekts tiek iznīcināts
// Izveido publisku metodi increaseMileage($amount), kas palielina nobraukumu par doto argumentu
// Izveido divus klases Car objektus.
// Vienam objektam izsauc metodi increaseMileage($amount), palielinot nobraukumu par 240 km.

class Car
{
    public $brand;
    public $mileage;
    static $describe;

    function __construct($brand = "", $mileage = 0, $describe = "Its a car")
    {
        $this->brand = $brand;
        $this->mileage = $mileage;
        $this->describe = $describe;
    }
    function __destruct()
    {
        echo $this->brand . " is dead at mileage " . $this->mileage . "Km" . "<br>";
    }
    function increaseMileage($amount)
    {
        $this->mileage = $this->mileage + $amount;
    }
}
