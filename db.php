<?php
$host = 'localhost'; // or your host
$db = 'user_management';
$user = 'root'; // your database username
$pass = ''; // your database password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>