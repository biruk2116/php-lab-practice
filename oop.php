<?php
class Car {
    public $model;
    public $color;

    // Constructor
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
        echo "Car object created<br>";
    }



    // Destructor
    public function __destruct() {
        echo "Model: " . $this->model . "<br>";
        echo "Color: " . $this->color . "<br>";
        echo "Car object destroyed";
    }
}

// Create object
$car1 = new Car("Toyota", "Red");

// $car1->__destruct();
?>