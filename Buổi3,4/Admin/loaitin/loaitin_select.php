<select name="maloai">
    <?php
    require_once "../database/dbcon.php";
    $sqlLoai = "SELECT * FROM loaitin";
    $resultLoai = mysqli_query($conn, $sqlLoai);
    while ($rowLoai = mysqli_fetch_array($resultLoai)) {
        $selected = ($rowLoai['maloai'] == $row['maloai']) ? 'selected' : '';
        echo '<option value="' . $rowLoai['maloai'] . '" ' . $selected . '>' . $rowLoai['tenloai'] . '</option>';
    }
    ?>
</select>