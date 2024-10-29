<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "white_city_travel";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user-id'];

    // حذف المستخدم من قاعدة البيانات
    $sql = "DELETE FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "<script>alert('تمت الحذف بنجاح'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('خطا بحذف المستخدم'); window.location.href = 'index.php';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
