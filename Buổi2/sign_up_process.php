<?php
require_once 'login.php';
// gán giá trị rỗng cho các biến
$fullname = $username = $email = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $sql = "Insert into Users (fullname, username, password, email) values
('$fullname', '$username', '$password', '$email')";
    if (mysqli_query($conn, $sql))
        header("location: ../index.php"); //Nếu thành công thì chuyển đến trang admin/index.php
    else
        header("location: sign_up.php"); //Đăng ký ko thành công, quay lại
} else
    header("location: sign_up.php"); //Đăng ký ko thành công, quay lại