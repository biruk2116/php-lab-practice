<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Student</title>

    <style>
body {
    margin: 0;
    font-family: Arial;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(-45deg, #4facfe, #00f2fe, #43e97b, #38f9d7);
    background-size: 400% 400%;
    animation: bg 10s ease infinite;
}

/* background animation */
@keyframes bg {
    0% {background-position: 0% 50%;}
    50% {background-position: 100% 50%;}
    100% {background-position: 0% 50%;}
}

/* TOP ALERT */
.alert {
    position: fixed;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    padding: 12px 25px;
    border-radius: 8px;
    font-weight: bold;
    z-index: 9999;
    animation: slideDown 0.4s ease;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.success {
    background: #d4edda;
    color: #155724;
    border-left: 5px solid #28a745;
}

.error {
    background: #f8d7da;
    color: #721c24;
    border-left: 5px solid #dc3545;
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translate(-50%, -20px);
    }
    to {
        opacity: 1;
        transform: translate(-50%, 0);
    }
}

/* FORM CARD */
.form-container {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(15px);
    padding: 30px;
    width: 360px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    animation: fadeIn 0.6s ease;
}

/* fade in */
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
}

h3 {
    text-align: center;
    color: white;
    margin-bottom: 20px;
}

/* inputs */
input {
    width: 100%;
    padding: 10px;
    margin: 8px 0 15px;
    border: none;
    border-radius: 8px;
    outline: none;
    transition: 0.3s;
}

input:focus {
    transform: scale(1.03);
    box-shadow: 0 0 12px rgba(0,255,255,0.6);
}

/* button */
button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(45deg, #007bff, #00c6ff);
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.3);
}
</style>
</head>

<body>

<div class="form-container">
    <h2>Insert Student</h2>

    <form method="POST">
        ID:
        <input type="number" name="id" required>

        Name:
        <input type="text" name="name" required>

        Age:
        <input type="number" name="age" required>

        Gender:
        <input type="text" name="gender" required>

        <button type="submit" name="submit">Insert</button>
    </form>
</div>

</body>
</html>
<?php
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    try {
        $stmt = $conn->prepare("INSERT INTO student VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isis", $id, $name, $age, $gender);
        $stmt->execute();

        echo "<div class='alert success'>✔ Student inserted successfully!</div>";

    } catch (mysqli_sql_exception $e) {

        // Check for duplicate primary key error
        if ($e->getCode() == 1062) {
            echo "<div class='alert error'>⚠ You entered a wrong or already used ID.</div>";
        } else {
            echo "<div class='alert error'>⚠ Something went wrong.</div>";
        }
    }
}
?>