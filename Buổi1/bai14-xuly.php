<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>bai14-xuly </title>
</head>

<body>

    <h2>Kết quả</h2>

    <?php
require "ham-cong-tru.php"; // gọi file chứa hàm

if (isset($_POST["so1"]) && isset($_POST["so2"])) {
    $so1 = intval($_POST["so1"]);
    $so2 = intval($_POST["so2"]);
    $pheptinh = $_POST["pheptinh"];

    if ($pheptinh == "cong") {
        $ketqua = cong($so1, $so2);
        echo "$so1 + $so2 = $ketqua";
    } elseif ($pheptinh == "tru") {
        $ketqua = tru($so1, $so2);
        echo "$so1 - $so2 = $ketqua";
    }
} else {
    echo "Vui lòng nhập đầy đủ dữ liệu!";
}
?>

</body>

</html>