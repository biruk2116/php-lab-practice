<?php
header("Content-Type: application/json");

// Read raw input
$raw = file_get_contents("php://input");

// Debug: check input
if (!$raw) {
    echo json_encode([
        "status" => "error",
        "message" => "No data received"
    ]);
    exit;
}

// Decode JSON
$data = json_decode($raw, true);

// Check if decode failed
if (!$data) {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid JSON"
    ]);
    exit;
}

// Now safe to use
$name = $data["name"] ?? "";
$bus_id = $data["bus_id"] ?? "";
$seat = $data["seat"] ?? "";

// Validate
if (!$name || !$bus_id || !$seat) {
    echo json_encode([
        "status" => "error",
        "message" => "All fields are required"
    ]);
    exit;
}

// Success
echo json_encode([
    "status" => "success",
    "message" => "Seat $seat booked successfully for $name"
]);
?>