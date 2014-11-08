<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$db = mysql_select_db("ubiqserve");
?>
