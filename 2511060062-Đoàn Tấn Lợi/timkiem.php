<?php
include("config.php");

$keyword = $_GET['keyword'];

$sql = "
SELECT sk.*, lsk.tenlsk
FROM SuKien sk
INNER JOIN LoaiSuKien lsk
ON sk.malsk=lsk.malsk
WHERE tensk LIKE '%$keyword%'
";

$result = mysqli_query($conn,$sql);
?>

<h2>KẾT QUẢ TÌM KIẾM</h2>

<table border="1">

    <tr>
        <th>Mã</th>
        <th>Loại</th>
        <th>Tên sự kiện</th>
    </tr>

    <?php while($row=mysqli_fetch_assoc($result)){ ?>

    <tr>
        <td><?= $row['mask'] ?></td>
        <td><?= $row['tenlsk'] ?></td>
        <td><?= $row['tensk'] ?></td>
    </tr>

    <?php } ?>

</table>

<a href="index.php">
    Quay lại
</a>