<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "DBU";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO student (name, age, gender)
            VALUES ('$name', '$age', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Student inserted successfully<br>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Add Student</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Gender: 
    <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select><br><br>

    <input type="submit" name="submit" value="Insert Student">
</form>

<hr>

<!-- =========================
     FETCH DATA
========================= -->
<h2>Student List</h2>

<?php
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['gender']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No students found.";
}

$conn->close();
?>