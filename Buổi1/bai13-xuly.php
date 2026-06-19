<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bai 13 xu ly </title>
</head>

<body>

    <h2>Kết quả</h2>

    <?php
if (isset($_POST["so1"]) && isset($_POST["so2"])) {
    $so1 = intval($_POST["so1"]);
    $so2 = intval($_POST["so2"]);
    $pheptinh = $_POST["pheptinh"];

    if ($pheptinh == "cong") {
        $ketqua = $so1 + $so2;
        echo "$so1 + $so2 = $ketqua";
    } elseif ($pheptinh == "tru") {
        $ketqua = $so1 - $so2;
        echo "$so1 - $so2 = $ketqua";
    }
} else {
    echo "Vui lòng nhập đầy đủ dữ liệu!";
}
?>

</body>

</html>