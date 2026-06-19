<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "TinTucOnline");


// Lấy dữ liệu và làm sạch
$username = trim(htmlspecialchars(addslashes($_POST['username'])));
$password = trim(htmlspecialchars(addslashes($_POST['password'])));

// Kiểm tra đăng nhập
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    // Đăng nhập thành công
    $_SESSION['userid']   = $row['userid'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['level']    = $row['level'];

    if ($row['level'] == 2) {
        // Nếu là admin, chuyển về trang quản lý người dùng
        header("Location: users_quanly.php");
    } else {
        // Nếu là user bình thường, có thể chuyển đến trang khác (hoặc báo lỗi)
        echo "Bạn không có quyền truy cập khu vực này.";
    }
} else {
    // Đăng nhập thất bại
    echo "Sai tên đăng nhập hoặc mật khẩu.";
}
mysqli_close($conn);
