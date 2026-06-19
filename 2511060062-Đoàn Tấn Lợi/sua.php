<?php
include("config.php");

$id = $_GET['id'];

$loai = mysqli_query(
    $conn,
    "SELECT * FROM LoaiSuKien"
);

$data = mysqli_query(
    $conn,
    "SELECT * FROM SuKien WHERE mask = $id"
);

$row = mysqli_fetch_assoc($data);

if (isset($_POST['capnhat'])) {

    $malsk = $_POST['malsk'];
    $tensk = $_POST['tensk'];
    $mota = $_POST['mota'];
    $chiphi = $_POST['chiphi'];
    $soluong = $_POST['soluong'];
    $diadiem = $_POST['diadiem'];
    $ngaytochuc = $_POST['ngaytochuc'];

    $poster = $row['poster'];

    if (
        isset($_FILES['poster']) &&
        $_FILES['poster']['error'] == 0
    ) {

        $poster = time() . "_" .
            basename($_FILES['poster']['name']);

        move_uploaded_file(
            $_FILES['poster']['tmp_name'],
            "uploads/" . $poster
        );
    }

    $sql = "
    UPDATE SuKien
    SET
        malsk='$malsk',
        tensk='$tensk',
        mota='$mota',
        poster='$poster',
        chiphi='$chiphi',
        soluong='$soluong',
        diadiem='$diadiem',
        ngaytochuc='$ngaytochuc'
    WHERE mask='$id'
    ";

    mysqli_query($conn, $sql);

    header("Location:index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sửa sự kiện</title>
</head>

<body>

    <h2>SỬA SỰ KIỆN</h2>

    <form method="post" enctype="multipart/form-data">

        Loại sự kiện

        <select name="malsk">

            <?php while ($l = mysqli_fetch_assoc($loai)) { ?>

                <option value="<?php echo $l['malsk']; ?>" <?php
                                                            if ($l['malsk'] == $row['malsk']) {
                                                                echo "selected";
                                                            }
                                                            ?>>

                    <?php echo $l['tenlsk']; ?>

                </option>

            <?php } ?>

        </select>

        <br><br>

        Tên sự kiện

        <input type="text" name="tensk" value="<?php echo $row['tensk']; ?>">

        <br><br>

        Mô tả

        <textarea name="mota"><?php echo $row['mota']; ?></textarea>

        <br><br>

        Ảnh hiện tại

        <br>

        <?php
        if (
            !empty($row['poster']) &&
            file_exists("uploads/" . $row['poster'])
        ) {
        ?>
            <img src="uploads/<?php echo $row['poster']; ?>" width="120">
        <?php } ?>

        <br><br>

        Chọn ảnh mới

        <input type="file" name="poster">

        <br><br>

        Chi phí

        <input type="number" step="0.01" name="chiphi" value="<?php echo $row['chiphi']; ?>">

        <br><br>

        Số lượng

        <input type="number" name="soluong" value="<?php echo $row['soluong']; ?>">

        <br><br>

        Địa điểm

        <input type="text" name="diadiem" value="<?php echo $row['diadiem']; ?>">

        <br><br>

        Ngày tổ chức

        <input type="date" name="ngaytochuc" value="<?php echo $row['ngaytochuc']; ?>">

        <br><br>

        <button type="submit" name="capnhat">
            Cập nhật
        </button>

    </form>

</body>

</html>