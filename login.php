<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
<?php include('connection.php'); ?>
<?php
if (isset($_POST['submit'])) {
    // قم بتوجيه المستخدم إلى الصفحة الجديدة
   // header("Location: index.php");
    exit();
}
?>

<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="select * from users where Username='" . $_POST["t1"] . "' and password='" . $_POST["t2"] ."'";
	
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
    $data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["Username"]= $_POST["t1"];
		$_SESSION["role"]=$data[2];
		$_SESSION['loginstatus']="yes";
		header("location:Admin/index.php"); // تعديل المسار هنا
	}
	else
	{
	echo "<script>alert('Invalid User Name or Password');</script>";
}
}
?>

    <div class="login-container">
        <form action="login.php" method="post" class="login-form">
            <h1>تسجيل الدخول</h1>
            <div class="txtb">
                <input type="text" name="t1" required>
                <span data-placeholder="اسم المستخدم"></span>
            </div>
            <div class="txtb">
                <input type="password" name="t2" required>
                <span data-placeholder="كلمة المرور"></span>
            </div>
            <input type="submit" name="sbmt" class="logbtn" value="تسجيل الدخول">
            <div class="bottom-text">
            </div>

        </form>
        <form method="post">
            <button class="logbtn" type="submit" name="submit"> العودة الى الصفحة الرئيسية </button>
        </form>
    </div>

</body>
</html>
