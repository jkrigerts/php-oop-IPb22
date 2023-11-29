<?php

class Tire
{

    function __construct(
        public $size, 
        public $type, 
        private $quality
    ){}

    function __destruct()
    {
        echo "<br>"."Boom!";
    }
}