<?php
require_once '../database/dbcon.php';
$maloai = $_POST["maloai"];
$tenloai = $_POST["tenloai"];
$trangthai = $_POST["trangthai"];
$sql = "Update LoaiTin set tenloai = '$tenloai', trangthai = $trangthai
where maloai = $maloai";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: loaitin_quanly.php");
