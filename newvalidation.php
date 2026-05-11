<?php include "newdb.php"; ?>

<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // INPUT (basic trimming)
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // VALIDATION
    if (empty($username) || empty($email) || empty($password)) {
        $message = "All fields are required";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
    }
    elseif (strlen($password) < 6) {
        $message = "Password must be at least 6 characters";
    }
    else {

        // PASSWORD HASHING (security)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // SQL INJECTION PROTECTION (prepared statement)
        $stmt = $conn->prepare("
            INSERT INTO info (user_name, email, pass)
            VALUES (?, ?, ?)
        ");

        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        // bind parameters (sss = string, string, string)
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        $stmt->execute();

        $stmt->close();

        $message = "User registered successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Register</h2>

<form method="POST">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Email:
    <input type="text" name="email" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">Register</button>

</form>

<p>
<?php
// XSS protection on output
echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
?>
</p>

</body>
</html>