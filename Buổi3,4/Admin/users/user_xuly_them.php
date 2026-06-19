<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] != 2) {
    header("Location: login.php");
    exit();
}
// Kết nối DB
$conn = mysqli_connect("localhost", "root", "", "TinTucOnline");
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}


// Lấy và làm sạch dữ liệu từ POST
$fullname = trim(htmlspecialchars(addslashes($_POST['fullname'])));
$username = trim(htmlspecialchars(addslashes($_POST['username'])));
$password = trim(htmlspecialchars(addslashes($_POST['password'])));
$email    = trim(htmlspecialchars(addslashes($_POST['email'])));
$level    = (int)$_POST['level'];  // ép kiểu int cho cột level

// Kiểm tra username duy nhất
$checkSql = "SELECT userid FROM users WHERE username = '$username'";
$check = mysqli_query($conn, $checkSql);
if (mysqli_num_rows($check) > 0) {
    echo "Username đã tồn tại. Vui lòng chọn tên khác.";
    exit();
}

// Chèn user mới (có thể lưu $password dưới dạng hash nếu muốn an toàn hơn)
$insertSql = "INSERT INTO users (fullname, username, password, email, level) 
              VALUES ('$fullname', '$username', '$password', '$email', $level)";
if (mysqli_query($conn, $insertSql)) {
    header("Location: users_quanly.php");
} else {
    echo "Lỗi: " . mysqli_error($conn);
}
mysqli_close($conn);
