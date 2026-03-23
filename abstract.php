<?php

// Abstract Class
abstract class Shape {

    // Abstract method (no body)
    abstract public function area();

    // Normal method
    public function display() {
        echo "This is a shape.<br>";
    }
}

// Subclass
class Circle extends Shape {

    private $radius;

    // Constructor
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement abstract method
    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}

// Create object
$circle = new Circle(5);

// Call methods
$circle->display();
echo "Area of Circle: " . $circle->area();

?>