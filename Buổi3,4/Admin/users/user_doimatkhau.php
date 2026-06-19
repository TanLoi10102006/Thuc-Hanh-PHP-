<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['level'] != 2) {
    header("Location: login.php");
    exit();
}
$conn = mysqli_connect("localhost", "root", "", "TinTucOnline");
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Xử lý khi submit form
    $userid = (int)$_POST['userid'];
    $newpass = trim(htmlspecialchars(addslashes($_POST['newpassword'])));
    $updateSql = "UPDATE users SET password='$newpass' WHERE userid = $userid";
    if (mysqli_query($conn, $updateSql)) {
        echo "Đã cập nhật mật khẩu thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
} else {
    // Hiển thị form đổi mật khẩu
    $userid = (int)$_GET['userid'];
    echo "<h2>Đổi mật khẩu cho User ID: $userid</h2>";
    echo "<form method='post'>";
    echo "<input type='hidden' name='userid' value='$userid'>";
    echo "Mật khẩu mới: <input type='password' name='newpassword' required><br><br>";
    echo "<input type='submit' value='Cập nhật'>";
    echo "</form>";
}
mysqli_close($conn);
