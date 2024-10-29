<?php
if (isset($_POST['submit'])) {
    // قم بتوجيه المستخدم إلى الصفحة الجديدة
    header("Location: login.php");
    exit();
}
?>

<header class="header" data-header>
    <div class="overlay" data-overlay></div>
    <div class="header-top">
        <div class="container">
            <a href="tel:+967 774150000" class="helpline-box">
                <div class="icon-box">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
                <div class="wrapper">
                    <p class="helpline-title">للحجز والاستفسار</p>
                    <p class="helpline-number"> 774150000 (967+) </p>
                </div>
            </a>
            <div class="header-btn-group">
                <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <ul class="social-list">
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
            </ul>
            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="./assets/images/logo.png" alt="white-city-agency">
                    </a>
                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>
                <ul class="navbar-list">
                    <li><a href="#home" class="navbar-link" data-nav-link>الرئيسية</a></li>
                    <li><a href="#" class="navbar-link" data-nav-link>من نحن</a></li>
                    <li><a href="#destination" class="navbar-link" data-nav-link>الوجهات</a></li>
                    <li><a href="#package" class="navbar-link" data-nav-link>العروض</a></li>
                    <!--<li><a href="#gallery" class="navbar-link" data-nav-link>المعرض</a></li>-->
                    <li><a href="#contact" class="navbar-link" data-nav-link>تواصل معنا</a></li>
                </ul>
            </nav>
            <form method="post">
            <button class="btn btn-primary" type="submit" name=""> احجز </button>
            </form>
            <form method="post">
            <button class="btn btn-primary" type="submit" name="submit">تسجيل الدخول</button>
            </form>
        </div>
    </div>
</header>
