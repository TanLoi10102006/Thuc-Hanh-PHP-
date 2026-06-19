<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php require_once '../database/dbcon.php'; ?>
<link rel="stylesheet" type="text/css" href="../../css/style.css">

<body>
    <h2>QUẢN LÝ LOẠI TIN</h2>
    <p><a href="loaitin_them.php">Thêm mới</a></p>
    <table align="center">
        <tr>
            <th>Mã</th>
            <th>Tên loại</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
        $sql = "Select * From LoaiTin";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['maloai'] ?></td>
                <td><?php echo $row['tenloai'] ?></td>
                <td><?php if ($row['trangthai'] == 1) echo "Bật";
                    else echo "Tắt"; ?></td>
                <td><a href="loaitin_sua.php?id=<?php echo $row['maloai'] ?>">Sửa</a></td>
                <td><a href="loaitin_xoa.php?id=<?php echo $row['maloai'] ?>">Xóa</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>