<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] != 2) {
    header("Location: login.php");
    exit();
}
$conn = mysqli_connect("localhost", "db_user", "db_pass", "db_name");

// Lấy và làm sạch dữ liệu từ POST
$userid   = (int)$_POST['userid'];
$fullname = trim(htmlspecialchars(addslashes($_POST['fullname'])));
$username = trim(htmlspecialchars(addslashes($_POST['username'])));
$email    = trim(htmlspecialchars(addslashes($_POST['email'])));
$level    = (int)$_POST['level'];

// (Tùy chọn) Kiểm tra trùng username mới với user khác
$checkSql = "SELECT userid FROM users WHERE username = '$username' AND userid <> $userid";
$check = mysqli_query($conn, $checkSql);
if (mysqli_num_rows($check) > 0) {
    echo "Username đã tồn tại. Vui lòng chọn tên khác.";
    exit();
}

// Cập nhật thông tin
$updateSql = "UPDATE users SET fullname='$fullname', username='$username', email='$email', level=$level
              WHERE userid = $userid";
if (mysqli_query($conn, $updateSql)) {
    header("Location: user_quanly.php");
} else {
    echo "Lỗi: " . mysqli_error($conn);
}
mysqli_close($conn);
