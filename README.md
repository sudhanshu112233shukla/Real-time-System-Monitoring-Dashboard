# Real-time-System-Monitoring-Dashboard
Real-time System Monitoring Dashboard
System Metrics Monitoring Dashboard
This project is a simple system metrics monitoring dashboard that fetches and displays CPU usage, memory usage, and network bandwidth in real time using PHP, MySQL, JavaScript, and HTML.

Features
Fetches system metrics (CPU, memory, network) from a MySQL database.
Displays metrics in a structured dashboard format.
Simulates real-time metrics data insertion into the database.
Easy to set up using XAMPP and phpMyAdmin.
Table of Contents
Installation
Setup
Database Configuration
Running the Project
Troubleshooting
Contributing
Installation
To get started with the project, you'll need to have the following installed:

Prerequisites
XAMPP (Apache, MySQL, PHP):
Download and install XAMPP from https://www.apachefriends.org/index.html.

phpMyAdmin:
This is included with XAMPP for managing MySQL databases.

Additional Tools
A web browser (e.g., Chrome, Firefox).
A code editor (e.g., Visual Studio Code, Sublime Text).
Setup
1. Clone the Repository
Clone the project to your local machine:

bash
Copy code
git clone https://github.com/your-username/system-metrics-dashboard.git
2. Move Files to XAMPP's htdocs
After cloning the repository, move your project files to XAMPP's htdocs directory:

bash
Copy code
C:/xampp/htdocs/system-metrics-dashboard
3. Start XAMPP
Open the XAMPP Control Panel and start Apache and MySQL.

4. Create a MySQL Database
Use phpMyAdmin to set up the database for storing system metrics.

Open your browser and navigate to:
bash
Copy code
http://localhost/phpmyadmin/
Create a new database called metrics_db.
Use the SQL file provided (text.sql) to create the system_metrics table:
In phpMyAdmin, open the SQL tab and run the contents of text.sql.
Database Configuration
The system_metrics table should contain the following columns:

id (INT, Primary Key, Auto Increment)
cpu_usage (FLOAT)
memory_usage (FLOAT)
network_bandwidth (FLOAT)
timestamp (TIMESTAMP)
You can simulate real-time data insertion using the simulate_data.php script.

Running the Project
Open your browser and navigate to the project URL:

bash
Copy code
http://localhost/system-metrics-dashboard/index.html
You should see a dashboard displaying the system metrics (CPU, memory, and network).

The data is fetched via the fetch_metrics.php script, which retrieves the latest metrics from the database and updates the dashboard.

Simulating Metrics Data
To simulate system metrics data, run the simulate_data.php file:

bash
Copy code
http://localhost/system-metrics-dashboard/simulate_data.php
This script generates random data for CPU, memory, and network usage and inserts it into the system_metrics table.

Troubleshooting
Ensure that Apache and MySQL services are running in XAMPP.
Make sure your database is properly set up in phpMyAdmin.
If data isn't displaying, verify that your file paths are correct in the PHP and HTML files.
Contributing
Feel free to submit issues or pull requests if you find any bugs or want to contribute enhancements to the project.
