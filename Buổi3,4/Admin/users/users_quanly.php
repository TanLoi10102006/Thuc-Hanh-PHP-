<?php
session_start();
require_once '../database/dbcon.php';

// Kiểm tra quyền admin
if (!isset($_SESSION['username']) || $_SESSION['level'] != 2) {
    header("Location: login.php");
    exit();
}

// Truy vấn danh sách user
$sql = "SELECT userid, fullname, username, email, level FROM users";
$result = mysqli_query($conn, $sql);

echo "<h2>Danh sách người dùng</h2>";
echo "<a href='user_them.php'>Thêm mới người dùng</a><br><br>";

echo "<table border='1' cellpadding='5'><tr>
        <th>ID</th><th>Họ tên</th><th>Username</th><th>Email</th><th>Level</th>
        <th>Hành động</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['userid']) . "</td>";
    echo "<td>" . htmlspecialchars($row['fullname']) . "</td>";
    echo "<td>" . htmlspecialchars($row['username']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['level']) . "</td>";
    echo "<td>
            <a href='user_sua.php?userid={$row['userid']}'>Sửa</a> | 
            <a href='user_xoa.php?userid={$row['userid']}' onclick=\"return confirm('Xác nhận xoá?')\">Xóa</a> | 
            <a href='user_doimatkhau.php?userid={$row['userid']}'>Đổi mật khẩu</a>
          </td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
