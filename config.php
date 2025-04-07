<?php 
$host = "127.0.0.1:3307"; // Specify correct port
$user = "root";
$pass = "";
$db = "library_mngmt";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
