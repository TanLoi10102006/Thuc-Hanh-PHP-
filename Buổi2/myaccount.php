<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 🔥 kiểm tra đăng nhập
if (!isset($_SESSION['fullname'])) {
    header("location: login.php");
    exit();
}

echo "Xin chào " . $_SESSION['fullname'];
echo ". <a href=\"logout.php\">Logout</a>";
echo "<br><br>";

// 🔥 kiểm tra level tồn tại
if (isset($_SESSION['level']) && $_SESSION['level'] == 2)
    echo "<a href=\"../index.php\">Vào trang quản lý dữ liệu</a>";
else
    echo "<a href=\"../../index.php\">Vào trang chủ</a>";
