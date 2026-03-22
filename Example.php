<!DOCTYPE html>
<html>
<head>
    <title>Car Stock Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            text-align: center;
        }
        th, td {
            border: 2px solid black;
            padding: 10px;
        }
        th {
            font-size: 20px;
        }
    </style>
</head>
<body>

<?php
// Two-dimensional array
$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];

// Display table
echo "<table>";
echo "<tr><th>Name</th><th>Stock</th><th>Sold</th></tr>";

foreach ($cars as $row) {
    echo "<tr>";
    
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>