<?php
require_once '../database/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        echo "Tài khoản tồn tại. Bạn có thể đặt lại mật khẩu.";
        // Ở đây bạn có thể viết thêm logic gửi email reset mật khẩu
    } else {
        echo "Không tìm thấy email này.";
    }
}
?>

<h2>Quên mật khẩu</h2>
<form method="post">
    Nhập email của bạn: <input type="email" name="email" required><br><br>
    <input type="submit" value="Xác nhận">
</form>