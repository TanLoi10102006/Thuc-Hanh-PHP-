<?php
include("config.php");

$sql = "
SELECT sk.*, lsk.tenlsk
FROM SuKien sk
INNER JOIN LoaiSuKien lsk
ON sk.malsk = lsk.malsk
";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Danh sách sự kiện</title>
</head>

<body>

    <h2>DANH SÁCH SỰ KIỆN</h2>

    <form action="timkiem.php" method="get">
        <input type="text" name="keyword" placeholder="Nhập tên sự kiện">
        <button type="submit">Tìm</button>
    </form>

    <br>

    <table border="1" cellpadding="10">

        <tr>
            <th>Mã</th>
            <th>Loại sự kiện</th>
            <th>Tên sự kiện</th>
            <th>Chi phí</th>
            <th>Số lượng</th>
            <th>Địa điểm</th>
            <th>Poster</th>
            <th>Ngày tổ chức</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>

            <td><?php echo $row['mask']; ?></td>

            <td><?php echo $row['tenlsk']; ?></td>

            <td><?php echo $row['tensk']; ?></td>

            <td><?php echo number_format($row['chiphi']); ?></td>

            <td><?php echo $row['soluong']; ?></td>

            <td><?php echo $row['diadiem']; ?></td>

            <td>
                <?php
                    if (!empty($row['poster']) && file_exists("uploads/" . $row['poster'])) {
                    ?>
                <img src="uploads/<?php echo $row['poster']; ?>" width="100">
                <?php
                    } else {
                        echo "Không có ảnh";
                    }
                    ?>
            </td>

            <td><?php echo $row['ngaytochuc']; ?></td>

            <td><?php echo $row['trangthai']; ?></td>

            <td>
                <a href="sua.php?id=<?php echo $row['mask']; ?>">
                    Sửa
                </a>
            </td>

            <td>
                <a href="xoa.php?id=<?php echo $row['mask']; ?>" onclick="return confirm('Xóa sự kiện này?')">
                    Xóa
                </a>
            </td>

        </tr>

        <?php } ?>

    </table>

</body>

</html>