<?php
require_once("../database/dbcon.php");
$maloai = $_POST["maloai"];
$tentin = $_POST["tentin"];
$tomtat = $_POST["tomtat"];
$noidung = $_POST["noidung"];
$tacgia = $_POST["tacgia"];
$tenhinh = $_FILES["hinhanh"]["name"];
$sql = "insert into TinTuc(maloai, tentin, tomtat, noidung, hinhanh, tacgia) 
values($maloai, '$tentin', '$tomtat', '$noidung', '$tenhinh', '$tacgia')";
mysqli_query($conn, $sql);
mysqli_close($conn);
move_uploaded_file($_FILES["hinhanh"]["tmp_name"], '../../images/' . $tenhinh);
header("location: tintuc_quanly.php");
