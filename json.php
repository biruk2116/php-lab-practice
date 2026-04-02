<?php
// Read JSON file
$json = file_get_contents("data.json");

// Convert JSON to PHP array
$data = json_decode($json, true);

// Display values
echo "Name: " . $data["name"] . "<br>";
echo "Age: " . $data["age"] . "<br>";
echo "City: " . $data["city"];
?>
