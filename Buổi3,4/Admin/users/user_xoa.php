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
$userid = (int)$_GET['userid'];

// Xoá user
$deleteSql = "DELETE FROM users WHERE userid = $userid";
if (mysqli_query($conn, $deleteSql)) {
    header("Location: users_quanly.php");
} else {
    echo "Lỗi: " . mysqli_error($conn);
}
mysqli_close($conn);
