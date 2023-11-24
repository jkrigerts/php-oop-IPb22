<?php

class Bird
{
    public $name;
    public $acis;
    public $kajas;
    public $rokas;  
    private $flyorno;

    function __construct($name = "", $acis = 0, $kajas = 0, $rokas = 0, $flyorno = "nelidos")
    {
        $this->name = $name;
        $this->acis = $acis;
        $this->kajas = $kajas;
        $this->rokas = $rokas;
        $this->flyorno = $flyorno;
    }
    function __destruct()
    {
        echo $this->name . " is dead. LMAO BOZO💀" . "<br>";
    }
    public function setflyorno($value)
    {
        return $this->flyorno = $value;
    }
    public function getflyorno()
    {
        return $this->flyorno;
    }
}
