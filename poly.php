<?php

class StringOperations {

    // Magic method to handle undefined methods
    public function __call($name, $arguments) {

        if ($name == "process") {

            $count = count($arguments);

            // ✅ One argument → uppercase
            if ($count == 1) {
                return strtoupper($arguments[0]);
            }

            // ✅ Two arguments → concatenate
            elseif ($count == 2) {
                return $arguments[0] . $arguments[1];
            }

            // ❌ Any other number of arguments
            else {
                return "Invalid number of arguments!";
            }
        }
    }
}

// Create object
$obj = new StringOperations();

// Test cases
echo $obj->process("hello") . "<br>";           // ONE argument
echo $obj->process("Hello ", "World") . "<br>"; // TWO arguments
echo $obj->process("A", "B", "C");              // INVALID

?>