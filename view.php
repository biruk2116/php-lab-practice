<!DOCTYPE html>
<html>

<head>
    <title>View Saved Data</title>
</head>

<body>

    <h2>All Saved Messages</h2>

    <?php

    $file = "data.txt";

    if (file_exists($file)) {

        $data = file_get_contents($file);

        if (strlen($data) > 0) {
            echo "<pre>$data</pre>";
        } else {
            echo "No data found in file.";
        }
    } else {
        echo "File does not exist yet.";
    }

    ?>

    <br><br>
    <a href="file.php">Back to Form</a>

</body>

</html>