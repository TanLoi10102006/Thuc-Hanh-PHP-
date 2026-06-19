<?php
require_once '../database/dbcon.php';
$maloai = $_GET["id"];
$sql = "delete from LoaiTin where maloai = $maloai";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: loaitin_quanly.php"); ?>