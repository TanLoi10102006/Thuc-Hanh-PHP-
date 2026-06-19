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

// Lấy userid từ GET và làm sạch
$userid = (int)$_GET['userid'];
$sql = "SELECT * FROM users WHERE userid = $userid";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    $fullname = htmlspecialchars($row['fullname']);
    $username = htmlspecialchars($row['username']);
    $email    = htmlspecialchars($row['email']);
    $level    = $row['level'];
} else {
    die("Không tìm thấy người dùng.");
}
?>
<h2>Sửa thông tin người dùng</h2>
<form action="user_xuly_sua.php" method="post">
    <input type="hidden" name="userid" value="<?php echo $userid; ?>">
    Họ và tên: <input type="text" name="fullname" value="<?php echo $fullname; ?>" required><br>
    Username: <input type="text" name="username" value="<?php echo $username; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $email; ?>" required><br>
    Level:
    <select name="level">
        <option value="1" <?php if ($level == 1) echo 'selected'; ?>>1 - Người dùng</option>
        <option value="2" <?php if ($level == 2) echo 'selected'; ?>>2 - Admin</option>
    </select><br><br>
    <input type="submit" value="Cập nhật">
</form>