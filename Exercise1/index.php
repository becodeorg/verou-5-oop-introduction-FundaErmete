<?php

declare(strict_types=1);

class Beverage =
{
    // Properties
    public string $color;
    public float $price;
    public string $temperature;
}

    // Constructor with default value for temperature
    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    };


     // Functions
     public function getColor(): string {
        return $this->color;
     }

     public function getPrice(): float {
        return $this->price;
     }

     public function getTemparature(): string {
        return $this->temperature;
     }

     public function getInfo(): string {
        return "This beverage is {$this->temperature} and {$this->color}.";
     }
    

?>