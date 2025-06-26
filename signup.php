<?php
$servername = "db5017670443.hosting-data.io";
$username = "dbu2152368";
$password = "Nahid696@#!!";  // Replace this with your actual database password
$dbname = "dbu2152368";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
