<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>

</body>

</html>
<?php
session_start();
require_once '../database/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = trim($_POST['fullname']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email    = trim($_POST['email']);

    // Mã hoá mật khẩu
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (fullname, username, password, email, level) VALUES (?, ?, ?, ?, 1)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $username, $hashedPassword, $email);

    if (mysqli_stmt_execute($stmt)) {
        echo "Đăng ký thành công! <a href='login.php'>Đăng nhập ngay</a>";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>

<h2>Đăng ký tài khoản</h2>
<form method="post">
    Họ và tên: <input type="text" name="fullname" required><br>
    Username: <input type="text" name="username" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Đăng ký">
</form>
<a href="login.php">Đã có tài khoản? Đăng nhập</a>