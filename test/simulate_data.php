<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'metrics_db');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generate random data
$cpu = rand(10, 90); // CPU usage between 10% and 90%
$memory = rand(1000, 8000); // Memory usage in MB
$network = rand(100, 1000); // Network bandwidth in Mbps

// Insert random data into the table
$sql = "INSERT INTO system_metrics (cpu_usage, memory_usage, network_bandwidth) 
        VALUES ($cpu, $memory, $network)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
