<?php

// 1. sort() - Sort indexed array in ascending order
$numbers = [4, 2, 8, 6, 1];
sort($numbers); // Ascending sort
echo "sort(): ";
print_r($numbers);
echo "<br>";

// 2. rsort() - Sort indexed array in descending order
$numbers_desc = [4, 2, 8, 6, 1];
rsort($numbers_desc); // Descending sort
echo "rsort(): ";
print_r($numbers_desc);
echo "<br>";

// 3. asort() - Sort associative array in ascending order by value
$fruits = [
    "apple" => 3,
    "banana" => 1,
    "cherry" => 2
];
asort($fruits); // Sort by value ascending
echo "asort(): ";
print_r($fruits);
echo "<br>";

// 4. ksort() - Sort associative array in ascending order by key
$fruits_key = [
    "apple" => 3,
    "banana" => 1,
    "cherry" => 2
];
ksort($fruits_key); // Sort by key ascending
echo "ksort(): ";
print_r($fruits_key);
echo "<br>";

// 5. arsort() - Sort associative array in descending order by value
$fruits_value_desc = [
    "apple" => 3,
    "banana" => 1,
    "cherry" => 2
];
arsort($fruits_value_desc); // Sort by value descending
echo "arsort(): ";
print_r($fruits_value_desc);
echo "<br>";

// 6. krsort() - Sort associative array in descending order by key
$fruits_key_desc = [
    "apple" => 3,
    "banana" => 1,
    "cherry" => 2
];
krsort($fruits_key_desc); // Sort by key descending
echo "krsort(): ";
print_r($fruits_key_desc);
echo "<br>";
?>