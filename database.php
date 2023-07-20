<?php
// Database configuration
session_start();
$host = "localhost"; // Replace with your database host
$database = "callista"; // Replace with your database name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password

// Create a new MySQLi instance
$connection = new mysqli($host, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
