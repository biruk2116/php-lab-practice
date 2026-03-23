<?php 

class student {

public $name;
public $age;


function learn(){

echo "I learn IT";
}
}

$stud= new student();
$stud->name="Biruk";
$stud->age=23;
$stud->learn();

?>