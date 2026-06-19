<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
require_once '../database/dbcon.php';
$tenloai = $_POST["tenloai"];
$sql = "Insert into LoaiTin (tenloai) values ('$tenloai')";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: loaitin_quanly.php"); ?>