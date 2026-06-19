<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bài tập 15</title>
</head>

<body>

    <h2>Nhập hai số</h2>

    <form action="bai15-xuly.php" method="post">
        Số thứ nhất: <input type="text" name="a"><br><br>
        Số thứ hai: <input type="text" name="b"><br><br>

        Phép toán:
        <input type="radio" name="pheptinh" value="cong" checked> Cộng
        <input type="radio" name="pheptinh" value="tru"> Trừ
        <input type="radio" name="pheptinh" value="nhan"> Nhân
        <input type="radio" name="pheptinh" value="chia"> Chia
        <br><br>

        <input type="submit" value="Tính">
    </form>

</body>

</html>