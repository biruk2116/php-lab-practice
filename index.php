<?php
$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html>
<head>
    <title>DBU System</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(90deg, #007bff, #00c6ff);
            padding: 14px 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .navbar a:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        /* HOME CARD */
        .card {
            background: white;
            padding: 25px;
            margin: 60px auto;
            width: 60%;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            text-align: center;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-15px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* CONTENT AREA */
        .content {
            padding: 20px;
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=register">Register</a>
    <a href="index.php?page=insert">Insert</a>
    <a href="index.php?page=update">Update</a>
    <a href="index.php?page=delete">Delete</a>
    <a href="index.php?page=Reterive">Retrieve</a>
</div>

<!-- CONTENT -->
<div class="content">

<?php
switch ($page) {

    case 'home':
        echo "
        <div class='card'>
            <h1>Welcome to DBU Student System</h1>
            <p>Use the navigation bar to manage students.</p>
        </div>";
        break;

    case 'register':
        include 'register.php';
        break;

    case 'insert':
        include 'insert.php';
        break;

    case 'update':
        include 'update.php';
        break;

    case 'delete':
        include 'delete.php';
        break;

    case 'Reterive':
        include 'Reterive.php';
        break;

    default:
        echo "<div class='card'><h2>Page not found</h2></div>";
}
?>

</div>

</body>
</html>