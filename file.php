<!DOCTYPE html>
<html>
<head>
    <title>Simple Form</title>
</head>
<body>

<h2>User Form</h2>

<form action="file.php" method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Message: <textarea name="message" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

  
    $data = "Name: $name | Email: $email | Message: $message\n";

  
    $file = "data.txt";

    // Open file and write
    $f = fopen($file, "a");
    fwrite($f, $data);
    fclose($f);

    echo "Data saved successfully!";
}
?>
