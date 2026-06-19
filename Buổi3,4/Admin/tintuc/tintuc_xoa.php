<?php
require_once '../database/dbcon.php';
$maloai = $_GET["id"];

$sql = "DELETE FROM LoaiTin WHERE maloai = $maloai";
mysqli_query($conn, $sql);

mysqli_close($conn);
header("location: ../loaitin/loaitin_quanly.php");
