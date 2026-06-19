<?php header('Content-Type: text/html; charset=utf-8'); ?>
<form action="loaitin_xuly_sua.php" method="post">
    <?php
    require_once '../database/dbcon.php';
    $id = $_GET["id"];
    $sql = "Select * From LoaiTin where maloai = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_array($result)) {
    ?>
    <pre>
Mã loại: <input type="text" name="maloai" value="<?php echo $row['maloai'] ?>" 
readonly>
Tên loại: <input type="text" name="tenloai" value="<?php echo $row['tenloai'] ?>">
Trạng thái: <select name="trangthai">
<option value="1">Bật</option>
<option value="0"
<?php if ($row['trangthai'] == 0) echo "selected" ?>>Tắt
</option>
</select>
10
<input type="submit" value=" Lưu ">
</pre>
    <?php
    }
    mysqli_close($conn);
    ?>
</form>