<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $short_text = $_POST['short_text'];
    $long_text = $_POST['long_text'];
    $description = $_POST['description'];
    $image = $_FILES['image_url']['name'];
    $target_dir = "directions";
    $target_file = $target_dir . basename($image);

    // رفع الصورة إلى المجلد المحدد
    if (move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file)) {
        // الاتصال بقاعدة البيانات
        $conn = new mysqli('localhost', 'root', '', 'white_city_travel');

        // التحقق من الاتصال
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // إدخال البيانات في الجدول
        $sql = "INSERT INTO directions (short_text, long_text, description, image_url) VALUES ('$short_text', '$long_text', '$description', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
