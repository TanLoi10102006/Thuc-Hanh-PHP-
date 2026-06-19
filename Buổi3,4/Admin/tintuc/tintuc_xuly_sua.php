<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php
require_once '../database/dbcon.php';
$matin = $_POST["matin"];
$maloai = $_POST["maloai"];
$tentin = $_POST["tentin"];
$tomtat = $_POST["tomtat"];
$noidung = $_POST["noidung"];
$hinhanh = $_POST["hinhanhcu"];
$hinhanhmoi = $_FILES["hinhanhmoi"]["name"];
$tacgia = $_POST["tacgia"];
$tinnoibat = $_POST["tinnoibat"];
$trangthai = $_POST["trangthai"];
if ($hinhanhmoi != null) {
    $hinhanh = $hinhanhmoi;
    move_uploaded_file($_FILES["hinhanhmoi"]["tmp_name"], '../../images/' . $hinhanh);
}
$sql = "update TinTuc set maloai = $maloai ,tentin = '$tentin' ,tomtat = '$tomtat', 
noidung = '$noidung', hinhanh = '$hinhanh',tacgia = '$tacgia', 
noibat = $tinnoibat, trangthai = $trangthai
where matin = $matin";
mysqli_query($conn, $sql);
mysqli_close($conn);
header("location: tintuc_quanly.php");
?>