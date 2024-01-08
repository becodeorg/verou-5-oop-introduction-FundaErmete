<?php

declare(strict_types=1);

class Beverage =
{
    // Properties
    public $color;
    public $price;
    public $temparature;
}

    // Constructor with default value for temperature
    public function __construct($color, $price, $temparature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temparature = $temparature;
    };


?>