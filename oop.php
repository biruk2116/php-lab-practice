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


<?php
$students = [
    ["name" => "Kalab", "scores" => [70, 80, 90]],
    ["name" => "Sara", "scores" => [50, 60, 55]],
    ["name" => "John", "scores" => [95, 85, 92]]
];

foreach ($students as $student) {
    $average = array_sum($student['scores']) / count($student['scores']);
    $status = ($average >= 60) ? "Pass" : "Fail";
    echo "Student: {$student['name']}, Average: $average, Status: $status<br>";
}
?>