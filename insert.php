<?php include 'db.php'; ?>
<form method="POST">
 ID: <input type="number" name="id"><br>
 Name: <input type="text" name="name"><br>
 Age: <input type="number" name="age"><br>
 Gender: <input type="text" name="gender"><br>
 <button type="submit" name="submit">Insert</button>
</form>
<?php
if (isset($_POST['submit'])) {
 $id = $_POST['id'];
 $name = $_POST['name'];
 $age = $_POST['age'];
 $gender = $_POST['gender'];
 // Prepared statement
 $stmt = $conn->prepare("INSERT INTO student VALUES (?, ?, ?, ?)");
 $stmt->bind_param("isis", $id, $name, $age, $gender);
 $stmt->execute();
 echo "Student inserted successfully!";
}
?>