<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>
    <h2>QUẢN LÝ TIN TỨC</h2>
    <p><a href="tintuc_them.php">Thêm tin tức</a></p>
    <table width="100%" align=center>
        <tr>
            <th>Mã số</th>
            <th>Mã loại</th>
            <th>Tên tin</th>
            <th>Tóm tắt</th>
            <th>Nội dung</th>
            <th>Hình ảnh</th>
            <th>Tác giả</th>
            <th>Ngày viết</th>
            <th>Ngày đăng</th>
            <th>Tin nổi bật</th>
            <th>Tin đọc nhiều</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        <?php
        require_once '../database/dbcon.php';
        $sql = "select * from tintuc";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['matin'] ?></td>
                <td><?php echo $row['maloai'] ?></td>
                <td><?php echo $row['tentin'] ?></td>
                <td><?php echo substr($row['tomtat'], 0, 30) ?>...</td>
                <td><?php echo substr($row['noidung'], 0, 44) ?>...</td>
                <td><img src="../../images/<?php echo $row['hinhanh'] ?>" width=40 height=30></td>
                <td><?php echo $row['tacgia'] ?></td>
                <td><?php echo $row['ngaytao'] ?></td>
                <td><?php echo $row['ngaydang'] ?></td>
                <td><?php echo $row['noibat'] ?></td>
                <td><?php echo $row['docnhieu'] ?></td>
                <td><?php echo $row['trangthai'] ?></td>
                <td><a href="tintuc_sua.php?id=<?php echo $row['matin'] ?>">
                        <img src="../../images/edit.png"></a></td>
                <td><a href="tintuc_xoa.php?id=<?php echo $row['matin'] ?>">
                        <img src="../../images/delete.png"></a></td>
            </tr>
        <?php

        }
        mysqli_close($conn);
        ?>
    </table>
</body>

</html>