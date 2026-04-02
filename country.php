<?php

// Read JSON file
$jsonData = file_get_contents("country.json");

// Convert JSON to PHP array
$data = json_decode($jsonData, true);

// Loop through all countries
for ($i = 0; $i < count($data["data"]); $i++) {

    $country = $data["data"][$i];

    echo "Country: " . $country["name"]["common"] . "<br>";
    echo "Capital: " . $country["capital"][0] . "<br>";
    echo "Region: " . $country["region"] . "<br>";
    echo "Population: " . $country["population"] . "<br>";
    echo "Area: " . $country["area"] . "<br><hr>";
}
