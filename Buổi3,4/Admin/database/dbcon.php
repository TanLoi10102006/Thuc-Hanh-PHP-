<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TinTucOnline";
$conn = mysqli_connect("localhost", "root", "", "TinTucOnline");
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");
