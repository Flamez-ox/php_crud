<?php
ob_start(); // turn on output buffering

// session_start(); // turn on sessions if needed



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kbc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>