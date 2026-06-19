<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>bai12-xuly</title>
</head>

<body>
    <?php
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['pheptinh'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $pheptinh = $_POST['pheptinh'];

    if(is_numeric($a) && is_numeric($b)) {
        if($pheptinh == "Cộng") {
            $kq = $a + $b;
            echo "<h3>Kết quả: $a + $b = $kq</h3>";
        } 
        else if($pheptinh == "Trừ") {
            $kq = $a - $b;
            echo "<h3>Kết quả: $a - $b = $kq</h3>";
        }
    } else {
        echo "<h3>Vui lòng nhập số hợp lệ!</h3>";
    }
    }
    ?>
    <br>
    <a href="bai12.php">Quay lại</a>
</body>

</html>