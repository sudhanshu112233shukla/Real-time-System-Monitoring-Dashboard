CREATE TABLE system_metrics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cpu_usage FLOAT,
    memory_usage FLOAT,
    network_bandwidth FLOAT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
