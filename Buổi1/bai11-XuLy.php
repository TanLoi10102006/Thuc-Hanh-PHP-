<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai11-XuLy</title>
</head>

<head>
    <title>Kết quả</title>
</head>

<body>
    <h2>Kết quả phép cộng</h2>
    <?php
if (isset($_POST['so1']) && isset($_POST['so2'])) {
    $so1 = $_POST['so1'];
    $so2 = $_POST['so2'];
    if (is_numeric($so1) && is_numeric($so2)) {
        $tong = $so1 + $so2;
        echo "Tổng của $so1 và $so2 là: <b>$tong</b>";
    } else {
        echo "Vui lòng nhập số hợp lệ!";
    }
} else {
    echo "Không có dữ liệu!";
}
?>
    <br><br>
    <a href="bai11.php">Quay lại</a>
</body>

</html>