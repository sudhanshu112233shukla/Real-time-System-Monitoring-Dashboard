function updateMetrics() {
    fetch('fetch_metrics.php')
        .then(response => response.json()) // Parse JSON from PHP
        .then(data => {
            console.log(data); // Log data for debugging

            if (data.cpu_usage) { // Check if data is valid
                document.getElementById('cpu').innerHTML = `CPU Usage: ${data.cpu_usage}%`;
                document.getElementById('memory').innerHTML = `Memory Usage: ${data.memory_usage}MB`;
                document.getElementById('network').innerHTML = `Network Bandwidth: ${data.network_bandwidth}KB/s`;
            } else {
                console.error('No valid data received:', data.message);
            }
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

updateMetrics(); // Call the function to fetch and update metrics
