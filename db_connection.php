<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "quiz_db";

// Create connection
$dbc = new mysqli($servername, $username, $password, $database);

// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
} 
echo "Connected successfully";
