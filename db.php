<?php

$db_server = "localhost";
$db_user   = "root";
$db_pass   = "";
$db_name   = "DBU";
$db_port   = 3306;

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>
