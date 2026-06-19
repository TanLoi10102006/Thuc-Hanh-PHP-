<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>bai15-xuly</title>
</head>

<body>

    <?php
    if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['pheptinh'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $pheptinh = $_POST['pheptinh'];

        if (is_numeric($a) && is_numeric($b)) {

            if ($pheptinh == "cong") {
                $kq = $a + $b;
                echo "<h3>Kết quả: $a + $b = $kq</h3>";
            } elseif ($pheptinh == "tru") {
                $kq = $a - $b;
                echo "<h3>Kết quả: $a - $b = $kq</h3>";
            } elseif ($pheptinh == "nhan") {
                $kq = $a * $b;
                echo "<h3>Kết quả: $a * $b = $kq</h3>";
            } elseif ($pheptinh == "chia") {
                if ($b == 0) {
                    echo "<h3>Không thể chia cho 0</h3>";
                } else {
                    $kq = $a / $b;
                    echo "<h3>Kết quả: $a / $b = $kq</h3>";
                }
            }
        } else {
            echo "<h3>Vui lòng nhập số hợp lệ!</h3>";
        }
    }
    ?>

    <br>
    <a href="bai15.php">Quay lại</a>

</body>

</html>