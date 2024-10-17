<?php
// Enable CORS (optional, needed for cross-origin requests)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Database connection details
$host = "localhost";    // Your MySQL host (likely "localhost")
$username = "root";     // Your MySQL username
$password = "";         // Your MySQL password
$dbname = "metrics_db"; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM system_metrics ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

// Check if we got results and return them as JSON
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    // In case there are no results, send an empty message
    echo json_encode(["message" => "No data found"]);
}

// Close the connection
$conn->close();
?>
