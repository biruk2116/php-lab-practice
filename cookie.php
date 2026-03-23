<?php
// Check if form is submitted
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    // Set cookie for 1 hour
    setcookie("name", $username, time() + 3600, "/");
    header("Location: cookie.php"); // reload to access cookie
    exit();
}

// Check if delete cookie button is pressed
if (isset($_POST['delete'])) {
    setcookie("name", "", time() - 3600, "/"); // delete cookie
    header("Location: cookie.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cookie Example</title>
</head>

<body>
    <h2>Enter Your Name (Cookie)</h2>
    <form method="post">
        <input type="text" name="username" required>
        <input type="submit" name="submit" value="Set Cookie">
    </form>

    <?php
    if (isset($_COOKIE['name'])) {
        echo "<h3>Welcome " . $_COOKIE['name'] . "</h3>";
    }
    ?>

    <form method="post">
        <input type="submit" name="delete" value="Delete Cookie">
    </form>
</body>

</html>