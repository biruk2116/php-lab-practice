<?php

// Read JSON file
$jsonData = file_get_contents("country.json");

// Convert JSON to PHP array
$data = json_decode($jsonData, true);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Countries Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2 style="text-align:center;">Countries Information</h2>

    <table>
        <tr>
            <th>Country</th>
            <th>Capital</th>
            <th>Region</th>
            <th>Population</th>
            <th>Area</th>
        </tr>

        <?php
        // Loop through data
        for ($i = 0; $i < count($data["data"]); $i++) {

            $country = $data["data"][$i];

            echo "<tr>";
            echo "<td>" . $country["name"]["common"] . "</td>";
            echo "<td>" . $country["capital"][0] . "</td>";
            echo "<td>" . $country["region"] . "</td>";
            echo "<td>" . $country["population"] . "</td>";
            echo "<td>" . $country["area"] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>

</body>

</html>