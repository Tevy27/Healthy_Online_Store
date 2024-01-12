<?php
// Database Connection Details
$dbHost = 'feenix-mariadb.swin.edu.au';
$dbUsername = 's103139978';
$dbPassword = '271199';
$dbName = 's103139978_db';

// Create connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
