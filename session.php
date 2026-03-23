<?php
session_start(); // start the session

// Check if form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $_SESSION['name'] = $username;
    header("Location: session.php"); // reload to access session
    exit();
}

// Check if destroy session button is pressed
if (isset($_POST['destroy'])) {
    session_destroy();
    header("Location: session.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Session Example</title>
</head>

<body>
    <h2>Enter Your Name (Session)</h2>
    <form method="post">
        <input type="text" name="username" required>
        <input type="submit" name="submit" value="Set Session">
    </form>

    <?php
    if (isset($_SESSION['name'])) {
        echo "<h3>Welcome " . $_SESSION['name'] . "</h3>";
    }
    ?>

    <form method="post">
        <input type="submit" name="destroy" value="Destroy Session">
    </form>
</body>

</html>