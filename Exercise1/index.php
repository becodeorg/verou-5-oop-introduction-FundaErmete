<?php

declare(strict_types=1);

class Beverage 
{
    // Properties
    public string $color;
    public float $price;
    public string $temperature;

    // Constructor with default value for temperature
    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // Functions
    public function getColor(): string {
        return $this->color;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getTemperature(): string {
        return $this->temperature;
    }

    public function getInfo(): string {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }
}

// Instantiate an object representing cola
$cola = new Beverage("Black", 2.0);

// Print the result of getInfo on the screen
echo $cola->getInfo() . "\n";

// Print the temperature on the screen
echo "Temperature: " . $cola->getTemperature() . "\n";

?>
