<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] != 2) {
    header("Location: login.php");
    exit();
}
?>

<h2>Thêm người dùng mới</h2>
<form action="user_xuly_them.php" method="post">
    Họ và tên: <input type="text" name="fullname" required><br>
    Username: <input type="text" name="username" required><br>
    Mật khẩu: <input type="password" name="password" required><br>
    Email: <input type="email" name="email" required><br>
    Level:
    <select name="level">
        <option value="1">1 - Người dùng</option>
        <option value="2">2 - Admin</option>
    </select><br><br>
    <input type="submit" value="Thêm mới">
</form>