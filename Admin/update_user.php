<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "white_city_travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_id = $_POST['user-id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "UPDATE users SET username='$username', password='$password', role='$role' WHERE user_id=$user_id";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('تم التحديث بنجاح'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('حدث خطأ أثناء التحديث: " . $conn->error . "'); window.location.href = 'index.php';</script>";
}

$conn->close();
?>
