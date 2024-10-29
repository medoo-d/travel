<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "white_city_travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_GET['user_id'];

$sql = "SELECT * FROM users WHERE user_id = $user_id";
$result = $conn->query($sql);

$user = $result->fetch_assoc();

echo json_encode($user);

$conn->close();
?>
