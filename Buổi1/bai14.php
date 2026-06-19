<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bài tập 14</title>
</head>

<body>

    <h2>Nhập hai số nguyên</h2>

    <form action="bai14-xuly.php" method="post">
        Số thứ nhất: <input type="text" name="so1"><br><br>
        Số thứ hai: <input type="text" name="so2"><br><br>

        Phép toán:
        <input type="radio" name="pheptinh" value="cong" checked> Cộng
        <input type="radio" name="pheptinh" value="tru"> Trừ
        <br><br>

        <input type="submit" value="Tính">
    </form>

</body>

</html>