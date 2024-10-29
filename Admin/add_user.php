<?php
$servername = "localhost";
$username = "root"; // اسم المستخدم لقاعدة البيانات
$password = ""; // كلمة المرور لقاعدة البيانات
$dbname = "white_city_travel"; // اسم قاعدة البيانات

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// الحصول على البيانات من النموذج
$user = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['user-type'];

// إعداد استعلام SQL لإدخال البيانات
$sql = "INSERT INTO users (username, password, role) VALUES ('$user', '$pass', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('تمت الاضافة بنجاح'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('حدث خطأ أثناء الاضافة: " . $conn->error . "'); window.location.href = 'index.php';</script>";
}

// إغلاق الاتصال
$conn->close();
?>
