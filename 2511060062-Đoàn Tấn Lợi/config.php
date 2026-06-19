<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "quanlysukien";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Kết nối thất bại");
}

mysqli_set_charset($conn, "utf8");
