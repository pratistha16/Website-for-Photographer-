<?php
$servername = "localhost";
$username = "root";
$password = "Pradeepa@16";
$dbname = "pixel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "";
?>