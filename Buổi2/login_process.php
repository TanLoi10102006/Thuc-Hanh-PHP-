<?php
session_start();

// ❌ XÓA dòng này
// require_once 'myaccount.php';

// ✅ THÊM dòng này
require_once 'dbcon.php';

// gán giá trị rỗng cho các biến
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * From Users where username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];

        header("location: myaccount.php");
        exit(); // 🔥 thêm cái này
    } else {
        header("location: noaccount.php");
        exit();
    }
} else {
    header("location: noaccount.php");
    exit();
}