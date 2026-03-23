<?php

// Parent Class
class Car {
    public $speed;        // public
    protected $color;     // protected
    private $engine;      // private

    // Constructor
    public function __construct($speed, $color, $engine) {
        $this->speed = $speed;
        $this->color = $color;
        $this->engine = $engine;
    }

    // Method to display car info
    public function Info() {
        echo "Speed: " . $this->speed . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Engine: " . $this->engine . "<br>";
    }
}

// Child Class
class Volvo extends Car {

    public function display() {
        echo "I am Volvo<br>";
    }
}

// Create object from subclass
$car1 = new Volvo(200, "Red", "V8");

// Call methods
$car1->Info();
$car1->display();

?>