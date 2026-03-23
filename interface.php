<?php 

interface Vehicle{
    public function move();
   
}

class Machine{
    public function start(){
        echo"Machine starting...";
    }
}

class Car extends Machine implements Vehicle{
    public function move(){
        echo"car is  moving in the road...";
    }

      public function stop(){
        echo"car has  stopped.";
    }
}

$myCar=new Car();
$myCar->start();
$myCar->move();
$myCar->stop();

?>