<?php

declare(strict_types=1);

class Beverage 
{
    // Properties 
    private string $color;
    private float $price;
    private string $temperature;

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

class Beer extends Beverage
{
    // Properties
    private string $name;
    private float $alcoholPercentage;

    // Constructor using parent constructor and setting additional properties
    public function __construct(string $name, float $alcoholPercentage, string $color = "blond", float $price = 3.5, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // Function to get alcohol percentage
    public function getAlcoholPercentage(): float {
        return $this->alcoholPercentage;
    }

    // Public method to update color
    public function updateColor(string $newColor): void {
        $this->color = $newColor;
    }

    // New private method beerInfo
    private function beerInfo(): string {
        return "Hi, I'm {$this->name} and have an alcohol percentage of {$this->alcoholPercentage} and I have a {$this->color} color.";
    }

    // Public method to print beerInfo
    public function printBeerInfo(): void {
        echo $this->beerInfo() . "\n";
    }
}

// Instantiate an object representing Duvel
$duvel = new Beer("Duvel", 8.5);

// Print the alcohol percentage 
echo "Alcohol Percentage: " . $duvel->getAlcoholPercentage() . "\n";
echo "Alcohol Percentage: {$duvel->getAlcoholPercentage()}\n";

// Print the color 
echo "Color: " . $duvel->getColor() . "\n";

// Print the result of getInfo 
echo $duvel->getInfo() . "\n";

// Change the color of Duvel
$duvel->updateColor('light');

// Print the new color 
echo "New Color: " . $duvel->getColor() . "\n";

// Print beerInfo on a new line
$duvel->printBeerInfo();

?>
